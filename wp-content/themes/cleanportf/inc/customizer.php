<?php



function funcao_do_customizer( $wp_customize ) {

$wp_customize->add_section( 'background_color', array(
	'title' => __( 'Theme Colors', 'cleanportf' ),
	'priority' => 100,
) );

// add color picker setting
$wp_customize->add_setting( 'link_color', array(
	'default' => '#ff0000'
) );

// add color picker control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label' => 'Link Color',
	'section' => 'background_color',
	'settings' => 'link_color',
) ) );





/// Logo-Footer

$wp_customize->add_section( 'logoFooter' , array(
    'title'       => __( 'Logo Footer', 'cleanportf' ),
    'priority'    => 150,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'cleanportf_logofooter' );


$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Upload a logo', 'cleanportf' ),
               'section'    => 'logoFooter',
               'settings'   => 'cleanportf_logofooter',
 
           )
       )
   );

}
