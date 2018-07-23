<?php get_header(); ?>

<div id="authourBio" class="narrowcolumn">

<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
	
    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <dl>
        <dt>Website</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt>Profile</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>
</div>

    <h2 class="authorH2">Posts by <?php echo $curauth->nickname; ?>:</h2>

<!-- The Loop -->

	<div id="postsWrap" class="authorWrap">
	
				<div id="authorPosts">
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
				
	</div>

<?php get_footer(); ?>