		<?php get_header(); ?>

			<section class="backPost">
				<?php the_post_navigation();?>
			</section>

			<div class="wrapCenterAP">
					<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<hr>
					<h3 class='downloadResolutions'> Downloads:</h3>
						<div class='downloadResButton'>
						<?php
							$images = array();
							$image_sizes = get_intermediate_image_sizes();
							array_unshift( $image_sizes, 'full' );
							foreach( $image_sizes as $image_size ) {
								$image = wp_get_attachment_image_src( get_the_ID(), $image_size );
								$name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
								$images[] = '<a href="' . $image[0] . '">' . $name . '</a>';
							}
							echo implode( $images );
						?>
						</div>	<!-- .downloadResButton -->
					<hr>
			</div> <!-- Ends Attachment page -->

			<?php
				get_footer();
			?>
