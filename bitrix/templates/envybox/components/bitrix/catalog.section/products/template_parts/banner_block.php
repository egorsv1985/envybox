<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (empty($props['BANNER_IMG']['VALUE'])) {
    return;
}

$file = CFile::GetFileArray($props['BANNER_IMG']['VALUE']);
?>
<div class="b-banners">
    <div class="container">
        <img src="<?= $file['SRC'] ?>" alt="">

        <? if (!empty($props['BANNER_TEXT']['~VALUE']['TEXT'])) { ?>
            <?
            $position = $props['BANNER_TEXT_POSITION']['VALUE_XML_ID'] ?? 'left';
            ?>
            <div class="b-banners-text <?= 'b-banners-text-position__' . $position ?>">
                <?= $props['BANNER_TEXT']['~VALUE']['TEXT'] ?>
            </div>
        <? } ?>
    </div>
</div>