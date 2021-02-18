<?php
//vars
$pre_header = get_field('pre_header') ?: 'Workshop application.';
$image = get_field('image') ?: 1460;
$header = get_field('header') ?: 'How to use neuroscience to make your marketing more successful and sustainable';
$button_text = get_field('button_text') ?: 'Apply now';
$popup_form_id = get_field('popup_form_id') ?: 'popmake-1442';
$event_date = get_field('date') ?: '19 January  |  9am-12pm GMT';

// page vars

$workshop_date = get_field('meta_workshop_date', $post_id);
$date_now = date('Y-m-d H:i:s');
$shortcode_data = "
<div class='form popup-form'>
<h3>Missed an event?</h3>
<div class='form-intro'>This workshop has closed but don't worry, we regularly repeat our popular workshops. Register your interest here and we’ll make sure you’re the first to hear about our next sessions.</div> 
<form action='https://www.getdrip.com/forms/181227447/submissions' method='post' data-drip-embedded-form='181227447' id='drip-ef-181227447'>
<div data-drip-attribute='description'></div>
<div class='form-field'>
    <label class='visually-hidden' for='drip-email'>Email Address</label>
    <input type='email' id='drip-email' name='fields[email]' value='' placeholder='Email address'>
</div>
<div class='form-field'>
    <label class='visually-hidden' for='drip-name'>Name</label>
    <input type='text' id='drip-name' name='fields[name]' value='' placeholder='Name'>
</div>
<div>
    <input type='hidden' name='fields[workshop_name]' value='" . the_title() . "'>
</div>
<div style='display: none;' aria-hidden='true'>
  <label for='website'>Website</label>
  <input type='text' id='website' name='website' tabindex='-1' autocomplete='false' value=''>
</div>
  <input type='hidden' name='tags[]' id='tags_' value='workshop_interest' tabindex='-1'>
<div>
  <input class='button small' type='submit' value='Register your interest' data-drip-attribute='sign-up-button'>
</div>
</form>
<div class='form-disclaimer'>We’ll only email you with resources to support sustainable growth. Read more about our <a href='/privacy-policy/'>data privacy policy here</a>.</div>
</div>
";


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
            <?php
            // create custom popup if workshop date has passed  
            if ($date_now > $workshop_date) : ?>
                <button class="button popmake-post-<?php echo $post_id; ?>">Register your interest</button>
                <?php echo do_shortcode("[popup id='post-" . $post_id . "']" .
                    $shortcode_data .
                    "[/popup]"); ?>
                <?php else :
                if ($button_text) : ?>
                    <button class="button <?php echo esc_html($popup_form_id); ?>"><?php echo esc_html($button_text); ?></button>
            <?php endif;
            endif;
            ?>
            <?php if ($event_date) : ?>
                <span class="workshop-date"><?php echo esc_html($event_date); ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>