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


add_theme_support('post-thumbnails');

require get_template_directory() . '/inc/acf-fields.php';


add_filter('wpcf7_form_elements', function($content) {
    // Span va p taglarini olib tashlash
    $content = preg_replace('/<span class="wpcf7-form-control-wrap"[^>]*>(.*?)<\/span>/s', '$1', $content);
    $content = preg_replace('/<p[^>]*>(.*?)<\/p>/is', '$1', $content);

    // Ortiqcha classlarni olib tashlash
    $content = str_replace([
        'wpcf7-form-control',
        'wpcf7-text',
        'wpcf7-validates-as-required',
        'wpcf7-validates-as-tel',
        'wpcf7-tel',
        'wpcf7-checkbox',
        'wpcf7-list-item',
        'wpcf7-list-item-label',
        'wpcf7-list-item first last',
    ], '', $content);

    // Ichma-ich label va span larni olib tashlab, custom-checkbox struktura yasaymiz
    $content = preg_replace_callback(
        '/<span[^>]*>\s*<label>\s*<input[^>]*name="confirm\[\]"[^>]*>\s*<span[^>]*>.*?<\/span>\s*<\/label>\s*<\/span>/is',
        function($matches) {
            // input ni ajratib olamiz
            preg_match('/<input[^>]*>/i', $matches[0], $inputMatch);
            return '<label class="custom-checkbox">' . $inputMatch[0] . '<span class="checkmark"></span></label>';
        },
        $content
    );

    // Bo‘sh classlarni olib tashlash
    $content = preg_replace('/\s+class="\s*"/', '', $content);
    $content = preg_replace('/\s+class="\s+"/', '', $content);
    $content = preg_replace('/\s{2,}/', ' ', $content);

    return $content;
});

