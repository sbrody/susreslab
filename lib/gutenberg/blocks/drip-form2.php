<?php 
//vars
$header = get_field('form2_header', 'option');
$intro = get_field('form2_intro', 'option'); 
$disclaimer = get_field('disclaimer2', 'option');
?>
<div class="form-outer">
    <div class="container form-container inner-container team-form-container">
        <div class="form">
            <?php if($header): ?>
                <h3><?php echo $header; ?></h3>
            <?php endif; ?>
            <?php if ($intro): ?>
                <div class="form-intro"><?php echo $intro; ?></div>
            <?php endif; ?>

            <form class="home-form team-form" action="https://www.getdrip.com/forms/232834888/submissions" method="post" data-drip-embedded-form="232834888" id="drip-form">
                <div class="form-fields-left">
                    <input id="drip-email" name="fields[email]" type="email" placeholder="Email address" value="" />
                    <input id="drip-name" name="fields[Name]" type="text" placeholder="First name" value="" />
                </div>
                <div class="form-fields-right">
                    
                    <textarea id="drip-About" name="fields[About]" value="" placeholder="What would you like to collaborate on?" ></textarea>
                </div>
                <div style="display: none;" aria-hidden="true">
                    <label for="website">Website</label><br />
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="false" value="" />
                </div>
               
                <div class="form-input">
                    <input id="button" class="button large g-recaptcha" type="submit" value="Send" data-drip-attribute="sign-up-button" data-sitekey="6LdNwPwUAAAAAO-vpaPRgT8gOh2gen3Dyd-1eSNT" data-callback='onSubmit'>    
                </div>
            </form>

            <?php if ($disclaimer): ?>
                <div class="form-disclaimer"><?php echo $disclaimer; ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>