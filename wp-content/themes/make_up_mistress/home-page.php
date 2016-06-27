<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<!-- Content Part Begin -->
<div class="container">
	<div class="row">

		<!-- Left Panel Start -->

			<div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 heading"><br/>
				<span class="cursive">lifestyle </span>
				<h1>“NOT YOUR MAMA’S” MAKEUP</h1>
				<p class="date">MONDAY, APRIL 25, 2016</p>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/makeup.jpg" alt="" class="img-responsive">
				<p>It's that time of year again! The time where we start to see glimpses of extra oil blotting sheets and unruly Mufasa hair in our future. That's right, Spring is in full effect, and those blistering summer days are right around the corner.... so,  we wanted to share a quick and simple treat with you that we know will make the heat a little easier to bare (and won't effect those hot swimsuit bods you have been working so hard for !) We call them the "Not Your Mama's" ...</p>
				<span  class="readmore"> <a href=""> Read More </a></span>

				<div class="row">
				<?php
				$type = 'lifestyle';
				$args=array(
				  'offset' => 1,	
				  'post_type' => $type,
				  'post_status' => 'publish',
				  'posts_per_page' => 6,
				  'order'   => 'DESC',				
				);

				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post();
				 $img = wp_get_attachment_url( get_post_thumbnail_id($my_query->ID,'home_life') ); ?>
				    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
						<div class="hovereffect">
						<img class="img-responsive" src="<?php echo $img; ?>" alt="">

							<div class="overlay">
							<h2><a href="#"><?php the_title(); ?></a></h2>
							<em><?php get_the_date( $my_query->ID ); ?></em>
					
							</div>
						</div>
					</div>
				    <?php
				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
					
				<div class="clear"> </div>

				<div class="row row-centered">
					<div class="view-all"><a href="#">View all Posts</a></div>
				</div>
			</div>
		</div>
		<!-- Left Panel End -->

		<?php get_sidebar(); ?>
	</div>	
</div>
<!-- Content Part End -->



<!-- Footer Part Begin -->

<?php get_footer() ?>

<!-- Footer Part End -->
