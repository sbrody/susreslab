<?php
/**
 * Genesis Sample child theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-sample/
 */

/**
 * Genesis responsive menus settings. (Requires Genesis 3.0+.)
 */
return array(
	'script' => array(
		'menuClasses' => array(
			'combine' => array( '.nav-primary' ),
			'others' => array( '.category-menu' ),
		),
		'mainMenu' => __( '', 'genesis-sample' ),
		'secondary' => __( 'hello', 'genesis-sample' ),
		
	),
	'extras' => array(
		'media_query_width' => '960px',
	),
	
    
);
