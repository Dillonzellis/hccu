<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Set up Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">

	<!-- Add Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

<script type="text/javascript">
            function postLink(link) {
                var f = document.createElement("form");
                f.method = 'post';
                f.action = link;
                document.body.appendChild(f);
                f.submit();
            }
        </script>
	
	<!-- Google Tag Manager Container for Kasasa -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJQ4T3D');</script>
<!-- End Google Tag Manager -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!-- Google Tag Manager Container for Kasasa (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJQ4T3D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	
	<!-- BEGIN of header -->

	<?php if( have_rows('pop_up','options') ): ?>
		<?php while( have_rows('pop_up','options') ): the_row();
            // Declare variables below
		$link = get_sub_field('url');
		$content_for_pop_up = get_sub_field('content_for_pop-up');
		$close_button_text = get_sub_field('close_button_text');
		$continue_button_text = get_sub_field('continue_button_text');
		$id = get_sub_field('id');
		?>
		<div class="modal-frame" id="<?php echo $id; ?>">
			<div class="modal">
				<div class="modal-inset">
					<div class="button close"><i class="fa fa-close" alt="close"></i></div>
					<div class="modal-body">
						<?php echo $content_for_pop_up; ?>
						<a href="#" class="button closed"><?php echo $close_button_text; ?></a>
						<a href="<?php echo $link; ?>" class="button opens" target="_blank"><?php echo $continue_button_text; ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-overlay"></div>
	<?php endwhile; ?>
<?php endif; ?>
	
	<style>
        a {
            color: #000;
        }
    </style>
<header class="header">
	<div class="top-header">
		<div class="row">
			<div class="large-12 medium-12 small-12 text-right columns">
				<?php
				if (has_nav_menu('header-top-menu')) {
					wp_nav_menu( array( 'theme_location' => 'header-top-menu', 'menu_class' => 'header-top-menu','depth'=>1));
				}
				?>
			</div>
		</div>
	</div>
	<div class="header-logo">
		<div class="row">
			<div class="large-5 medium-8 columns">
				<div class="logo text-center medium-text-left">
					<?php show_custom_logo(); ?>
				</div>
			</div>
			<div class="large-7 medium-4 text-right columns">
				<?php if( have_rows('social_icons','options') ): ?>
					<div class="header-logo-social">
						<ul>
							<?php while( have_rows('social_icons','options') ): the_row();
            // Declare variables below
							$icon = get_sub_field('icon');
							$link = get_sub_field('url');
							$content_for_pop_up = get_sub_field('content_for_pop-up');
							$close_button_text = get_sub_field('close_button_text');
							$continue_button_text = get_sub_field('continue_button_text');
							$id = get_sub_field('id');
							$alt_tags = get_sub_field('alt_tags');
							$social_image = get_sub_field('social_image');
							?>
							<li class="open">
								<a href="#<?php echo $id; ?>">
									<!-- <span><?php //echo $title_tags; ?></span> -->
									<img class="icon" alt="<?php echo $social_image['alt']; ?>" src="<?php echo $social_image['url']; ?>">
								</a>
								<div class="modal-frame" id="<?php echo $id; ?>">
								<div class="modal">
									<div class="modal-inset">
										<div class="button close"><i class="fa fa-close" alt=""></i></div>
										<div class="modal-body">
											<?php /*<a href="<?php echo $link; ?>" target="_blank" alt="<?php echo $alt_tags; ?>">
											<img class="<?php echo strtolower($alt_tags); ?>" alt="<?php echo $alt_tags; ?>" src="<?php echo $social_image['url']; ?>"></a> */
										?>
											<p class="text-left"><?php echo $content_for_pop_up; ?></p>
											<a href="#" class="button closed"><?php echo $close_button_text; ?></a>
											<a href="<?php echo $link; ?>" class="button opens" target="_blank"><?php echo $continue_button_text; ?></a>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-overlay"></div>
						<?php endwhile; ?>
							</li>
							
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="header-mainmenu">
	<div class="row medium-uncollapse small-collapse">
		<div class="large-8 medium-12 columns">
			<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle aria-label="Mobile Menu Navigation"></button>
				<div class="title-bar-title">Menu</div>
			</div>
			<nav class="top-bar" id="main-menu">
				<?php
				if (has_nav_menu('header-menu')) {
					wp_nav_menu(array('theme_location' => 'header-menu',
						'menu_class' => 'menu header-menu dropdown',
						'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-close-on-click-inside="false">%3$s</ul>',
						'walker' => new Foundation_Navigation()));
				}
				?>
			</nav>
		</div>
		<div class="large-4 medium-12 columns">
			<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" xmlns="http://www.w3.org/1999/html">
				<input type="search" name="s" id="s" placeholder="<?php _e('Search Now...', 'foundation'); ?>" value="<?php echo get_search_query(); ?>" aria-label="Search Field"/>
				<button type="submit" name="submit" id="searchsubmit" aria-label="Search Button" ></button>
			</form>
		</div>
	</div>
</div>
</header>
<!-- END of header -->





<?php if (!is_front_page()) { ?> <!--is_home | is_blog | is_page(42) | is_page(array(5,7,164)-->
<div class="color-block">

</div>
<?php } ?>
