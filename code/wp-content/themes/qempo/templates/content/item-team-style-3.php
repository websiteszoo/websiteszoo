<?php
	$team_position = get_post_meta(get_the_id(), 'qempo_team_position', true );
	$team_socials = get_post_meta(get_the_id(), 'team_socials', false );
	if(isset($team_socials[0])){
		$team_socials = $team_socials[0];
	}

	$thumbnail = 'post-thumbnail';
	$thumbnail = (isset($thumbnail_size) && $thumbnail_size) ? $thumbnail_size : 'post-thumbnail';
	

?>
<div class="team-block team-v3">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="team-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumbnail); ?></a>
		</div>
	<?php endif ?>

	<div class="team-content">
		<h2 class="team-name"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
		<?php if($team_position){ ?>   
			<div class="team-job"><?php echo esc_html( $team_position ); ?></div>
		<?php } ?>
		<?php if($team_socials){ ?>
			<div class="socials-team">
				<?php foreach ($team_socials as $key => $social) { ?>
					<?php if(isset($social['link']) && isset($social['icon'])){ ?>
						<a class="gva-social" href="<?php echo esc_url($social['link']) ?>">
							<i class="<?php echo esc_attr($social['icon']) ?>"></i>
						</a>
					<?php } ?>   
				<?php } ?>
			</div>
		<?php } ?>

	</div>
</div>  