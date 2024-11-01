<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("og:image", "/upload/dev2fun_opengraph/243/banner-og-1-envybox.png");
$APPLICATION->SetPageProperty("og:type", "website");
$APPLICATION->SetPageProperty("og:description", "&#11088;&#11088;&#11088;&#11088;&#11088; Увеличьте количество обращений и конверсий, протестируйте виджеты для сайта в течение 8 дней! Больше клиентов и прибыли уже через 9 минут после установки.");
$APPLICATION->SetPageProperty("og:title", "Готовые полезные виджеты Envybox на сайт для увеличения лидов и конверсии");
$APPLICATION->SetPageProperty("TITLE", "Готовые полезные виджеты Envybox на сайт для увеличения лидов и конверсии");
$APPLICATION->SetPageProperty("description", "&#11088;&#11088;&#11088;&#11088;&#11088; Увеличьте количество обращений и конверсий, протестируйте виджеты для сайта в течение 8 дней! Больше клиентов и прибыли уже через 9 минут после установки.");
$APPLICATION->SetTitle("Главная");
?>
    <div class="head_prem" id="block1">
        <div class="container">
                <? $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/benefits/title.php", Array(), Array("MODE" => "html")); ?>
            <div class="head_prem_wr">
                <div class="head_prem_text_wr">
                    <? $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/benefits/sub_title.php", Array(), Array("MODE" => "html")); ?>
                </div>
                <div>
                    <div class="head_prem_row">
                        <div class="head_prem_col">
                            <? $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/benefits/list1.php", Array(), Array("MODE" => "html")); ?>
                        </div>
                        <div class="head_prem_col">
                            <? $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/benefits/list2.php", Array(), Array("MODE" => "html")); ?>
                        </div>
                    </div>
                    <div class="head_prem_col">
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/benefits/list3.php", Array(), Array("MODE" => "html")); ?>
                    </div>
                    <div class="head_prem_col">
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/benefits/list4.php", Array(), Array("MODE" => "html")); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Продукты -->
    <div id="block2">
        <? require_once $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH."/template_parts/all_products.php"; ?>
    </div>

    <!-- Интеграция с сервисами -->
    <? require_once $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH."/template_parts/all_services.php"; ?>

    <!-- Форма В 12 раз больше заявок --->

    <? require_once $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH."/template_parts/form_all_services.php" ?>

    <!-- Отзывы -->
    <div id="block3">
        <? require_once $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH."/template_parts/all_reviews.php"; ?>
    </div>

    <!-- Кейсы -->
    <div id="block4">
        <? require_once $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH."/template_parts/all_cases.php"; ?>
    </div>

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
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>