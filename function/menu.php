<?php
// File to create a menu by BEM

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
  register_nav_menu( 'primary', 'Главное меню' );
}

// Remove ID in menu items (<li>)
add_filter('nav_menu_item_id', '__return_false');

// Change the attribute of the tag menu item
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes2', 10, 4 );
function filter_nav_menu_css_classes2( $classes, $item, $args, $depth ) {
  if ( $args->theme_location === 'primary' ) {
    $classes = [
      'menu__item',
      'menu__item_lvl_' . ( $depth + 1 )
    ];
    if ( $item->current ) {
      $classes[] = 'menu__item-active';
    }
  }
  return $classes;
}

// Change the class of the nested(вложенного) UL
add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
function filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
  if ( $args->theme_location === 'primary' ) {
    $classes = [
      'menu__sub',
      'menu__sub_lvl_' . ( $depth + 2 )
    ];
  }
  return $classes;
}

// Add classes to link
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {

  if ( $args->theme_location === 'primary' ) {


    $atts['class'] = 'menu__link' . ' menu__link_lvl_' . ( $depth + 1 );
      if ( $item->current ) {
        $atts['class'] .= ' menu__link-active';
      }

      if ( $depth === 0 || $depth === 2 ) {
          $atts['class'] .= ' menu-16-medium';
      }
   }
  return $atts;
}

//------------------------


add_action( 'after_setup_theme', 'theme_register_nav_menu1' );
function theme_register_nav_menu1() {
    register_nav_menu( 'primary-tablet', 'Главное меню для планшета' );
}

// Remove ID in menu items (<li>)
add_filter('nav_menu_item_id', '__return_false');

// Change the attribute of the tag menu item
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes22', 10, 4 );
function filter_nav_menu_css_classes22( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'primary-tablet' ) {
        $classes = [
            'menu-tablet__item',
            'menu-tablet__item_lvl_' . ( $depth + 1 )
        ];
        if ( $item->current ) {
            $classes[] = 'menu-tablet__item-active';
        }
    }
    return $classes;
}

// Change the class of the nested(вложенного) UL
add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class1', 10, 3 );
function filter_nav_menu_submenu_css_class1( $classes, $args, $depth ) {
    if ( $args->theme_location === 'primary-tablet' ) {
        $classes = [
            'menu-tablet__sub',
            'menu-tablet__sub_lvl_' . ( $depth + 2 )
        ];
    }
    return $classes;
}

// Add classes to link
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes1', 10, 4 );
function filter_nav_menu_link_attributes1( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'primary-tablet' ) {
        $atts['class'] = 'menu-tablet__link' . ' menu-tablet__link_lvl_' . ( $depth + 1 );
        if ( $item->current ) {
            $atts['class'] .= ' menu-tablet__link-active';
        }
        if( $depth === 0) {
            $atts['class'] .= ' section-12-medium';
        }
        if( $depth === 1) {
            $atts['class'] .= ' menu-16-medium';
        }
    }
    return $atts;
}


//------------------------


add_action( 'after_setup_theme', 'theme_register_nav_menu12' );
function theme_register_nav_menu12() {
    register_nav_menu( 'primary-mobile', 'Главное меню для телефона' );
}

// Remove ID in menu items (<li>)
add_filter('nav_menu_item_id', '__return_false');

// Change the attribute of the tag menu item
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes222', 10, 4 );
function filter_nav_menu_css_classes222( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'primary-mobile' ) {
        $classes = [
            'menu-mobile__item',
            'menu-mobile__item_lvl_' . ( $depth + 1 )
        ];
        if ( $item->current ) {
            $classes[] = 'menu-mobile__item-active';
        }
    }
    return $classes;
}

// Change the class of the nested(вложенного) UL
add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class12', 10, 3 );
function filter_nav_menu_submenu_css_class12( $classes, $args, $depth ) {
    if ( $args->theme_location === 'primary-mobile' ) {
        $classes = [
            'menu-mobile__sub',
            'menu-mobile__sub_lvl_' . ( $depth + 2 )
        ];
    }
    return $classes;
}

// Add classes to link
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes12', 10, 4 );
function filter_nav_menu_link_attributes12( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'primary-mobile' ) {
        $atts['class'] = 'menu-mobile__link' . ' menu-mobile__link_lvl_' . ( $depth + 1 );
        if ( $item->current ) {
            $atts['class'] .= ' menu-mobile__link-active';
        }
        if( $depth === 0) {
            $atts['class'] .= ' head-30-medium';
        }
    }
    return $atts;
}