<? $cur_page_no_index = $GLOBALS['APPLICATION']->GetCurPage(false); ?>
<div class="form_registration" id="form_registration-<?= $item['ID'] ?>">
    <div class="container">
        <div class="form_registration_wr">
            <p class="form_registration_title">

                <?= $item['NAME'] ?>
            </p>
            <p class="form_registration_text">
                <?= $props['REG_FREE_SUBTITLE']['VALUE'] ?>
            </p>
            <form action="" class="form_email">
                <input type="text" class="form_email_input" placeholder="Электронная почта">
                <input type="button" class="form_email_btn" value="Зарегистрироваться">
            </form>
        </div>
    </div>
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/circle-pink.svg" alt="" class="form_registration_circle1">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/circle-pink.svg" alt="" class="form_registration_circle2">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/circle-yellow-big.svg" alt="" class="form_registration_circle3">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/circle-white.svg" alt="" class="form_registration_circle4">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/line-blue.svg" alt="" class="form_registration_line1">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/line-bluelight.svg" style="transform: rotate(90deg);" alt="" class="form_registration_line2">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/zigzag-purple.svg" alt="" class="form_registration_zigzag1">
    <img src="<?= SITE_TEMPLATE_PATH ?>/images/form_icon/zigzag-blue-big.svg" alt="" class="form_registration_zigzag2">

    <?
    $url = $_SERVER['REQUEST_URI'];
    if (stristr($url, 'konstruktor-saytov') !== FALSE) { ?>


        <img src="<?= SITE_TEMPLATE_PATH ?>/images/bg-reg.png" alt="" class="form_registration_bg">

    <?  }; ?>
</div>