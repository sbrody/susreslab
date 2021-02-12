<?php

/**
 ** Template for single workshop page
 **/



// Forces full width content layout.
add_filter('genesis_site_layout', '__genesis_return_full_width_content');

// Removes the breadcrumbs.
remove_action('genesis_before_loop', 'genesis_do_breadcrumbs');

//* Remove the post meta function
remove_action('genesis_after_post_content', 'genesis_post_meta');

//* Remove the entry meta in the entry header (requires HTML5 theme support)
remove_action('genesis_entry_header', 'genesis_post_info', 12);

// Add custom opening div for post title and featured image
add_action('genesis_entry_header', 'srl_workshop_title_before', 7);
function srl_workshop_title_before()
{
    the_post_thumbnail('featured-photo');
    // $caption = get_the_post_thumbnail_caption();
    // if ($caption) :
    //     echo '<div class="pic-caption">' . $caption . '</div>';
    // endif;
    echo '<div class="srl-post-title srl-workshop-header">';
}



// Add custom closing div for post title
add_action('genesis_entry_header', 'srl_workshop_title_after');
function srl_workshop_title_after()
{
    echo '</div>';
}



// add resource list
add_action('genesis_after_content', 'srl_after_content');
function srl_after_content()
{
    get_template_part('/lib/gutenberg/blocks/resource', 'list');
}



// Runs the Genesis loop.
genesis();
