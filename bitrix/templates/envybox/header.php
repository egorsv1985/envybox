<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$replaceRegistration = CSite::InDir('/products/obratnyy-zvonok/');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="nDR3o1gE4Kzv8hxjvVsb7If726zC0H4ZgokRJwZqbik" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favimg/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:image" content="<?=$ogImg;?>">
    <meta property="og:url" content="https://envybox.io/">
    <meta property="og:site_name" content="envybox.io">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/favimg/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favimg/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favimg/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favimg/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favimg/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favimg/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favimg/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favimg/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favimg/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favimg/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favimg/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favimg/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favimg/favicon-16x16.png">
    <link rel="manifest" href="/favimg/manifest.json">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KLCMLWH');</script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/style/fancybox.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/style/main.css?v=<?= session_id(); ?>_0145566">

    <script  src="<?= SITE_TEMPLATE_PATH ?>/js/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
    <script  src="<?= SITE_TEMPLATE_PATH ?>/js/mask.js"></script>
    <script type="text/javascript" id="" src="https://cdn.saas-support.com/js/cbkapi.js?v=16"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $().CBK_API({ domain: 'ru.envybox.io'});
        });
    </script>

    <?$APPLICATION->ShowHead();?>

<?
    $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/243/banner-og-1-envybox.png';
    if(CSite::InDir('/products/obratnyy-zvonok/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/243/24332c482ab3489b972ad50f7094b8ee.png';
    };
    if(CSite::InDir('/products/onlayn-chat/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/774/77445dd1b4ed9546a0134217c105052a.png';
    };
    if(CSite::InDir('/products/generator-klientov/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/ceb/ceb9e5213b157171128b5e7c7e963bd4.png';
    };
    if(CSite::InDir('/products/envycrm/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/0ff/0ff8b8c597d28f5ea2092706aacdf6e3.png';
    };
    if(CSite::InDir('/products/stadnyy-instinkt/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/0a8/0a8c3a6b3b1b28a0573f1c269fa628a4.png';
    };
    if(CSite::InDir('/products/zakhvatchik-klientov/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/ee2/ee2eba6011961ec1d243e00234de6ec1.png';
    };
    if(CSite::InDir('/products/multiknopka/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/85c/85c7fa38ecab23a1c32859facc828b2a.png';
    };
    if(CSite::InDir('/products/kvizy/')) {
        $ogImg = 'https://envybox.io/upload/dev2fun_opengraph/590/59050c41a3e24a4f336deda20c70800e.png';
    };
?>
    <!-- Varioqub experiments -->
    <script type="text/javascript">
    (function(e, x, pe, r, i, me, nt){
    e[i]=e[i]||function(){(e[i].a=e[i].a||[]).push(arguments)},
    me=x.createElement(pe),me.async=1,me.src=r,nt=x.getElementsByTagName(pe)[0],nt.parentNode.insertBefore(me,nt)})
    (window, document, 'script', 'https://abt.s3.yandex.net/expjs/latest/exp.js', 'ymab');
    ymab('metrika.44916067', 'init'/*, {clientFeatures}, {callback}*/);
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-837626265"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-837626265');
    </script>
</head>

<? if($APPLICATION->GetCurPage(false) == '/'){ ?>
<body class="main_page">
<? } elseif(CSite::InDir('/rreviews/')) { ?>
<body class="otziv">
<? } elseif(CSite::InDir('/tariffs/')) { ?>
<body class="tarif_page">
<? } elseif(CSite::InDir('/vacancies/')) { ?>
<body class="vakancy">
<? } elseif(CSite::InDir('/about/')) { ?>
<body class="about">
<? } elseif(CSite::InDir('/kontakty/') || CSite::InDir('/map/')) { ?>
<body class="kontakty">
<? } else { ?>
<body>
<? } ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLCMLWH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    <div class="fixed_menu">
        <div class="container">
            <div class="fixed_menu_wr">
                <a href="/" class="logo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo_footer.svg" alt="" class="header_logo">
                </a>
                <div class="mobile_menu_block">
                    <a href="javascript:void(0)" class="modile_form_go"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-login.svg" alt=""></a>
                    <a href="javascript:void(0)" class="menu_btn_go"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-menu.svg" alt=""></a>
                </div>
                <div class="fixed_menu_btn_wr">
                    <? $APPLICATION->ShowViewContent('product_link') ?>
                    <div class="header_wr_number">
                        <a href="https://wa.me/74993229710" target="_blank" class="wa number_tel">
                            <img src="/images/wa.svg" alt="WhatsApp">

                            8 499 322-97-10
                        </a>
                        <a href="mailto:support@envybox.io" id="icon_email"><img src="/bitrix/templates/envybox/images/icon-mail.svg" alt="" class="footer_mobile_img"></a>
                    </div>
                    <ul class="menu_ul">
                        <li>
                            <?$APPLICATION->IncludeComponent("bitrix:search.form","desktop",Array(
                                    "USE_SUGGEST" => "N",
                                    "PAGE" => "#SITE_DIR#search/index.php"
                                )
                            );?>
                        </li>
                        <li>
                            <a href="/products/">Продукты</a><i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <div class="submenu_wr">
                                <ul class="submenu_ul">
                                    <?
                                    if(CModule::IncludeModule('iblock')){
                                        $arFilter = array('IBLOCK_ID' => 1, 'GLOBAL_ACTIVE' => 'Y', "!NAME"=>"Онлайн-консультант");
                                        $arSelect = array('NAME', 'SECTION_PAGE_URL');
                                        $sectionList = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
                                        while($section = $sectionList->GetNext()){ ?>
                                            <li>
                                                <a href="<?= $section['SECTION_PAGE_URL'] ?>"
                                                   class="<?= $APPLICATION->GetCurPage() == $section['SECTION_PAGE_URL'] ? 'active' : '' ?>">
                                                    <?= $section['NAME'] ?>
                                                </a>
                                            </li>
                                        <? }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="auth_registration<?= $replaceRegistration ? ' replace_block' : '' ?>">
                        <a href="javascript:void(0)" class="fixed_menu_btn_vhod login_button">Войти</a>
                        <a href="javascript:void(0)" class="fixed_menu_btn_reg reg_button">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>
    <div class="header_tab">
        <header>
            <div class="container">
                <div class="menu">
                    <ul class="menu_ul 2">
                    	<li>
                    		<?$APPLICATION->IncludeComponent("bitrix:search.form","desktop",Array(
                                    "USE_SUGGEST" => "N",
                                    "PAGE" => "#SITE_DIR#search/index.php"
                                )
                            );?>
                    	</li>
                        <li class="mabile_menu_select">
                            <a href="/products/">Продукты</a><i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <div class="submenu_wr">
                                <ul class="submenu_ul">
                                    <?
                                        if(CModule::IncludeModule('iblock')){
                                            $arFilter = array('IBLOCK_ID' => 1, 'GLOBAL_ACTIVE' => 'Y', "!NAME"=>"Онлайн-консультант");
                                            $arSelect = array('NAME', 'SECTION_PAGE_URL');
                                            $sectionList = CIBlockSection::GetList(array('SORT'=>'ASC'), $arFilter, false, $arSelect);
                                            while($section = $sectionList->GetNext()){ ?>
                                                <li>
                                                    <a href="<?= $section['SECTION_PAGE_URL'] ?>"
                                                       class="<?= $APPLICATION->GetCurPage() == $section['SECTION_PAGE_URL'] ? 'active' : '' ?>">
                                                        <?= $section['NAME'] ?>
                                                    </a>
                                                </li>
                                            <? }
                                        }
                                    ?>
                                </ul>
                            </div>
                        </li>
                        <li class="hide_laptob_menu"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-login.svg" alt=""><a href="javascript:void(0)" class="modile_form_go">Личный кабинет</a> <!-- <a style="margin-left: 14px" href="">Выход</a> --></li>
                        <li><img class="hide_laptob_menu" src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-price.svg" alt=""><a href="/tariffs/">Тарифы</a></li>
                        <li><img class="hide_laptob_menu" src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-price.svg" alt=""><a href="javascript:void(0);">Партнерство</a>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <div class="submenu_wr">
                                 <ul class="submenu_ul">
									 <li><!--noindex--><a href="https://partners.envybox.io/program">Реферальная программа</a><!--/noindex-->
                                    <li><!--noindex--><a href="https://action.envybox.io/mediaparnters">Партнерство</a><!--/noindex-->
                                 </ul>
                            </div>
                        </li>

                        <li><img class="hide_laptob_menu" src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-review.svg" alt=""><a href="/rreviews/">Отзывы</a></li>
                        <li><img class="hide_laptob_menu" src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-job.svg" alt=""><a href="/vacancies/">Вакансии</a></li>
                        <li class="hide_mobile_menu"><a href="/kontakty/">Контакты</a></li>
                        <li class="hide_laptob_menu"><p>Мы на связи всегда и везде:</p></li>
                        <li class="hide_laptob_menu"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-phone.svg" alt=""><a href="tel:8 499 322-97-10">8 499 322-97-10</a></li>
                        <li class="hide_laptob_menu"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-mail.svg" alt=""><a href="mailto:support@envybox.io">support@envybox.io</a></li>
                        <li class="hide_laptob_menu"><?$APPLICATION->IncludeComponent("bitrix:search.form","mobile",Array(
                                    "USE_SUGGEST" => "N",
                                    "PAGE" => "#SITE_DIR#search/index.php"
                                )
                            );?>
                        </li>
                    </ul>
                    <div class="header-phone-email">
                        <a href="https://wa.me/74993229710" target="_blank" class="wa number_tel">
                            <img src="/images/wa.svg" alt="WhatsApp">

                            8 499 322-97-10
                        </a>

                        <? if(CSite::InDir('/vacancies/')) { ?>
                            <a href="mailto:work@envybox.io" id="icon_email"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icon-mail_white.svg" alt="" class="footer_mobile_img"></a>
                        <? } else { ?>
                            <a href="mailto:support@envybox.io" id="icon_email"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icon-mail_white.svg" alt="" class="footer_mobile_img"></a>
                        <? } ?>
                    </div>
                    <div class="mobile_menu_social">
                        <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/menu-soc-contact-vk.svg" alt=""></a>
                        <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/menu-soc-contact-fb.svg" alt=""></a>
                        <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/menu-soc-contact-tg.svg" alt=""></a>
                        <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/menu-soc-contact-wa.svg" alt=""></a>
                        <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/menu-soc-contact-vb.svg" alt=""></a>
                        <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/menu-soc-contact-sk.svg" alt=""></a>
                    </div>
                    <a href="javascript:void(0)" class="hide_laptob_menu menu_close"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-close.svg" alt=""></a>
                </div>
            </div>
        </header>
        <div class="header_logoline">
            <div class="container">
                <div class="header_logoline_wr">
                    <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="" class="header_logo"></a>
                    <!--noindex-->
                    <div class="header_wr_number">
                        <a href="javascript:void(0)" class="fixed_menu_btn_reg reg_button" style="margin-right: 20px;height: 48px">Зарегистрироваться</a>
                        <a href="javascript:void(0)" class="btn_room login_button">Вход <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <!--/noindex-->
                    <div class="mobile_menu_block">
                        <a href="javascript:void(0)" class="modile_form_go"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-login-w.svg" alt=""></a>
                        <a href="javascript:void(0)" class="menu_btn_go"><img src="<?= SITE_TEMPLATE_PATH ?>/images/menu_icon/icon-menu-w.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <?
        /******
         *   Варианты для разных страниц
         *   лежат  в папке с шаблоном
         */
        ?>
        <? if($APPLICATION->GetCurPage(false) == '/' || $APPLICATION->GetCurPage(false) == '/products/'){
            require_once "header_templates/main_header.php";
        } elseif(CSite::InDir('/rreviews/')) {
            require_once "header_templates/reviews_header.php";
        } elseif(CSite::InDir('/tariffs/')) {
            require_once "header_templates/tariffs_header.php";
        } elseif(CSite::InDir('/vacancies/')) {
            require_once "header_templates/vacancies_header.php";
        } elseif(CSite::InDir('/about/')) {
            require_once "header_templates/about_header.php";
        } elseif (CSite::InDir('/cases/')){
            require_once "header_templates/cases_header.php";
        } elseif (CSite::InDir('/kontakty/')){
            require_once "header_templates/kontakty_header.php";
        } elseif (CSite::InDir('/map/')){
            require_once "header_templates/map_header.php";
        } ?>


        <?
        /*****
         *   Для продуктов шапка редактируется в catalog.section/tariffs/header_templates
         *   Здесь просто не выводим для продуктов закрывающий тег
         * */
        ?>
        <? if( $APPLICATION->GetCurPage(false) == '/products/' || !CSite::InDir('/products/')){ ?>
            <div class="header_white_block"></div>
        </div>
        <? } ?>
    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" style="display: none!important;">
        <li itemprop="name">
            <a itemprop="url" href="/products/">Продукты</a>
        </li>
        <li itemprop="name">
            <a itemprop="url" href="/tariffs/">Тарифы</a>
        </li>
        <li itemprop="name">
            <a itemprop="url" href="/rreviews/">Отзывы</a>
        </li>
        <li itemprop="name">
            <a itemprop="url" href="/vacancies/">Вакансии</a>
        </li>
        <li itemprop="name">
            <a itemprop="url" href="/kontakty/">Контакты</a>
        </li>
    </ul>