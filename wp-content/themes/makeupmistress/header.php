<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 	<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsive-style.css"/>
 	<!-- Web Font Begin -->
 	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">


 	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
 	<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

	<!-- Web Font Begin -->


	<!--Footer Slider Begin -->


	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ResponsiveImageGallery/css/reset.css" />
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ResponsiveImageGallery/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ResponsiveImageGallery/css/elastislide.css" />

	<!-- Footer Slider End -->

	<script>
	$( document ).ready(function() {
		$('#myCarousel').carousel({
		  interval: 3000,
		  cycle: true
		}); 
	});
	</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">
	<div class="container">
	
			<div class="row">

					<div class="col-md-5 col-sm-5 col-xs-6">

						
						<ul class="list-group">
							
							<li class="list-group-item black-bg"><img src="<?php bloginfo('template_directory'); ?>/assets/images/brush-fav.png" alt="" > &nbsp; &nbsp;<a href="#">About</a></li>
							<li class="list-group-item black-bg"><a href="#">Press</a></li>
							<li class="list-group-item black-bg"><a href="#">Contact</a></li>
						</ul>


						
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						
						<ul class="list-group topleftpanel2">
							<li class="list-group-item">
							<a href="<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook black-fb" aria-hidden="true"></i></a>
							</li>
							<li class="list-group-item black">
							<a href="<?php echo get_option('instagram'); ?>"><i class="fa fa-instagram black" aria-hidden="true"></i></a>
							</li>
							<li class="list-group-item black">
							<a href="<?php echo get_option('pin'); ?>"><i class="fa fa-pinterest black" aria-hidden="true"></i></a>
							</li>
							<li class="list-group-item black">
							<a href="<?php echo get_option('twitter'); ?>"><i class="fa fa-twitter black" aria-hidden="true"></i></a>
							</li>
							
						</ul>

					
					</div>


				

					<div class="col-sm-4 col-md-4 topleftpanel3">
						<?php echo get_search_form(); ?>
        
    					</div>
						
				<!-- </div> -->

			</div>
	</div>
</div>
<!-- Header End -->

<!-- Navigation Panel Begin -->

<div class="container" id="wrapper">

<div class="row" id="navigation">
	<div class="col-sm-12">

				<nav class="navbar navbar-inverse">
  					
    					<div class="navbar-header">
      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span> 
      						</button>
      			
    					</div>
    					<div class="collapse navbar-collapse" id="myNavbar" >
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?> 					                                                                     
    					</div>
  					
				</nav>
		</div>
	</div>

</div>
<!-- Navigation Panel End -->
<!-- Navigation and Banner Part Begin -->


<!-- Slider Panel Begin -->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php echo do_shortcode('[rev_slider banner]'); ?>		  
		</div>
	</div>
</div>

<!-- Slider Panel End -->

<div class="clear"></div>

<!-- Navigation and Banner Part End -->

<!-- Content Part Begin -->
<div class="container">
	<div class="row">


