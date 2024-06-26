<?php

function theme_enqueue_styles()
{
    // Enqueue parent style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('forcechild-style', get_stylesheet_directory_uri() . '/dart-sass/sass/style.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/dart-sass/sass/style.css'));
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

    wp_enqueue_script('swipperbundle-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array('jquery'), false, true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/dart-sass/sass/script.js', array('jquery', 'gsap-js', 'swipperbundle-js'), false, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles'); // Chargement du thème


// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
