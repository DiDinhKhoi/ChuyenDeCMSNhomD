<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */

$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search-input" class="screen-reader-text">Search topics or keywords</label>
    <input type="search" id="search-input" class="search-field" placeholder="Search topics or keywords" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit">
        Search
    </button>
</form>

