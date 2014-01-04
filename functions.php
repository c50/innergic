<?php
/**
 * Innergic functions and definitions
 *
 * @package WordPress
 * @subpackage innergic
 * @since innergic 1.0
 */


function innergic_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'innergic_logo_section' , array(
        'title'       => __( 'Logo', 'innergic' ),
        'priority'    => 30,
        'description' => 'Upload a logo to display beside the title',
    ) );
    
    $wp_customize->add_setting( 'innergic_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'innergic_logo', array(
        'label'    => __( 'Logo', 'innergic' ),
        'section'  => 'innergic_logo_section',
        'settings' => 'innergic_logo',
    ) ) );
}
add_action('customize_register', 'innergic_theme_customizer');

add_action( 'update_option_theme_mods_innergic-wp', 'twentyfourteen_rebuild_accent_colors' );


?>