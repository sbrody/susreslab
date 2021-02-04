<?php
// vars
$cHeader = get_field('callout_header');
$cText = get_field('callout_text');
$cLink = get_field('callout_link');
$cLinkText = get_field('callout_link_text');
if ($cHeader): ?>
    <div class="callout-box grey-bg">
        <h3><?php echo $cHeader; ?></h3>
        <div class="callout-text"><?php echo $cText; ?></div>
        <div class="callout-link">
            <a href="<?php echo $cLink; ?>"?>
                <?php echo $cLinkText; ?>
            </a>
        </div>
    </div>
<?php endif;?>