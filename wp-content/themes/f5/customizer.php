<?php

function f5_customize_register( $wp_customize ) {

    
    // Add Section
    $wp_customize->add_section('bunner', array(
        'title'             => __('Баннер', 'f5'), 
        'priority'          => 70,
    )); 


    // Add setting
    $wp_customize->add_setting('f5_bunner_logo', array(
        'transport'         => 'refresh',
    ));

    // // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'f5_bunner_logo', array(
        'label'             => __('Баннер лого', 'f5'),
        'section'           => 'bunner',
        'settings'          => 'f5_bunner_logo',
    )));



     // Add setting
    $wp_customize->add_setting('f5_bunner_header', array(
        'transport'         => 'refresh',
    ));
    // // Add Controls
    $wp_customize->add_control( 
        'f5_bunner_header', 
        array(
        'label'             => __('Баннер заголовок', 'f5'),
        'section'           => 'bunner',
        'settings'          => 'f5_bunner_header',
    ));



     // Add setting
    $wp_customize->add_setting('f5_bunner_text', array(
        'transport'         => 'refresh',
    ));
    // // Add Controls
    $wp_customize->add_control(  
        'f5_bunner_text', 
        array(
        'label'             => __('Баннер текст', 'f5'),
        'section'           => 'bunner',
        'settings'          => 'f5_bunner_text',
        'type'              => 'textarea',
    ));


}



add_action('customize_register', 'f5_customize_register');