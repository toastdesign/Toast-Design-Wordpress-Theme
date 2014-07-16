<?php

/* ==========================================================================
1.0 - Toont een navigatie voor vorige en volgende posts/artikelen
========================================================================== */
if ( ! function_exists('toast_paging_nav' ) ) {
    function toast_paging_nav() { ?>
        <ul>
            <?php 
                if ( get_previous_posts_link() ) : ?>
                <li class="next">
                    <?php previous_posts_link( __('Nieuwere artikelen &rarr;', 'toast') ) ?>
                </li>
                <?php endif;
            ?>
            <?php 
                if ( get_next_posts_link() ) : ?>
                <li class="previous">
                    <?php next_posts_link( __('&larr; Oudere artikelen', 'toast') ) ?>
                </li>
                <?php endif;
            ?>
        </ul> <?php 
    }
}