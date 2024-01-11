<?php
Redux::setSection( $opt_name, array(
   'icon'   => 'el-icon-shopping-cart',
   'title'  => esc_html__('Product Options', 'qempo'),
   'fields' => array(
      array(
        'id'        => 'products_per_page',
        'type'      => 'text',
        'title'     => esc_html__('Products Per Page', 'qempo'),
        'subtitle'  => esc_html__('Number value.', 'qempo'),
        'desc'      => esc_html__('The amount of products you would like to show per page on shop/category pages.', 'qempo'),
        'validate'  => 'numeric',
        'default'   => '24'
      )       
   )
));

Redux::setSection( $opt_name, array(
   'icon'         => 'el-icon-shopping-cart',
   'title'        => esc_html__('Shop Options', 'qempo'),
   'subsection'   => true,
   'fields'       => array(
      array(
         'id'        => 'product_display_layout',
         'type'      => 'select',
         'title'     => esc_html__('Default Product Display Layout', 'qempo'),
         'subtitle'  => esc_html__('Choose the default product display layout for WooCommerce shop/category pages.', 'qempo'),
         'options'   => array(
            'grid'   => 'Grid',
            'list'   => 'List',
        ),
        'default' => 'standard'
      ),
      array(
         'id'        => 'product_columns_lg',
         'type'      => 'select',
         'title'     => esc_html__('Display Columns for Large Screen', 'qempo'),
         'subtitle'  => esc_html__('Choose the number of columns to display on shop/category pages.', 'qempo'),
         'options'   => array(
            '1'      => '1',
            '2'      => '2',
            '3'      => '3',
            '4'      => '4',
            '5'      => '5',
            '6'      => '6',
         ),
         'default'   => '3'
      ),

      array(
         'id'        => 'product_columns_md',
         'type'      => 'select',
         'title'     => esc_html__('Display Columns for Medium Screen', 'qempo'),
         'subtitle'  => esc_html__('Choose the number of columns to display on shop/category pages.', 'qempo'),
         'options'   => array(
            '1'      => '1',
            '2'      => '2',
            '3'      => '3',
            '4'      => '4',
            '5'      => '5',
            '6'      => '6',
         ),
         'default'   => '3'
      ),

      array(
         'id'        => 'product_columns_sm',
         'type'      => 'select',
         'title'     => esc_html__('Display Columns for Small Screen', 'qempo'),
         'subtitle'  => esc_html__('Choose the number of columns to display on shop/category pages.', 'qempo'),
         'options'   => array(
            '1'      => '1',
            '2'      => '2',
            '3'      => '3',
            '4'      => '4',
            '5'      => '5',
            '6'      => '6',
         ),
         'default'   => '2'
      ),

      array(
         'id'        => 'product_columns_xs',
         'type'      => 'select',
         'title'     => esc_html__('Display Columns for Extra Small Screen', 'qempo'),
         'subtitle'  => esc_html__('Choose the number of columns to display on shop/category pages.', 'qempo'),
         'options'   => array(
            '1'      => '1',
            '2'      => '2',
            '3'      => '3',
            '4'      => '4',
            '5'      => '5',
            '6'      => '6',
         ),
         'default'   => '1'
      ),

      array(
         'id'        => 'woo_sidebar_config',
         'type'      => 'select',
         'title'     => esc_html__('WooCommerce Sidebar Config', 'qempo'),
         'subtitle'  => esc_html__('Choose the sidebar config for WooCommerce shop/category pages.', 'qempo'),
         'options'   => array(
           'no-sidebars'     => esc_html__('No Sidebars', 'qempo'),
           'left-sidebar'    => esc_html__('Left Sidebar', 'qempo'),
           'right-sidebar'   => esc_html__('Right Sidebar', 'qempo')
         ),
         'default' => 'no-sidebars'
      ),
      array(
         'id'        => 'woo_left_sidebar',
         'type'      => 'select',
         'title'     => esc_html__('WooCommerce Left Sidebar', 'qempo'),
         'subtitle'  => esc_html__('Choose the left sidebar for WooCommerce shop/category pages.', 'qempo'),
         'data'      => 'sidebars',
         'default'   => 'woocommerce_sidebar'
      ),
      array(
         'id'        => 'woo_right_sidebar',
         'type'      => 'select',
         'title'     => esc_html__('WooCommerce Right Sidebar', 'qempo'),
         'subtitle'  => esc_html__('Choose the right sidebar for WooCommerce shop/category pages.', 'qempo'),
         'data'      => 'sidebars',
         'default'   => 'woocommerce_sidebar'
      ),
      array(
         'id'     => 'woo_shop_divide_0',
         'type'   => 'divide'
      ),
      array(
         'id'        => 'woo_breadcrumb_show_title',
         'type'      => 'button_set',
         'title'     => esc_html__('Breadcrumb Display Title Page', 'qempo'),
         'options'   => array(
            1 => esc_html__('Enable', 'qempo'),
            0 => esc_html__('Disable', 'qempo')
         ),
         'default'   => 1
      ),
      array(
         'id'        => 'woo_breadcrumb_padding_top',
         'type'      => 'slider',
         'title'     => esc_html__('Breadcrumb Padding Top', 'qempo'),
         'default'   => 110,
         'min'       => 50,
         'max'       => 500,
         'step'      => 1,
         'display_value' => 'text',
      ),
      array(
         'id'        => 'woo_breadcrumb_padding_bottom',
         'type'      => 'slider',
         'title'     => esc_html__('Breadcrumb Padding Top', 'qempo'),
         'default'   => 100,
         'min'       => 50,
         'max'       => 500,
         'step'      => 1,
         'display_value' => 'text',
      ),
      array(
         'id'        => 'woo_breadcrumb_background_color',
         'type'      => 'color',
         'title'     => esc_html__('Background Overlay Color', 'qempo'),
         'default'   => ''
      ),
      array(
         'id'        => 'woo_breadcrumb_background_opacity',
         'type'      => 'slider',
         'title'     => esc_html__('Breadcrumb Ovelay Color Opacity', 'qempo'),
         'default'   => 50,
         'min'       => 0,
         'max'       => 100,
         'step'      => 2,
         'display_value' => 'text',
      ),
      array(
         'id'        => 'woo_breadcrumb_image',
         'type'      => 'button_set',
         'title'     => esc_html__('Breadcrumb Image', 'qempo'),
         'options'   => array( 
            1 => esc_html__('Enable', 'qempo'),
            0 => esc_html__('Disable', 'qempo')
         ),
         'default'   => 'enable'
      ),
      array(
         'id'        => 'woo_breadcrumb_background_image',
         'type'      => 'media',
         'url'       => true,
         'title'     => esc_html__('Breadcrumb Background Image', 'qempo'),
         'default'   => '',
         'required'  => array('woo_breadcrumb_image', '=', 1 )
      ),
      array(
         'id'        => 'woo_breadcrumb_text_stype',
         'type'      => 'select',
         'title'     => esc_html__('Breadcrumb Text Stype', 'qempo'),
         'options'   => 
         array(
            'text-light'     => esc_html__('Light', 'qempo'),
            'text-dark'      => esc_html__('Dark', 'qempo')
         ),
         'default' => 'text-light'
      ),
      array(
         'id'        => 'woo_breadcrumb_text_align',
         'type'      => 'select',
         'title'     => esc_html__('Breadcrumb Text Align', 'qempo'),
         'options'   => 
         array(
            'text-left'      => esc_html__('Left', 'qempo'),
            'text-center'    => esc_html__('Center', 'qempo'),
            'text-right'     => esc_html__('Right', 'qempo')
         ),
         'default' => 'text-center'
      )
   )
));

Redux::setSection( $opt_name, array(
   'icon'         => 'el-icon-shopping-cart',
   'title'        => esc_html__('Product Options', 'qempo'),
   'subsection'   => true,
   'fields'       => array(
      array(
         'id'        => 'upsell_heading_text',
         'type'      => 'text',
         'title'     => esc_html__('Upsell Heading Text', 'qempo'),
         'default'   => esc_html__('Complete the look', 'qempo')
      ),
      array(
         'id'        => 'related_heading_text',
         'type'      => 'text',
         'title'     => esc_html__('Related Heading Text', 'qempo'),
         'default'   => esc_html__('Related Products', 'qempo')
      )
   )
));