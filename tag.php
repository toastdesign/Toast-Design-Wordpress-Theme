<?php get_header(); ?>

	<div class="main-content col-md-8" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1>
					<?php 
						printf( __( 'Tag Archives for %s', 'toast' ), single_tag_title( '', false ) );
					?>
				</h1>

				<?php 
					// Show an optional tag description.
					if ( tag_description() ) {
						echo '<p>' . tag_description() . '</p>';
					}
				?>
			</header>

			<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'templates/content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php toast_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'templates/content', 'none' ); ?>
		<?php endif; ?>
	</div> <!-- end main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>