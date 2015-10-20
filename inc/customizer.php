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
		'url_path'     => get_template_directory_uri() . '/inc/kirki'
	);
	return $args;
}
add_filter( 'kirki/config', 'xango_kirki_config' );

/**
 * Add footer fields
 */
/**
 * Create the setting
 */
function brasa_xango_register_section( $wp_customize ) {
    /**
     * Add sections
     */
    $wp_customize->add_section( 'xango_footer', array(
        'title'       => __( 'Footer', 'odin' ),
        'priority'    => 10,
    ) );

}
add_action( 'customize_register', 'brasa_xango_register_section' );
function brasa_xango_kirki_fields( $fields ) {
    $fields[] = array(
        'type'     => 'image',
        'setting'  => 'footer_image',
        'label'    => __( 'Footer image', 'odin' ),
        'section'  => 'xango_footer',
        'default'  => '',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'footer_text',
        'label'    => __( 'Footer text', 'odin' ),
        'section'  => 'xango_footer',
        'default'  => '',
        'priority' => 2,
    );
    return $fields;
}
add_filter( 'kirki/fields', 'brasa_xango_kirki_fields' );
