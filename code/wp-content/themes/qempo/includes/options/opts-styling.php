<?php
Redux::setSection( $opt_name, array(
  'title'     	=> esc_html__( 'Styling', 'qempo' ),
  'icon'      	=> 'el-icon-pencil',
  'fields' 		=> array(
	 	array(
			'id'  	=> 'colors_info_styling',
			'type'   => 'info',
			'raw' 	=> '<h3 class="margin-bottom-0">' . esc_html__( 'Colors', 'qempo' ) . '</h3>'
	 	),
	 	array(
			'id'        	=> 'body_color',
			'type'         => 'color',
			'title'        => esc_html__( 'Body Color', 'qempo' ),
			'default'      => '',
			'transparent'  => false,
			'validate'     => 'color'
	 	),
	 	array(
			'id'        	=> 'color_link',
			'type'         => 'color',
			'title'        => esc_html__( 'Link Color', 'qempo' ),
			'default'      => '',
			'transparent'  => false,
			'validate'     => 'color'
	 	),
	 	array(
			'id'        	=> 'color_link_hover',
			'type'         => 'color',
			'title'        => esc_html__( 'Link Hover Color', 'qempo' ),
			'default'      => '',
			'transparent'  => false,
			'validate'     => 'color'
	 	),
	 	array(
			'id'        	=> 'color_heading',
			'type'         => 'color',
			'title'        => esc_html__( 'Heading Color', 'qempo' ),
			'default'      => '',
			'transparent'  => false,
			'validate'     => 'color'
	 	),

	 	array(
			'id'  	=> 'info_background',
			'type'   => 'info',
			'raw' 	=> '<h3 class="margin-bottom-0">' . esc_html__( 'Background', 'qempo' ) . '</h3>'
	 	),
	 	array(
			'id'        	=> 'main_background_color',
			'type'         => 'color',
			'title'        => esc_html__( 'Background Color', 'qempo' ),
			'desc'         => esc_html__( 'Used for the main site background.', 'qempo' ),
			'default'      => '',
			'transparent'  => false,
			'validate'     => 'color'
	 	),
	 	array(
			'id'  	=> 'main_background_image',
			'type'   => 'media', 
			'url' 	=> true,
			'title'  => esc_html__( 'Background Image', 'qempo' ),
			'desc'   => esc_html__( 'Upload a background image or specify a URL (boxed layout).', 'qempo' )
	 	),
		array(
			'id'     	=> 'main_background_image_type',
			'type'      => 'select',
			'title'     => esc_html__( 'Background Type', 'qempo' ),
			'desc'      => esc_html__( 'Select the background-image type (fixed image or repeat pattern/texture).', 'qempo' ),
			'options'   => array( 
				'fixed' => esc_html__('Fixed (Full)', 'qempo'), 
				'repeat' => esc_html__('Repeat (Pattern)', 'qempo')
			),
			'default'   => 'fixed'
		),
	 	
	 	array(
			'id'  		=> 'footer_info_styling',
			'type'  		=> 'info',
			'raw' 		=> '<h3 class="margin-bottom-0">' . esc_html__( 'Footer Default Styling', 'qempo' ) . '</h3>'
	 	),
		array(
			'id'    		=> 'footer_bg_color',
			'type'    	=> 'color',
			'title'   	=> esc_html__( 'Background Color', 'qempo' ),
			'default' 	=> '',
			'validate'  => 'color'
		),
	 	array(
			'id'    		=> 'footer_color',
			'type'    	=> 'color',
			'title'   	=> esc_html__( 'Text Color', 'qempo' ),
			'default' 	=> '',
			'validate'  => 'color'
	 	),
		array(
			'id'    		=> 'footer_color_link',
			'type'    	=> 'color',
			'title'   	=> esc_html__( 'Link Color', 'qempo' ),
			'default' 	=> '',
			'validate'  => 'color'
		),
	  	array(
			'id'    		=> 'footer_color_link_hover',
			'type'    	=> 'color',
			'title'   	=> esc_html__( 'Link Hover Color', 'qempo' ),
			'default' 	=> '',
			'validate'  => 'color'
	 	)
  	)
));