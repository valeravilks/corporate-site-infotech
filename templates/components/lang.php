<?php
if (function_exists('pll_the_languages')) {
    echo '<div class="lang__container">';
    $translations = pll_the_languages(array('raw'=>1, 'hide_if_empty'=>0));

    foreach ($translations as $lang) {
        if($lang['current_lang']) {
            echo '<div class="lang__item lang_item-current">' . $lang["slug"]. '</div>';
        }
    }

    echo '<div class="lang__second">';

    foreach ($translations as $lang) {
        if(!$lang['current_lang']) {
            echo '<div class="lang__item lang__item-second"><a class="lang__link" href="' . $lang["url"] . '">' . $lang["slug"]. '</a></div>';
        }
    }
    echo '</div>';
    echo '</div>';
}
