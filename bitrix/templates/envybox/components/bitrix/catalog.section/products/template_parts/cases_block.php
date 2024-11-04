<div class="keys_btn_wr">
    <? $count = 0;
    $names = [];
    $codes = [];
    foreach ($arResult['UF_CASES'] as $caseId) {
        $arFilter = Array("IBLOCK_ID"=> 4, "ID"=>$caseId);
        $res = CIBlockElement::GetList(Array(), $arFilter);
        if ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();
            //print_r($arFields);
            $sectCases = CIBlockSection::GetByID($arFields["IBLOCK_SECTION_ID"]);
            if ($sectCase = $sectCases->GetNext()) {
                $sectName = $sectCase['NAME'];
                $sectCode = $sectCase['CODE'];
                $names[] = $sectName;
                $codes[] = $sectCode;
            }
        }
        ?>

    <? }
    $uniqNames = array_unique($names);
    $uniqCodes = array_unique($codes);
    $cnt = -1;
    foreach ($uniqNames as $uniqName){
        $cnt++;
        $count++;
        ?>
        <a href="#<?= $uniqCodes[$cnt] ?>" class="open-tab <?= $count == 1 ? 'active' : '' ?>"
           data-href=".<?= $uniqCodes[$cnt] ?>"><?= $uniqName ?></a>
    <? }
    ?>
</div>
<? foreach ($arResult['UF_CASES'] as $caseId) {
    $arFilter = Array("IBLOCK_ID"=> 4, "ID"=>$caseId);
    $res = CIBlockElement::GetList(Array(), $arFilter);
    if ($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();
        //print_r($arFields);
        $sectCases = CIBlockSection::GetByID($arFields["IBLOCK_SECTION_ID"]);
        if($sectCase = $sectCases->GetNext()) {
            $sectCode = $sectCase['CODE'];
        }
          // print_r($arSection);
               ?>
        <div class="keys_block <?= $sectCode ?>">
            <div class="keys_block_header">
                <img src="<?= $img = CFile::GetPath($arFields['PREVIEW_PICTURE']) ?>" alt="">
                <p class="keys_block_citata"><?= $arFields['NAME'] ?></p>
                <p class="keys_block_statys"><?= $arProps['SUBTITLE']['VALUE'] ?></p>
                <a href="http://<?= $arProps['SITE_HREF']['VALUE'] ?>" target="_blank" class="keys_block_link"><?= $arProps['SITE_HREF']['VALUE'] ?></a>
            </div>
            <div class="keys_block_body">
                <? foreach ($arProps['PARAMS_LIST']['VALUE'] as $prItem) { ?>
                    <p class="keys_block_opis"><?= htmlspecialcharsback($prItem) ?></p>
                <? } ?>
            </div>
            <p class="keys_block_text">
                <?= $arFields['PREVIEW_TEXT'] ?>
            </p>
        </div>
    <? }
} ?>