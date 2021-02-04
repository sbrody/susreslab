<?php 
//vars
$header = get_field('form_header', 'options') ?: 'Do you want to reach more customers?';
$intro = get_field('form_intro', 'options') ?: 'Enter your details below to learn about the latest tools and techniques that will enable you to reach and engage more customers. Sustainably.';
$disclaimer = get_field('disclaimer', 'options') ?: 'We’ll only email you with resources to support sustainable growth. You can read more about our data privacy policy <a href="/privacy-policy">here</a>.';
?>
<div class="form-outer">
    <div id="form-svg" class="svg-container">
    </div>
    <div class="container form-container inner-container">
        <div class="form">
            <?php if($header): ?>
                <h3><?php echo $header; ?></h3>
            <?php endif; ?>
            <?php if ($intro): ?>
                <div class="form-intro"><?php echo $intro; ?></div>
            <?php endif; ?>

            <form id="drip-form" class="home-form" action="https://www.getdrip.com/forms/546414918/submissions" method="post" data-drip-embedded-form="546414918">
            <div class="form-fields">
                <input id="drip-email" name="fields[email]" type="email" placeholder="Email address" value="" />
                <input id="drip-name" name="fields[Name]" type="text" placeholder="Name" value="" />
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