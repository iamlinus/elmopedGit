<?php
/**
 * Template Name: Esho Startpage
 * Description: A Page Template that contains slider, main content area and banners
 *
 */
get_header(); ?>

	<div class="content start">
		<div class="row slider">
			<div class="twelvecol">
				<div id="slides">
				
<!-- OBS! För att funktionaliteten ska fungera måste media.php från temamappen användas -->
					<?php echo do_shortcode('[gallery link="none" columns="99" size="full"  icontag="div" captiontag="p"]'); ?>

					
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>