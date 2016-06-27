<!-- Right Panel Begin -->

				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 sidepanel">
					
				<?php dynamic_sidebar('meet'); ?>


				<h4>Follow Us</h4>
				<ul class="list-group social_links">
				<li class="list-group-item"><a href="<?php echo get_option('facebook'); ?>" class="btn btn-default btn-circle"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li  class="list-group-item"><a href="<?php echo get_option('instagram'); ?>" class="btn btn-default btn-circle"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li  class="list-group-item"><a href="<?php echo get_option('pin'); ?>" class="btn btn-default btn-circle"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li  class="list-group-item"><a href="<?php echo get_option('twitter'); ?>" class="btn btn-default btn-circle"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
				<div class="">

				</div>
				<h4>@The MakeUp Mistress</h4>
				<?php dynamic_sidebar('instagram'); ?>
				<h4>Search</h4>

		<div class="row">

			<div class="col-md-12 col-sm-12 ">
				<div class="sidpanel_src">
					<?php echo get_search_form(); ?>
				</div>				
			</div>

			


		</div>
				
				<div class="newsletter-box">
				<h5>Subscribe for Updates</h5>
				<p>Wanna stay on top of all things Babes and Champagne? Subscribe to be first to hear about new upadates, content, and giveways!</p>
			
				<?php echo do_shortcode('[wysija_form id="1"]'); ?>
				
				</div>
				
				<?php dynamic_sidebar('popular-post'); ?>
</div>
		<!-- Right Panel End -->
