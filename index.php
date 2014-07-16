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
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'templates/content', get_post_format() ); ?> 
                <?php endwhile; ?>

                <?php toast_paging_nav(); ?>

                <?php else : ?>
                    <?php get_template_part('templates/content', 'none'); ?>
                <?php endif; ?>
            </div> <!-- Einde main-content -->

            <?php get_sidebar(); ?>

        </div> <!-- Einde row -->
    </div> <!-- Einde container -->

    <?php get_footer(); ?>

</body>
</html>