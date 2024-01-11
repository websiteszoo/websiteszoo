<?php 
   use uListing\Classes\StmUser;
	$qempo_options = qempo_get_options();
?>

<div class="header-mobile d-xl-none d-lg-none d-md-block d-sm-block d-xs-block">
  	
  	<?php if(qempo_get_option('hm_show_topbar') == 'no'){ ?>

		<div class="topbar-mobile">
			<div class="row">
				<?php if(qempo_get_option('hm_topbar_information', '')){ ?>
					<div class="col-12 col-xl-8 col-lg-8 col-md-8 col-sm-7 topbar-left">
						<div class="content-inner topbar-information">
								<?php echo html_entity_decode(qempo_get_option('hm_topbar_information')) ?>
						</div>
					</div>
				<?php } ?>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12 topbar-right">
					<div class="socials">
					   <?php if(qempo_get_option('hm_social_facebook', '')){ ?>
					     <a href="<?php echo esc_url(qempo_get_option('hm_social_facebook', '')); ?>"><i class="fab fa-facebook-square"></i></a>
					   <?php } ?> 

					   <?php if(qempo_get_option('hm_social_instagram', '')){ ?>
					     <a href="<?php echo esc_url(qempo_get_option('hm_social_instagram', '')); ?>"><i class="fab fa-instagram"></i></a>
					   <?php } ?>  

					   <?php if(qempo_get_option('hm_social_twitter', '')){ ?>
					     <a href="<?php echo esc_url(qempo_get_option('hm_social_twitter', '')); ?>"><i class="fab fa-twitter"></i></a>
					   <?php } ?>  

					   <?php if(qempo_get_option('hm_social_linkedin', '')){ ?>
					     <a href="<?php echo esc_url(qempo_get_option('hm_social_linkedin', '')); ?>"><i class="fab fa-linkedin"></i></a>
					   <?php } ?> 

					   <?php if(qempo_get_option('hm_social_pinterest', '')){ ?>
					     <a href="<?php echo esc_url(qempo_get_option('hm_social_pinterest', '')); ?>"><i class="fab fa-pinterest"></i></a>
					   <?php } ?> 
				
					   <?php if(qempo_get_option('hm_social_tumblr', '')){ ?>
					     <a href="<?php echo esc_url(qempo_get_option('hm_social_tumblr', '')); ?>"><i class="fab fa-tumblr-square"></i></a>
					   <?php } ?>

					   <?php if(qempo_get_option('hm_social_vimeo', '')){ ?>
					     <a href="<?php echo esc_url(qempo_get_option('hm_social_vimeo', '')); ?>"><i class="fab fa-vimeo"></i></a>
					   <?php } ?>

					    <?php if(qempo_get_option('hm_social_youtube', '')){ ?>
					    <a href="<?php echo esc_url(qempo_get_option('hm_social_youtube', '')); ?>"><i class="fab fa-youtube-square"></i></a>
					   <?php } ?>
					</div>

				</div>
				
			</div>
		</div>

	<?php } ?>	

  	<div class="header-mobile-content">
		<div class="header-content-inner clearfix"> 
		 
		  	<div class="header-left">
				<div class="logo-mobile">
					<?php $logo_mobile = (isset($qempo_options['hm_logo']['url']) && $qempo_options['hm_logo']['url']) ? $qempo_options['hm_logo']['url'] : get_template_directory_uri().'/images/logo-mobile.png' ; ?>
				  	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					 	<img src="<?php echo esc_url($logo_mobile); ?>" alt="<?php bloginfo( 'name' ); ?>" />
				  	</a>
				</div>
		  	</div>

		  	<div class="header-right">

				<div class="main-search gva-search">
					<a class="control-search">
					  <i class="icon fi flaticon-magnifying-glass"></i>
					</a>
					<div class="gva-search-content search-content">
					  	<div class="search-content-inner">
						 	<div class="content-inner"><?php get_search_form(); ?></div>  
					  	</div>  
					</div>
			 	</div>
			 	
				<?php get_template_part('templates/parts/canvas-mobile'); ?>

		  	</div>

		</div>  
  	</div>
</div>