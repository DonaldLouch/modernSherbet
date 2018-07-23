		<?php get_header(); ?>
		
		<section id="welcome">
			<?php 
				if (have_posts()) {
				  while (have_posts()) {
				    the_post();
				    the_content(); 
				  }
				} ?>
		</section> <!-- Ends the Home Page -->
		
		<?php 
			get_footer(); 
		?> 