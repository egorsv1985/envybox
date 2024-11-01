<?php $cur_page_no_index = $GLOBALS['APPLICATION']->GetCurPage(false);
    $classProductHeader = '';
    if($cur_page_no_index == "/products/video-widget/") {
        $this->addExternalCss(SITE_TEMPLATE_PATH . "/style/video-widget/style.css?ver-66015124");
        $classProductHeader = "product-header product-header--video-widget";
        ?>
    <?php }
?>

<div class="header_text_wr <?= $classProductHeader ?>">
    <div class="container">
        <div class="header_text_row">
            <div class="header_text_col_1">
                <?
                  $url = $_SERVER['REQUEST_URI']; 
                  if(stristr($url, 'generator-klientov') !== FALSE ) {?>
                 <h1 class="header_title_feedback">
                   <?= $arResult['NAME'] ?>
                  </h1>
                  <div class="header_text">
                    <p><?= $arResult['UF_SUBTITLE_1'] ?></p>
                    <?= $arResult['UF_SUBTITLE_2'] ?>
                 </div>
                <?}else{?>
                 <p class="header_title_feedback<?=((stristr($url, 'onlayn-chat')!== false)?" h2-fs-36":'')?><?=((stristr($url, 'onlayn-konsultant') !== false )? ' h2-fs-32 h2-mobile-26':'')?>">
                   <?= $arResult['NAME'] ?>
                  </p>
                  <p class="header_text">
                    <b><?= $arResult['UF_SUBTITLE_1'] ?></b>
                    <?= $arResult['UF_SUBTITLE_2'] ?>
                 </p>
                <?};?>

                <?php /* Меню для продукта Видеовиджет /products/video-widget/ */?>
                <?php if($cur_page_no_index == "/products/video-widget/"):?>
                    <ul class="vw-hero-tags">
                        <li class="vw-hero-tags__item">
                            <a href="#vwGive">Что дает видеовиджет?</a>
                        </li>
                        <li class="vw-hero-tags__item">
                            <a href="#vwWork">Как это работает?</a>
                        </li>
                        <li class="vw-hero-tags__item">
                            <a href="#vwAdvantages">Преимущества</a>
                        </li>
                        <li class="vw-hero-tags__item">
                            <a href="#block3">Стоимость</a>
                        </li>
                    </ul>
                <?php else:?>

                    <?
                    if (CSite::InDir('/products/obratnyy-zvonok/')) {
                        $this->SetViewTarget('product_link');
                        include __DIR__ . '/link_header.php';
                        $this->EndViewTarget();
                    } else {
                        include __DIR__ . '/link_header.php';
                    }
                    ?>

                <?php endif;?>


                <button class="form_email_btn reg_button">Попробовать 8 дней бесплатно</button>
            </div>
            <div class="header_text_col_2">
                <div class="slider_header">
                    <? foreach ($arResult['UF_SLIDER'] as $slide) { ?>
                        <?
                        if ($slide < 1) {
                            continue;
                        }
                        
                        $img = CFile::GetPath($slide);
                        //$resizeImg = CFile::ResizeImageGet($img, Array("width" => 330, "height" => 350), BX_RESIZE_IMAGE_PROPORTIONAL, false);
                        ?>
                        <div class="slider_header_wr"><img src="<?= $img ?>" alt="" width="100%;"></div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</div>