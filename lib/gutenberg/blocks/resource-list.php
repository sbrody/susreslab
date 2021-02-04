<?php
//vars
$header = get_field('header', 'option');
$resource1 = get_field('resource_1', 'option');
$resource2 = get_field('resource_2', 'option');
$resource3 = get_field('resource_3', 'option');

if($header): ?>
    <div class="container resource-list three-col columns-container full-width grey-bg white-cards">
        <h2><?php echo $header; ?></h2>
        <div class="columns inner-container">
        
            <?php if( $resource1 ): 
                // override $post
                global $post;   
                $post = $resource1;
                setup_postdata( $post ); 
                $tags = get_the_tags();
                $is_photo = 0;
                if ((!empty ($tags))):
                    foreach ($tags as $tag): 
                        if ($tag->name === 'Photo') :
                        $is_photo++;
                        endif;
                    endforeach;
                endif;
                ?>
                
                <div class="column three white-bg 
                    <?php if ($is_photo > 0): echo 'photo'; endif; ?>">
                    <div class="col-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-listing'); ?></a></div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="col-text"><?php the_excerpt(); ?></div>
                    <div class="col-foot"><a href="<?php the_permalink(); ?>">Read</a></div>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

            <?php if( $resource2 ): 
                // override $post
                global $post;     
                $post = $resource2;
                setup_postdata( $post ); 
                $tags = get_the_tags();
                $is_photo = 0;
                if ((!empty ($tags))):
                    foreach ($tags as $tag): 
                        if ($tag->name === 'Photo') :
                        $is_photo++;
                        endif;
                    endforeach;
                endif;
                ?>
                
                <div class="column three white-bg 
                    <?php if ($is_photo > 0): echo 'photo'; endif; ?>">
                    <div class="col-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-listing'); ?></a></div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="col-text"><?php the_excerpt(); ?></div>
                    <div class="col-foot"><a href="<?php the_permalink(); ?>">Read</a></div>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
            <?php if( $resource3 ): 
                // override $post
                global $post;    
                $post = $resource3;
                setup_postdata( $post ); 
                $tags = get_the_tags();
                $is_photo = 0;
                if ((!empty ($tags))):
                    foreach ($tags as $tag): 
                        if ($tag->name === 'Photo') :
                        $is_photo++;
                        endif;
                    endforeach;
                endif;
                ?>
                
                <div class="column three white-bg 
                    <?php if ($is_photo > 0): echo 'photo'; endif; ?>">
                    <div class="col-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-listing'); ?></a></div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="col-text"><?php the_excerpt(); ?></div>
                    <div class="col-foot"><a href="<?php the_permalink(); ?>">Read</a></div>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>


