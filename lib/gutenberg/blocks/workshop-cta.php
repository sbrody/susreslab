<?php
// vars
$header = get_field('header') ?: "Yes, I'd love to join you";
$content = get_field('content') ?: "To enable us to give you personalised support, places are limited to 12 people. 
To apply for your place, please book a provisional place here and we will get back to you as soon a possible.
Don’t miss out, our last workshop had a long waiting list.";
$button_text = get_field('button_text') ?: "Yes, I'd love to join you";
$popup_id = get_field('popup_id') ?: "popmake-1442";
$new_popup_id = $post_id + 1000;
$workshop_finished_header = get_field('workshop_finished_header') ?: "Missed an event?";
$workshop_finished_content = get_field('workshop_finished_content') ?: "This workshop has closed but don't worry, we regularly repeat our popular workshops. Register your interest here and we’ll make sure you’re the first to hear about our next sessions.";


// variables to provide updated popup if workshop date has passed
$workshop_date = get_field('meta_workshop_date', $post_id);
$date_now = date('Y-m-d H:i:s');
$shortcode_data = "
<div class='form popup-form'>
<h3>" . esc_html($finished_form_header) . "</h3>
<div class='form-intro'>" . esc_html($finished_form_content) . "</div> 
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
    <input type='hidden' name='fields[workshop_name]' value='" . get_the_title() . "'>
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

<div class="workshop-card white-bg container">
    <?php // create custom popup if workshop date has passed  
    if ($date_now > $workshop_date) :
        echo '<h2>' . $workshop_finished_header . '</h2>';
        echo '<p>' . $workshop_finished_content . '</p>';
    ?>
        <button class="popmake-1727 button button-small">Register your interest</button>
</div>
<?php else :
        if ($header) : echo '<h2>' . esc_html($header) . '</h2>';
        endif; ?>
    <?php if ($content) : echo $content;
        endif; ?>
    <?php if ($button_text) : echo '<button class="button button-small ' . $popup_id . '">' . esc_html($button_text) . '</button>';
        endif; ?>
    </div>
<?php endif;
