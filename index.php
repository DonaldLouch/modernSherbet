			<?php get_header(); ?>
			
			<div id="postsWrap">
	
				<div id="posts">
					<?php
						if (have_posts()) :
							while (have_posts()) :
								the_post();
					?>
					
					<article>
						<section class="thumbPosts" >
							<?php the_post_thumbnail(); ?>
						</section>
						
						<h2 id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title(); ?></a></h2>
						<section class="metadata"> 
							By: <?php the_author_link(); ?>  | Posted on: <?php the_date(); ?> | Filed Under: <?php the_category(); ?>
						</section>
							
						<section class="postExcerpt">
							<?php the_excerpt(); ?>
						</section>
						
						<a class="readMore" href="<?php the_permalink() ?>" class="readMore" title="Permanent Link to <?php the_title_attribute(); ?>">Read The Full Post</a>
				
						<section class="tags">
							<?php the_tags(); ?>
						</section>
					</article>
					
					<?php
					   endwhile;
					   the_posts_pagination( array(
									'prev_text' => '<span class="pageNav">' . __( 'Previous Page', 'modernsherbet' ) . '</span>',
									'next_text' => '<span class="pageNav">' . __( 'Next Page' , 'modernsherbet' ) . '</span>',
								) );
					endif;
					?>
				</div>  <!-- Ends of posts -->
				
				<?php get_sidebar();?>
				
			</div> <!-- End of postsWrap -->
			
			<?php
				get_footer(); 
			?>