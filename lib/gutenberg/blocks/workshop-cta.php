<?php
// vars
$header = get_field('header') ?: "Yes, I'd love to join you";
$content = get_field('content') ?: "To enable us to give you personalised support, places are limited to 12 people. 
To apply for your place, please book a provisional place here and we will get back to you as soon a possible.
Don’t miss out, our last workshop had a long waiting list.";
$button_text = get_field('button_text') ?: "Yes, I'd love to join you";
$popup_id = get_field('popup_id') ?: "popmake-1442";
?>

<div class="workshop-card white-bg container">
    <?php if ($header) : echo '<h2>' . esc_html($header) . '</h2>';
    endif; ?>
    <?php if ($content) : echo $content;
    endif; ?>
    <?php if ($button_text) : echo '<button class="button button-small ' . $popup_id . '">' . esc_html($button_text) . '</button>';
    endif; ?>
</div>