<?php
Redux::setSection( $opt_name, array(
   'title' => esc_html__('General Options', 'qempo'),
   'icon' => 'el-icon-wrench',
   'fields' => array(
      array(
         'id'           => 'color_theme',
         'type'         => 'color',
         'title'        => esc_html__( 'Color Theme', 'qempo' ),
         'default'      => '',
         'transparent'  => false,
         'validate'     => 'color'
      ),
      array(
         'id'           => 'gradient_color_second',
         'type'         => 'color',
         'title'        => esc_html__( 'Gradient Color Second', 'qempo' ),
         'default'      => '',
         'transparent'  => false,
         'validate'     => 'color'
      ),
      array(
         'id'           => 'color_theme_second',
         'type'         => 'color',
         'title'        => esc_html__( 'Color Theme Second', 'qempo' ),
         'default'      => '',
         'transparent'  => false,
         'validate'     => 'color'
      ),
      array(
         'id'           => 'page_layout',
         'type'         => 'button_set',
         'title'        => esc_html__('Page Layout', 'qempo'),
         'subtitle'     => esc_html__('Select the page layout type', 'qempo'),
         'options'      => array(
            'boxed'     => esc_html__('Boxed', 'qempo'),
            'fullwidth' => esc_html__('Fullwidth', 'qempo')
         ),
         'default' => 'fullwidth'
      ),
      array(
         'id'        => 'enable_backtotop',
         'type'      => 'button_set',
         'title'     => esc_html__('Enable Back To Top', 'qempo'),
         'subtitle'  => esc_html__('Enable the back to top button that appears in the bottom right corner of the screen.', 'qempo'),
         'options'   => array(
            '1' => esc_html__('On', 'qempo'),
            '0' => esc_html__('Off', 'qempo')
         ),
         'default'   => '1'
      ),
      array(
        'id' => 'map_api_key',
        'type' => 'text',
        'title' => esc_html__('Google Map API key', 'qempo'),
        'default' => ''
      ),
   )
));