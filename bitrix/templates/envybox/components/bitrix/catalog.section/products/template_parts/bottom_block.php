<div class="feedback_footer">
    <div class="feedback_footer_wr">
        <div class="container">
            <div class="header_text_row">
                <div class="header_text_col_1">
                    <h2 class="header_title_feedback">
                        <?= $arResult['NAME'] ?>
                    </h2>
                    <p class="feedback_footer_text">
                        <b><?= $arResult['UF_SUBTITLE_1'] ?></b> <br>
                        <?= $arResult['UF_SUBTITLE_2'] ?>
                    </p>
                    <form action="" class="form_email">
                        <input type="email" name="email" class="form_email_input" placeholder="Электронная почта" required>
                        <input type="button" class="form_email_btn" value="Попробовать">
                    </form>
                </div>
                <div class="header_text_col_2">
                    <div class="slider_header">
                        <? foreach ($arResult['UF_SLIDER'] as $slide) {
                            if ($slide < 1) {
                                continue;
                            }

                            $img = CFile::GetPath($slide); ?>
                            <div class="slider_header_wr"><img src="<?= $img ?>" alt=""></div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>