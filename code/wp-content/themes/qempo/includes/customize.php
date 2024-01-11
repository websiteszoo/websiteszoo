<?php
function qempo_custom_color_theme(){
   $color_theme               = qempo_get_option('color_theme', '');
   $gradient_color_second     = qempo_get_option('gradient_color_second', '');
   $color_theme_second        = qempo_get_option('color_theme_second', '');
   $color_link                = qempo_get_option('color_link', '');
   $color_link_hover          = qempo_get_option('color_link_hover', '');
   $color_heading             = qempo_get_option('color_heading', '');
   $footer_bg_color           = qempo_get_option('footer_bg_color', '');
   $footer_color              = qempo_get_option('footer_color', '');
   $footer_color_link         = qempo_get_option('footer_color_link', '');
   $footer_color_link_hover   = qempo_get_option('footer_color_link_hover', '');

   $main_font = false;
   $main_font_enabled = ( qempo_get_option('main_font_source', 0) == 0 ) ? false : true;
   if ( $main_font_enabled ) {
      $font_main = qempo_get_option('main_font', '');
      if(isset($font_main['font-family']) && $font_main['font-family']){
         $main_font = $font_main['font-family'];
      }
   }

   $secondary_font = false;
   $secondary_font_enabled = ( qempo_get_option('secondary_font_source', 0) == 0 ) ? false : true;
   if ( $secondary_font_enabled ) {
      $font_second = qempo_get_option('secondary_font', '');
      if(isset($font_second['font-family']) && $font_second['font-family']){
         $secondary_font = $font_second['font-family'];
      }
   }
   ob_start();
   ?>

   :root{
      <?php if( !empty($color_theme) ){ ?>
         --qempo-theme-color: <?php echo esc_attr($color_theme) ?>;
      <?php } ?> 
      <?php if( !empty($gradient_color_second) ){ ?>
         --qempo-gradient-color-second: <?php echo esc_attr($gradient_color_second) ?>;
      <?php } ?> 
      <?php if( !empty($color_theme_second) ){ ?>
         --qempo-theme-color-second: <?php echo esc_attr($color_theme_second) ?>;
      <?php } ?> 

      <?php if( !empty($color_link) ){ ?>
         --qempo-link-color: <?php echo esc_attr($color_link) ?>;
      <?php } ?> 

      <?php if( !empty($color_link_hover) ){ ?>
         --qempo-link-hover-color: <?php echo esc_attr($color_link_hover) ?>;
      <?php } ?> 

      <?php if( !empty($color_heading) ){ ?>
         --qempo-heading-color: <?php echo esc_attr($color_heading) ?>;
      <?php } ?> 

      <?php if( !empty($link_color) ){ ?>
         --qempo-font-sans-serif: "Kumbh Sans", sans-serif; 
      <?php } ?> 

      <?php if ( $main_font_enabled && isset($main_font) && $main_font ){ ?>
         --qempo-font-sans-serif:<?php echo esc_attr( $main_font ); ?>,sans-serif;
      <?php } ?>   

      <?php if ( $secondary_font_enabled && isset($secondary_font) && $secondary_font ){ ?>
         --qempo-heading-font-family :<?php echo esc_attr( $secondary_font ); ?>, sans-serif;
      <?php } ?>

      <?php if( !empty($footer_bg_color) ){ ?>
         --qempo-footer-bg-color: <?php echo esc_attr($footer_bg_color) ?>;
      <?php } ?>   
      
      <?php if( !empty($footer_color) ){ ?>
         --qempo-footer-color: <?php echo esc_attr($footer_color) ?>;
      <?php } ?>   

      <?php if( !empty($footer_color_link) ){ ?>
         --qempo-footer-color-link: <?php echo esc_attr($footer_color_link) ?>;
      <?php } ?>   

      <?php if( !empty($footer_color_link_hover) ){ ?>
         --qempo-footer-color-link-hover: <?php echo esc_attr($footer_color_link_hover) ?>;
      <?php } ?>
   }

<?php
   $styles = ob_get_clean();
   $styles = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $styles );
   $styles = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '   ', '    ' ), '', $styles );
   if($styles){
      wp_enqueue_style( 'qempo-custom-style-color', QEMPO_THEME_URL . '/css/custom_script.css');
      wp_add_inline_style( 'qempo-custom-style-color', $styles );
   }
}

add_action( 'wp_enqueue_scripts', 'qempo_custom_color_theme', 99999 );