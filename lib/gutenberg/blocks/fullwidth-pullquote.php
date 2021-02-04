<?php
//vars
$fullQuote = get_field('full_width_quote_text');
if ($fullQuote): ?>
    <div class="pullquote">
        <blockquote><?php echo $fullQuote; ?></blockquote>
    </div>
<?php endif; ?>