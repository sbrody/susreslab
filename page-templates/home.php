<?php
/**
 * Genesis Sample.
 *
 * A template for the home page
 *
 * Template Name: Home
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

// Add the background image
add_action( 'genesis_entry_header', 'srl_home_hero');
    function srl_home_hero() {
        get_template_part( 'components/content', 'hero' );
}

// add hero cta button
add_action( 'genesis_entry_header', 'srl_hero_button');
    function srl_hero_button() {
        echo '<div class="button small"><a href="/contact">Get in touch</a></div>';
    }

// add latest resources section
add_action( 'genesis_entry_footer', 'srl_latest_resources');
    function srl_latest_resources() {
        get_template_part( '/lib/gutenberg/blocks/resource', 'list' );
    }

// add testimonial slider
add_action( 'genesis_entry_footer', 'srl_testimonial_slider');
    function srl_testimonial_slider() {
        get_template_part( '/lib/gutenberg/blocks/testimonial', 'slider' );
    }


// add sell more section
/* add_action( 'genesis_entry_content', 'srl_sell_more' );
    function srl_sell_more() {
        get_template_part( '/lib/gutenberg/blocks/sell', 'more' );
        echo 'hello';
    } */

// add What we do section
/* add_action( 'genesis_entry_content', 'srl_what_we_do' );
    function srl_what_we_do() {
        get_template_part( '/lib/gutenberg/blocks/three', 'col' );
        echo 'hello';
    } */

// Runs the Genesis loop.
genesis();
