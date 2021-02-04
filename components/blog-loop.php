<?php 




// Custom loop
// // Fix for the WordPress 3.0 "paged" bug.
// $paged = 1;
// if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
// if ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
// $paged = intval( $paged );

// The Query
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => '15',
    'paged' => get_query_var( 'paged' ),
);
global $wp_query;
$wp_query = new WP_Query( $args );

// The Loop
if ( $wp_query->have_posts() ) {
    echo '<div id="macy-container" class="blog-grid"><div class="my-sizer-element"></div>';
    while ( $wp_query->have_posts() ) {
        $wp_query->the_post();
        if( ($wp_query->current_post == 1) && (!is_paged()) ): ?>
            <div class="grid-item w40p h2"><div class="loop-item loop-form"><?php get_template_part('/components/loop', 'form'); ?></div></div>
        <?php    
        endif;
        
        $tags = get_the_tags();
        // check if there is a photo tag in array
        $is_photo = 0;
        if ((!empty ($tags))):
            foreach ($tags as $tag): 
                if ($tag->name === 'Photo') :
                $is_photo++;
                endif;
            endforeach;
        endif;
        $categories = get_the_category();
        if ($is_photo > 0): ?>
            <div class="grid-item photo <?php 
            if ( is_paged()): echo "w33p";
            elseif (( $wp_query->current_post == 0) || ( $wp_query->current_post == 1)): echo 'w60p';  
            elseif ( $wp_query->current_post == 2): echo 'w40p h3';
            else: echo 'w33p' ;
            endif; 
            foreach ( $categories as $category ) {
                echo ' ' . esc_html($category->slug);
            } ?>">
        <?php else: ?>
        <div class="grid-item 
        <?php
            if ( is_paged()): echo "w33p"; 
            elseif(( $wp_query->current_post == 0) || ( $wp_query->current_post == 1)): echo 'w60p';  
            elseif ( $wp_query->current_post == 2): echo 'w40p h3';
            else: echo 'w33p' ;
            endif; 
            foreach ( $categories as $category ) {
                echo ' ' . esc_html($category->slug);
            } ?>">
        <?php endif; ?>
        <div class="grid-inner">
            <div class="aspect"><?php echo the_post_thumbnail('blog-listing');?></div>
            <?php echo '<a href="' . get_permalink() . '">' . '<h2>' . get_the_title() . '</h2>' . '</a>';
            
            if ( !empty($categories) ): 
            echo '<div class="post-cat">' . esc_html($categories[0]->name) . '</div>';
            endif; ?>
        <div class="overlay"><a href="<?php echo get_permalink(); ?>">Read</a></div>
        
    <?php echo '</div></div>';
    };
    ?>
    
    <?php
    echo '</div>';
    genesis_posts_nav(); ?>
    <!-- <a class="pagination__next" href="/blog/page/2/">Next</a> -->
    <?php
} else {
    // no posts found
}
/* Restore original Post Data */
//wp_reset_postdata();
wp_reset_query();

//echo do_shortcode('[ajax_load_more css_classes="blog-grid" post_type="post" offset="15"]');