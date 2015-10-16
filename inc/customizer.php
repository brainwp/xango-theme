<?php
/**
 * Xangô Theme Customizer
 *
 */
include_once get_template_directory() . '/inc/kirki/kirki.php';
/**
 * Configuration sample for the Kirki Customizer
 */
function xango_kirki_config() {
	$args = array(
		'logo_image'   => get_template_directory_uri() . '/assets/images/brasa-customizer.png',
		'color_back'   => '#0C586E',
		'url_path'     => get_template_directory_uri() . '/inc/kirki'
	);
	return $args;
}
add_filter( 'kirki/config', 'xango_kirki_config' );
