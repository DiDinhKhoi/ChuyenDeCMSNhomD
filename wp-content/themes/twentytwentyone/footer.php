<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<section id="footer">
	<div class="container">
		<div class="row text-center text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Comment</h5>
				<ul class="list-unstyled quick-links">
					<?php
					$comments = get_comments(array(
						'status' => 'approve', // Lấy các bình luận đã được phê duyệt
						'number' => 5, // Lấy 5 bình luậm
					));

					foreach ($comments as $comment) :
						$comment_link = esc_url(get_comment_link($comment->comment_ID)); // Tạo liên kết đến bình luận
						$comment_parent = $comment->comment_parent; // Lấy ID của bình luận cha
						$post_id = $comment->comment_post_ID; // Lấy ID của bài viết mà bình luận thuộc về

						// Lấy thông tin về bài viết
						$post = get_post($post_id);

						if ($comment_parent == 0) {
							// Bình luận gốc
							$post_title = mb_substr($post->post_title, 0, 20, 'UTF-8'); // Rút gọn tiêu đề bài viết
							echo '<li><a style="text-decoration: underline !important;" href="' . $comment_link . '"><i class="fa fa-angle-double-right"></i>' . esc_html($comment->comment_content) . '</a>';
							echo ' <span style="color: white">On</span> <a style="text-decoration: underline !important;"  href="' . get_permalink($post_id) . '">' . esc_html($post_title) . '</a></li>';
						} else {
							// Bình luận con
							$parent_comment = get_comment($comment_parent); // Lấy thông tin của bình luận cha
							$parent_comment_link = esc_url(get_comment_link($parent_comment->comment_ID)); // Liên kết đến bình luận cha

							$post_title = mb_substr($post->post_title, 0, 20, 'UTF-8'); // Rút gọn tiêu đề bài viết
							echo '<li><a style="text-decoration: underline !important;"  href="' . $comment_link . '">' . esc_html($comment->comment_content) . '</a>';
							echo ' (Reply to <a style="text-decoration: underline !important;"  href="' . $parent_comment_link . '">' . esc_html($parent_comment->comment_content) . '</a>)';
							echo ' <span style="color: white">On</span> <a style="text-decoration: underline !important;"  href="' . get_permalink($post_id) . '">' . esc_html($post_title) . '</a></li>';
						}
					endforeach;
					?>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Categories</h5>
				<?php
				// Lấy danh sách danh mục
				$categories = get_categories();

				if ($categories) {
					echo ' <ul class="list-unstyled quick-links">';

					foreach ($categories as $category) {
						echo '<li><a href="' . get_category_link($category->term_id) . '"><i class="fa fa-angle-double-right"></i>' . $category->name . '</a></li>';
					}

					echo '</ul>';
				}
				?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">

				<h5>Last Posts</h5>
				<ul class="list-unstyled quick-links">
					<?php
					// Truy vấn cơ sở dữ liệu để lấy 5 bài viết mới nhất
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 5,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							echo '<li><a href="' . get_permalink() . '"><i class="fa fa-angle-double-right"></i>' . get_the_title() . '</a></li>';
						}
						wp_reset_postdata();
					}
					?>
				</ul>

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
			<hr>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
					Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis,
					MN]</p>
				<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
			</div>
			<hr>
		</div>
	</div>

</section>
</div><!-- #page -->

<?php wp_footer(); ?>


</body>

</html>