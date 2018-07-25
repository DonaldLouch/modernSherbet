<?php get_header(); ?>
	<div id="post">	<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
?> <!--Calls Header -->
<div class="postContent">
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

	<section id="by">
			<h4>Written by:  <?php the_author_posts_link();?></h4>
	</section> <!-- #by -->

		<?php the_post_navigation( array(
				'prev_text' =>'</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous Post' , 'modernsherbet' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' ,
				'next_text' => '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next Post', 'modernsherbet' ) . '</span></span>',
			) ); ?>

			<?php if ( comments_open() ) :
					comments_template();
			endif; ?>


		<?php
			 endwhile;
		 endif;
		?> <!-- Stops posts loop -->

	</div> <!-- .postcontent -->

<?php
	get_footer();
?> <!-- Calls the footer -->
