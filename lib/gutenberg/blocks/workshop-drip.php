<?php
//vars
$pre_header = get_field('pre_header') ?: 'Workshop application.';
$image = get_field('image') ?: 1460;
$header = get_field('header') ?: 'How to use neuroscience to make your marketing more successful and sustainable';
$button_text = get_field('button_text') ?: 'Apply now';
$popup_form_id = get_field('popup_form_id') ?: 'popmake-1442';
$event_date = get_field('date') ?: '19 January  |  9am-12pm GMT';

?>
<div class="workshop-cta">
    <div class="flex-column-1">
        <?php if ($image) :
            echo wp_get_attachment_image($image, 'biog-pic');
        endif; ?>
    </div>
    <div class="flex-column-2">
        <?php if ($pre_header) : ?>
            <p><?php echo esc_html($pre_header); ?></p>
        <?php endif; ?>
        <?php if ($header) : ?>
            <h2><?php echo esc_html($header); ?></h2>
        <?php endif; ?>
        <hr />
        <div class="workshop-cta-footer">
            <?php if ($button_text) : ?>
                <button class="button <?php echo esc_html($popup_form_id); ?>"><?php echo esc_html($button_text); ?></button>
            <?php endif; ?>
            <?php if ($event_date) : ?>
                <span class="workshop-date"><?php echo esc_html($event_date); ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>