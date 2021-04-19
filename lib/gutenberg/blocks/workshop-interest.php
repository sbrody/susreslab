<?php
//vars
$header = get_field('form_header') ?: 'Missed an event?';
$intro = get_field('form_intro') ?: 'Don’t worry, we regularly repeat our popular workshops. Register your interest here and we’ll make sure you’re the first to hear about our next sessions.';
$disclaimer = get_field('disclaimer') ?: 'Don’t worry, we’ll only email you with resources to support sustainable growth. You can read more about our data privacy policy here.';
?>
<div id="svg-outer">
    <div id="form-svg" class="svg-container"><img src="/wp-content/themes/genesis-sample/images/form-bg.svg" alt=""></div>

    <div class="form-outer">


        <div id="interest-form" class="container form-container inner-container">
            <div class="img-area form-img">
                <?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/form.svg'); ?>
            </div>
            <div class='form'>
                <h3><?php if ($header) : echo esc_html($header);
                    endif; ?></h3>
                <div class='form-intro'><?php if ($intro) : echo $intro;
                                        endif; ?>
                </div>
                <div class="form-fields">
                    <?php echo do_shortcode('[wpforms id="1726" title="false"]'); ?>
                    <div class='form-disclaimer'><?php if ($disclaimer) : echo ($disclaimer);
                                                    endif; ?></a></div>
                </div>

            </div>
        </div>
    </div>
</div>