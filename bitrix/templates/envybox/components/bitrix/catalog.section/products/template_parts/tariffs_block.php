<?
$funcLeft1 = array('ICON' => $arResult['UF_FUNC_ICON_1'], 'TITLE' => $arResult['UF_FUNC_TITLE_1']);
$funcLeft2 = array('ICON' => $arResult['UF_FUNC_ICON_2'], 'TITLE' => $arResult['UF_FUNC_TITLE_2']);
$funcLeft3 = array('ICON' => $arResult['UF_FUNC_ICON_3'], 'TITLE' => $arResult['UF_FUNC_TITLE_3']);
$funcLeft4 = array('ICON' => $arResult['UF_FUNC_ICON_4'], 'TITLE' => $arResult['UF_FUNC_TITLE_4']);
$funcLeft5 = array('ICON' => $arResult['UF_FUNC_ICON_5'], 'TITLE' => $arResult['UF_FUNC_TITLE_5']);
$funcLeft6 = array('ICON' => $arResult['UF_FUNC_ICON_6'], 'TITLE' => $arResult['UF_FUNC_TITLE_6']);
$funcLeft7 = array('ICON' => $arResult['UF_FUNC_ICON_7'], 'TITLE' => $arResult['UF_FUNC_TITLE_7']);
$funcLeft8 = array('ICON' => $arResult['UF_FUNC_ICON_8'], 'TITLE' => $arResult['UF_FUNC_TITLE_8']);
$funcLeft9 = array('ICON' => $arResult['UF_FUNC_ICON_9'], 'TITLE' => $arResult['UF_FUNC_TITLE_9']);
$funcLeft10 = array('ICON' => $arResult['UF_FUNC_ICON_10'], 'TITLE' => $arResult['UF_FUNC_TITLE_10']);

$funcRight1 = array('ICON' => $arResult['UF_FUNC_ICONR_1'], 'TITLE' => $arResult['UF_FUNC_TITLER_1'], 'TEXT' => $arResult['UF_FUNC_TEXTR_1']);
$funcRight2 = array('ICON' => $arResult['UF_FUNC_ICONR_2'], 'TITLE' => $arResult['UF_FUNC_TITLER_2'], 'TEXT' => $arResult['UF_FUNC_TEXTR_2']);
$funcRight3 = array('ICON' => $arResult['UF_FUNC_ICONR_3'], 'TITLE' => $arResult['UF_FUNC_TITLER_3'], 'TEXT' => $arResult['UF_FUNC_TEXTR_3']);
$funcRight4 = array('ICON' => $arResult['UF_FUNC_ICONR_4'], 'TITLE' => $arResult['UF_FUNC_TITLER_4'], 'TEXT' => $arResult['UF_FUNC_TEXTR_4']);
$funcRight5 = array('ICON' => $arResult['UF_FUNC_ICONR_5'], 'TITLE' => $arResult['UF_FUNC_TITLER_5'], 'TEXT' => $arResult['UF_FUNC_TEXTR_5']);
$funcRight6 = array('ICON' => $arResult['UF_FUNC_ICONR_6'], 'TITLE' => $arResult['UF_FUNC_TITLER_6'], 'TEXT' => $arResult['UF_FUNC_TEXTR_6']);
$funcRight7 = array('ICON' => $arResult['UF_FUNC_ICONR_7'], 'TITLE' => $arResult['UF_FUNC_TITLER_7'], 'TEXT' => $arResult['UF_FUNC_TEXTR_7']);
$funcRight8 = array('ICON' => $arResult['UF_FUNC_ICONR_8'], 'TITLE' => $arResult['UF_FUNC_TITLER_8'], 'TEXT' => $arResult['UF_FUNC_TEXTR_8']);
$funcRight9 = array('ICON' => $arResult['UF_FUNC_ICONR_9'], 'TITLE' => $arResult['UF_FUNC_TITLER_9'], 'TEXT' => $arResult['UF_FUNC_TEXTR_9']);
$funcRight10 = array('ICON' => $arResult['UF_FUNC_ICONR_10'], 'TITLE' => $arResult['UF_FUNC_TITLER_10'], 'TEXT' => $arResult['UF_FUNC_TEXTR_10']);

$leftFuncs = array($funcLeft1, $funcLeft2, $funcLeft3, $funcLeft4, $funcLeft5, $funcLeft6, $funcLeft7, $funcLeft8, $funcLeft9, $funcLeft10);
$rightFuncs = array($funcRight1, $funcRight2, $funcRight3, $funcRight4, $funcRight5, $funcRight6, $funcRight7, $funcRight8, $funcRight9, $funcRight10);
if ($arResult['ID'] == 1) {
    $class = 'tarif_feedback';
} elseif ($arResult['ID'] == 2) {
    $class = 'tarif_chat';
}

?>
<div id="block3">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/circle-pink.svg" alt="" id="tarif_circle_1">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/circle-pink.svg" alt="" id="tarif_circle_2">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/line-yellow.svg" alt="" id="tarif_line">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/zigzag-blue.svg" alt="" id="tarif_zigzag">
    <div class="tarif <?= $class ?>">
        <div class="container">
            <h2 class="tarif_header">
                <?= $arResult['UF_TARIFF_NAME'] ?>
            </h2>
            <? if (!empty($arResult['UF_FUNC_TITLE_1']) || !empty($arResult['UF_FUNC_TITLER_1'])) { ?>
                <p class="tarif_function">
                    Во всех тарифах доступны функции:
                </p>
            <? } ?>
            <div class="tarif_function_wr">
                <div class="tarif_function_col">
                    <? foreach ($leftFuncs as $leftFunc) {
                        if (!empty($leftFunc['TITLE'])) { ?>
                            <div class="tarif_function_row">
                                <div class="tarif_function_img_wr">
                                    <? $img = CFile::GetPath($leftFunc['ICON']); ?>
                                    <img src="<?= $img ?>" alt="">
                                </div>
                                <p class="tarif_function_p">
                                    <?= $leftFunc['TITLE'] ?>
                                </p>
                            </div>
                    <? }
                    } ?>
                </div>
                <div class="tarif_function_col">
                    <? foreach ($rightFuncs as $rightFunc) {
                        if (!empty($rightFunc['TITLE'])) { ?>
                            <div class="tarif_function_row">
                                <div class="tarif_function_img_wr">
                                    <? $img = CFile::GetPath($rightFunc['ICON']); ?>
                                    <img src="<?= $img ?>" alt="">
                                </div>
                                <p class="tarif_function_p">
                                    <?= $rightFunc['TITLE'] ?>
                                </p>

                                <? if (!empty($rightFunc['TEXT'])) { ?>
                                    <p class="tarif_function_p_small">
                                        <?= $rightFunc['TEXT'] ?>
                                    </p>
                                <? } ?>
                            </div>
                    <? }
                    } ?>
                </div>
            </div>
            <div class="tarif_paket_wr" id="tarif_paket_wr-<?= $item['ID'] ?>">
                <? if ($arResult['NAME'] == 'EnvyCRM') { ?>
                    <? if (!empty($arResult['UF_NAME_TEST'])) { ?>
                        <div class="tarif_paket_col_wr" style="width: 25%;">
                            <div class="tarif_paket_col test" style="padding: 40px 24px 20px 24px;">
                                <p class="tarif_paket_name">
                                    <?= $arResult['UF_NAME_TEST'] ?>
                                </p>
                                <p class="tarif_paket_count">
                                    <? if (!empty($arResult['UF_PRICE_TEST'])) {
                                        echo $arResult['UF_PRICE_TEST'];
                                    } else { ?>
                                        0 ₽
                                    <? } ?>

                                </p>
                                <p class="tarif_paket_opis">
                                    7 дней
                                </p>
                                <a href="" class="tarif_paket_btn">
                                    Начать
                                </a>
                            </div>
                        </div>
                    <? } ?>
                    <? if (!empty($arResult['UF_NAME_MONTH'])) { ?>
                        <div class="tarif_paket_col_wr" style="width: 25%;">
                            <div class="tarif_paket_col" style="padding: 40px 24px 20px 24px;">
                                <p class="tarif_paket_name">
                                    На 3 месяца
                                </p>
                                <p class="tarif_paket_count">
                                    <?= $arResult['UF_PRICE_MONTH'] ?>
                                    <? if (!empty($arResult['UF_FULLPRICE_MONTH'])) { ?>
                                        <span>или <?= $arResult['UF_FULLPRICE_MONTH'] ?></span>
                                    <? } ?>
                                </p>
                                <p class="tarif_paket_opis">
                                    <? foreach ($arResult['UF_DESCR_MONTH'] as $descrMonth) {
                                        echo $descrMonth . '<br>';
                                    } ?>
                                </p>
                                <a href="" class="tarif_paket_btn">
                                    Начать
                                </a>
                            </div>
                        </div>
                    <? } ?>
                    <? if (!empty($arResult['UF_NAME_YEAR'])) { ?>
                        <div class="tarif_paket_col_wr" style="width: 25%;">
                            <div class="tarif_paket_col" style="padding: 40px 24px 20px 24px;">
                                <? if (!empty($arResult['UF_FULLPRICE_YEAR'])) { ?>
                                    <p class="tarif_paket_fullprice">экономия <?= $arResult['UF_FULLPRICE_YEAR'] ?></p>
                                <? } ?>
                                <p class="tarif_paket_name">
                                    На 1 год <br>
                                </p>
                                <p class="tarif_paket_count">
                                    <?= $arResult['UF_PRICE_YEAR'] ?>
                                </p>
                                <p class="tarif_paket_opis">
                                    <? foreach ($arResult['UF_DESCR_YEAR'] as $descrYear) {
                                        echo $descrYear . '<br>';
                                    } ?>
                                </p>
                                <a href="" class="tarif_paket_btn">
                                    Зарегистрироваться
                                </a>
                            </div>
                        </div>
                    <? } ?>
                    <div class="tarif_paket_col_wr" style="width: 25%;">
                        <div class="tarif_paket_col" style="padding: 40px 24px 20px 24px;">
                            <p class="tarif_paket_fullprice">экономия 9 600 ₽</p>
                            <p class="tarif_paket_name">
                                На 2 года <br>
                            </p>
                            <p class="tarif_paket_count">
                                350 ₽
                            </p>
                            <p class="tarif_paket_opis">
                                за 1 месяц <br>за 1 сотрудника
                            </p>
                            <a href="" class="tarif_paket_btn">
                                Зарегистрироваться
                            </a>
                        </div>
                    </div>
                <? } else { ?>
                    <? if (!empty($arResult['UF_NAME_TEST'])) { ?>
                        <div class="tarif_paket_col_wr">
                            <div class="tarif_paket_col test">
                                <p class="tarif_paket_name">
                                    <?= $arResult['UF_NAME_TEST'] ?>
                                </p>
                                <p class="tarif_paket_count">
                                    <? if (!empty($arResult['UF_PRICE_TEST'])) {
                                        echo $arResult['UF_PRICE_TEST'];
                                    } else { ?>
                                        0 ₽
                                    <? } ?>
                                </p>
                                <p class="tarif_paket_opis">
                                    <? foreach ($arResult['UF_DESCR_TEST'] as $descrTest) {
                                        echo $descrTest . '<br>';
                                    } ?>
                                </p>
                                <a href="" class="tarif_paket_btn">
                                    Начать
                                </a>
                            </div>
                        </div>
                    <? } ?>
                    <? if (!empty($arResult['UF_NAME_MONTH'])) { ?>
                        <div class="tarif_paket_col_wr">
                            <div class="tarif_paket_col">
                                <p class="tarif_paket_name">
                                    <?= $arResult['UF_NAME_MONTH'] ?>
                                </p>
                                <p class="tarif_paket_count">
                                    <?= $arResult['UF_PRICE_MONTH'] ?>
                                </p>
                                <p class="tarif_paket_opis">
                                    <? foreach ($arResult['UF_DESCR_MONTH'] as $descrTest) {
                                        echo $descrTest . '<br>';
                                    } ?>
                                </p>
                                <a href="" class="tarif_paket_btn">
                                    Зарегистрироваться
                                </a>
                            </div>
                        </div>
                    <? } ?>
                    <? if (!empty($arResult['UF_NAME_YEAR'])) { ?>
                        <div class="tarif_paket_col_wr">
                            <div class="tarif_paket_col">
                                <? if (!empty($arResult['UF_FULLPRICE_YEAR'])) { ?>
                                    <p class="tarif_paket_fullprice">экономия <?= $arResult['UF_FULLPRICE_YEAR'] ?></p>
                                <? } ?>
                                <p class="tarif_paket_name">
                                    <?= $arResult['UF_NAME_YEAR'] ?>
                                </p>
                                <p class="tarif_paket_count">
                                    <?= $arResult['UF_PRICE_YEAR'] ?>
                                </p>
                                <p class="tarif_paket_opis">
                                    <? foreach ($arResult['UF_DESCR_YEAR'] as $descrTest) {
                                        echo $descrTest . '<br>';
                                    } ?>
                                </p>
                                <a href="" class="tarif_paket_btn">
                                    Зарегистрироваться
                                </a>
                            </div>
                        </div>
                    <? } ?>
                <? } ?>
            </div>
            <? if ($arResult['ID'] == 9) { ?>
                <ul class="list-style-none" style="margin: 45px auto 0; float: right;display: block!important;">
                    <li><a href="/products/envycrm/price/" class="tarif_paket_btn">Подробнее о стоимости EnvyCRM</a></li>
                </ul>
            <? } ?>
            <? if ($arResult['ID'] == 1) { ?>
                <ul class="list-style-none" style="margin: 45px auto 0; float: right;display: block!important;">
                    <li><a href="/products/obratnyy-zvonok/price/" class="tarif_paket_btnF">Подробнее о стоимости Обратного звонка</a></li>
                </ul>
            <? } ?>
            <? if ($arResult['ID'] == 2) { ?>
                <ul class="list-style-none" style="margin: 45px auto 0; float: right;display: block!important;">
                    <li><a href="/products/onlayn-chat/price/" class="tarif_paket_btnF">Подробнее о стоимости Онлайн-чата</a></li>
                </ul>
            <? } ?>
            <? if ($arResult['ID'] == 7) { ?>
                <ul class="list-style-none" style="margin: 45px auto 0; float: right;display: block!important;">
                    <li><a href="/products/kvizy/price/" class="tarif_paket_btn">Подробнее о стоимости Квиза</a></li>
                </ul>
            <? } ?>
            <? if ($arResult['ID'] == 23) { ?>
                <ul class="list-style-none" style="margin: 45px auto 0; float: right;display: block!important;">
                    <li><a href="/products/onlayn-konsultant/price/" class="tarif_paket_btn">Подробнее о стоимости Онлайн-консультанта</a></li>
                </ul>
            <? } ?>
        </div>
    </div>
</div>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "<?= $arResult['NAME'] ?>",
        "sku": "<?= $arResult['ID'] ?>",
        "offers": [{
                "@type": "AggregateOffer",
                "lowPrice": "<?= preg_replace('/\D/', '', $arResult['UF_PRICE_TEST']) ?>",
                "highPrice": "<?= preg_replace('/\D/', '', $arResult['UF_PRICE_TEST']) ?>",
                "priceCurrency": "RUR"
            },
            {
                "@type": "AggregateOffer",
                "lowPrice": "<?= preg_replace('/\D/', '', $arResult['UF_PRICE_MONTH']) ?>",
                "highPrice": "<?= preg_replace('/\D/', '', $arResult['UF_PRICE_MONTH']) ?>",
                "priceCurrency": "RUR"
            },
            {
                "@type": "AggregateOffer",
                "lowPrice": "<?= preg_replace('/\D/', '', $arResult['UF_PRICE_YEAR']) ?>",
                "highPrice": "<?= preg_replace('/\D/', '', $arResult['UF_PRICE_YEAR']) ?>",
                "priceCurrency": "RUR"
            }
        ]
    }
</script>