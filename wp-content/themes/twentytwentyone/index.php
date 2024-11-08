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

<<<<<<< HEAD
<div class="container">
	<div class="main-layout">

		<!-- Archive Sidebar -->
		<aside class="archive-sidebar">
			<?php if ( is_active_sidebar( 'archive-sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'archive-sidebar' ); ?>
			<?php endif; ?>
		</aside><!-- .archive-sidebar -->

		<!-- Main Content -->
		<main class="content">
			<?php
=======
<div class="content-list-post ">
	<div class="row">
	<div class="col-md-3 list-top-views">
			
		</div>
		<div class="col-md-6">
<<<<<<< HEAD
		<?php
>>>>>>> 9-Categories-Hung
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				}

				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();

			} else {

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content-none' );

<<<<<<< HEAD
			}
			?>
		</main><!-- .content -->

		<!-- Comments Sidebar -->
		<aside class="comments-sidebar">
			<?php if ( is_active_sidebar( 'comments-sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'comments-sidebar' ); ?>
			<?php endif; ?>
		</aside><!-- .comments-sidebar -->

	</div><!-- .main-layout -->
</div><!-- .container -->

<?php get_footer(); ?>
=======
			}?>
		</div>
		<div class="col-md-3">

				
			
=======
		
			
		</div>
		<div class="col-md-3">
			<div class = "recents_comments">
				<div class="commentss">
				
				
				</div>
			</div>
>>>>>>> 11-Archive-Hung
		</div>
	</div>
</div>
<?php
get_footer();

>>>>>>> 9-Categories-Hung
