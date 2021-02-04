<?php
// vars
$header = get_field('header') ?: 'Testimonials';
$sub_header = get_field('sub_header') ?: "Here's what previous workshop delegates said:";
$testimonials = get_field('testimonials');
$illustration = get_field('illustration') ?: 1518;
$pullquote_photo = get_field('pullquote_photo');
$pullquote = get_field('pullquote');
$pullquote_author = get_field('pullquote_author');
$footer = get_field('footer');
?>
<div class="absolute-container testimonials-outer">
    <div class="container testimonials-container">
        <div class="testimonials-upper">
            <div class="flex-section">
                <?php if ($header) : echo '<h2>' . esc_html($header) . '</h2>';
                endif;
                if ($sub_header) : echo '<p>' . esc_html($sub_header) . '</p>';
                endif;
                if ($testimonials) : echo $testimonials;
                endif; ?>
            </div>
            <?php if ($illustration) : echo wp_get_attachment_image($illustration, 'listing-featured');
            endif;
            ?>
        </div>
        <div class="testimonials-pullquote-container">
            <?php if ($pullquote_photo) : echo wp_get_attachment_image($pullquote_photo, 'biog-pic');
            endif;
            if ($pullquote) : ?>
                <figure>
                    <blockquote><?php echo esc_html($pullquote); ?></blockquote>
                    <?php if ($pullquote_author) : echo '<figcaption>' . esc_html($pullquote_author) . '</figcaption>';
                    endif; ?>
                </figure>
            <?php endif; ?>
            <?php if ($footer) : ?>
                <div class="testimonials-footer"><?php echo $footer; ?></div>
            <?php endif; ?>
        </div>
    </div>

</div>