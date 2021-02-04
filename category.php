<?php

 // Forces full width content layout.
 add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

 // Removes the breadcrumbs.
 remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
 
 // Add page specific class
 add_filter( 'body_class', 'blog_add_body_class' );
 function blog_add_body_class( $classes ) {
     $classes[] = 'category-page';
     return $classes;
 }

// Add subheader
add_action( 'genesis_before_content', 'srl_page_header');
    function srl_page_header() {
        echo '<div class="entry-header">';
        get_template_part( 'lib/gutenberg/blocks/page', 'header' );
        echo '</div>';
}

// Add category menu
add_action( 'genesis_before_loop', 'srl_cat_menu');
    function srl_cat_menu() {
        genesis_widget_area ('category-menu', array (
            'before' => '<nav class="category-menu">',
            'after' => '</nav>',
        ));
    }

/*     // Add Macy wrapper
add_action( 'genesis_before_loop', 'srl_archive_wrapper');
    function srl_archive_wrapper() {
        echo '<div id="macy-container">';
} */

/* add_action( 'genesis_after_loop', 'srl_archive_wrapper_end');
    function srl_archive_wrapper_end() {
        echo '</div>';
}

// Move category title
remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );
add_action( 'genesis_before_content', 'genesis_do_taxonomy_title_description', 15);


// Add Macy container after first post
add_action('genesis_before_entry', 'srl_wrap_first_post');
    function srl_wrap_first_post() {
        global $wp_query;
        if ($wp_query->current_post == 2):
            echo '<div id="macy-container">';
        endif;
    }


// Remove meta content from loop
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

// Add main category
add_action( 'genesis_entry_header', 'srl_cat_info' );
    function srl_cat_info() {
        
        $category = get_the_category();
        if ( !empty($category) ): 
        echo '<div class="post-cat">' . esc_html($category[0]->name) . '</div>';
        endif;  
    }

add_action( 'genesis_entry_footer', 'srl_blog_overlay' );
    function srl_blog_overlay() {
        echo '<div class="overlay"><a href=' . get_permalink() . '>Read</a></div>';
    }
 */

/*
// $this_cat = single_cat_title();
function this_cat() {
    $categorypage = single_cat_title();
    //$cat = $categorypage[0]->term_id;
    return $categorypage;
}
echo this_cat();

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'srl_category_loop');
    function srl_category_loop() {
        // The Query
        // $categorypage = get_the_category();
        // $cat = $categorypage[0]->term_id;
        //echo $category;
        //$this_cat = single_cat_title();
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_count' => '-1',
            'category_name' => this_cat()
        );
        
        $the_query = new WP_Query( $args );
        
        // The Loop
        
        if ( $the_query->have_posts() ) {
            echo '<div id="macy-container">';
            while ( $the_query->have_posts() ) {
                echo this_cat();
                $the_query->the_post();
                $tags = get_the_tags();
                if ((!empty ($tags)) && ($tags[0]->name == 'Photo')):
                    echo '<div class="grid-item photo">';
                else: 
                echo '<div class="grid-item">';
                endif;
                echo the_post_thumbnail();
                echo '<a href="' . get_permalink() . '">' . '<h2>' . get_the_title() . '</h2>' . '</a>';
                    $category = get_the_category();
                    if ( !empty($category) ): 
                    echo '<div class="post-cat">' . esc_html($category[0]->name) . '</div>';
                    endif; ?>
                <div class="overlay"><a href="<?php echo get_permalink(); ?>">Read</a></div>
            <?php echo '</div>';
            }
            echo '</div>';
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        //wp_reset_postdata();
   //}

// Add loop to page
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'srl_blog_loop');
    function srl_blog_loop() {
        get_template_part( 'components/blog', 'loop');
        echo 'hello';
    }


 genesis(); 



