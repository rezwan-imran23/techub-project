<?php

new \Kirki\Panel(
	'harry_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'harry' ),
		'description' => esc_html__( 'My Panel Description.', 'harry' ),
	]
);

// section 1

function harry_header_info_section (){
    new \Kirki\Section(
        'harry_header_section',
        [
            'title'       => esc_html__( 'Header Info', 'harry' ),
            'description' => esc_html__( 'My Header Section Description.', 'harry' ),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );
    
    //header_top_switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_top_switch',
            'label'       => esc_html__( 'Header topbar Switch', 'harry' ),
            'description' => esc_html__( 'Header topbar switch control', 'harry' ),
            'section'     => 'harry_header_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'harry' ),
                'off' => esc_html__( 'Disable', 'harry' ),
            ],
        ]
    );



    //$header_right_side_switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => '$header_right_side_switch',
            'label'       => esc_html__( 'Header Right Switch', 'harry' ),
            'description' => esc_html__( 'Header right switch control', 'harry' ),
            'section'     => 'harry_header_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'harry' ),
                'off' => esc_html__( 'Disable', 'harry' ),
            ],
        ]
    );
    
    
    new \Kirki\Field\Text(
        [
            'settings' => 'address_text',
            'label'    => esc_html__( 'Address Text', 'harry' ),
            'section'  => 'harry_header_section',
            'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'harry' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'address_url',
            'label'    => esc_html__( 'Address URL', 'harry' ),
            'section'  => 'harry_header_section',
            'default'  => esc_html__( '#', 'harry' ),
            'priority' => 10,
        ]
    );

    //email_address
    new \Kirki\Field\Text(
        [
            'settings' => 'email_address',
            'label'    => esc_html__( 'Email ID', 'harry' ),
            'section'  => 'harry_header_section',
            'default'  => esc_html__( 'harryinfo@mail.com', 'harry' ),
            'priority' => 10,
        ]
    );

     //header_button_text
     new \Kirki\Field\Text(
        [
            'settings' => 'header_button_text',
            'label'    => esc_html__( 'Button Text', 'harry' ),
            'section'  => 'harry_header_section',
            'default'  => esc_html__( 'Get a Quete', 'harry' ),
            'priority' => 10,
        ]
    );

     //header_button_url
     new \Kirki\Field\Text(
        [
            'settings' => 'header_button_url',
            'label'    => esc_html__( 'Button URL', 'harry' ),
            'section'  => 'harry_header_section',
            'default'  => esc_html__( '#', 'harry' ),
            'priority' => 10,
        ]
    );
    
    
}
harry_header_info_section ();

// side_section
function harry_header_side_section (){

  
    new \Kirki\Section(
        'header_side_info_section',
        [
            'title'       => esc_html__( 'Header Offcanvas', 'harry' ),
            'description' => esc_html__( 'My Header Section Description.', 'harry' ),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );
    
    //header_side_switch
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_side_info_switch',
            'label'       => esc_html__( 'Header side info Switch', 'harry' ),
            'description' => esc_html__( 'Header side switch control', 'harry' ),
            'section'     => 'header_side_info_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'harry' ),
                'off' => esc_html__( 'Disable', 'harry' ),
            ],
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_side_social_switch',
            'label'       => esc_html__( 'Header Side Social Switch', 'harry' ),
            'description' => esc_html__( 'Header social switch control', 'harry' ),
            'section'     => 'header_side_info_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'harry' ),
                'off' => esc_html__( 'Disable', 'harry' ),
            ],
        ]
    );


  

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_side_logo',
            'label'       => esc_html__( 'Header logo', 'harry' ),
            'description' => esc_html__( 'Please set your header logo.', 'harry' ),
            'section'     => 'header_side_info_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );

    
    
    new \Kirki\Field\Textarea(
        [
            'settings' => 'header_side_content',
            'label'    => esc_html__( 'Header Side Content', 'harry' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( 'Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development', 'harry' ),
            'priority' => 10,
        ]
    );


    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_address_text',
            'label'    => esc_html__( 'Address Text', 'harry' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'harry' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_address_url',
            'label'    => esc_html__( 'Address URL', 'harry' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( '#', 'harry' ),
            'priority' => 10,
        ]
    );

    //side_email_address
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_email_address',
            'label'    => esc_html__( 'Email ID', 'harry' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( 'harryinfo@mail.com', 'harry' ),
            'priority' => 10,
        ]
    );

     //side_phone_number
     new \Kirki\Field\Text(
        [
            'settings' => 'header_side_phone',
            'label'    => esc_html__( 'Phone', 'harry' ),
            'section'  => 'header_side_info_section',
            'default'  => esc_html__( '01776706540', 'harry' ),
            'priority' => 10,
        ]
    );

    
    
}
harry_header_side_section ();

// section 2

function harry_header_social_section(){
    new \Kirki\Section(
        'harry_header_social_section',
        [
            'title'       => esc_html__( 'Header Social', 'harry' ),
            'description' => esc_html__( 'My Header Social Info.', 'harry' ),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );
     
    new \Kirki\Field\Text(
        [
            'settings' => 'header_facebook_url',
            'label'    => esc_html__( 'Facebook URL', 'harry' ),
            'section'  => 'harry_header_social_section',
            'default'  => esc_html__( '#', 'harry' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_instagram_url',
            'label'    => esc_html__( 'Instagram URL', 'harry' ),
            'section'  => 'harry_header_social_section',
            'default'  => esc_html__( '#', 'harry' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_twitter_url',
            'label'    => esc_html__( 'Twitter URL', 'harry' ),
            'section'  => 'harry_header_social_section',
            'default'  => esc_html__( '#', 'harry' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_pinterest_url',
            'label'    => esc_html__( 'Pinterest URL', 'harry' ),
            'section'  => 'harry_header_social_section',
            'default'  => esc_html__( '#', 'harry' ),
            'priority' => 10,
        ]
    );
    
    
}
harry_header_social_section();


// Logo section 3

function harry_header_logo_section (){
    new \Kirki\Section(
        'harry_header_logo_section',
        [
            'title'       => esc_html__( 'Header logo', 'harry' ),
            'description' => esc_html__( 'My Header Section Description.', 'harry' ),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header logo', 'harry' ),
            'description' => esc_html__( 'Please set your header logo.', 'harry' ),
            'section'     => 'harry_header_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo-green.svg',
        ]
    );

}
harry_header_logo_section ();


// harry_footer_section 4

function harry_footer_section (){
    new \Kirki\Section(
        'harry_footer_section',
        [
            'title'       => esc_html__( 'Footer', 'harry' ),
            'description' => esc_html__( 'My Footer Section Description.', 'harry' ),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_bg_image',
            'label'       => esc_html__( 'Footer BG Image', 'harry' ),
            'description' => esc_html__( 'Please set your footer bg image.', 'harry' ),
            'section'     => 'harry_footer_section',
    
        ]
    );



    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label'    => esc_html__( 'Copyright Text', 'harry' ),
            'section'  => 'harry_footer_section',
            'default'  => esc_html__( 'Full Copyright & Design By @ Theme pure – 2024 – 2024', 'harry' ),
            'priority' => 10,
        ]
    );

}
harry_footer_section ();


// harry_breadcrumb_section

function harry_breadcrumb_section (){
    new \Kirki\Section(
        'harry_breadcrumb_section',
        [
            'title'       => esc_html__( 'Breadcrumb', 'harry' ),
            'description' => esc_html__( 'My Breadcrumb Section Description.', 'harry' ),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'breadcrumb_bg_img',
            'label'       => esc_html__( 'Breadcrumb BG Image', 'harry' ),
            'description' => esc_html__( 'Please set your breadcrumb bg image.', 'harry' ),
            'section'     => 'harry_breadcrumb_section',
    
        ]
    );


}
harry_breadcrumb_section ();