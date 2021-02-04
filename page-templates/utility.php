<?php
/**
 * Genesis Sample.
 *
 * A template for utility pages
 *
 * Template Name: Utility
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

// Add page intro
add_action( 'genesis_entry_header', 'srl_page_intro');
    function srl_page_intro() {       
        $intro = get_field('intro');
        echo '<h4>' . $intro . '</h4>'; 
    }

// add featured image, if there is one
    add_action( 'genesis_entry_header', 'srl_do_featured_image', 7 );
    function srl_do_featured_image() {
        the_post_thumbnail('featured-icon');
    }

// Runs the Genesis loop.
genesis();
