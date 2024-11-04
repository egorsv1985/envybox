<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit();
}

/***
 *  Подключаем шапку
 *  Js добавляем нужный класс для стилей
 ***/
require_once 'header_templates/product_header.php'; ?>
<script type="text/javascript">
    $('body').addClass('<?= $arResult['UF_CLASS'] ?>');
</script>
<div class="header_white_block"></div>
</div>
<?
$cur_page_no_index = $GLOBALS['APPLICATION']->GetCurPage(false);
$servItem = [];
foreach ($arResult['ITEMS'] as $item) {
    $typeBlock = $item['DISPLAY_PROPERTIES']['TYPE_BLOCK']['VALUE_XML_ID'];
    $props = $item['PROPERTIES'];

    /***
     *  По типу блока
     ***/

    if ($typeBlock == 'what_give_block') {
        require "template_parts/what_give_block.php";

        /***
         *  Тарифы
         ***/
        if ($arResult['ID'] == 9) {
            require_once "template_parts/tariffs_block.php";
        }
    } elseif ($typeBlock == 'how_work_block') {
        if ($item["ID"] == '17') {
            require "template_parts/how_work_quize_block.php";
        } else {
            require "template_parts/how_work_block.php";
        }
    } elseif ($typeBlock == 'how_work_full_block') {
        require "template_parts/how_work_full_block.php";
    } elseif ($typeBlock == 'how_look_block') {
        require "template_parts/how_look_block.php";
    } elseif ($typeBlock == 'banner_block') {
        require "template_parts/banner_block.php";
    } elseif ($typeBlock == 'variants_block') {
        require "template_parts/variants_block.php";
    } elseif ($typeBlock == 'six_cool_block') {
        require "template_parts/six_cool_block.php";
    } elseif ($typeBlock == 'reg_free_block') {
        require "template_parts/reg_free_block.php";
    } elseif ($typeBlock == 'method_credit_block') {
        require "template_parts/method_credit_block.php";
    } elseif ($typeBlock == 'uniq_func_block') {
        require "template_parts/unic_func_block.php";
    } elseif ($typeBlock == 'saving') {
        require "template_parts/saving.php";
    } elseif ($typeBlock == 'chat_blocks') {
        require "template_parts/chat_blocks.php";
    } elseif ($typeBlock == 'new_chat_blocks') {
        /***
         *  Тарифы
         ***/
        if ($arResult['ID'] == 2) {
            require_once "template_parts/tariffs_block.php";
        }

        require 'template_parts/new_chat_blocks.php';
    } elseif ($typeBlock == 'services_block') {
        $servItem = $item;
    } elseif ($typeBlock == 'download_block') {
        require "template_parts/download_block.php";
    } elseif ($typeBlock == 'how_calc_number') {
        require 'template_parts/how_calc_number.php';
    } elseif ($typeBlock == 'stats_block') {
        require 'template_parts/stats_block.php';
    } elseif ($typeBlock == 'online_consult') {
        require 'template_parts/online_consult.php';
    } elseif ($typeBlock == 'q_lend') {
        require 'template_parts/q_lend.php';
    } elseif ($typeBlock == 'crm_report_constructor') {
        require 'template_parts/crm_report_constructor.php';
    } elseif ($typeBlock == 'crm_inbox_in_crm') {
        require 'template_parts/crm_inbox_in_crm.php';
    } elseif ($typeBlock == 'crm_document_print') {
        require 'template_parts/crm_document_print.php';
    } elseif ($typeBlock == 'vw_give') {
        require 'template_parts/video-widget/vw_give.php';
    } elseif ($typeBlock == 'vw_work') {
        require 'template_parts/video-widget/vw_work.php';
    } elseif ($typeBlock == 'vw_engages') {
        require 'template_parts/video-widget/vw_engages.php';
    } elseif ($typeBlock == 'vw_advantages') {
        require 'template_parts/video-widget/vw_advantages.php';
    } elseif ($typeBlock == 'cases') {
        require 'template_parts/cases.php';
    } elseif ($typeBlock == 'detail_text') {
        require 'template_parts/detail_text.php';
    } elseif ($typeBlock == 'tariffs_block') {
        require 'template_parts/tariffs_block.php';
    }
}

/***
 *  Тарифы
 ***/
if (!in_array($arResult['ID'], [9, 2, 1])) {
    require_once "template_parts/tariffs_block.php";
}

/***
 * СЕО ТЕКСТ
 */
if ($arResult['UF_ABOUT_NAME'] != '') {
    require_once "template_parts/seo_text.php";
}
/***
 *  Интеграция с сервисами
 ***/
if (!empty($servItem)) {
    require 'template_parts/services_block.php';
}

if ($cur_page_no_index == "/products/video-widget/") {
    /*Форма В 12 раз больше заявок*/
    echo "<div class='vw-section vw-section--mobile-only'>";
    require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/template_parts/form_all_services.php";
    echo "</div>";
}

/*if(!empty($arResult['UF_INT_SERVICES'])){
    require_once "template_parts/services_block.php";
}*/

if ($cur_page_no_index == "/products/video-widget/") {
    require 'template_parts/cooperation.php';
}

if ($cur_page_no_index == "/products/video-widget/") {
    echo "<div class='vw-section vw-section--reverse'>";
}
/***
 *  Кейсы
 */
if ($arResult['UF_NOINDEX_CASE']) {
    echo '<noindex>';
}
?>
<div id="block4">
    <? require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/template_parts/all_cases.php"; ?>
</div>
<?
if ($arResult['UF_NOINDEX_CASE']) {
    echo '</noindex>';
}
/***
 *  Перейти к отзывам
 ***/
require_once "template_parts/reviews_block.php";

if ($cur_page_no_index == "/products/video-widget/") {
    echo "</div>";
}

/***
 *  Часто задаваемые вопросы
 ***/
if (!empty($arResult['UF_FAQ'])) {
    require_once "template_parts/faq_block.php";
}

if ($cur_page_no_index == "/products/video-widget/") {
    echo "<div class='vw-section vw-section--desktop-only'>";
}

/***
 *  Продукты
 ***/
if (!empty($arResult['ID'])) {
    $GLOBALS['filterAllProducts'] = ['!ID' => $arResult['ID']];
}

require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/template_parts/all_products.php";

/***
 *  Самый нижний блок с формой
 ***/
require_once "template_parts/bottom_block.php";

if ($cur_page_no_index == "/products/video-widget/") {
    echo "</div>";
}

if ($cur_page_no_index == "/products/video-widget/") {
    echo "<div class='vw-section vw-section--mobile-only'>";
?>

    <div class="form_girl">
        <div class="container">
            <p class="form_girl_text">
                <span class="span_big">Дополнения для сайта,</span>
                которые дадут Вам <span class="yellow_span">больше
                    клиентов</span> и прибыли уже
                <span class="yellow_span">через 9 минут</span>
            </p>
            <p class="form_girl_textsecond">Используйте все сразу или только то, что нужно!
                Попробуйте <b>бесплатно в течение 8 дней! </b>
                Посмотрите на ваши результаты!</p>
            <form action="" class="form_email">
                <input type="text" class="form_email_input" placeholder="Электронная почта">
                <input type="button" class="form_email_btn" value="Попробовать">
            </form>
        </div>
        <img src="<?= SITE_TEMPLATE_PATH ?>/images/img_girl.png" alt="" class="form_girl_img">
        <div class="form_girl_bg"></div>
    </div>

<?php
    echo "</div>";
}

//блог
require_once "template_parts/blog.php";
?>