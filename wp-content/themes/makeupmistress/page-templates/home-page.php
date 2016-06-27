<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


		
<!-- Left Panel Start -->

	<div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 heading"><br/>

		<span class="cursive">lifestyle </span>
		<?php
		$type = 'lifestyle';
		$args=array(	
		  'post_type' => $type,
		  'post_status' => 'publish',
		  'tax_query' => array(
			array(
			    'taxonomy' => 'lifestyle_categories',
			    'terms' => '9'
			)
		    ),
		  'posts_per_page' => 1,
		  'order'   => 'DESC',				
		);

		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		  while ($my_query->have_posts()) : $my_query->the_post();
		 $img = wp_get_attachment_url( get_post_thumbnail_id($my_query->ID,'home_life_main') ); ?>
		<h1><?php the_title(); ?></h1>
		<p class="date"><?php echo get_the_date( 'l, F j, Y', $my_query->ID ); ?></p>
		<img src="<?php echo $img; ?>" alt="" class="img-responsive">
		<?php the_excerpt(); ?>
		<span  class="readmore"> <a href="<?php the_permalink(); ?>"> Read More </a></span>
		    
		    <?php
		  endwhile;
		}
		wp_reset_query();  // Restore global post data stomped by the_post().
		?>


		

		<div class="row">
		<?php
		$type = 'lifestyle';
		$args=array(
		  'offset' 			=> 1,	
		  'post_type' 			=> $type,
		  'tax_query' => array(
			array(
			    'taxonomy' => 'lifestyle_categories',
			    'terms' => '9'
			)
		    ),
		  'post_status' 		=> 'publish',
		  'posts_per_page' 		=> 6,
		  'order'   			=> 'DESC',				
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
					<em><?php echo get_the_date( 'jS F Y', $my_query->ID ); ?></em>
			
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



<!-- Footer Part Begin -->

<?php get_footer() ?>

<!-- Footer Part End -->
