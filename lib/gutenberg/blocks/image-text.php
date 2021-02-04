<?php
// vars
$leftImage = get_field('left_image');
$textBelow = get_field('text_below_image');
$rightText = get_field('right_hand_text');

if($leftImage) : ?>
    <div class="container image-text-block">
        <div class="block-left">
            <?php if ($leftImage): ?>
                <img src="<?php echo $leftImage['url']; ?>" alt="<?php echo $leftImage['alt']; ?>">
            <?php endif; 
            if ($textBelow): ?>
                <div class="text-below-image"><?php echo $textBelow; ?></div>
            <?php endif; ?>
        </div>
        <?php if ($rightText): ?>
            <div class="block-right">
                <?php echo $rightText; ?>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>