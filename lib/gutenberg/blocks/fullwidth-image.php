<?php
// vars
$fullImage = get_field('full_width_image');
$imageSize = $fullImage['sizes']['fullwidth-image'];
if ( $fullImage ): ?>
    <div class="full-width-image">
        <img src="<?php echo $imageSize; ?>" alt="<?php echo $fullImage['alt']; ?>">
        <caption><?php echo $fullImage['caption']; ?></caption>
    </div>
<?php endif; ?>