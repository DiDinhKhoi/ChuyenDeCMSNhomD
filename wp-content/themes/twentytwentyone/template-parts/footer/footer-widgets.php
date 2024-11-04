<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

	<?php
endif;

//Thêm footer #2
if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

    <aside class="widget-area footer-2">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </aside>

<?php
endif;