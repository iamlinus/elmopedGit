<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<div class="footer">
		
		<div class="grass">
			<img src="/wp-content/themes/esho/bilder/grass.png">
		</div>
		
		<div class="row puffar">
			<div class="sixcol leftpuff">
				<?php dynamic_sidebar( 'footer_left' ); ?>
			</div>
			<div class="sixcol last">
				<?php dynamic_sidebar( 'footer_right' ); ?>
			</div>
		</div>
	
		<div class="row quicklinks">
			<div class="sixcol">
				<?php dynamic_sidebar( 'footer_copyright' ); ?>
			</div>
			<div class="sixcol last">
				<!-- Läser ut menyn. Mer info på http://codex.wordpress.org/Function_Reference/wp_nav_menu --> 
				<?php wp_nav_menu( array('menu' => 'Quicklinks' )); ?>
			</div>
		</div>
		
		<div class="row legal">
			<div class="twelvecol">
		<?php dynamic_sidebar( 'footer_below' ); ?>
			</div>
		</div>
	
	</div>

</div><!-- #container -->

<script>
    $(document).ready(function() {
        var displayed = "product_<?php echo get_post_meta($post->ID, 'ProductCategoryId1', true) ?>";
        var cindex = 0; // current index (displayed product)

        function loopMoveLeft(el, move) {
            if (el.length == 1) {
                setTimeout(function() {
                    el.animate({ left: move }, {
                        duration: 'slow',
                        easing: 'easeOutBounce'
                    });
                    loopMoveLeft(el.next(), move);
                }, 100);
            }
        }

        function loopMoveRight(el, move) {
            if (el.length == 1) {
                setTimeout(function() {
                    el.animate({ left: move }, {
                        duration: 'slow',
                        easing: 'easeOutBounce'
                    });
                    loopMoveRight(el.prev(), move);
                }, 100);
            }
        }

        function slideItem(obj_el) {
            var product = $(obj_el).attr("id").replace("nav_", "");
            var contid = 'product_' + product;

            // current displayed element
            var elFirst = $("#"+displayed+" a:first-child");
            var elLast = $("#"+displayed+" a:last-child");
            var total_el = $("#"+displayed).children().length;

            var index = $(obj_el).index();

            // new element to displayed
            var el_f = $("#"+contid+" a:first-child");
            var el_l = $("#"+contid+" a:last-child");
            var total_new = $("#"+contid).children().length;

            var movement = -960 * index;

            if (cindex > index) {
                loopMoveRight(elLast, movement); 
                setTimeout(function() {
                    loopMoveRight(el_l, movement) 
                }, (total_el + 1) * 100);
            } else if (cindex < index) {
                loopMoveLeft(elFirst, movement); 
                setTimeout(function() {
                    loopMoveLeft(el_f, movement)
                }, (total_el + 1) * 100);
            } 

            cindex = index;
            displayed = contid;

            return (total_el + 5 + total_new) * 100;
        }

        var timeout;

        $(".product_nav").click(function() {
            $(".product_nav").unbind('click');
            timeout = slideItem(this);

            // prevent abusive click
            setTimeout(function() {
                $(".product_nav").bind('click', function() {
                    timeout = slideItem(this);
                });
            }, timeout);
        });
    });
</script>

<?php wp_footer(); ?>

</body>
</html>