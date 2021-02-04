<?php
// vars
$package1 = get_field('package_1');
$package2 = get_field('package_2');
$package3 = get_field('package_3');
$package4 = get_field('package_4');
$package5 = get_field('package_5');
$button_text = get_field('button_text');
$button_url = get_field('button_url');
?>
<div id="packages" class="container">
    <h2>Based on your needs, packages include:</h2>
    <?php if (have_rows('package_1')) :
        while (have_rows('package_1')) : the_row();
            //vars
            $header = $package1['header'];
            $intro = $package1['intro'];
    ?>
            <div class="package">
                <div class="package-title">
                    <?php if ($header) : echo '<span>1.</span><h3>' . $header . '</h3>';
                    endif; ?>
                    <?php if ($intro) : echo '<div class="package-intro">' . $intro . '</div>';
                    endif; ?>
                </div>
                <div class="package-option">
                    <?php if (have_rows('option')) :
                        while (have_rows('option')) : the_row();
                            //vars
                            $icon = get_sub_field('icon');

                            $title = get_sub_field('title');
                            $link = get_sub_field('link');
                    ?>
                            <div class="option">

                                <?php if ($icon) : ?>
                                    <div class="package-icon <?php if ($link) : echo 'active';
                                                                endif; ?>">
                                        <?php if ($link) : ?>
                                            <a href="<?php echo $link; ?>"></a>
                                        <?php endif; ?>
                                        <img src="<?php echo $icon; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link; ?>">
                                    <?php endif; ?>
                                    <?php if ($title) : echo '<p>' . $title . '</p>';
                                    endif; ?>
                                    <?php if ($link) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>

    <?php if (have_rows('package_2')) :
        while (have_rows('package_2')) : the_row();
            //vars
            $header = $package2['header'];
            $intro = $package2['intro'];
    ?>
            <div class="package">
                <div class="package-title">
                    <?php if ($header) : echo '<span>2.</span><h3>' . $header . '</h3>';
                    endif; ?>
                    <?php if ($intro) : echo '<div class="package-intro">' . $intro . '</div>';
                    endif; ?>
                </div>
                <div class="package-option">
                    <?php if (have_rows('option')) :
                        while (have_rows('option')) : the_row();
                            //vars
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $link = get_sub_field('link');
                    ?>
                            <div class="option">

                                <?php if ($icon) : ?>
                                    <div class="package-icon <?php if ($link) : echo 'active';
                                                                endif; ?>">
                                        <?php if ($link) : ?>
                                            <a href="<?php echo $link; ?>"></a>
                                        <?php endif; ?>
                                        <img src="<?php echo $icon; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link; ?>">
                                    <?php endif; ?>
                                    <?php if ($title) : echo '<p>' . $title . '</p>';
                                    endif; ?>
                                    <?php if ($link) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>

    <?php if (have_rows('package_3')) :
        while (have_rows('package_3')) : the_row();
            //vars
            $header = $package3['header'];
            $intro = $package3['intro'];
    ?>
            <div class="package">
                <div class="package-title">
                    <?php if ($header) : echo '<span>3.</span><h3>' . $header . '</h3>';
                    endif; ?>
                    <?php if ($intro) : echo '<div class="package-intro">' . $intro . '</div>';
                    endif; ?>
                </div>
                <div class="package-option">
                    <?php if (have_rows('option')) :
                        while (have_rows('option')) : the_row();
                            //vars
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $link = get_sub_field('link');
                    ?>
                            <div class="option">

                                <?php if ($icon) : ?>
                                    <div class="package-icon <?php if ($link) : echo 'active';
                                                                endif; ?>">
                                        <?php if ($link) : ?>
                                            <a href="<?php echo $link; ?>"></a>
                                        <?php endif; ?>
                                        <img src="<?php echo $icon; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link; ?>">
                                    <?php endif; ?>
                                    <?php if ($title) : echo '<p>' . $title . '</p>';
                                    endif; ?>
                                    <?php if ($link) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>

    <?php if (have_rows('package_4')) :
        while (have_rows('package_4')) : the_row();
            //vars
            $header = $package4['header'];
            $intro = $package4['intro'];
    ?>
            <div class="package">
                <div class="package-title">
                    <?php if ($header) : echo '<span>4.</span><h3>' . $header . '</h3>';
                    endif; ?>
                    <?php if ($intro) : echo '<div class="package-intro">' . $intro . '</div>';
                    endif; ?>
                </div>
                <div class="package-option">
                    <?php if (have_rows('option')) :
                        while (have_rows('option')) : the_row();
                            //vars
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $link = get_sub_field('link');
                    ?>
                            <div class="option">

                                <?php if ($icon) : ?>
                                    <div class="package-icon <?php if ($link) : echo 'active';
                                                                endif; ?>">
                                        <?php if ($link) : ?>
                                            <a href="<?php echo $link; ?>"></a>
                                        <?php endif; ?>
                                        <img src="<?php echo $icon; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link; ?>">
                                    <?php endif; ?>
                                    <?php if ($title) : echo '<p>' . $title . '</p>';
                                    endif; ?>
                                    <?php if ($link) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>

    <?php if (have_rows('package_5')) :
        while (have_rows('package_5')) : the_row();
            //vars
            $header = $package5['header'];
            $intro = $package5['intro'];
    ?>
            <div class="package">
                <div class="package-title">
                    <?php if ($header) : echo '<h3>' . $header . '</h3>';
                    endif; ?>
                    <?php if ($intro) : echo '<div class="package-intro">' . $intro . '</div>';
                    endif; ?>
                </div>
                <div class="package-option">
                    <?php if (have_rows('option')) :
                        while (have_rows('option')) : the_row();
                            //vars
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $link = get_sub_field('link');
                    ?>
                            <div class="option">

                                <?php if ($icon) : ?>
                                    <div class="package-icon <?php if ($link) : echo 'active';
                                                                endif; ?>">
                                        <?php if ($link) : ?>
                                            <a href="<?php echo $link; ?>"></a>
                                        <?php endif; ?>
                                        <img src="<?php echo $icon; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link; ?>">
                                    <?php endif; ?>
                                    <?php if ($title) : echo '<p>' . $title . '</p>';
                                    endif; ?>
                                    <?php if ($link) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>

    <div id="packages-button" class="wide-button-container">
        <?php if ($button_text) : ?>
            <div class="button large"><a href="<?php if ($button_url) : echo esc_html($button_url);
                                                endif; ?>"><span class="desktop"><?php echo esc_html($button_text); ?></span></a></div>
        <?php endif; ?>
    </div>
</div>