			<?php get_header(); ?>
			
			<div id="post">	<?php
					if (have_posts()) :
						while (have_posts()) :
							the_post();
				?>
				
				<article>
						<section class="content">
							<?php the_content(); ?>
						</section>
						
						<section class="metadata"> 
							By: <?php the_author_link(); ?> | Posted on: <?php the_date(); ?> | Filed Under: <?php the_category(); ?>
						</section>
				
						<section class="tags">
							<?php the_tags(); ?>
						</section>
					</article>
				
						<?php the_post_navigation( array(
								'prev_text' =>'</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous Post' , 'modernsherbet' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' ,
								'next_text' => '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next Post', 'modernsherbet' ) . '</span></span>',
							) ); ?>
				   
				
					<section class="comments">
						<?php comments_template(); ?>
					</section>
				
				<?php
				   endwhile;
				 endif;
				?>
			</div>  <!-- Ends of audio post -->
			
			<?php
				get_footer(); 
			?>