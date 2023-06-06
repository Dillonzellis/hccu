<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

	<!-- BEGIN of main content -->
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<!-- END of main content -->

<?php get_footer(); ?>