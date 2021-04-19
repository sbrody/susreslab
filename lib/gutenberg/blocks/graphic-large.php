<?php
// vars 
$header = get_field('header');
$intro = get_field('intro');
if ($header) : ?>
    <div class="container graphic-large">
        <h2><?php echo $header; ?></h2>
        <div class="container-sub">
            <p><?php echo $intro; ?></p>
        </div>
        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/new_graphic2.svg'); ?>
    </div>
    <div class="container mobile">
        <img src="/wp-content/themes/genesis-sample/images/graphic-mob.png" alt="SRL process diagram">
        <ol>
            <li>
                <h3>Spark interest</h3>
                <p>Create an emotional connection with customers </p>
            </li>
            <li>
                <h3>Show value</h3>
                <p>Overcome inherent brain barriers to show why low carbon solutions are worth it</p>
            </li>
            <li>
                <h3>Make it easy</h3>
                <p>Use behavioural insights to make it easier for customers to say yes </p>
            </li>
            <li>
                <h3>Grow sustainably</h3>
                <p>Build scalable brand assets that build a low carbon economy</p>
            </li>
        </ol>
    </div>
<?php endif;
?>