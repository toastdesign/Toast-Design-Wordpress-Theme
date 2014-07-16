<?php get_template_part('templates/head'); ?>

<div class="main-content col-md-8" role="main">
    <?php while( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'templates/content', get_post_format() ); ?>
        <?php comments_template(); ?>
    <?php endwhile; ?>
</div> <!-- end main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

