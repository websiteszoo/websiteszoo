<?php
Redux::setSection( $opt_name, array(
   'title'     => esc_html__( 'Typography', 'qempo' ),
   'icon'      => 'el-icon-font',
   'fields'    => array(
      array (
         'id'     => 'main_font_info',
         'type'   => 'info',
         'icon'   => true,
         'raw'    => '<h3 class="margin-bottom-0">' . esc_html__( 'Main Font', 'qempo' ) . '</h3>',
      ),
      array(
         'id'        => 'main_font_source',
         'type'      => 'radio',
         'title'     => esc_html__( 'Font Source', 'qempo' ),
         'options'   => array(
            '0'   => esc_html__('(none)', 'qempo'),
            '1'   => esc_html__('Standard + Google Webfonts', 'qempo'), 
         ),
         'default'   => '1'
      ),
      // Main font: Standard + Google Webfonts
      array (
         'id'           => 'main_font',
         'type'         => 'typography',
         'title'        => esc_html__( 'Font Face', 'qempo' ),
         'line-height'  => false,
         'text-align'   => false,
         'font-style'   => false,
         'font-weight'  => false,
         'font-size'    => false,
         'color'        => false,
         'default'      => array (
            'font-family'  => 'Open Sans',
            'subsets'      => '',
         ),
         'required'     => array( 'main_font_source', '=', '1' )
      ),
   
      // Secondary font
      array (
         'id'     => 'secondary_font_info',
         'icon'   => true,
         'type'   => 'info',
         'raw'    => '<h3 class="margin-bottom-0">' . esc_html__( 'Secondary Font', 'qempo' ) . '</h3>',
      ),
      array(
         'id'        => 'secondary_font_source',
         'type'      => 'radio',
         'title'     => esc_html__('Font Source', 'qempo'),
         'options'   => array(
            '0'   => esc_html__('(none)', 'qempo'),
            '1'   => esc_html__('Standard + Google Webfonts', 'qempo'), 
         ),
         'default'   => '0'
      ),
      // Secondary font: Standard + Google Webfonts
      array (
         'id'           => 'secondary_font',
         'type'         => 'typography',
         'title'        => esc_html__( 'Font Face', 'qempo' ),
         'line-height'  => false,
         'text-align'   => false,
         'font-style'   => false,
         'font-weight'  => false,
         'font-size'    => false,
         'color'        => false,
         'default'      => array (
            'font-family'  => 'Open Sans',
            'subsets'      => '',
         ),
         'required'     => array( 'secondary_font_source', '=', '1' )
      )
   )
));