<?php
add_action( 'init', 'register_menus' );
function register_menus() {
  register_nav_menus(
     array (
      'menu-main' => __( 'Main Navigation Menu', 'test' ),
         'menu-footer' => __( 'Footer Navigation Menu', 'test' )
         )
    );
   }

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
  register_sidebar( array(
     'name' => __( 'Main Sidebar', 'test' ),
     'id' => 'sidebar-1',
     'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'test' ),
     'before_widget' => '<li id="%1$s" class="widget %2$s">',
     'after_widget' => '</li>',
     'before_title' => '<h3 class="widgettitle">',
     'after_title' => '</h3>',
     ) );
  }
?>
