<?php
/**
 * Template Name: Esho Products Listing
 * Description: A Page Template that contains product menu, slider and banners
 *
 */
 
 get_header(); ?>

<div class="content productlist">
		<div class="row products">
			<div class="twelvecol">
				 <div class="product_nav_container">
			        <div id="product_nav_container_wide">
			            <div class="product_container" id="product_<?php echo get_post_meta($post->ID, 'ProductCategoryId1', true) ?>">
			       			<a href="<?php echo get_post_meta($post->ID, 'ProductLink1-1', true) ?>"><?php
$thumbnail_id = get_post_meta($post->ID, 'ProductImage1-1', true);
echo wp_get_attachment_image($thumbnail_id, 'thumbnail');
?></a>
							<a href="<?php echo get_post_meta($post->ID, 'ProductLink1-2', true) ?>"><?php
$thumbnail_id = get_post_meta($post->ID, 'ProductImage1-2', true);
echo wp_get_attachment_image($thumbnail_id, 'thumbnail');
?></a>
							<a href="<?php echo get_post_meta($post->ID, 'ProductLink1-3', true) ?>"><?php
$thumbnail_id = get_post_meta($post->ID, 'ProductImage1-3', true);
echo wp_get_attachment_image($thumbnail_id, 'thumbnail');
?></a>
							<a href="<?php echo get_post_meta($post->ID, 'ProductLink1-4', true) ?>"><?php
$thumbnail_id = get_post_meta($post->ID, 'ProductImage1-4', true);
echo wp_get_attachment_image($thumbnail_id, 'thumbnail');
?></a>
							<a href="<?php echo get_post_meta($post->ID, 'ProductLink1-5', true) ?>"><?php
$thumbnail_id = get_post_meta($post->ID, 'ProductImage1-5', true);
echo wp_get_attachment_image($thumbnail_id, 'thumbnail');
?></a> -->
			            </div>
			            <div class="product_container" id="product_<?php echo get_post_meta($post->ID, 'ProductCategoryId2', true) ?>">
<a href="<?php echo get_post_meta($post->ID, 'ProductLink2-1', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage2-1', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>
<a href="<?php echo get_post_meta($post->ID, 'ProductLink2-2', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage2-2', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>
<a href="<?php echo get_post_meta($post->ID, 'ProductLink2-3', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage2-3', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>
<a href="<?php echo get_post_meta($post->ID, 'ProductLink2-4', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage2-4', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>
<a href="<?php echo get_post_meta($post->ID, 'ProductLink2-5', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage2-5', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>			                   
			            </div>
			            <div class="product_container" id="product_<?php echo get_post_meta($post->ID, 'ProductCategoryId3', true) ?>">
			            
<a href="<?php echo get_post_meta($post->ID, 'ProductLink3-1', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage3-1', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink3-2', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage3-2', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink3-3', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage3-3', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink3-4', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage3-4', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink3-5', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage3-5', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
			                   
			            </div>
			            <div class="product_container" id="product_<?php echo get_post_meta($post->ID, 'ProductCategoryId4', true) ?>">
			            
<a href="<?php echo get_post_meta($post->ID, 'ProductLink4-1', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage4-1', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink4-2', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage4-2', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink4-3', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage4-3', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink4-4', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage4-4', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink4-5', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage4-5', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
			                   
			            </div>
			            <div class="product_container" id="product_<?php echo get_post_meta($post->ID, 'ProductCategoryId5', true) ?>">
			            
<a href="<?php echo get_post_meta($post->ID, 'ProductLink5-1', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage5-1', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink5-2', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage5-2', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink5-3', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage5-3', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink5-4', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage5-4', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink5-5', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage5-5', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
			                   
			            </div>
			            <div class="product_container" id="product_<?php echo get_post_meta($post->ID, 'ProductCategoryId6', true) ?>">
			            
<a href="<?php echo get_post_meta($post->ID, 'ProductLink6-1', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage6-1', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink6-2', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage6-2', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink6-3', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage6-3', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink6-4', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage6-4', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink6-5', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage6-5', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
			                   
			            </div>
			            <div class="product_container" id="product_<?php echo get_post_meta($post->ID, 'ProductCategoryId7', true) ?>">
			            
<a href="<?php echo get_post_meta($post->ID, 'ProductLink7-1', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage7-1', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink7-2', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage7-2', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink7-3', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage7-3', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink7-4', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage7-4', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
<a href="<?php echo get_post_meta($post->ID, 'ProductLink7-5', true) ?>"><?php $thumbnail_id = get_post_meta($post->ID, 'ProductImage4-5', true); echo wp_get_attachment_image($thumbnail_id, 'thumbnail'); ?></a>	
			                   
			            </div>

			           <div style="clear:both"></div>
			        </div>
			    </div>
			    <div class="navwrapper">
			    	<div class="nav">
			    	
<a href="#" class="product_nav" id="nav_<?php echo get_post_meta($post->ID, 'ProductCategoryId1', true) ?>"><?php echo get_post_meta($post->ID, 'ProductCategoryName1', true) ?></a>
<a href="#" class="product_nav" id="nav_<?php echo get_post_meta($post->ID, 'ProductCategoryId2', true) ?>"><?php echo get_post_meta($post->ID, 'ProductCategoryName2', true) ?></a>
<a href="#" class="product_nav" id="nav_<?php echo get_post_meta($post->ID, 'ProductCategoryId3', true) ?>"><?php echo get_post_meta($post->ID, 'ProductCategoryName3', true) ?></a>
<a href="#" class="product_nav" id="nav_<?php echo get_post_meta($post->ID, 'ProductCategoryId4', true) ?>"><?php echo get_post_meta($post->ID, 'ProductCategoryName4', true) ?></a>
<a href="#" class="product_nav" id="nav_<?php echo get_post_meta($post->ID, 'ProductCategoryId5', true) ?>"><?php echo get_post_meta($post->ID, 'ProductCategoryName5', true) ?></a>
<a href="#" class="product_nav" id="nav_<?php echo get_post_meta($post->ID, 'ProductCategoryId6', true) ?>"><?php echo get_post_meta($post->ID, 'ProductCategoryName6', true) ?></a>
<a href="#" class="product_nav" id="nav_<?php echo get_post_meta($post->ID, 'ProductCategoryId7', true) ?>"><?php echo get_post_meta($post->ID, 'ProductCategoryName7', true) ?></a>
			        	
			    	</div>
				</div>
			</div>
		</div>
		<div class="row slider">
			<div class="twelvecol">
							<div style="min-height:450px;" id="slides">
					<!-- OBS! För att funktionaliteten ska fungera måste media.php från temamappen användas -->
					<?php echo do_shortcode('[gallery link="none" columns="99" size="full"  icontag="div" captiontag="p"]'); ?>
				</div>
			</div>
		</div>
	</div>
	
	
	
<?php get_footer(); ?>

