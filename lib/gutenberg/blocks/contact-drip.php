<?php
//vars
$intro = get_field('contact_intro');
$disclaimer = get_field('contact-disclaimer');
?>
<div id="contact-form-outer" class="form-outer">
    <?php if ($intro) : ?>
        <div class="half-width">
            <?php echo $intro; ?>
        </div>
    <?php endif; ?>
    <div class="half-width container form-container inner-container contact-form-container">
        <div class="form">
            <form action="https://www.getdrip.com/forms/232834888/submissions" method="post" data-drip-embedded-form="232834888" id="drip-form">
                <div class="form-fields">
                    <input type="text" id="drip-Name" name="fields[Name]" value="" placeholder="Name" />
                </div>
                <div class="form-fields">
                    <input type="email" id="drip-email" name="fields[email]" value="" placeholder="Email address" />
                </div>
                <div class="form-fields">
                    <input type="text" id="drip-Organisation" name="fields[Organisation]" value="" placeholder="Organisation" />
                </div>
                <div class="form-fields">
                    <textarea id="drip-About" name="fields[About]" value="" placeholder="What are the challenges you'd like help with?"></textarea>
                </div>
                <div style="display: none;" aria-hidden="true">
                    <label for="website">Website</label><br />
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="false" value="" />
                </div>
                <div class="form-disclaimer"><?php if ($disclaimer) : echo $disclaimer;
                                                endif; ?></div>

                <div class="form-fields">
                    <input id="button" class="button medium" type="submit" value="Send" data-drip-attribute="sign-up-button" data-callback='onSubmit'>
                </div>
            </form>
        </div>
    </div>
</div>