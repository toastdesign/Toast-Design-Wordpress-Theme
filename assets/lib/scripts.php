<?php

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Load the custom scripts for the theme.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'toast_scripts' ) ) {
    function toast_scripts() {
        // Adds support for pages with threaded comments
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        // Register scripts
        wp_register_script( 'bootstrap-js', 'http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array( 'jquery' ), false, true );
        wp_register_script( 'toast-custom', SCRIPTS . '/scripts.js', array( 'jquery' ), false, true );

        // Load the scripts
        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_script( 'toast-custom' );

        // Load the stylesheets
        wp_enqueue_style( 'font-awesome', THEMEROOT . '/css/font-awesome.min.css' );
        wp_enqueue_style( 'toast-master', THEMEROOT . '/css/master.css' );
    }

    add_action( 'wp_enqueue_scripts', 'toast_scripts' );

}