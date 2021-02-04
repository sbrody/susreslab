<?php
$pullLeft = get_field('pullquote_left_text');
if($pullLeft): ?>
    <div class="pullquote-left">
        <blockquote>
            <?php echo $pullLeft; ?>
        </blockquote>
    </div>
<?php endif; ?>

