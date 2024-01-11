<?php
/**
 * $Desc
 *
 * @author     Gaviasthemes Team     
 * @copyright  Copyright (C) 2021 gaviasthemes. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

	$primary_text = qempo_get_option('nfpage_primary_text', esc_html__('404', 'qempo'));
	$primary_text = !empty($primary_text) ? $primary_text : esc_html__('404', 'qempo');

	$title = qempo_get_option('nfpage_title', '');
	$title = !empty($title) ? $title : esc_html__('Page Not Found', 'qempo');
	
	$desc = qempo_get_option('nfpage_desc', '');
	$desc = !empty($desc) ? $desc : esc_html__('The page requested could not be found. This could be a spelling error in the URL or a removed page.', 'qempo');

	$btn_title = qempo_get_option('nfpage_btn_title', '');
	$btn_title = !empty($btn_title) ? $btn_title : esc_html__('Back Homepage', 'qempo');

	$btn_link = qempo_get_option('nfpage_btn_link', '');
	$btn_link = !empty($bth_title) ? $bth_title : home_url( '/' );
	
?>
<?php get_header(); ?>
<div id="content">
	<div class="page-wrapper">
		<div class="not-found-wrapper text-center">
			<?php if(!empty($primary_text)){ ?>
				<div class="not-found-title"><h1><?php echo esc_html($primary_text) ?></h1></div>
			<?php } ?>	

			<?php if(!empty($title)){ ?>
				<div class="not-found-subtitle"><?php echo esc_html($title) ?></div>
			<?php } ?>

			<?php if(!empty($desc)){ ?>
				<div class="not-found-desc"><?php echo esc_html($desc)?></div> 
			<?php } ?>	

			<div class="not-found-home text-center">
				<a class="btn-theme" href="<?php echo esc_url( $btn_link ); ?>"><i class="far fa-arrow-alt-circle-left"></i>  <?php echo esc_html($btn_title) ?></a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>