<?php
/**
 * Footer
 */
?>

<!-- BEGIN of footer -->
<footer class="footer">
	<div class="row">
		<div class="large-6 medium-6 small-12 small-collapse columns footer-block clearfix">
			<?php if ( $contact_info_title = get_field( 'contact_info_title', 'options' ) ): ?>
				<h2 class="footer-block__title"><?php echo $contact_info_title; ?></h2>
			<?php endif; ?>
			<div class="large-6 medium-6 small-6 columns r-padd">
				<div class="footer-address">
					<?php if ( $walton_way_branch_title = get_field( 'walton_way_branch_title', 'options' ) ): ?>
						<h3 class="footer__title"><?php echo $walton_way_branch_title; ?></h3>
					<?php endif; ?>
					<?php if ( $walton_way_branch_address = get_field( 'walton_way_branch_address', 'options' ) ): ?>
						<?php echo $walton_way_branch_address; ?>
					<?php endif; ?>
				</div>
				<div class="footer-phone-number">
					<?php if ( $phone_number_title = get_field( 'phone_number_title', 'options' ) ): ?>
						<h3 class="footer__title"><?php echo $phone_number_title; ?></h3>
					<?php endif; ?>
					<?php if ( $walton_phone = get_field( 'walton_phone', 'options' ) ): ?>
						<a href="tel:<?php echo preparePhone($walton_phone); ?>"><?php echo $walton_phone; ?></a>
					<?php endif; ?>
				</div>
				<div class="footer-office-hours">
					<?php if ( $office_hours_title = get_field( 'office_hours_title', 'options' ) ): ?>
						<h3 class="footer__title"><?php echo $office_hours_title; ?></h3>
					<?php endif; ?>
					<?php if ( $walton_office_hours = get_field( 'walton_office_hours', 'options' ) ): ?>
						<?php echo $walton_office_hours; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="large-6 medium-6 small-6 columns">
				<div class="footer-right">
					<div class="footer-address">
						<?php if ( $evans_branch_title = get_field( 'evans_branch_title', 'options' ) ): ?>
							<h3 class="footer__title"><?php echo $evans_branch_title; ?></h3>
							<?php if ( $evans_branch_address = get_field( 'evans_branch_address', 'options' ) ): ?>
								<?php echo $evans_branch_address; ?>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<div class="footer-phone-number">
						<?php if ( $phone_number_title = get_field( 'phone_number_title', 'options' ) ): ?>
							<h3 class="footer__title"><?php echo $phone_number_title; ?></h3>
						<?php endif; ?>
						<?php if ( $evans_phone = get_field( 'evans_phone', 'options' ) ): ?>
							<a href="tel:<?php echo preparePhone($evans_phone); ?>"><?php echo $evans_phone; ?></a>
						<?php endif; ?>
					</div>
					<div class="footer-office-hours">
						<?php if ( $office_hours_title = get_field( 'office_hours_title', 'options' ) ): ?>
							<h3 class="footer__title"><?php echo $office_hours_title; ?></h3>
						<?php endif; ?>
						<?php if ( $evans_office_hours = get_field( 'evans_office_hours', 'options' ) ): ?>
							<?php echo $evans_office_hours; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="large-6 medium-6 small-12 small-collapse columns">
			<?php if ( $useful_links_title = get_field( 'useful_links_title', 'options' ) ): ?>
				<h2 class="footer-block__title"><?php echo $useful_links_title; ?></h2>
			<?php endif; ?>
			<div class="large-6 medium-6 small-6 columns">
				<?php
				if (has_nav_menu('footer-menu')) {
					wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu','depth'=>1));
				}
				?>
			</div>
			<div class="large-6 medium-6 small-6 text-center columns">
				<div class="routing">
					<?php if( have_rows('footer_images','options') ): ?>
						<?php while( have_rows('footer_images','options') ): the_row();
						$icon = get_sub_field('image'); ?>
						<img src="<?php echo $icon['url']; ?>" alt="Equal Housing Opportunity Logo">
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( $routing_number = get_field( 'routing_number', 'options' ) ): ?>
					<?php echo $routing_number; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="footer-bottom">
	<div class="row">
		<div class="columns">
			<?php if ( $copyright = get_field( 'copyright', 'options' ) ): ?>
				<div class="footer-bottom__copyright">
					<?php echo $copyright; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
</footer>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>
</html>
