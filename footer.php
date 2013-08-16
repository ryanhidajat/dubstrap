<?php
/**
 * Footer
 */
?>
	 
		<!-- End Template Content -->
		<!-- Footer -->	
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">	
					<?php if ( ! dynamic_sidebar( 'footer-sidebar-left' ) ) : ?>
					<div class="span3 widget-about">
						<h4>ABOUT US</h4>
						<div id="logo3" class="pull-left">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_option('dt_sitelogo'); ?>" alt="logo"/></a>
						</div>
						<p>
						<?php echo get_option('dt_footdesc'); ?>
						</p>
					</div>
					<?php endif; // end sidebar widget area ?>
					
					<?php if ( ! dynamic_sidebar( 'footer-sidebar-center1' ) ) : ?>
					<div class="span3 widget-tweet">
						<h4>RECENT TWEETS!</h4>
						<div class="timeline"></div>
					</div>
					<?php endif; // end sidebar widget area ?>
								
					<?php if ( ! dynamic_sidebar( 'footer-sidebar-center2' ) ) : ?>
					<div class="span3 widget-contact">
						<h4>CONTACT</h4>	
						<ul class="nav nav-list listy">
							<li><i class="icon-map-marker"></i><?php echo get_option('dt_addr'); ?></li>
							<li><i class="icon-envelope"></i> <a href="mailto:<?php echo get_option('dt_footmail'); ?>"><?php echo get_option('dt_footmail'); ?></a></li>
							<li><i class="icon-phone-sign"></i> <?php echo get_option('dt_footphone'); ?></li>
						</ul>
					</div>
					<?php endif; // end sidebar widget area ?>
					
					
					<?php if ( ! dynamic_sidebar( 'footer-sidebar-right' ) ) : ?>
					<div class="span3 widget-flickr">
						<h4>FLICKR</h4>				
						<div id="flickr_badge_wrapper" class="clearfix">
							<script src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=Random&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo get_option('dt_flickrstr') ?>"></script>
						</div>
					</div>
					<?php endif; // end sidebar widget area ?>
					
					
				</div>
			</div><!-- /.container -->
			
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="footer-copyright">&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?> | <?php echo get_option('dt_footcopy'); ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</footer>	
		
		<?php wp_footer(); ?>

	</body>
</html>