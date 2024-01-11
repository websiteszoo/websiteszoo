<?php
function qempo_elementor_load_css_header(){
	if ( ! class_exists( 'Elementor\Core\Files\CSS\Post' ) ) {
		return;
	}
	$header_id = '';
	$header_slug = apply_filters('qempo_get_header_layout', null );
	$header = get_page_by_path($header_slug, OBJECT, 'gva_header');
	 if ($header && $header instanceof WP_Post) {
		$header_id = $header->ID;
	 }
	if($header_id){
		$css_file = new Elementor\Core\Files\CSS\Post( $header_id );
		$css_file->enqueue();
	}
}

add_action( 'wp_enqueue_scripts', 'qempo_elementor_load_css_header', 500 );