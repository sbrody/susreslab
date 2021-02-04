<?php
//vars
$header = get_field('header') ?: 'Meet your trainers';
// $trainer = get_field('trainer');
?>
<div class="absolute-container">
    <div class="container biogs-container workshop-biogs">
        <?php if ($header) : echo '<h2>' . esc_html($header) . '</h2>';
        endif; ?>
        <?php if (have_rows('trainer')) :
            while (have_rows('trainer')) : the_row();
                // vars
                $image = get_sub_field('image');
                $name = get_sub_field('name');
                $title = get_sub_field('title');
                $biog = get_sub_field('biog');
                $extra_logo = get_sub_field('extra_logo');
        ?>
                <div class="biog-card">
                    <?php if ($image) : echo wp_get_attachment_image($image, 'biog-pic');
                    endif; ?>
                    <?php if ($extra_logo) : echo wp_get_attachment_image($extra_logo, 'sidebar-featured', "", array('class' => 'biog-icon'));
                    endif; ?>
                    <?php if ($name) : echo '<div class="biog-name">' . esc_html($name) . '</div>';
                    endif; ?>
                    <?php if ($title) : echo '<div class="biog-title">' . esc_html($title) . '</div>';
                    endif; ?>
                    <?php if ($biog) : echo '<p>' . esc_html($biog) . '</p>';
                    endif; ?>
                </div>
        <?php endwhile;
        endif;
        ?>
    </div>
</div>