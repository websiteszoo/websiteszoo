<?php
  	Redux::setSection( $opt_name, array(
	 	'title' 	=> esc_html__('Header Options', 'qempo'),
	 	'icon' 	=> 'el-icon-compass',
	 	'fields' => array(
			array(
			  	'id' 			=> 'header_layout',
			  	'type' 		=> 'select',
			  	'title' 		=> esc_html__('Header Layout', 'qempo'),
			  	'subtitle' 	=> esc_html__('Select a header layout option from the examples.', 'qempo'),
			  	'options' 	=> qempo_get_headers(false),
			  	'default' 	=> 'header-1'
			),
			array(
			  'id' 		=> 'header_logo', 
			  'type' 	=> 'media',
			  'url' 		=> true,
			  'title' 	=> esc_html__('Logo in header default', 'qempo'), 
			  'default' => ''
			),  
			array(
			  'id'  		=> 'header_mobile_settings',
			  'type'  	=> 'info',
			  'raw' 		=> '<h3 class="margin-bottom-0">' . esc_html__( 'Header Mobile settings', 'qempo' ) . '</h3>'
			),
			array(
			  'id' 		=> 'hm_logo',
			  'type' 	=> 'media',
			  'url' 		=> true,
			  'title' 	=> esc_html__('Header Mobile | Logo', 'qempo'),
			  'default' => ''
			),
			array(
			  'id' 		=> 'hm_show_topbar',
			  'type' 	=> 'button_set',
			  'title' 	=> esc_html__('Show Topbar', 'qempo'),
			  'options' => array(
			  		'yes' => esc_html__('Enable', 'qempo'),
			  		'no' => esc_html__('Disable', 'qempo')
			  	),
			  'default' => 'no'
			),
			array(
	        'id' 		=> 'hm_topbar_information',
	        'type' 	=> 'editor',
	        'title' 	=> esc_html__('Topbar Information', 'qempo'),
	        'default' => '<ul class="inline"><li><span><i class="fa fa-envelope"></i>contact@example.com</span></li><li><span><i class="fa fa-phone"></i>666 888 0000</span></li></ul>'
	      ),
			
			//-- Socials --
			array(
			  'id'  		=> 'header_mobile_socials_settings',
			  'type'  	=> 'info',
			  'raw' 		=> '<h3 class="margin-bottom-0">' . esc_html__( 'Social Header Mobile Settings', 'qempo' ) . '</h3>'
			),
			array(
				'id'			=> 'hm_social_facebook',
				'type' 		=> 'text',
				'title' 		=> esc_html__( 'Facebook', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your Facebook profile URL.', 'qempo' ),
				'default'	=> ''
			),
			array(
				'id'			=> 'hm_social_instagram',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Instagram', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your Instagram profile URL.', 'qempo' ),
				'default'	=> ''
			),
			array(
				'id'			=> 'hm_social_twitter',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Twitter', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your Twitter profile URL.', 'qempo' ),
				'default'	=> ''
			),
			array(
				'id'			=> 'hm_social_linkedin',
				'type'		=> 'text',
				'title'		=> esc_html__( 'LinedIn', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your LinkedIn profile URL.', 'qempo' ),
				'default'	=> ''
			),
			array(
				'id'			=> 'hm_social_pinterest',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Pinterest', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your Pinterest profile URL.', 'qempo' ),
				'default'	=> ''
			),
			array(
				'id'			=> 'hm_social_tumblr',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Tumblr', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your Tumblr profile URL.', 'qempo' ),
				'default'	=> ''
			),
			array(
				'id'			=> 'hm_social_vimeo',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Vimeo', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your Vimeo profile URL.', 'qempo' ),
				'default'	=> ''
			),
			array(
				'id'			=> 'hm_social_youtube',
				'type'		=> 'text',
				'title'		=> esc_html__( 'YouTube', 'qempo' ),
				'desc'		=> esc_html__( 'Enter your YouTube profile URL.', 'qempo' ),
				'default'	=> ''
			)
	 	)
  	));