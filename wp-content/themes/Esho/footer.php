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
				<div>
					<img src="/wp-content/themes/esho/bilder/scooter.jpg" alt="Esho el-scooter">
					<h3>Puff 1 rubrik</h3>
					<p>Lorizzle crazy dolizzle sit boom shackalack, own yo' adipiscing elit. </p>
				</div>
			</div>
			<div class="sixcol last">
				<div>
					<img src="/wp-content/themes/esho/bilder/battery.jpg" alt="Esho el-scooter">
					<h3>Puff 2 rubrik</h3>
					<p>Lorizzle crazy dolizzle sit boom shackalack, own yo' adipiscing elit. </p>
				</div>
			</div>
		</div>
	
		<div class="row quicklinks">
			<div class="sixcol">
				<p>Copyright. All rights reserved 2012 Esho Electric scooters.</p>
			</div>
			<div class="sixcol last">
				<ul>
				<li><a href="#">Menyval 1</a></li>
				<li><a href="#">Menyval 2</a></li>
				<li><a href="#">Menyval 3</a></li>
				<li><a href="#">Menyval 4</a></li>
				<li><a href="#">Menyval 5</a></li>
				</ul>
			</div>
		</div>
		
		<div class="row legal">
			<div class="twelvecol">
				<img src="/wp-content/themes/esho/bilder/logo.png" alt="Logo">
				<p>Copyright. All rights reserved 2012 Esho Electric scooters.</p>
			</div>
		</div>
	
	</div>

</div><!-- #container -->

<script>
    $(document).ready(function() {
        var displayed = "product_browser";
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