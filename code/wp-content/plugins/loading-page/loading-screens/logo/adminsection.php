<tr id="loading_screen_logo" style="display:none;" class="lp_ls_section">
	<th style="font-weight: bold; color: green;">Select the logo image (or any other image)</th>
	<td>
	<?php
		$loading_page_logo_path      = '';
		$loading_page_logo_grayscale = 1;
		$loading_page_logo_blink     = 0;

	if (
			isset( $loading_page_options['lp_ls'] ) &&
			isset( $loading_page_options['lp_ls']['logo'] )
		) {
		if ( isset( $loading_page_options['lp_ls']['logo']['image'] ) ) {
			$loading_page_logo_path = $loading_page_options['lp_ls']['logo']['image'];
		}

		if ( isset( $loading_page_options['lp_ls']['logo']['grayscale'] ) ) {
			$loading_page_logo_grayscale = @intval( $loading_page_options['lp_ls']['logo']['grayscale'] );
		}

		if ( isset( $loading_page_options['lp_ls']['logo']['blink'] ) ) {
			$loading_page_logo_blink = @intval( $loading_page_options['lp_ls']['logo']['blink'] );
		}
	}
	?>
	<input aria-label="<?php print esc_attr( __( 'Logo image', 'loading-page' ) ); ?>" type='text' name="lp_ls[logo][image]" id="lp_ls_logo_image" value="<?php
		print esc_attr( $loading_page_logo_path );
	?>" /><input type="button" value="Browse" onclick="loading_page_selected_image('lp_ls[logo][image]');" />&nbsp;&nbsp;&nbsp;
	<input type="checkbox" id="lp_ls_logo_grayscale" <?php if ( $loading_page_logo_grayscale ) {
		print 'CHECKED';} ?>>
	<input type="hidden" name="lp_ls[logo][grayscale]" value="<?php print esc_attr( $loading_page_logo_grayscale ); ?>">
	<?php
		esc_html_e( 'Grayscale to color effect', 'loading-page' );
	?>
	&nbsp;&nbsp;-&nbsp;&nbsp;
	<input type="checkbox" id="lp_ls_logo_blink" <?php if ( $loading_page_logo_blink ) {
		print 'CHECKED';} ?>>
	<input type="hidden" name="lp_ls[logo][blink]" value="<?php print esc_attr( $loading_page_logo_blink ); ?>">
	<?php
		esc_html_e( 'Apply blink effect', 'loading-page' );
	?>
	<br>
	<style>
	.loading-page-gif{float:left;cursor:pointer;}
	.loading-page-gif.selected img,
	.loading-page-gif.selected object
	{
		outline: 1px solid green;
		outline-offset: -4px;
	}
	.loading-page-gif object{
		pointer-events : none;
	}
	@-webkit-keyframes loading-page-blinker {
		from {opacity: 1.0;}
		to {opacity: 0.0;}
	}
	.loading-page-blink{
		text-decoration: blink;
		-webkit-animation-name: loading-page-blinker;
		-webkit-animation-duration: 0.9s;
		-webkit-animation-iteration-count:infinite;
		-webkit-animation-timing-function:ease-in-out;
		-webkit-animation-direction: alternate;
	}
	</style>
	<script>
		jQuery(document).on('click', '.loading-page-gif', function(){
			jQuery('.loading-page-gif').removeClass('selected');
			var e = jQuery(this), path = e.data('path');
			e.addClass('selected');
			jQuery('#lp_ls_logo_image').val(path);
		});
		jQuery(document).on('click', '#lp_ls_logo_grayscale', function(){
			jQuery('[name="lp_ls[logo][grayscale]"]').val(this.checked ? 1 : 0);
		});
		jQuery(document).on('click', '#lp_ls_logo_blink', function(){
			jQuery('[name="lp_ls[logo][blink]"]').val(this.checked ? 1 : 0);
		});
	</script>
	<p>- or select one of follows -</p>
 <?php
	$files = array_diff( scandir( dirname( __FILE__ ) . '/images' ), array( '..', '.' ) );
	foreach ( $files as $file ) {
		$path = plugins_url( 'images/' . $file, __FILE__ ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride
		print '<div class="loading-page-gif ' . ( ( $path == $loading_page_logo_path ) ? 'selected' : '' ) . '" data-path="' . esc_attr( $path ) . '">';
		if ( pathinfo( $path, PATHINFO_EXTENSION ) == 'svg' ) {
			print '<object data="' . esc_attr( $path ) . '" type="image/svg+xml" width="100" height="100">' . esc_html( $file ) . '</object>';
		} else {
			print '<img alt="' . esc_attr( $file ) . '" src="' . esc_attr( $path ) . '" />';
		}
		print '</div>';
	}
	?>
	<div style="clear:both;"></div>
	</td>
</tr>
