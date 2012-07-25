<?php
/**
 * Template Name: Esho Standardpage
 * Description: A Page Template that contains main content area and submenu
 *
 */

get_header(); ?>

<div class="content standard">
	
	<div class="row top-content">
		<div class="twelvecol">
			<!--Get submenu-->
			<!--
			<ul>
				<li><a href="#">Sub-menyval 1</a></li>
				<li><a href="#">Sub-menyval 2</a></li>
				<li><a href="#">Sub-menyval 3</a></li>
				<li><a href="#">Sub-menyval 4</a></li>
				<li><a href="#">Sub-menyval 5</a></li>
			</ul>-->

			<?php
			$has_subpages = false;
			// Check to see if the current page has any subpages
			$children = wp_list_pages('&child_of='.$post->ID.'&echo=0');
			if($children) {
			    $has_subpages = true;
			}
			// Reseting $children
			$children = "";
			
			// Fetching the right thing depending on if we're on a subpage or on a parent page (that has subpages)
			if(is_page() && $post->post_parent) {
			    // This is a subpage
			    //$children = wp_list_pages("title_li=&include=".$post->post_parent ."&echo=0");
			    $children .= wp_list_pages("title_li=&child_of=".$post->post_parent ."&echo=0&depth=2");
			} else if($has_subpages) {
			    // This is a parent page that have subpages
			    //$children = wp_list_pages("title_li=&include=".$post->ID ."&echo=0");
			    $children .= wp_list_pages("title_li=&child_of=".$post->ID ."&echo=0&depth=2");
			}
			?>
			<?php // Check to see if we have anything to output ?>
			<?php if ($children) { ?>
			<ul>
			    <?php echo $children; ?>
			</ul>
			<?php } ?>

		</div>
	</div>
	
	<div class="row main-content">
		<div class="sixcol img">
			<!--Get fetaured image-->
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
			?>
		</div>
		<div class="sixcol last">
			<div class="text">
				<!--Get content-->
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?> 
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>