<?php
// vars
$logo_1 = get_field('logo_1') ?: 765;
$logo_2 = get_field('logo_2') ?: 1470;
$text = get_field('text') ?: 'Brought to you in partnership with The Future Economy Network.';
?>

<div class="workshop-logo">
    <?php if ($logo_1) : echo wp_get_attachment_image($logo_1, 'featured-icon');
    endif; ?>
    <?php if ($logo_2) : echo wp_get_attachment_image($logo_2, 'featured-icon');
    endif; ?>
    <?php if ($text) : echo '<span>' . esc_html($text) . '</span>';
    endif; ?>
    <hr />
</div>