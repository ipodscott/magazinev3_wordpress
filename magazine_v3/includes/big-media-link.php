<?php $selectMp4 = get_sub_field('select_video_type'); if ($selectMp4 == "mp4"):?>
						
	<?php $selectMp4Source = get_sub_field('mp4_source'); if ($selectMp4Source == "url"):?>
	      	<img class="big-play dark-btn movie-btn <?php the_sub_field('select');?>" vidurl="<?php the_sub_field('mp4_remote_source');?>" src="<?php bloginfo('template_directory'); ?>/images/ic_play_circle_outline_black_24px.svg">
			<img class="big-play lt-btn movie-btn <?php the_sub_field('select');?>" vidurl="<?php the_sub_field('mp4_upload');?>" src="<?php bloginfo('template_directory'); ?>/images/ic_play_circle_outline_white_24px.svg">
	<?php endif; ?>
	
	<?php $selectMp4Source = get_sub_field('mp4_source'); if ($selectMp4Source == "upload"):?>
	 		<img class="big-play dark-btn movie-btn <?php the_sub_field('select');?>" vidurl="<?php the_sub_field('mp4_remote_source');?>" src="<?php bloginfo('template_directory'); ?>/images/ic_play_circle_outline_black_24px.svg">
	      	<img class="big-play lt-btn movie-btn <?php the_sub_field('select');?>" vidurl="<?php the_sub_field('mp4_upload');?>" src="<?php bloginfo('template_directory'); ?>/images/ic_play_circle_outline_white_24px.svg">
	<?php endif; ?>
	
<?php endif; ?>
		
<?php $selectMp4 = get_sub_field('select_video_type'); if ($selectMp4 == "youtube"):?>

	 	<img class="big-tube dark-btn movie-btn <?php the_sub_field('select');?>" vidurl="https://www.youtube.com/embed/<?php the_sub_field('youtube');?>?autoplay=1" src="<?php bloginfo('template_directory'); ?>/images/ic_play_circle_outline_black_24px.svg">
	 	<img class="big-tube lt-btn movie-btn <?php the_sub_field('select');?>" vidurl="https://www.youtube.com/embed/<?php the_sub_field('youtube');?>?autoplay=1" src="<?php bloginfo('template_directory'); ?>/images/ic_play_circle_outline_white_24px.svg">
<?php endif; ?>
