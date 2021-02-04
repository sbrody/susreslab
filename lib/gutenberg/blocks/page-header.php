<?php

// This is not a Gutenberg block

// vars

$intro = get_field('intro') ?: 'Tips, tools and techniques to support environmental businesses grow. Sustainably.';
$header = 'The Sustainable Results Lab resource library';
if (is_category()): 
    echo '<h2 class="entry-title">' . $header . '</h2>';
endif;
if ($intro): ?>
    <div class="page-subhead">
        <?php echo $intro; ?>
    </div>
<?php endif; ?>
