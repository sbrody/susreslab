<?php

if (have_rows('testimonial', 'option')): ?>

    <div id="slider-container" class="container">
        <div class="owl-carousel owl-theme">
            <?php while (have_rows('testimonial', 'option')): the_row(); ?>
                <?php 
                // vars
                $image = get_sub_field('image');
                
                $thumb = $image['sizes']['sidebar-featured'];
                $text = get_sub_field('testimonial_text');
                $author = get_sub_field('author');
                $link = get_sub_field('testimonial_link');
                ?>
                <div class="slide">
                    <div class="slide-inner">
                        <?php if($image): ?>
                            <div class="slider-image"><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>"></div>
                        <?php endif; ?>
                        <div class="slide-content">
                            <?php if($text): ?>
                                <blockquote><?php echo $text; ?></blockquote>
                            <?php endif; ?>
                            <?php if($author): ?>
                                <cite><?php echo $author; ?></cite>
                            <?php endif; ?>
                            <?php if($link): ?>
                                <div class="slider-link"><a href="<?php echo $link; ?>">View case study</a></div>
                            <?php endif; ?>
                        </div>    
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>




