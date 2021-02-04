<?php

function register_acf_block_types()
{

    // Check if  function exists.
    if (function_exists('acf_register_block_type')) {
        // register a sell more block.
        acf_register_block_type(array(
            'name'              => 'sell_more',
            'title'             => __('Sell More'),
            'description'       => __('A block for Sell More content'),
            'render_template'   => '/lib/gutenberg/blocks/sell-more.php',
            //'render_callback'   => 'srl_sell_more_block',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('sell', 'more', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'drip_form',
            'title'             => __('Drip form'),
            'description'       => __('A block for Drip form content'),
            'render_template'   => '/lib/gutenberg/blocks/drip-form.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('drip', 'form', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'drip_form_version2',
            'title'             => __('Drip form for team page'),
            'description'       => __('The version of the Drip form for the team page'),
            'render_template'   => '/lib/gutenberg/blocks/drip-form2.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('drip', 'form', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'three-col',
            'title'             => __('Three column layout'),
            'description'       => __('Three columns including image and text'),
            'render_template'   => '/lib/gutenberg/blocks/three-col.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('three', 'column', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'large-graphic',
            'title'             => __('Large graphic and header'),
            'description'       => __('Block for header, intro and large graphic'),
            'render_template'   => '/lib/gutenberg/blocks/graphic-large.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('large', 'graphic', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'large-graphic-service',
            'title'             => __('Services page graphic and header'),
            'description'       => __('Block for header, intro and large graphic for services page'),
            'render_template'   => '/lib/gutenberg/blocks/graphic-large-services.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('large', 'graphic', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'resource-list',
            'title'             => __('Latest resources block'),
            'description'       => __('Block for highlighting three resource posts'),
            'render_template'   => '/lib/gutenberg/blocks/resource-list.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('latest', 'resource', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'testimonial-slider',
            'title'             => __('Testimonial slider block'),
            'description'       => __('Block for loading testimonial slides'),
            'render_template'   => '/lib/gutenberg/blocks/testimonial-slider.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('testimonial', 'slide', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'headed-numbers',
            'title'             => __('Numbered list with headers'),
            'description'       => __('Block for loading a numbered list with headers'),
            'render_template'   => '/lib/gutenberg/blocks/headed-numbers.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('numbers', 'list', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'image-text',
            'title'             => __('Image and text block'),
            'description'       => __('Block for image on left and text on right'),
            'render_template'   => '/lib/gutenberg/blocks/image-text.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('image', 'text', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'biog-card',
            'title'             => __('Team biog cards'),
            'description'       => __('Block for team member biographical information'),
            'render_template'   => '/lib/gutenberg/blocks/biog-card.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('biog', 'card', 'srl'),
        ));

        acf_register_block_type(array(
            'name'              => 'callout-box',
            'title'             => __('Grey callout box'),
            'description'       => __('Block for callout box on blog post'),
            'render_template'   => '/lib/gutenberg/blocks/callout-box.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('callout', 'box', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'pullquote-left',
            'title'             => __('Left aligned pullquote'),
            'description'       => __('Block for pullquote which floats to the left'),
            'render_template'   => '/lib/gutenberg/blocks/pullquote-left.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('pullquote', 'left', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'fullwidth-image',
            'title'             => __('Full width image'),
            'description'       => __('Full width image for blog post'),
            'render_template'   => '/lib/gutenberg/blocks/fullwidth-image.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('fullwidth', 'image', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'pullquote-full',
            'title'             => __('Full width pullquote'),
            'description'       => __('Full width pullquote for blog post'),
            'render_template'   => '/lib/gutenberg/blocks/fullwidth-pullquote.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('fullwidth', 'pullquote', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'services-boxes',
            'title'             => __('Service offer boxes'),
            'description'       => __('Three boxes to display the service offers'),
            'render_template'   => '/lib/gutenberg/blocks/service-boxes.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('service', 'boxes', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'packages-list',
            'title'             => __('Customer packages'),
            'description'       => __('Blocks to display customer package options'),
            'render_template'   => '/lib/gutenberg/blocks/packages-list.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('packages', 'list', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'contact-drip',
            'title'             => __('Contact page form'),
            'description'       => __('Blocks to display Drip form on contact page'),
            'render_template'   => '/lib/gutenberg/blocks/contact-drip.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('contact', 'form', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'workshop-signup',
            'title'             => __('Workshop sign-up'),
            'description'       => __('Block to display sign up cta on workshop page'),
            'render_template'   => '/lib/gutenberg/blocks/workshop-drip.php',
            'category'          => 'srl-blocks',
            'icon'              => 'businesswoman',
            'keywords'          => array('workshop', 'form', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'workshop-logos',
            'title'             => __('Workshop logos'),
            'description'       => __('Block to display logos on workshop page'),
            'render_template'   => '/lib/gutenberg/blocks/workshop-logos.php',
            'category'          => 'srl-blocks',
            'icon'              => 'businesswoman',
            'keywords'          => array('workshop', 'logos', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'workshop-biogs',
            'title'             => __('Workshop biogs'),
            'description'       => __('Block to display biogs on workshop page'),
            'render_template'   => '/lib/gutenberg/blocks/workshop-biogs.php',
            'category'          => 'srl-blocks',
            'icon'              => 'businesswoman',
            'keywords'          => array('workshop', 'biog', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'workshop-cta-card',
            'title'             => __('Workshop cta card'),
            'description'       => __('Block to display cta card on workshop page'),
            'render_template'   => '/lib/gutenberg/blocks/workshop-cta.php',
            'category'          => 'srl-blocks',
            'icon'              => 'businesswoman',
            'keywords'          => array('card', 'cta', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'workshop-testimonials',
            'title'             => __('Workshop testimonials section'),
            'description'       => __('Block to display of testimonials on workshop page'),
            'render_template'   => '/lib/gutenberg/blocks/workshop-testimonials.php',
            'category'          => 'srl-blocks',
            'icon'              => 'businesswoman',
            'keywords'          => array('testimonials', 'workshop', 'srl'),
        ));
        acf_register_block_type(array(
            'name'              => 'book-slot',
            'title'             => __('Book a slot'),
            'description'       => __('Block to display book a slot CTA'),
            'render_template'   => '/lib/gutenberg/blocks/book-slot.php',
            'category'          => 'srl-blocks',
            'icon'              => 'megaphone',
            'keywords'          => array('form', 'book', 'srl'),
        ));
    }
}

// hook into setup
add_action('acf/init', 'register_acf_block_types');
