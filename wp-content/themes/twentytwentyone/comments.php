<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments"
	class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		?>
	<h2 class="comments-title">
			<?php esc_html_e( 'Comments', 'twentytwentyone' ); ?>
		</h2><!-- .comments-title -->

	<ol class="comment-list">
		<?php
			wp_list_comments(
				array(
					'callback' => 'custom_comment_format',
					'avatar_size' => 40,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
	</ol><!-- .comment-list -->

	<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
					esc_html__( 'Older comments', 'twentytwentyone' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__( 'Newer comments', 'twentytwentyone' ),
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		);
		?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments">
		<?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?>
	</p>
	<?php endif; ?>
	<?php endif; ?>

	<?php
comment_form(
	array(
		'title_reply'        => 'Make a Post', // Tiêu đề "Make a Post".
		'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
		'title_reply_after'  => '</h2>',
		'comment_notes_after' => '', // Bỏ phần ghi chú sau form.
		'comment_notes_before' => '', // Bỏ phần ghi chú trước form.
		'logged_in_as' => '', // Bỏ thông tin "Đăng nhập với tên..."
		'comment_field'      => '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="What are you thinking..." rows="4" required="required"></textarea></p>',
		'submit_button'      => '<button type="submit" class="btn-share">Share</button>',
		'submit_field'       => '<div class="form-submit">%1$s %2$s</div>',
	)
);
?>




</div><!-- #comments -->