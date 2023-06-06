<?php
/**
 * Template Name: Index
 */
get_header(); ?>

<div class="row">
	<!-- BEGIN of page content -->
	<div class="columns">
		<main class="main-content index-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<article <?php post_class(); ?>>
						<?php if (has_post_thumbnail()) : ?>
							<div title="<?php the_title_attribute(); ?>" class="thumbnail">
								<?php the_post_thumbnail('large'); ?>
							</div>
						<?php endif; ?>
						<?php the_content('',true); ?>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>