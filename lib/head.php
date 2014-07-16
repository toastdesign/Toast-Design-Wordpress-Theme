<?php

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Include the generated CSS in the page header.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'toast_load_wp_head' ) ) {
    function toast_load_wp_head() {
        // Get the logos
        $logo = IMAGES . '/logo.png';
        $logo_retina = IMAGES . '/logo@2x.png';

        $logo_size = getimagesize( $logo );
        ?>
        
        <!-- Logo CSS -->
        <style type="text/css">
            .site-logo a {
                background: transparent url( <?php echo $logo; ?> ) 0 0 no-repeat;
                width: <?php echo $logo_size[0] ?>px;
                height: <?php echo $logo_size[1] ?>px;
                display: inline-block;
            }

            @media only screen and (-webkit-min-device-pixel-ratio: 1.5),
            only screen and (-moz-min-device-pixel-ratio: 1.5),
            only screen and (-o-min-device-pixel-ratio: 3/2),
            only screen and (min-device-pixel-ratio: 1.5) {
                .site-logo a {
                    background: transparent url( <?php echo $logo_retina; ?> ) 0 0 no-repeat;
                    background-size: <?php echo $logo_size[0]; ?>px <?php echo $logo_size[1]; ?>px;
                }
            }
        </style>

        <?php
    }

    add_action( 'wp_head', 'toast_load_wp_head' );
}