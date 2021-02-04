<?php

//vars
$column1 = get_field('column');
$column2 = get_field('column_2');
$column3 = get_field('column_3');
$button_text = get_field('button_text');
$button_url = get_field('button_url');
if ($column1) : ?>
    <div id="service-boxes" class="container three-col columns-container full-width">
        <div class="columns inner-container">
            <?php if ($column1) : ?>
                <div class="column three white-bg">
                    <div class="col-img"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/growth.svg'); ?></div>
                    <h3><?php echo $column1['column_header']; ?></h3>
                    <div class="col-text"><?php echo $column1['text']; ?></div>
                </div>
            <?php endif; ?>
            <?php if ($column2) : ?>
                <div class="column three white-bg">
                    <div class="col-img"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/collaboration.svg'); ?></div>
                    <h3><?php echo $column2['column_header']; ?></h3>
                    <div class="col-text"><?php echo $column2['text']; ?></div>
                    <div class="col-footer"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/popular.svg'); ?>
                        <span>-</span>
                        <p><?php echo esc_html($column2['illustration_text']); ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($column3) : ?>
                <div class="column three white-bg">
                    <div class="col-img"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/enhanced.svg'); ?></div>
                    <h3><?php echo $column3['column_header']; ?></h3>
                    <div class="col-text"><?php echo $column3['text']; ?></div>
                </div>
            <?php endif; ?>
        </div>
        <div id="services-button" class="wide-button-container">
            <?php if ($button_text) : ?>
                <div class="button large"><a href="<?php if ($button_url) : echo esc_html($button_url);
                                                    endif; ?>"><span class="desktop"><?php echo esc_html($button_text); ?></span><span class="mobile"><?php echo esc_html($button_text); ?></span></a></div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>