<?php
if (empty($props['CASES_IMAGE']['VALUE'])) {
    return;
}
?>
<div class="b-cases">
    <div class="container">
        <? if (!empty($props['CASES_TITLE']['VALUE'])) { ?>
            <h2><?= $props['CASES_TITLE']['VALUE'] ?></h2>
        <? } ?>

        <div class="b-cases-items">
            <? foreach ($props['CASES_IMAGE']['VALUE'] as $v) { ?>
                <?
                $img = CFile::GetPath($v);
                ?>
                <div class="b-cases-items__item">
                    <img src="<?= $img ?>" alt="<?= $props['CASES_TITLE']['VALUE'] ?: 'Кейс' ?>">
                </div>
            <? } ?>
        </div>
    </div>
</div>