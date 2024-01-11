<?php
Redux::setSection( $opt_name, array(
	'title' 	=> esc_html__('Breadcrumb Options', 'qempo'),
	'icon' 	=> 'el-icon-compass',
	'fields' => array(
		array(
		  	'id' 			=> 'breadcrumb_show_title',
		  	'type' 		=> 'button_set',
		  	'title' 		=> esc_html__('Breadcrumb Display Title Page', 'qempo'),
		  	'options' 	=> array(
				1 => esc_html__('Enable', 'qempo'),
				0 => esc_html__('Disable', 'qempo')
			),
		  	'default' => 1
		),
		array(
		  	'id'        => 'breadcrumb_padding_top',
		  	'type'      => 'slider',
		  	'title'     => esc_html__('Breadcrumb Padding Top', 'qempo'),
		  	'default'   => 135,
		  	'min'       => 50,
		  	'max'       => 500,
		  	'step'      => 1,
		  	'display_value' => 'text',
		),
		array(
		  	'id'        => 'breadcrumb_padding_bottom',
		  	'type'      => 'slider',
		  	'title'     => esc_html__('Breadcrumb Padding Top', 'qempo'),
		  	'default'   => 135,
		  	'min'       => 50,
		  	'max'       => 500,
		  	'step'      => 1,
		  	'display_value' => 'text',
		),
		array(
		  	'id' 			=> 'breadcrumb_background_color',
		  	'type' 		=> 'color',
		  	'title' 		=> esc_html__('Background Overlay Color', 'qempo'),
		  	'default' 	=> '#1F2230'
		),
		array(
		  	'id'        => 'breadcrumb_background_opacity',
		  	'type'      => 'slider',
		  	'title'     => esc_html__('Breadcrumb Ovelay Color Opacity', 'qempo'),
		  	'default'   => 50,
		  	'min'       => 0,
		  	'max'       => 100,
		  	'step'      => 1,
		  	'display_value' => 'text'
		),
		array(
		  	'id' 			=> 'breadcrumb_image',
		  	'type' 		=> 'button_set',
		  	'title' 		=> esc_html__('Enable Breadcrumb Image', 'qempo'),
		  	'options' 	=> array(
		  		1 => esc_html__('Enable', 'qempo'),
		  		0 => esc_html__('Disable', 'qempo')
		  	),
		  	'default' 	=> 1
		),
		array(
		  	'id' 			=> 'breadcrumb_background_image',
		  	'type' 		=> 'media',
		  	'url' 		=> true,
		  	'title' 		=> esc_html__('Breadcrumb Background Image', 'qempo'),
		  	'default' 	=> '',
		  	'required'  => array( 'breadcrumb_image', '=', 1 )
		),
		array(
		  	'id'    		=> 'breadcrumb_text_stype',
		  	'type'    	=> 'select',
		  	'title'   	=> esc_html__( 'Breadcrumb Text Stype', 'qempo' ),
		  	'options' 	=> 
		  	array(
			 	'text-light'     => esc_html__('Light', 'qempo'),
			 	'text-dark'      => esc_html__('Dark', 'qempo')
		  	),
		  	'default' => 'text-light'
		),
		array(
		  	'id'    		=> 'breadcrumb_text_align',
		  	'type'    	=> 'select',
		  	'title'   	=> esc_html__( 'Breadcrumb Text Align', 'qempo' ),
		  	'options' 	=> 
		  	array(
			 	'text-left'      => esc_html__('Left', 'qempo'),
			 	'text-center'    => esc_html__('Center', 'qempo'),
			 	'text-right'     => esc_html__('Right', 'qempo')
		  	),
		  	'default' => 'text-left'
		)
	)
));