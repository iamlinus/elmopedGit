<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
	
		wp_title( '|', true, 'right' );
	
		// Add the blog name.
		bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	
		?>
	</title>
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="/wp-content/themes/esho/css/1140.css" type="text/css" media="screen" />
	
	<!-- Your styles -->
	<link rel="stylesheet" href="/wp-content/themes/esho/css/styles.css" type="text/css" media="screen" />
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="/wp-content/themes/esho/js/css3-mediaqueries.js"></script>	

</head>

<body>

	<div class="container">
	
		<div class="header">
			<div class="row">
				<div class="twocol">
					<a class="" href="/"><img alt="Esho" src="/wp-content/themes/esho/bilder/logo.png"></a>
				</div>
				<div class="tencol last"></div>
			</div>
			<div class="row menu">
				<div class="twelvecol">
					<ul>
						<li><a href="#">Menyval 1</a></li>
						<li><a href="#">Menyval 2</a></li>
						<li><a href="#">Menyval 3</a></li>
						<li><a href="#">Menyval 4</a></li>
						<li><a href="#">Menyval 5</a></li>
					</ul>
				</div>
			</div>
		</div>
