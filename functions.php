<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_sample_localization_setup() {

	load_child_theme_textdomain( genesis_get_theme_handle(), get_stylesheet_directory() . '/languages' );

}

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
//require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
//require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
//require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {
	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
	
}

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_sample_enqueue_scripts_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style(
		genesis_get_theme_handle() . '-fonts',
		$appearance['fonts-url'],
		array(),
		genesis_get_theme_version()
	);

	wp_enqueue_style( 'dashicons' );

	if ( genesis_is_amp() ) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-amp',
			get_stylesheet_directory_uri() . '/lib/amp/amp.css',
			array( genesis_get_theme_handle() ),
			genesis_get_theme_version()
		);
	}

}

add_action( 'after_setup_theme', 'genesis_sample_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

add_filter( 'genesis_seo_title', 'genesis_sample_header_title', 10, 3 );
/**
 * Removes the link from the hidden site title if a custom logo is in use.
 *
 * Without this filter, the site title is hidden with CSS when a custom logo
 * is in use, but the link it contains is still accessible by keyboard.
 *
 * @since 1.2.0
 *
 * @param string $title  The full title.
 * @param string $inside The content inside the title element.
 * @param string $wrap   The wrapping element name, such as h1.
 * @return string The site title with anchor removed if a custom logo is active.
 */
function genesis_sample_header_title( $title, $inside, $wrap ) {

	if ( has_custom_logo() ) {
		$inside = get_bloginfo( 'name' );
	}

	return sprintf( '<%1$s class="site-title">%2$s</%1$s>', $wrap, $inside );

}

// Adds image sizes.
add_image_size( 'sidebar-featured', 75, 75, true );
add_image_size( 'listing-featured', 400, 300, true );
add_image_size( 'home-listing', 440, 200, true );
add_image_size( 'biog-pic', 215, 215, true );
add_image_size( 'featured-photo', 1920, 650, array('center', 'center') );
add_image_size( 'featured-icon', 190, 72, false );
add_image_size( 'fullwidth-image', 1024, 768, true );
add_image_size( 'blog-listing', 740, 500, true );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

add_filter( 'genesis_customizer_theme_settings_config', 'genesis_sample_remove_customizer_settings' );
/**
 * Removes output of header and front page breadcrumb settings in the Customizer.
 *
 * @since 2.6.0
 *
 * @param array $config Original Customizer items.
 * @return array Filtered Customizer items.
 */
function genesis_sample_remove_customizer_settings( $config ) {

	unset( $config['genesis']['sections']['genesis_header'] );
	unset( $config['genesis']['sections']['genesis_breadcrumbs']['controls']['breadcrumb_front_page'] );
	return $config;

}

// Displays custom logo.
add_action( 'genesis_site_title', 'the_custom_logo', 0 );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' !== $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;
	return $args;

}

add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}

add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;

}

//* Replace default style sheet
add_filter( 'stylesheet_uri', 'custom_replace_default_style_sheet', 10, 2 );
function custom_replace_default_style_sheet() {
	return CHILD_URL . '/css/main.min.css';
}

// Add google fonts & custom scripts
function srl_add_scripts() {
 
	wp_enqueue_style( 'srl-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:300,400&display=swap', false ); 
	wp_enqueue_style( 'srl-owl-css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', false ); 
	wp_enqueue_script( 'isotope-js', get_stylesheet_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), true);
	wp_enqueue_script( 'imagesloaded-js', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), true);
	wp_enqueue_script( 'packery-js', get_stylesheet_directory_uri() . '/js/packery-mode.pkgd.min.js', array('jquery'), true);
	wp_enqueue_script( 'infinite-scroll', get_stylesheet_directory_uri() . '/js/infinite-scroll.pkgd.min.js', array('jquery'), true);
	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), true);
	wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/theme.min.js', array('jquery', 'isotope-js', 'imagesloaded-js', 'packery-js', 'infinite-scroll', 'owl-carousel'));
	// wp_enqueue_script( 'srl-google-recaptch', 'https://www.google.com/recaptcha/api.js' ); 
}
	 
	add_action( 'wp_enqueue_scripts', 'srl_add_scripts' );

// Google analytics

function srl_analytics() { ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146594886-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-146594886-1');
	</script>
<?php
}	

add_action( 'wp_head', 'srl_analytics', 10 );


// Google search
function srl_gsearch() { ?>
	<!-- Google search console -->
	<meta name="google-site-verification" content="4X4PzwRowL_G8gVx0sWQbkBq4BVGl7vllMc0G5JCmc4" />
<?php
}

add_action( 'wp_head', 'srl_gsearch',  11 );

// Google reCaptcha

function srl_recaptcha() { ?>
	<!-- Google reCaptcha -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
		 document.getElementById("drip-form").submit();
		//  document.getElementById("drip-form2").submit();
       }
     </script>
<?php
}

add_action( 'wp_head', 'srl_recaptcha',  20 );

// move footer widgets into footer
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
add_action( 'genesis_footer', 'genesis_footer_widget_areas' );

//* Remove the default footer credit text
function srl_footer_text () {
	$copyright = '';
	return $copyright;
}
add_filter ('genesis_pre_get_option_footer_text', 'srl_footer_text');

// Require gutenberg blocks functions
require_once( get_stylesheet_directory() . '/lib/block-functions.php' );

// Register category menu 
genesis_register_sidebar( array(
	'id'		=> 'category-menu',
	'name'		=> __( 'Category menu', 'genesis-sample' ),
	'description'	=> __( 'This is the widget area for the category menu.', 'genesis-sample' ),
) );

// Set custom excerpt length

function custom_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Custom footer

remove_action( 'genesis_before_footer', 'genesis_do_footer' );
add_action( 'genesis_before_footer', 'srl_custom_footer' );
function srl_custom_footer() {
	get_template_part( 'components/content', 'footer' );
}


// Add ACF options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// Create new block category for SRL blocks

function srl_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'srl-blocks',
				'title' => __( 'SRL blocks', 'srl-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'srl_block_category', 10, 2);


