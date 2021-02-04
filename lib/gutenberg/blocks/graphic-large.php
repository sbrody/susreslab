<?php
// vars 
$header = get_field('header');
$intro = get_field('intro');
if ($header): ?>
    <div class="container graphic-large">
        <h2><?php echo $header; ?></h2>
        <div class="container-sub"><p><?php echo $intro; ?></p></div>
        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/process-front2.svg' ); ?>
    </div>
    <div class="container mobile">
        <img src="/wp-content/themes/genesis-sample/images/graphic-mob.png" alt="SRL process diagram">
        <ol>
            <li>
                <h3>Customer insight</h3>
                <p>Customer insight – use research and data to understand customers’ needs</p>
            </li>
            <li>
                <h3>Asset creation</h3>
                <p>Constantly improve with insights and data. Use this to enhance your products and services </p>
            </li>
            <li>
                <h3>Measure and learn</h3>
                <p>Measure and learn – constantly improve with insights and data. Use this to enhance your products and services</p>
            </li>
            <li>
                <h3>Growth and scale</h3>
                <p>Accelerate growth through building re-usable and scalable assets that are cost effective and free up your time</p>
            </li>
        </ol>
    </div>
<?php endif;
?>