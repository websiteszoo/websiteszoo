<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.

/**
 * Include the TGM_Plugin_Activation class.
 */
add_action( 'tgmpa_register', 'qempo_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function qempo_register_required_plugins() {
	$plugins = array(
		array(
			'name'                     => esc_html__('Qempo Themer', 'qempo'), // The plugin name
	    	'slug'                    	=> 'qempo-themer', // The plugin slug (typically the folder name)
	    	'required'                	=> true, // If false, the plugin is only 'recommended' instead of required
	    	'source'				   		=> 'http://gaviasthemes.com/plugins/qempo-themer.zip'
		),

		array(
			'name'                     => esc_html__('Slider Revolution', 'qempo'), // The plugin name
	    	'slug'                    	=> 'revslider', // The plugin slug (typically the folder name)
	    	'required'                	=> true, // If false, the plugin is only 'recommended' instead of required
	    	'source'				   		=> 'http://gaviasthemes.com/plugins/revslider.zip'
		),
		array(
			'name'                     => esc_html__('Elementor Page Builder', 'qempo'), // The plugin name
		   'slug'                     => 'elementor', // The plugin slug (typically the folder name)
		   'required'                 => true, // If false, the plugin is only 'recommended' instead of required
		),
		array(
			'name'                     => esc_html__('Redux Framework', 'qempo'), // The plugin name
		   'slug'                     => 'redux-framework', // The plugin slug (typically the folder name)
		   'required'                 => true, // If false, the plugin is only 'recommended' instead of required
		),
		array(
			'name'                     => esc_html__('Meta Box', 'qempo'), // The plugin name
		   'slug'                     => 'meta-box', // The plugin slug (typically the folder name)
		   'required'                 => true, // If false, the plugin is only 'recommended' instead of required
		),
		array(
			'name'                     => esc_html__('Contact Form 7', 'qempo'), // The plugin name
		   'slug'                     => 'contact-form-7', // The plugin slug (typically the folder name)
		   'required'                 => true, // If false, the plugin is only 'recommended' instead of required
		),
		array(
			'name'                     => esc_html__('MailChimp', 'qempo'), // The plugin name
		   'slug'                     => 'mailchimp-for-wp', // The plugin slug (typically the folder name)
		   'required'                 => true, // If false, the plugin is only 'recommended' instead of required
		),
		array(
			'name'                     => esc_html__('Woocommerce', 'qempo'), 
		   'slug'                     => 'woocommerce',
		   'required'                 => false,
		),
		array(
			'name'                     => esc_html__('Events Calendar', 'qempo'), 
		   'slug'                     => 'the-events-calendar', 
		   'required'                 => true, 
		),
		array(
			'name'                     => esc_html__('Classic Editor', 'qempo'), // The plugin name
		   'slug'                     => 'classic-editor', // The plugin slug (typically the folder name)
		   'required'                 => false, // If false, the plugin is only 'recommended' instead of required
		),
	);
	$config = array(
		'default_path' => '', // Default absolute path to pre-packaged plugins.
		'menu' => 'tgmpa-install-plugins', // Menu slug.
		'has_notices' => true, // Show admin notices or not.
		'dismissable' => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false, // Automatically activate plugins after installation or not.
		'message' => '', // Message to output right before the plugins table.
		'strings' => array(
		'page_title' => esc_html__( 'Install Required Plugins', 'qempo' ),
		'menu_title' => esc_html__( 'Install Plugins', 'qempo' ),
		'installing' => esc_html__( 'Installing Plugin: %s', 'qempo' ), // %s = plugin name.
		'oops' => esc_html__( 'Something went wrong with the plugin API.', 'qempo' ),
		'notice_can_install_required' => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'qempo' ), // %1$s = plugin name(s).
		'notice_can_install_recommended' => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' , 'qempo' ), // %1$s = plugin name(s).
		'notice_cannot_install' => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'qempo' ), // %1$s = plugin name(s).
		'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' , 'qempo'), // %1$s = plugin name(s).
		'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' , 'qempo'), // %1$s = plugin name(s).
		'notice_cannot_activate' => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'qempo' ), // %1$s = plugin name(s).
		'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' , 'qempo'), // %1$s = plugin name(s).
		'notice_cannot_update' => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' , 'qempo'), // %1$s = plugin name(s).
		'install_link' => _n_noop( 'Begin installing plugin', 'Begin installing plugins' , 'qempo'),
		'activate_link' => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'qempo' ),
		'return' => esc_html__( 'Return to Required Plugins Installer', 'qempo' ),
		'plugin_activated' => esc_html__( 'Plugin activated successfully.', 'qempo' ),
		'complete' => esc_html__( 'All plugins installed and activated successfully. %s', 'qempo' ), // %s = dashboard link.
		'nag_type' => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);
   tgmpa( $plugins, $config );
}