<div class="header_text_wr">
    <div class="container">
        <div class="header_text_row">
            <div class="header_text_col_1">
                <? if ($APPLICATION->GetCurPage(false) == '/products/'){
	                $APPLICATION->IncludeFile(SITE_DIR . "include/product_title.php", Array(), Array("MODE" => "html"));
                }else{
                    $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/header/title.php", Array(), Array("MODE" => "html"));
                }
                $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/header/sub_title.php", Array(), Array("MODE" => "html"));
                ?>
                <ul class="header_menu_two">
                    <li><a href="#block1">Что дает?</a></li>
                    <li><a href="#block2">Наши продукты</a></li>
                    <li><a href="#block3">Отзывы</a></li>
                    <li><a href="#block4">Кейсы</a></li>
                </ul>

                <button class="form_email_btn reg_button">Попробовать 8 дней бесплатно</button>
            </div>
            <div class="header_text_col_2">
                <div class="slider_header">
                    <? $APPLICATION->IncludeFile(SITE_DIR . "include/main_page/header/slider.php", Array(), Array("MODE" => "html")); ?>
                </div>
            </div>
        </div>
    </div>
</div>