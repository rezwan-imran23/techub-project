<?php

new \Kirki\Panel(
	'techub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'techub' ),
		'description' => esc_html__( 'My Panel Description.', 'techub' ),
	]
);

// section 1

function techub_header_info_section (){
    new \Kirki\Section(
        'techub_header_section',
        [
            'title'       => esc_html__( 'Header Info', 'techub' ),
            'description' => esc_html__( 'My Header Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );
    
    
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_top_switch',
            'label'       => esc_html__( 'Header topbar Switch', 'techub' ),
            'description' => esc_html__( 'Header topbar switch control', 'techub' ),
            'section'     => 'techub_header_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'techub' ),
                'off' => esc_html__( 'Disable', 'techub' ),
            ],
        ]
    );
    
    
    new \Kirki\Field\Text(
        [
            'settings' => 'address_text',
            'label'    => esc_html__( 'Address Text', 'techub' ),
            'section'  => 'techub_header_section',
            'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'techub' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'address_url',
            'label'    => esc_html__( 'Address URL', 'techub' ),
            'section'  => 'techub_header_section',
            'default'  => esc_html__( '#', 'techub' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'email_address',
            'label'    => esc_html__( 'Email ID', 'techub' ),
            'section'  => 'techub_header_section',
            'default'  => esc_html__( 'techubinfo@mail.com', 'techub' ),
            'priority' => 10,
        ]
    );
    
    
}
techub_header_info_section ();

// section 2

function techub_header_social_section(){
    new \Kirki\Section(
        'techub_header_social_section',
        [
            'title'       => esc_html__( 'Header Social', 'techub' ),
            'description' => esc_html__( 'My Header Social Info.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );
    
    
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_facebook_url',
            'label'    => esc_html__( 'Facebook URL', 'techub' ),
            'section'  => 'techub_header_social_section',
            'default'  => esc_html__( '#', 'techub' ),
            'priority' => 10,
        ]
    );
    
    
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_instagram_url',
            'label'    => esc_html__( 'Instagram URL', 'techub' ),
            'section'  => 'techub_header_social_section',
            'default'  => esc_html__( '#', 'techub' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_twitter_url',
            'label'    => esc_html__( 'Twitter URL', 'techub' ),
            'section'  => 'techub_header_social_section',
            'default'  => esc_html__( '#', 'techub' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_pinterest_url',
            'label'    => esc_html__( 'Pinterest URL', 'techub' ),
            'section'  => 'techub_header_social_section',
            'default'  => esc_html__( '#', 'techub' ),
            'priority' => 10,
        ]
    );
    
    
}
techub_header_social_section();


// section 3

function techub_header_logo_section (){
    new \Kirki\Section(
        'techub_header_logo_section',
        [
            'title'       => esc_html__( 'Header logo', 'techub' ),
            'description' => esc_html__( 'My Header Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header logo', 'techub' ),
            'description' => esc_html__( 'Please set your header logo.', 'techub' ),
            'section'     => 'techub_header_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );

}
techub_header_logo_section ();