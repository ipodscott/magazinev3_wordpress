<?php $selectAudio = get_sub_field('audio_link_size'); if ($selectAudio == "small"):?>
	<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "text_link"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_text_url');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
	<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "upload"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_upload');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
<? endif;?>

<?php $selectAudio = get_sub_field('audio_link_size'); if ($selectAudio == "large"):?>
	<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "text_link"):?><div class="big-audio big-play-btn" audiourl="<?php the_sub_field('audio_text_url');?>"><? endif;?>
	<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "upload"):?><div class="big-audio big-play-btn" audiourl="<?php the_sub_field('audio_upload');?>"><? endif;?>
		<img class="audio-spinner" src="<?php echo get_template_directory_uri(); ?>/images/audio_eclipse.svg">
		<i class="material-icons">volume_up</i>
	</div>
													
		<div class="vid-cap"><?php the_sub_field('audio_title');?></div>
<? endif;?>