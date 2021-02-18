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
                                        endif; ?></div>
                <form action='https://www.getdrip.com/forms/181227447/submissions' method='post' data-drip-embedded-form='181227447' id='drip-ef-181227447'>
                    <div class="form-fields">
                        <div class='form-field'>
                            <label class='visually-hidden' for='drip-email'>Email Address</label>
                            <input type='email' id='drip-email' name='fields[email]' value='' placeholder='Email address'>
                        </div>
                        <div class='form-field'>
                            <label class='visually-hidden' for='drip-name'>Name</label>
                            <input type='text' id='drip-name' name='fields[name]' value='' placeholder='Name'>
                        </div>
                    </div>
                    <div>
                        <input type='hidden' name='fields[workshop_name]' value='Workshop archive page'>
                    </div>
                    <div style='display: none;' aria-hidden='true'>
                        <label for='website'>Website</label>
                        <input type='text' id='website' name='website' tabindex='-1' autocomplete='false' value=''>
                    </div>
                    <input type='hidden' name='tags[]' id='tags_' value='workshop_interest' tabindex='-1'>
                    <div>
                        <input class='button small' type='submit' value='Register your interest' data-drip-attribute='sign-up-button'>
                    </div>
                </form>
                <div class='form-disclaimer'><?php if ($disclaimer) : echo ($disclaimer);
                                                endif; ?></a>.</div>
            </div>
        </div>
    </div>
</div>