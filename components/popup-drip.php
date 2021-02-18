<?php
echo ("
<div class='form'>
    <h3>Missed an event?</h3>
    <div class='form-intro'>This workshop has closed but don't worry, we regularly repeat our popular workshops. Register your interest here and we’ll make sure you’re the first to hear about our next sessions.</div>
    <form action='https://www.getdrip.com/forms/181227447/submissions' method='post' data-drip-embedded-form='181227447' id='drip-ef-181227447'>
        <div data-drip-attribute='description'></div>
        <div>
            <label for='drip-email'>Email Address</label><br>
            <input type='email' id='drip-email' name='fields[email]' value=''>
        </div>
        <div>
            <label for='drip-name'>Name</label><br>
            <input type='text' id='drip-name' name='fields[name]' value=''>
        </div>
        <div>
            <input type='hidden' name='fields[workshop_name]' value='" . the_title() . "'>
        </div>
        <div style='display: none;' aria-hidden='true'>
            <label for='website'>Website</label><br>
            <input type='text' id='website' name='website' tabindex='-1' autocomplete='false' value=''>
        </div>
        <input type='hidden' name='tags[]' id='tags_' value='workshop_interest' tabindex='-1'>
        <div>
            <input type='submit' value='Register your interest' data-drip-attribute='sign-up-button'>
        </div>
    </form>
</div>
");
