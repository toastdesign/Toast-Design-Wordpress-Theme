<?php

/* ==========================================================================
1.0 - Registreer de widgets
========================================================================== */
if (! function_exists('toast_widget_init') ) {
    function toast_widget_init() {
        if ( function_exists('register_sidebar') ) {
            register_sidebar(
                array(
                    'name' => __( 'Main Widget Area', 'toast' ),
                    'id' => 'sidebar-1',
                    'description' => __( 'Appears on posts and pages.', 'toast' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div> <!-- end widget -->',
                    'before_title' => '<h5 class="widget-title">',
                    'after_title' => '</h5>',
                )
            );

            register_sidebar(
                array(
                    'name' => __( 'Footer Widget Area', 'toast' ),
                    'id' => 'sidebar-2',
                    'description' => __( 'Appears on the footer.', 'toast' ),
                    'before_widget' => '<div id="%1$s" class="widget col-sm-3 %2$s">',
                    'after_widget' => '</div> <!-- end widget -->',
                    'before_title' => '<h5 class="widget-title">',
                    'after_title' => '</h5>',
                )
            );
        }
    }

    add_action( 'widgets_init', 'toast_widget_init' );
}