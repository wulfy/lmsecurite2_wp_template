<?php
/**
 * @package WordPress
 * @subpackage Lmsecurite_2
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//FR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>


<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=800">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE]>
	<style type="text/css">
	.storytitle span.storyComment .on {top:3px !important;}
	</style>
	<![endif]-->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--script type="text/javascript" src="http://www.lmsecurite.fr/js/easySlider1.5.js"></script-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <!--script type="text/javascript" src="http://www.lmsecurite.fr/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="http://www.lmsecurite.fr/js/animation.js"></script-->

	
	<?php wp_head(); ?>

	<script type="text/javascript">
		/**$(document).ready(function() {
			$(".slider").easySlider({
				auto: true,
				continuous: true ,
			 controlsShow: false,
			});
		});
		function scrolltotop() {
				window.scrollTo(0,0);
			}**/
        function toggleDisplayMenu(){
        	jQuery(function($){
	            if($('#site-navigation').hasClass( 'display' ))
	                $('#site-navigation').removeClass('display');
	            else
	                $('#site-navigation').addClass('display');
	        });
        }

	</script>
	
</head>

<body>
<div id="rap">

<div id="topHeader">
<div id="topContainer">
<!-- IMAGE EN TETE -->
	
<!-- -->
	<div class="listMenuitem" id="listMenuitem">
					<a class="menuItem" onclick="javascript:scrolltotop();" href="javascript:scrolltotop()"><i class="fa fa-arrow-up"></i>&nbsp; Top</a> 
					<a class="menuItem" href="http://www.lmsecurite.fr/ludo/wordpress/"><i class="fa fa-home fa-fw"></i>&nbsp; Accueil</a> 
					<a class="menuItem" href="contact.htm"><i class="fa fa-envelope"></i>&nbsp; Contacts/Devis</a> 
				</div>
	<div id="searchBox">
		<?php get_search_form(); ?>
	</div>
</div>
</div>

<!-- <h1 id="header"><a href="<?php bloginfo('url'); ?>"><?php //bloginfo('name'); ?></a><span class="description"><?php //bloginfo('description'); ?></span></h1> -->
<div id="content">
<div id="contentContainer">
<!-- end header -->