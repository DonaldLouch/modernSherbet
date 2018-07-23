			<?php get_header(); ?>
		
			<div class="wrap">
				<article id="page-<?php the_ID(); ?>" class="woocomerce">	
					<?php woocommerce_content(); ?>
				</article> <!-- End of .woocomerce -->
			</div> <!-- End of .wrap -->
				
			<?php get_footer(); ?>