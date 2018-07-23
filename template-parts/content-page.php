<div class="wrap">
	<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'modernsherbet' ),
					'after'  => '</div>',
				)
			);
		?>
		</main>
	</div><!-- .entry-content -->
	</article>
</div>