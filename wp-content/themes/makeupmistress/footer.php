	</div>
</div>
<div id="footer" class="container-fluid">



		<div class="es-carousel-wrapper">
			<?php
				// Supply a user id and an access token
				$userid = "200673301";
				$accessToken = "200673301.ab103e5.7d66a886851646e69edaf7f46be114e8";

				// Gets our data
				function fetchData($url){
				     $ch = curl_init();
				     curl_setopt($ch, CURLOPT_URL, $url);
				     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
				     $result = curl_exec($ch);
				     curl_close($ch); 
				     return $result;
				}
				// Pulls and parses data.
				$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
				$result = json_decode($result);
			?>
			<ul class="bxslider">

			<?php foreach ($result->data as $post): ?>				
  				<li><img src="<?= $post->images->thumbnail->url ?>"></li>
			<?php endforeach ?>
			</ul>			
		</div><!-- rg-gallery -->
    
		
<div class="footer-text">@2016 - THEMAKEUPMISTRESS - SITE DESIGN BY TIER5</div>
</div>



<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/ResponsiveImageGallery/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/ResponsiveImageGallery/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/ResponsiveImageGallery/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/ResponsiveImageGallery/js/gallery.js"></script>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css" rel="stylesheet" />

<script>

$('.bxslider').bxSlider({
  auto: true,
  speed: 1500,
  moveSlides: 1,
  minSlides: 2,
  maxSlides: 20,
  slideWidth: 150,
  slideMargin: 12
});

</script>

<style>

.bx-wrapper .bx-viewport { left:0; border-left:0; border-right:0; }

</style>


<?php wp_footer(); ?>
</body>

</html>
