<?php
/**
 * Genesis Sample.
 *
 * A template for the blog listing page
 *
 * Template Name: Blog
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

 // Forces full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Removes the breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove the standard pagination, so we don't get two sets
remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );

// Add page specific class
add_filter( 'body_class', 'blog_add_body_class' );
function blog_add_body_class( $classes ) {
	$classes[] = 'blog-page';
	return $classes;
}

// Add subheader
add_action( 'genesis_entry_header', 'srl_page_header');
    function srl_page_header() {
        get_template_part( 'lib/gutenberg/blocks/page', 'header' );
        
}

// Add category menu
add_action( 'genesis_entry_content', 'srl_cat_menu');
    function srl_cat_menu() {
        genesis_widget_area ('category-menu', array (
            'before' => '<nav class="category-menu">',
            'after' => '</nav>',
        ));
    }

// Add loop to page
add_action('genesis_entry_content', 'srl_blog_loop');
    function srl_blog_loop() {
        get_template_part( 'components/blog', 'loop');
        
    }



// Runs the Genesis loop.
genesis();