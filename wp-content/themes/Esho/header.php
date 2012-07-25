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
	<title><?php wp_title( '|', true, 'right'); ?> Esho el-scooter - sätt bara in kontakten i eluttaget och ladda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="/wp-content/themes/esho/css/1140.css" type="text/css" media="screen" />
	
	<!-- Your styles -->
	<link rel="stylesheet" href="/wp-content/themes/esho/css/styles.css" type="text/css" media="screen" />
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="/wp-content/themes/Esho/js/css3-mediaqueries.js"></script>
		
	<!-- jQuery för produktmenyn -->
	<script type="text/javascript" src="http://www.iamlinus.net/wp-content/themes/Esho/js/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="http://www.iamlinus.net/wp-content/themes/Esho/js/jquery.easing.1.3.js"></script>
	
	<!-- Slider -->
	<script src="http://www.iamlinus.net/wp-content/themes/Esho/js/slides.jquery.js"></script>

	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true
			});
		});
	</script>

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
			<div class="row">
				<div class="twelvecol">
<!-- Läser ut menyn. Mer info på http://codex.wordpress.org/Function_Reference/wp_nav_menu --> 
					<?php wp_nav_menu(); ?>
				</div>
			</div>
		</div>
