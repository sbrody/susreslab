<?php
    if (have_rows('biog_card')): ?>
    <div class="container biogs-container">
        <?php while (have_rows('biog_card')): the_row(); 
        // vars
        $image = get_sub_field('image');
        $squareImg = $image['sizes']['biog-pic'];
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $biog = get_sub_field('biography');
        ?>
            <div class="biog-card">
                <img src="<?php echo $squareImg; ?>" alt="<?php echo $image['url']; ?>">
                <div class="biog-name"><?php echo $name; ?></div>
                <div class="biog-title"><?php echo $title; ?></div>
                <div class="biog-link"><a href="#">View bio</a></div>
                <div class="biog-description">
                    <span class="biog-toggle"><img src="/wp-content/themes/genesis-sample/images/close.svg" alt=""></span>
                    <?php echo $biog; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
