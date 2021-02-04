<?php
//vars
$header = get_field('form_header') ?: 'Book your 30-minute call to get started.';
$intro = get_field('form_intro');
$disclaimer = get_field('form_footer');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
?>
<div id="svg-outer">
    <div id="form-svg" class="svg-container"><img src="/wp-content/themes/genesis-sample/images/form-bg.svg" alt=""></div>

    <div class="form-outer">


        <div class="container form-container inner-container">
            <div class="img-area form-img">
                <?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/form.svg'); ?>
            </div>
            <div class="form">
                <?php if ($header) : ?>
                    <h3><?php echo $header; ?></h3>
                <?php endif; ?>
                <?php if ($intro) : ?>
                    <div class="form-intro"><?php echo $intro; ?></div>
                <?php endif; ?>
                <div class="button large">
                    <?php if ($button_link) : ?><a href="<?php echo esc_url($button_link); ?>">
                            <?php if ($button_text) : echo esc_html($button_text);
                            endif; ?>
                        </a><?php endif; ?>
                </div>
                <?php if ($disclaimer) : ?>
                    <div class="form-disclaimer"><?php echo $disclaimer; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>