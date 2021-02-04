<?php 
//vars
$header = get_field('form_header', 'option') ?: 'Do you want to reach more customers? Sustainably.';
$intro = get_field('form_intro', 'option') ?: 'Enter your details below to learn about the latest tools and techniques that will enable you to reach and engage more customers.';
$disclaimer = get_field('disclaimer', 'option') ?: 'Don’t worry, we’ll only email you with resources to support sustainable growth. You can read more about our data privacy policy here.';
?>
<div id="svg-outer">
    <div id="form-svg" class="svg-container"><img src="/wp-content/themes/genesis-sample/images/form-bg.svg" alt=""></div>

<div class="form-outer">
    
    
    <div class="container form-container inner-container">
        <div class="img-area form-img">
            <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/form.svg' ); ?>
        </div>
        <div class="form">
            <?php if($header): ?>
                <h3><?php echo $header; ?></h3>
            <?php endif; ?>
            <?php if ($intro): ?>
                <div class="form-intro"><?php echo $intro; ?></div>
            <?php endif; ?>

            <form class="home-form" action="https://www.getdrip.com/forms/546414918/submissions" method="post" data-drip-embedded-form="546414918" id="drip-form">
                <div class="form-fields">
                    <input id="drip-email" name="fields[email]" type="email" placeholder="Email address" value="" />
                    <input id="drip-name" name="fields[Name]" type="text" placeholder="First name" value="" />
                </div>
            <div style="display: none;" aria-hidden="true">
                <label for="website">Website</label><br />
                <input type="text" id="website" name="website" tabindex="-1" autocomplete="false" value="" />
             </div>
             
            <div>
                <input id="button" class="button large g-recaptcha" type="submit" value="Sign Up" data-drip-attribute="sign-up-button" data-sitekey="6LdNwPwUAAAAAO-vpaPRgT8gOh2gen3Dyd-1eSNT" data-callback='onSubmit'>
            </div>
            </form>

            <?php if ($disclaimer): ?>
                <div class="form-disclaimer"><?php echo $disclaimer; ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>