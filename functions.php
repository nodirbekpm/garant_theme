<?php
function garant_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'garant_theme_setup');


function register_my_menus() {
    register_nav_menus([
        'header_menu' => 'Header menu',
    ]);
}
add_action('after_setup_theme', 'register_my_menus');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title'  => 'Site Settings',
        'menu_title'  => 'Site Settings',
        'menu_slug'   => 'site-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ]);
}