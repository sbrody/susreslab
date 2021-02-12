<?php

/**
 * Genesis Sample.
 *
 * A template for featured pages
 *
 * Template Name: Featured
 * 
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */


// Forces full width content layout.
add_filter('genesis_site_layout', '__genesis_return_full_width_content');

// Removes the breadcrumbs.
remove_action('genesis_before_loop', 'genesis_do_breadcrumbs');

// Add page intro
add_action('genesis_entry_header', 'srl_page_intro');
function srl_page_intro()
{
    $intro = get_field('intro');
    echo '<h4>' . $intro . '</h4>';
}

// add contact form
add_action('genesis_after_content', 'srl_contact_form');
function srl_contact_form()
{
    if (is_page(393)) :
        return;
    elseif (is_page(293)) :
        get_template_part('/lib/gutenberg/blocks/drip', 'form2');
    else :
        get_template_part('/lib/gutenberg/blocks/drip', 'form');
    endif;
}

// add resource list
add_action('genesis_after_content', 'srl_after_content');
function srl_after_content()
{
    get_template_part('/lib/gutenberg/blocks/resource', 'list');
}

wp_reset_query();


// Runs the Genesis loop.
genesis();
