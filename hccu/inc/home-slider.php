<?php
// Create HOME Slider
function home_slider_template() { ?>

<script>
	jQuery(document).ready(function () {
		jQuery('#home-slider').slick({
				// cssEase: 'ease',
				// fade: true,  // Cause trouble if used slidesToShow: more than one
				arrows: true,
				dots: false,
				infinite: true,
				speed: 500,
				autoplay: true,
				autoplaySpeed: 5000,
				slidesToShow: 1,
				slidesToScroll: 1,
				slide: '.slick-slide', // Cause trouble with responsive settings
				prevArrow: '<button aria-label="Left button" type="button" class="slick-prev"><i class="far fa-angle-left" /></button>',
				nextArrow: '<button aria-label="Right button" type="button" class="slick-next"><i class="far fa-angle-right" /></button>',
			});
	});
</script>

<?php $arg = array(
	'post_type'      => 'slider',
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
	'posts_per_page' => - 1
	);
$slider    = new WP_Query( $arg );
if ( $slider->have_posts() ) : ?>

<div id="home-slider" class="slick-slider open">
	<?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
		<?php if (get_the_content()): ?>
			<div class="slick-slide" <?php bg( get_attached_img_url( get_the_ID(), 'full_hd' ) ); ?> alt="Slide">
				<?php $caption_position = get_field('caption_position'); ?>
				<div class="slider-caption <?php echo ($caption_position == 'right') ? 'caption-right' : '' ?> ">

					<?php the_content(); ?>
				</div>
			</div>
		<?php else :?>
			<?php $link = get_field('slider_link');
			if( $link ): ?>
			<a href="<?php echo $link['url']; ?>" target="<?php echo ($link['target']) ? $link['target'] : '_self' ?>" class="slick-slide" <?php bg( get_attached_img_url( get_the_ID(), 'full_hd' ) ); ?> alt="Slide"></a>
		<?php else : ?>
			<div class="slick-slide" <?php bg( get_attached_img_url( get_the_ID(), 'full_hd' ) ); ?> alt="Slide">
			</div>
		<?php endif; ?>
	<?php endif; ?>

<?php endwhile; ?>
</div><!-- END of  #home-slider-->
<?php endif;
wp_reset_query(); ?>
<?php }

// HOME Slider Shortcode

function home_slider_shortcode() {
	ob_start();
	home_slider_template();
	$slider = ob_get_clean();

	return $slider;
}

add_shortcode( 'slider', 'home_slider_shortcode' );
