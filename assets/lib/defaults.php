<?php

/* ==========================================================================
1.0 - Geef de defaults aan van het tehma en de ondersteunde onderdelen
========================================================================== */
if ( ! function_exists('toast_setup') ) {
    function toast_setup() {
        /* Maak het thema vertaalbaar  ----------- */
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain( 'toast', $lang_dir );

        /* Voeg ondersteuning toe voor verschillende post formats  ----------- */
        add_theme_support( 'post-formats', 
            array(
                'gallery',
                'link',
                'image',
                'quote',
                'video',
                'audio'
            )
         );

        /* Ondersteuning voor feed links   ----------- */
        add_theme_support( 'automatic-feed-links' );

        /* Ondersteuning voor thumbnails  ----------- */
        add_theme_support( 'post-thumbnails' );

        /* Ondersteuning voor menus  ----------- */
        register_nav_menus(
            array(
                'main-menu' => __('Main menu', 'toast')
            )
        );
    }   

    add_action('after_setup_theme', 'toast_setup');
}