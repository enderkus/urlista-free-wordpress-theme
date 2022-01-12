<?php 

function urlista_customizer_section($wp_customize) {
    
    $wp_customize->add_section( 'urlista_settings' , array(
        'title'       => __( 'Urlista Settings', 'urlista_theme' ),
        'description' => 'Urlista all settings.',
    ));

    
    $wp_customize->add_setting( 'author_image', array(
        'default' => ''
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'author_image', array(
        'label'    => __( 'Author image', 'urlista_theme' ),
        'section'  => 'urlista_settings',
        'settings' => 'author_image',
    )));


    $wp_customize->add_setting( 'author_name', array(
        'capability' => 'edit_theme_options',
        'default' => 'Hey there, Im John Doe',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'author_name', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Author Name' ),
    ));


    $wp_customize->add_setting( 'author_bio', array(
        'capability' => 'edit_theme_options',
        'default' => 'Ne quo malorum labores prodesset, eu sit quod praesent assueverit. Per doming quaestio consequuntur ne. An atqui dicunt democritum eam, magna ipsum tollit pro ad, sea saepe offendit intellegat in. Eu mei audire aperiri.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'author_bio', array(
        'type' => 'textarea',
        'section' => 'urlista_settings',
        'label' => __( 'Author Bio' ),
    ));

    $wp_customize->add_setting( 'e_mail', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'e_mail', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Your E-Mail Address' ),
    ));


    $wp_customize->add_setting( 'twitter_address', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'twitter_address', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Twitter Profile URL' ),
    ));

    $wp_customize->add_setting( 'instagram_address', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'instagram_address', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Instagram Profile URL' ),
    ));

    $wp_customize->add_setting( 'facebook_address', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'facebook_address', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Facebook Profile URL' ),
    ));


    $wp_customize->add_setting( 'twitch_address', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'twitch_address', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Twitch Profile URL' ),
    ));


    $wp_customize->add_setting( 'dribbble_address', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'dribbble_address', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Dribbble Profile URL' ),
    ));


    $wp_customize->add_setting( 'portfolio_address', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'portfolio_address', array(
        'type' => 'text',
        'section' => 'urlista_settings',
        'label' => __( 'Your Portfolio URL' ),
    ));


}

add_action('customize_register', 'urlista_customizer_section');

?>
