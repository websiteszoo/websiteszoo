<?php
Redux::setSection($opt_name, array(
   'icon'   => 'el-icon-th-list',
   'title'  => esc_html__('Page Options', 'qempo'),
   'fields' => array(
      array(
         'id'        => 'default_show_page_heading',
         'type'      => 'button_set',
         'title'     => esc_html__('Default Show Page Heading', 'qempo'),
         'subtitle'  => esc_html__('Choose the default state for the page heading, shown/hidden.', 'qempo'),
         'options'   => array(
            '1' => esc_html__('On', 'qempo'),
            '0' => esc_html__('Off', 'qempo')
         ),
         'default'   => '1'
      ),
      array(
         'id'        => 'default_sidebar_config',
         'type'      => 'select',
         'title'     => esc_html__('Default Page Sidebar Config', 'qempo'),
         'subtitle'  => esc_html__('Choose the default sidebar config for pages', 'qempo'),
         'options'   => array(
            'no-sidebars'     => esc_html__('No Sidebars', 'qempo'),
            'left-sidebar'    => esc_html__('Left Sidebar', 'qempo'),
            'right-sidebar'   => esc_html__('Right Sidebar', 'qempo')
         ),
         'default' => 'no-sidebars'
      ),
      array(
         'id'        => 'default_left_sidebar',
         'type'      => 'select',
         'title'     => esc_html__('Default Page Left Sidebar', 'qempo'),
         'subtitle'  => esc_html__('Choose the default left sidebar for pages', 'qempo'),
         'data'      => 'sidebars',
         'default'   => 'sidebar-1'
      ),
      array(
         'id'        => 'default_right_sidebar',
         'type'      => 'select',
         'title'     => esc_html__('Default Page Right Sidebar', 'qempo'),
         'subtitle'  => esc_html__('Choose the default right sidebar for pages', 'qempo'),
         'data'      => 'sidebars',
         'default'   => 'sidebar-1'
      ),

      array(
         'id'     => 'nf_page_info',
         'type'   => 'info',
         'icon'   => true,
         'raw'    => '<h3 class="margin-bottom-0">' . esc_html__('404 Page Settings', 'qempo') . '</h3>',
      ),
      array(
         'id'        => 'nfpage_bg_color',
         'type'      => 'color',
         'title'     => esc_html__('Background Color', 'qempo'),
         'default'   => '#1F2230'
      ),
      array(
         'id'        => 'nfpage_bg_image',
         'type'      => 'media',
         'url'       => true,
         'title'     => esc_html__('Background Image', 'qempo'),
         'default'   => '',
      ),
      array(
         'id'        => 'nfpage_primary_text',
         'type'      => 'text',
         'title'     => esc_html__('Primary Text', 'qempo'),
         'default'   => esc_html__('404', 'qempo'),
      ),
      array(
         'id'        => 'nfpage_title',
         'type'      => 'text',
         'title'     => esc_html__('Title Text', 'qempo'),
         'default'   => esc_html__('Page Not Found', 'qempo'),
      ),
      array(
         'id'        => 'nfpage_desc',
         'type'      => 'textarea',
         'title'     => esc_html__('Primary Text', 'qempo'),
         'default'   => esc_html('The page requested could not be found. This could be a spelling error in the URL or a removed page.', 'qempo')
      ),
      array(
         'id'        => 'nfpage_btn_title',
         'type'      => 'text',
         'title'     => esc_html__('Button Title', 'qempo'),
         'default'   => esc_html__('Back Homepage', 'qempo'),
      ),
      array(
         'id'        => 'nfpage_btn_link',
         'type'      => 'text',
         'title'     => esc_html__('Button Link', 'qempo'),
         'default'   => '',
      ),
   )
));  