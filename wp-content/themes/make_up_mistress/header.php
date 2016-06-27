<!DOCTYPE html>
<html lang="en">
<head>
<title><?php wp_title() ?></title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<body>
<!-- Header Begin -->
<div class="header">
	<div class="container">
	
			<div class="row">

					<div class="col-md-5 col-sm-5">

						<ul class="list-group">
							
							<li class="list-group-item black-bg"><img src="<?php bloginfo('template_directory'); ?>/assets/images/brush-fav.png" alt="" > &nbsp; &nbsp;<a href="#">About</a></li>
							<li class="list-group-item black-bg"><a href="#">Press</a></li>
							<li class="list-group-item black-bg"><a href="#">Contact</a></li>
						</ul>


						
					</div>
					
					<div class="col-md-3 col-sm-3">
						
						<ul class="list-group topleftpanel2">
							<li class="list-group-item">
							<a href="#"><i class="fa fa-facebook black-fb" aria-hidden="true"></i></a>
							</li>
							<li class="list-group-item black">
							<a href="#"><i class="fa fa-instagram black" aria-hidden="true"></i></a>
							</li>
							<li class="list-group-item black">
							<a href="#"><i class="fa fa-pinterest black" aria-hidden="true"></i></a>
							</li>
							<li class="list-group-item black">
							<a href="#"><i class="fa fa-twitter black" aria-hidden="true"></i></a>
							</li>
							
						</ul>

					
					</div>


				

					<div class="col-sm-4 col-md-4 topleftpanel3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" id="src_input" placeholder="SEARCH THE SITE..." name="q">
            <div class="input-group-btn">
                <button class="btn btn-default src-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
						
				<!-- </div> -->

			</div>
	</div>
</div>
<!-- Header End -->

<!-- Navigation Panel Begin -->

<div class="container" id="wrapper">

<div class="row" id="navigation">

				<nav class="navbar navbar-inverse">
  					<div class="container-fluid">
    					<div class="navbar-header">
      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span> 
      						</button>
      			
    					</div>
    					<div class="collapse navbar-collapse" id="myNavbar" >
      					<ul class="nav navbar-nav main-menu" >
        						<li><a href="#">BEAUTY</a></li>
        						<li><a href="#">REVIEWS</a></li>
        						<li><a href="#">GIRL TALK</a></li> 
        						<li><a href="#">FASHION</a></li> 
        						<li><a href="#">LIFESTYLE</a></li>
        						<li><a href="#">FEATURES</a></li>  
      					</ul>
      					                                                                     
    					</div>
  					</div>
				</nav>
	</div>

</div>
<!-- Navigation Panel End -->
