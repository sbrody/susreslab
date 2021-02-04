<?php
// vars 
$header = get_field('header');
$intro = get_field('intro');
if ($header): ?>
    <div class="container graphic-large">
        <h2><?php echo $header; ?></h2>
        <div class="container-sub"><p><?php echo $intro; ?></p></div>
        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/process-serv.svg' ); ?>
    </div>
    <div class="container mobile white graphic-mobile">
        <img src="/wp-content/themes/genesis-sample/images/graphic-mob.png" alt="SRL process diagram">
        <ol>
            <img src="/wp-content/themes/genesis-sample/images/customer-insight.png" alt="customer insight graphic">
            <li>
                <h3>Customer insight</h3>    
            </li>
            <img src="/wp-content/themes/genesis-sample/images/asset-creation.png" alt="asset creation graphic">
            <li>
                <h3>Asset creation</h3>
            </li>
            <img src="/wp-content/themes/genesis-sample/images/measure.png" alt="measaure and learn graphic">
            <li>
                <h3>Measure and learn</h3>
            </li>
            <img src="/wp-content/themes/genesis-sample/images/grow.png" alt="growth and scale graphic">
            <li>
                <h3>Growth and scale</h3>
            </li>
        </ol>
    </div>
<?php endif;
?>