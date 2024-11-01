<?
    $blockID = $item['ID'];
    $block1 = array(
        'IMG' => $props['UNIQ_ICON_1']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_1']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_1']['~VALUE'],
        'ID' => 'uniqblock1_' . $blockID,
    );
    $block2 = array(
        'IMG' => $props['UNIQ_ICON_2']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_2']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_2']['~VALUE'],
        'ID' => 'uniqblock2_' . $blockID,
    );
    $block3 = array(
        'IMG' => $props['UNIQ_ICON_3']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_3']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_3']['~VALUE'],
        'ID' => 'uniqblock3_' . $blockID,
    );
    $block4 = array(
        'IMG' => $props['UNIQ_ICON_4']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_4']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_4']['~VALUE'],
        'ID' => 'uniqblock4_' . $blockID,
    );
    $block5 = array(
        'IMG' => $props['UNIQ_ICON_5']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_5']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_5']['~VALUE'],
        'ID' => 'uniqblock5_' . $blockID,
    );
    $block6 = array(
        'IMG' => $props['UNIQ_ICON_6']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_6']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_6']['~VALUE'],
        'ID' => 'uniqblock6_' . $blockID,
    );
    $block7 = array(
        'IMG' => $props['UNIQ_ICON_7']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_7']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_7']['~VALUE'],
        'ID' => 'uniqblock7_' . $blockID,
    );
    $block8 = array(
        'IMG' => $props['UNIQ_ICON_8']['VALUE'],
        'TITLE' => $props['UNIQ_TITLE_8']['VALUE'],
        'TEXT' => $props['UNIQ_TEXT_8']['~VALUE'],
        'ID' => 'uniqblock8_' . $blockID,
    );
    $blocks = array($block1, $block2, $block3, $block4, $block5, $block6, $block7, $block8);
?>
<div class="dop_fichi" id="advantages">
    <div class="container">
        <h2 class="dop_fichi_header">
            <?= $item['NAME'] ?>
        </h2>
        <?         
         switch ($blockID) {
            case '65':
                echo '<div class="tag_cloud">
                <a href="#uniqblock1_65" class="cloud_link">переход по ссылке</a>
                <a href="#uniqblock2_65" class="cloud_link">генератор клиентов</a>
                <a href="#uniqblock3_65" class="cloud_link">открыть звонок</a>
                <a href="#uniqblock4_65" class="cloud_link">открыть онлайн-чат</a>
                <a href="#uniqblock5_65" class="cloud_link">выполнить javascript</a>
                </div>';
                break;
            case '70':
                echo '<div class="tag_cloud">
                <a href="#uniqblock1_70" class="cloud_link">индивидуальный дизайн</a>
                <a href="#uniqblock2_70" class="cloud_link">анимация</a>
                <a href="#uniqblock3_70" class="cloud_link">подстановка городов</a>
                <a href="#uniqblock4_70" class="cloud_link">подстановка имен</a>
                <a href="#uniqblock5_70" class="cloud_link">подстановка сумм</a>
                <a href="#uniqblock6_70" class="cloud_link">поведение</a>
                </div>';
                break;
             case '79':
                echo '<div class="tag_cloud">
                 <a href="#uniqblock1_79" class="cloud_link">распознавание клиента</a>
                 <a href="#uniqblock2_79" class="cloud_link">озвучка utm-метки</a>
                 <a href="#uniqblock3_79" class="cloud_link">интеграция с аналитикой</a>
                 <a href="#uniqblock4_79" class="cloud_link">геофильтры</a>
                 <a href="#uniqblock5_79" class="cloud_link">интеграция с CRM-системой</a>
                 <a href="#uniqblock6_79" class="cloud_link">привязка к формам</a>
                 <a href="#uniqblock7_79" class="cloud_link">интеграция с Telegram</a>
                 <a href="#uniqblock1_78" class="cloud_link">индивидуальный дизайн</a>
                 <a href="#uniqblock2_78" class="cloud_link">IP-телефония</a>
                 <a href="#uniqblock3_78" class="cloud_link">определение города</a>
                 <a href="#uniqblock4_78" class="cloud_link">несколько пользователей</a>
                 <a href="#uniqblock5_78" class="cloud_link">информация о клиенте</a>
                 <a href="#uniqblock6_78" class="cloud_link">настройка кнопки</a>
                </div>';
                break;
             case '910':
                echo '<div class="tag_cloud">
                 <a href="#uniqblock1_910" class="cloud_link">сайт за 10 минут</a>
                 <a href="#uniqblock2_910" class="cloud_link">> 500 шаблонов</a>
                 <a href="#uniqblock3_910" class="cloud_link">любые ниши бизнеса</a>                 
                </div>';
                break;
             default:
                 '';
             break;
         }
        ?>
        <div class="dop_fichi_wr">
            <? $count = 0; ?>
            <? foreach ($blocks as $block){ ?>
                <? $count++; ?>
                <? if(!empty($block['TITLE'])){ ?>
                    <div class="<?= $props['UNIQ_FULL_WIDTH']['VALUE_XML_ID'] == 'YES' && $count == 1 ? 'fichi_col_100' : 'fichi_col_50'?>">
                        <div>
                            <div class="fichi_header_wr">
                                <div class="fichi_img_wr" style="background-color: rgba(155, 123, 224, 0.1);">
                                    <? $img = CFile::GetPath($block['IMG']); ?>
                                    <img src="<?= $img ?>" alt="">
                                </div>
                                <h3 id="<?= $block['ID'];?>" class="fichi_name">
                                    <?= $block['TITLE'] ?>
                                </h3>
                            </div>
                            <p class="fichi_text">
                                <?= $block['TEXT'] ?>
                            </p>
                        </div>
                    </div>
                <? } ?>
            <? } ?>
        </div>
    </div>
</div>