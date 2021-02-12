<?php

/**
 * This file adds the Single Post Template to any Genesis child theme.
 *
 *
 */

//* Add custom body class to the head
add_filter('body_class', 'single_posts_body_class');
function single_posts_body_class($classes)
{
    $classes[] = 'custom-single';
    return $classes;
}

// add contact form
add_action('genesis_after_content', 'srl_contact_form');
function srl_contact_form()
{
    if (!has_tag('form')) :
        if (is_page(293)) :
            get_template_part('/lib/gutenberg/blocks/drip', 'form2');
        else :
            get_template_part('/lib/gutenberg/blocks/drip', 'form');
        endif;
    endif;
}

// add resource list
add_action('genesis_after_content', 'srl_after_content');
function srl_after_content()
{
    get_template_part('/lib/gutenberg/blocks/resource', 'list');
}

// remove post info
remove_action('genesis_entry_header', 'genesis_post_info', 12);

// Bring meta info to top
remove_action('genesis_entry_footer', 'genesis_post_meta');
add_action('genesis_entry_header', 'genesis_post_meta');
add_filter('genesis_post_meta', 'srl_post_meta');
function srl_post_meta($post_meta)
{
    $post_meta = '[post_categories before=""]';
    return $post_meta;
}

// Wrap title and meta info in div
// Add custom opening div for post title and featured image
add_action('genesis_entry_header', 'srl_do_post_title_before', 7);
function srl_do_post_title_before()
{
    if (!is_singular('post')) return;
    elseif (has_tag('Photo'))
        the_post_thumbnail('featured-photo');
    else
        the_post_thumbnail('featured-icon');

    $caption = get_the_post_thumbnail_caption();
    if ($caption) :
        echo '<div class="pic-caption">' . $caption . '</div>';
    endif;
    echo '<div class="srl-post-title">';
}

// Add custom closing div for post title
add_action('genesis_entry_header', 'srl_do_post_title_after');
function srl_do_post_title_after()
{
    echo '</div>';
}

// Add page intro
add_action('genesis_entry_content', 'srl_page_intro', 9);
function srl_page_intro()
{
    $intro = get_field('intro');
    echo '<h4>' . $intro . '</h4>';
}

//* Run the Genesis loop
genesis();
