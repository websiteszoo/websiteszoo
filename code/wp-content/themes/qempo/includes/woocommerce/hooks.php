<?php
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 10 );
add_action('woocommerce_after_single_product_summary', 'qempo_woocommerce_output_product_data', 10);

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'qempo_woocommerce_breadcrumb', 20 );

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

add_filter( 'loop_shop_per_page', 'qempo_woocommerce_shop_pre_page', 20 );

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title',  'qempo_swap_images', 10);

// Add save percent next to sale item prices.
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'qempo_woocommerce_custom_sales_price', 10 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 41 );




add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


if(!function_exists('qempo_woocommerce_custom_sales_price')){
	function qempo_woocommerce_custom_sales_price() {
		global $product;
		if($product->get_sale_price()){
			$percentage = round( ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100 );
			echo ( '<span class="onsale">-' . $percentage . '%</span>' );
		}
	}
}

if(!function_exists('qempo_woocommerce_shop_pre_page')){
	function qempo_woocommerce_shop_pre_page(){
		return qempo_get_option('products_per_page', 16);
	}
}

add_theme_support( 'woocommerce', array(
  'gallery_thumbnail_image_width' => 180,
));

if(!function_exists('qempo_woocommerce_breadcrumb')){
	function qempo_woocommerce_breadcrumb(){
	  $result = qempo_style_breadcrumb();
		extract($result);
		if(isset($no_breadcrumbs) && $no_breadcrumbs == true) return;
	?>
		<div class="custom-breadcrumb <?php echo implode(' ', $classes); ?>" <?php echo(count($styles) > 0 ? 'style="' . implode(';', $styles) . '"' : ''); ?>>
			<?php if($styles_overlay){ ?>
				<div class="breadcrumb-overlay" style="<?php echo esc_attr($styles_overlay); ?>"></div>
			<?php } ?>
			<div class="breadcrumb-main">
			  	<div class="container">
				 	<div class="breadcrumb-container-inner" <?php echo(count($styles_inner) > 0 ? 'style="' . implode(';', $styles_inner) . '"' : ''); ?>>
						<?php qempo_general_breadcrumbs(); ?>
						<?php if($title && $show_page_title){  
						  echo '<h2 class="heading-title">' . esc_html( $title ) . '</h2>';
						} ?>
				 	</div>  
			  	</div>   
			</div>  
		</div>
	<?php
  }
}

if ( ! function_exists( 'qempo_woocommerce_output_product_data_accordions' ) ) {
	function qempo_woocommerce_output_product_data_accordions() {
		wc_get_template( 'single-product/tabs/accordions.php' );
	}
}

if(!function_exists('qempo_woocommerce_output_product_data')){
	function qempo_woocommerce_output_product_data(){
		global $post;
		$tab_style = get_post_meta($post->ID, 'qempo_product_tab_style', true);
		$tab_style = 'tabs';
		if($tab_style == 'accordion'){
			qempo_woocommerce_output_product_data_accordions();
		}else{
			woocommerce_output_product_data_tabs();
		}
	}
}      

function qempo_swap_images(){
  	global $post;
  	$output = '';
  	$output .= '<a class="link-overlay" href="' . get_the_permalink() . '"></a>';
  	if(has_post_thumbnail()){
		$output .= '<span class="attachment-shop_catalog">' . get_the_post_thumbnail($post->ID,'shop_catalog') . '</span>';
  	}else{
		$output .= '<img src="'.wc_placeholder_img_src().'" alt="'. $post->title .'" class="image" />';
  	}
  	echo trim($output);
}