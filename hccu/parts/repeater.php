<div class="repeater clearfix text-center">
	<div class="repeater-block">
		<?php $image_url = wp_get_attachment_url( $image ); ?>
		<a href="<?php echo $link; ?>"><div class="hexagon"><img src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>"></div></a>
		<h2 class="repeater-header"><?php echo $title; ?></h2>
		<p><?php echo $content_b; ?></p>
		<a href="<?php echo $link; ?>" class="button"><?php echo $link_title; ?></a>
	</div>
</div>