<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

    <!--[if lt IE 8]>
        <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'toast'); ?>
        </div>
    <![endif]-->

    <?php get_header(); ?>

    <!-- MAIN CONTENT AREA -->
    <div class="container">
        <div class="row">

            <div class="main-content col-md-8" role="main">
                <?php while( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- Article header -->
                        <header class="entry-header"> <?php
                            // If the post has a thumbnail and it's not password protected
                            // then display the thumbnail
                            if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                <figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
                            <?php endif; ?>

                            <h1><?php the_title(); ?></h1>
                        </header> <!-- end entry-header -->

                        <!-- Article content -->
                        <div class="entry-content">
                            <?php the_content(); ?>

                            <?php wp_link_pages(); ?>
                        </div> <!-- end entry-content -->

                        <!-- Article footer -->
                        <footer class="entry-footer">
                            <?php 
                                if ( is_user_logged_in() ) {
                                    echo '<p>';
                                    edit_post_link( __( 'Edit', 'toast' ), '<span class="meta-edit">', '</span>' );
                                    echo '</p>';
                                }
                            ?>
                        </footer> <!-- end entry-footer -->
                    </article>

                    <?php comments_template(); ?>
                <?php endwhile; ?>
            </div> <!-- end main-content -->

            <?php get_sidebar(); ?>

            </div> <!-- Einde row -->
    </div> <!-- Einde container

    <?php get_footer(); ?>

</body>
</html>