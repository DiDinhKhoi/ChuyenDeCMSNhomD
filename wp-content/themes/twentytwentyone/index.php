<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="content-list-post">
	<div class="row">
		
		<!-- Left Sidebar: Recent Posts -->
		<div class="col-md-3 list-top-views">
			<div class="border-row-top-views"> 
				<div class="title-top-views">
					<h2 class="title-top-views-in">
						<a class="inner-title" href=""><?php echo get_option('widget_block')[5]['content']; ?></a>
					</h2>
				</div>
				<div class="title-post-top-views">
					<?php
					$args = array(
						'numberposts' => 8, 
						'post_status' => 'publish', 
						'orderby'     => 'date', 
						'order'       => 'DESC'
					);

					$recent_posts = get_posts($args);
					$count = 1;
					foreach ($recent_posts as $post) {
						setup_postdata($post);
						?>
							<div class="list-top-views">
								<span class="number-top-views"><?php echo $count; ?></span>
								<h3 class="list-title-top-views"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
						<?php
						$count++;
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div><!-- End Left Sidebar -->
		
		<!-- Main Content Area -->
		<div class="col-md-6">
			<?php
			if ( have_posts() ) {
				// Start loop to display posts
				while ( have_posts() ) {
					the_post();
					// Load the post template
					get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				}
				// Previous/next page navigation
				twenty_twenty_one_the_posts_navigation();
			} else {
				// If no posts found, show the "No posts found" template
				get_template_part( 'template-parts/content/content-none' );
			}
			?>
		</div><!-- End Main Content Area -->
		
		<!-- Comments Sidebar -->
		<aside class="comments-sidebar">
			<?php if ( is_active_sidebar( 'comments-sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'comments-sidebar' ); ?>
			<?php endif; ?>
		</aside><!-- .comments-sidebar -->
		
	</div><!-- End Row -->
</div><!-- End Content List Post -->

<?php get_footer(); ?>
