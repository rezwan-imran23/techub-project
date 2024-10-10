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
    
    //header_top_switch
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



    //$header_right_side_switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => '$header_right_side_switch',
            'label'       => esc_html__( 'Header Right Switch', 'techub' ),
            'description' => esc_html__( 'Header right switch control', 'techub' ),
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

    //email_address
    new \Kirki\Field\Text(
        [
            'settings' => 'email_address',
            'label'    => esc_html__( 'Email ID', 'techub' ),
            'section'  => 'techub_header_section',
            'default'  => esc_html__( 'techubinfo@mail.com', 'techub' ),
            'priority' => 10,
        ]
    );

     //header_button_text
     new \Kirki\Field\Text(
        [
            'settings' => 'header_button_text',
            'label'    => esc_html__( 'Button Text', 'techub' ),
            'section'  => 'techub_header_section',
            'default'  => esc_html__( 'Get a Quete', 'techub' ),
            'priority' => 10,
        ]
    );

     //header_button_url
     new \Kirki\Field\Text(
        [
            'settings' => 'header_button_url',
            'label'    => esc_html__( 'Button URL', 'techub' ),
            'section'  => 'techub_header_section',
            'default'  => esc_html__( '#', 'techub' ),
            'priority' => 10,
        ]
    );
    
    
}
techub_header_info_section ();

// side_section
function techub_header_side_section (){

  
    new \Kirki\Section(
        'header_side_info_section',
        [
            'title'       => esc_html__( 'Header Offcanvas', 'techub' ),
            'description' => esc_html__( 'My Header Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );
    
    //header_side_switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_side_info_switch',
            'label'       => esc_html__( 'Header side info Switch', 'techub' ),
            'description' => esc_html__( 'Header side switch control', 'techub' ),
            'section'     => 'header_side_info_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'techub' ),
                'off' => esc_html__( 'Disable', 'techub' ),
            ],
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_side_social_switch',
            'label'       => esc_html__( 'Header Side Social Switch', 'techub' ),
            'description' => esc_html__( 'Header social switch control', 'techub' ),
            'section'     => 'header_side_info_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'techub' ),
                'off' => esc_html__( 'Disable', 'techub' ),
            ],
        ]
    );


  

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_side_logo',
            'label'       => esc_html__( 'Header logo', 'techub' ),
            'description' => esc_html__( 'Please set your header logo.', 'techub' ),
            'section'     => 'header_side_info_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );

    
    
    new \Kirki\Field\Textarea(
        [
            'settings' => 'header_side_content',
            'label'    => esc_html__( 'Header Side Content', 'techub' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( 'Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development', 'techub' ),
            'priority' => 10,
        ]
    );


    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_address_text',
            'label'    => esc_html__( 'Address Text', 'techub' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'techub' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_address_url',
            'label'    => esc_html__( 'Address URL', 'techub' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( '#', 'techub' ),
            'priority' => 10,
        ]
    );

    //side_email_address
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_email_address',
            'label'    => esc_html__( 'Email ID', 'techub' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( 'techubinfo@mail.com', 'techub' ),
            'priority' => 10,
        ]
    );

     //side_phone_number
     new \Kirki\Field\Text(
        [
            'settings' => 'header_side_phone',
            'label'    => esc_html__( 'Phone', 'techub' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( '01776706540', 'techub' ),
            'priority' => 10,
        ]
    );

    
    
}
techub_header_side_section ();

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


// Logo section 3

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


// techub_footer_section 4

function techub_footer_section (){
    new \Kirki\Section(
        'techub_footer_section',
        [
            'title'       => esc_html__( 'Footer', 'techub' ),
            'description' => esc_html__( 'My Footer Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_bg_image',
            'label'       => esc_html__( 'Footer BG Image', 'techub' ),
            'description' => esc_html__( 'Please set your footer bg image.', 'techub' ),
            'section'     => 'techub_footer_section',
    
        ]
    );



    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label'    => esc_html__( 'Copyright Text', 'techub' ),
            'section'  => 'techub_footer_section',
            'default'  => esc_html__( 'Full Copyright & Design By @ Theme pure – 2024 – 2024', 'techub' ),
            'priority' => 10,
        ]
    );

}
techub_footer_section ();


// techub_breadcrumb_section

function techub_breadcrumb_section (){
    new \Kirki\Section(
        'techub_breadcrumb_section',
        [
            'title'       => esc_html__( 'Breadcrumb', 'techub' ),
            'description' => esc_html__( 'My Breadcrumb Section Description.', 'techub' ),
            'panel'       => 'techub_panel',
            'priority'    => 160,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'breadcrumb_bg_img',
            'label'       => esc_html__( 'Breadcrumb BG Image', 'techub' ),
            'description' => esc_html__( 'Please set your breadcrumb bg image.', 'techub' ),
            'section'     => 'techub_breadcrumb_section',
    
        ]
    );


}
techub_breadcrumb_section ();