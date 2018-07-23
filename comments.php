<?php
/*
 * Page: comments.php
 * Author: Donald Louch Productions
 * Text Domain: modernsherbet
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="commentsArea">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h4 class="comment-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'modernsherbet' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h4>

		<?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' )); ?>
			<nav id="commentNavTop" class="commentNavagation" role="navigation">
				<div class="navLinks">
					<?php previous_comments_link( esc_html__( 'Older Comments' , 'modernsherbet' ) ) ?>
					<?php next_comments_link( esc_html__( 'Newer Comments' , 'modernsherbet' ) ) ?>
				</div> <!-- .navLinks -->
			</nav>
		<?php endif; ?>

		<ol class="comments-list">
			<?php
				wp_list_comments( array(
					'walker' 					=> null,
					'max_depth' 			=> 5,
					'style'						=> 'ol',
					'callback'					=> null,
					'end-callback'			=> null,
					'type'						=> 'all',
					'reply_text'				=> 'Reply',
					'avatar_size'			=> 50,
					'reverse_top_level'	=> true,
					'reverse_children'	=> true,
					'format'					=> 'html5',
					'short_ping'				=> false,
					'echo'						=> true,
					'per_page'				=>""
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' )); ?>
			<nav id="commentNavBottom" class="commentNavagation" role="navigation">
				<div class="navLinks">
					<?php previous_comments_link( esc_html__( 'Older Comments' , 'modernsherbet' ) ) ?>
					<?php next_comments_link( esc_html__( 'Newer Comments' , 'modernsherbet' ) ) ?>
				</div> <!-- .navLinks -->
			</nav>

		<?php
			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'modernsherbet' ); ?></p>
	<?php endif; ?>

	<?php
		$args = array(
			'comment_notes_after'  => '',
		);
		comment_form($args);
	?>

</section><!-- #comments -->
