<?php
Redux::setSection( $opt_name, array(
  	'title' => esc_html__('Footer Options', 'qempo'),
  	'icon' => 'el-icon-compass',
  	'fields' => array(
	 	array(
			'id' 			=> 'footer_layout',
			'type' 		=> 'select',
			'options' 	=> qempo_get_footer(),
			'default' 	=> 'footer-1'
	 	),
	 	array(
			'id' 			=> 'copyright_default',
			'type' 		=> 'button_set',
			'title' 		=> esc_html__('Enable/Disable Copyright Text', 'qempo'),
			'options' 	=> array(
				'yes' 	=> esc_html__('Enable', 'qempo'),
				'no' 		=> esc_html__('Disable', 'qempo')
			),
			'default' 	=> 'yes'
	 	),
	 	array(
			'id' 			=> 'copyright_text',
			'type' 		=> 'editor',
			'title' 		=> esc_html__('Footer Copyright Text', 'qempo'),
			'default' 	=> esc_html__('Copyright - 2021 - Company - All rights reserved. Powered by WordPress.', 'qempo')
	 	),
  	)
));