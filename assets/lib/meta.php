<?php

/* ==========================================================================
1.0 - Toon de meta informatie voor een article
========================================================================== */
if ( ! function_exists('toast_post_meta') ) {
    function toast_post_meta() {
        echo '<ul class="list-inline entry-meta">';

        if ( get_post_type() === 'post') {
            // Als het een sticky post is geef dit dan aan
            if (is_sticky() ) {
                echo '<li class="meta-featured-post"><i class="fa fa-fw fa-thumb-tack"></i>' . __('Sticky', 'toast' ) . '</li>';
            }

            // Toon de auteur
            printf(
                '<li class="meta-author"><a href="%1$s" rel="author">%2$s</a></li>',
                esc_url(get_author_posts_url( get_the_author_meta('ID') ) ),
                get_the_author()
            );

            // Toon de datum
            echo '<li class="meta-date"> ' . get_the_date() . '</li>';

            // De categorieen
            $category_list = get_the_category_list(', ');
            if ( $category_list ) {
                echo '<li class="meta-categories"> ' . $category_list . '</li>';
            }

             // De tags
            $tag_list = get_the_tag_list('' ,', ');
            if ( $tag_list ) {
                echo '<li class="meta-categories"> ' . $tag_list . '</li>';
            }

            // Reacties link en aantal
            if ( comments_open() ) :
                echo '<li>' ;
                echo '<span class="meta-reply">';
                comments_popup_link( __('Laat een reactie achter', 'toast'), __('Een reactie op dit moment', 'toast'), __('bekijk alle % reacties', 'toast') );
                echo '</span>';
                echo '</li>';
            endif;

            // Edit link
            if ( is_user_logged_in() ) {
                echo '<li>';
                edit_post_link(__('Edit', 'toast'), '<span class="meta-edit">', '</span>');
                echo '</li>';
            }
        }
    }
}