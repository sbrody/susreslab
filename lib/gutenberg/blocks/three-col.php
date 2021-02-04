<?php
//vars
$header = get_field('header') ?: 'What we do';
$column1 = get_field('column');
$column2 = get_field('column_2');
$column3 = get_field('column_3');
if ($header): ?>
    <div class="container three-col columns-container full-width grey-bg">
        <h2><?php echo $header; ?></h2>
        <div class="columns inner-container">
            <?php if ($column1): ?>
            <div class="column three">
                <div class="col-img"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/content-experts.svg' ); ?></div>
                <h3><?php echo $column1['column_header']; ?></h3>
                <div class="col-text"><?php echo $column1['text']; ?></div>
            </div>
            <?php endif; ?>    
            <?php if ($column2): ?>
            <div class="column three">
                <div class="col-img"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/complexity.svg' ); ?></div>
                <h3><?php echo $column2['column_header']; ?></h3>
                <div class="col-text"><?php echo $column2['text']; ?></div>
            </div>
            <?php endif; ?> 
            <?php if ($column3): ?>
            <div class="column three">
                <div class="col-img"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/scientific.svg' ); ?></div>
                <h3><?php echo $column3['column_header']; ?></h3>
                <div class="col-text"><?php echo $column3['text']; ?></div>
            </div>
            <?php endif; ?> 
        </div>
    </div>
<?php endif; ?>