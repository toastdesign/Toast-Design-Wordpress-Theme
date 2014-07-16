<?php get_template_part('templates/head'); ?>

	<div class="container-404">
		<h1><?php _e( 'Error 404 - Nothing Found', 'toast' ); ?></h1>

		<p><?php _e( 'It looks like nothing was found here. Maybe try a search?', 'toast' ); ?></p>

		<?php get_search_form(); ?>
	</div> <!-- end container-404 -->

<?php get_footer(); ?>