<?php

/**
 * Genesis Sample.
 *
 * A template for the workshop archive page
 *
 * Template Name: Workshop Archive
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

// Add custom opening div for post title and featured image
add_action('genesis_entry_header', 'srl_workshop_title_before', 7);
function srl_workshop_title_before()
{
    the_post_thumbnail('biog-pic');
    echo '<div class="srl-post-title srl-workshop-header">';
}



// Add custom closing div for post title
add_action('genesis_entry_header', 'srl_workshop_title_after');
function srl_workshop_title_after()
{
    $workshop_intro = get_field('intro');
    if ($workshop_intro) :
        echo '<h2>' . esc_html($workshop_intro) . '</h2>';
    endif;
    echo '</div>';
}



// add resource list
add_action('genesis_after_content', 'srl_after_content');
function srl_after_content()
{
    get_template_part('/lib/gutenberg/blocks/resource', 'list');
}


// ****************** Set up query to show 'workshops' post type
function workshops_custom_query()
{
    global $post;
    // Get current date/time and workshop start date
    $date_now = date('Y-m-d H:i:s');


    $args = array(
        'post_type' => 'workshops',
        'post_status' => 'publish',
        'posts_per_page' => 16,
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'meta_workshop_date',
                'value' => $date_now,
                'compare' => '>=',
                'type' => 'DATETIME'
            )
        )
    );

    $message = get_field('message');
    global $workshop_loop;
    $workshop_loop = new WP_Query($args);

    if ($workshop_loop->have_posts()) :
        echo '<div class="container workshop-archive-container">';
        while ($workshop_loop->have_posts()) : $workshop_loop->the_post();
            // vars
            $workshop_start = get_field('meta_workshop_date');
            $date_time_object = DateTime::createFromFormat('Y-m-d H:i:s', $workshop_start);
            $new_date_string = $date_time_object->format('j F | g a');
            $workshop_end = get_field('meta_workshop_end');
            $workshop_tagline = get_field('meta_workshop_tagline');
            $workshop_collaborator = get_field('meta_workshop_collaborator');
            $workshop_collaborator_logo = get_field('meta_workshop_collaborator_logo');
?>
            <div class="workshop-cta">
                <div class="flex-column-1">
                    <?php if (has_post_thumbnail()) : the_post_thumbnail('workshop-listing');
                    endif; ?>
                </div>
                <div class="flex-column-2">
                    <?php if ($workshop_tagline) : ?>
                        <p><?php echo esc_html($workshop_tagline); ?></p>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h2>
                        <hr />
                        <div class="workshop-cta-footer">
                            <span class="button"><a href="<?php the_permalink(); ?>">Find out more</a></span>
                            <span class="workshop-date"><?php echo $new_date_string . ' - ' . esc_html($workshop_end) . ' GMT'; ?></span>
                        </div>
                        <?php if ($workshop_collaborator) : ?>
                            <div class="workshop-cta-footer">
                                <?php if ($workshop_collaborator_logo) : echo '<span class="logo">' . wp_get_attachment_image($workshop_collaborator_logo, 'sidebar-featured') . '</span>';
                                endif; ?>
                                <?php if ($workshop_collaborator) : echo '<span class="footer-text">' . esc_html($workshop_collaborator) . '</span>';
                                endif; ?>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
    <?php endwhile;
        echo '</div>';
    else :
        echo '<div class="feed-update container">' . $message . '</div>';
    endif;
    wp_reset_postdata();
}

// ***************** Set up query to show historic 'workshops' 
function old_workshops_custom_query()
{
    global $post;
    // Get current date/time and workshop start date
    $date_now = date('Y-m-d H:i:s');

    $args = array(
        'post_type' => 'workshops',
        'post_status' => 'publish',
        'posts_per_page' => 16,
        'orderby' => 'meta_value',
        'order' => 'DESC',
        'meta_query' => array(
            array(
                'key' => 'meta_workshop_date',
                'value' => $date_now,
                'compare' => '<=',
                'type' => 'DATETIME'
            )
        )
    );

    // pre loop section
    $old_workshops_header = get_field('old_workshops_header');
    $old_workshops_intro = get_field('old_workshops_intro'); ?>
    <div class="container workshop-archive-header">
        <?php if ($old_workshops_header) : echo '<h2>' . esc_html($old_workshops_header) . '</h2>';
        endif;
        if ($old_workshops_intro) : echo '<p>' . esc_html($old_workshops_intro) . '</p>';
        endif; ?>
    </div>

    <?php
    // loop
    global $workshop_loop_old;
    $workshop_loop_old = new WP_Query($args);
    if ($workshop_loop_old->have_posts()) :
        echo '<div class="container workshop-archive-container old-workshop-archive-container">';
        // vars

        while ($workshop_loop_old->have_posts()) : $workshop_loop_old->the_post();
            // vars
            $workshop_start = get_field('meta_workshop_date');
            // turn date string into formated string
            $date_time_object = DateTime::createFromFormat('Y-m-d H:i:s', $workshop_start);
            $new_date_string = $date_time_object->format('j F | g a');
            $workshop_end = get_field('meta_workshop_end');
            $workshop_tagline = get_field('meta_workshop_tagline');
            $workshop_collaborator = get_field('meta_workshop_collaborator');
            $workshop_collaborator_logo = get_field('meta_workshop_collaborator_logo');
    ?>
            <div class="workshop-cta">
                <div class="flex-column-1">
                    <?php if (has_post_thumbnail()) : the_post_thumbnail('workshop-listing');
                    endif; ?>
                </div>
                <div class="flex-column-2">
                    <?php if ($workshop_tagline) : ?>
                        <p><?php echo esc_html($workshop_tagline); ?></p>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h2>
                        <hr />
                        <div class="workshop-cta-footer">
                            <span class="button"><a href="<?php the_permalink(); ?>">Find out more</a></span>
                            <span class="workshop-date">Coming soon</span>
                        </div>
                        <?php if ($workshop_collaborator) : ?>
                            <div class="workshop-cta-footer">
                                <?php if ($workshop_collaborator_logo) : echo '<span class="logo">' . wp_get_attachment_image($workshop_collaborator_logo, 'sidebar-featured') . '</span>';
                                endif; ?>
                                <?php if ($workshop_collaborator) : echo '<span class="footer-text">' . esc_html($workshop_collaborator) . '</span>';
                                endif; ?>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
    <?php endwhile;
    endif;
    wp_reset_postdata();
}

// pullquote section between two feeds

function  workshops_between_feeds()
{
    // vars
    $testimonial_pic = get_field('testimonial_pic');
    $testimonial = get_field('testimonial');
    $testimonial_author = get_field('testimonial_author');
    ?>
    <div class="container testimonials-container">
        <div class="testimonials-pullquote-container">
            <?php if ($testimonial_pic) : echo wp_get_attachment_image($testimonial_pic, 'biog-pic');
            endif;
            if ($testimonial) : ?>
                <figure>
                    <blockquote><?php echo esc_html($testimonial); ?></blockquote>
                    <?php if ($testimonial_author) : echo '<figcaption>' . esc_html($testimonial_author) . '</figcaption>';
                    endif; ?>
                </figure>
            <?php endif; ?>
        </div>
    </div>

<?php }

add_action('genesis_entry_content', 'workshops_custom_query', 1);
add_action('genesis_entry_content', 'workshops_between_feeds', 2);
add_action('genesis_entry_content', 'old_workshops_custom_query', 3);
// remove_action('genesis_loop', 'genesis_do_loop');


// Runs the Genesis loop.
genesis();
