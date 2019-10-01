<?php
if (function_exists('pll_the_languages')) {
    echo '<div class="lang__container lang__container-down">';
    $translations = pll_the_languages(array('raw'=>1, 'hide_if_empty'=>0));



    echo '<div class="lang__second lang__second-down">';

    foreach ($translations as $lang) {
        if(!$lang['current_lang']) {
            echo '<div class="lang__item lang__item-second"><a class="lang__link" href="' . $lang["url"] . '">' . $lang["slug"]. '</a></div>';
        }
    }
    echo '</div>';

    foreach ($translations as $lang) {
        if($lang['current_lang']) {
            echo '<div class="lang__item lang__item-current">' . $lang["slug"]. '</div>';
        }
    }
    echo '</div>';
}
