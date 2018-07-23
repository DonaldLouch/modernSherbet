<?php /* Template Name: CustomPageT1 */ ?>
 
<?php get_header(); ?>
 
			<div id="page">
				        <?php
				        // Start the loop.
				        while ( have_posts() ) : the_post();
				 
				            // Include the page content template.
				            get_template_part( 'template-parts/content', 'page' );
				 
				            // End of the loop.
				        endwhile;
				        ?>
 
			</div><!-- .content-area -->
 
<?php get_footer(); ?>