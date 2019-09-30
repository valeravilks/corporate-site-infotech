<?php

include_once 'function/script_style.php';
include_once 'function/menu.php';
include_once 'function/options_theme.php';

// Disable admin bar
add_filter('show_admin_bar', '__return_false');