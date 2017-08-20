<?php $vidFormat = get_sub_field('select_video_format'); if ($vidFormat == "youtube"):?>
	<div class="tube-link <?php the_sub_field('select_video_size'); ?>" vidurl="https://www.youtube.com/embed/<?php the_sub_field('youtube');?>?autoplay=1">
<?php endif; ?>
											
<?php $vidFormat = get_sub_field('select_video_format'); if ($vidFormat == "mp4"):?>
	<div class="vid-link movie-btn <?php the_sub_field('select_video_size'); ?>" vidurl="<?php $vidURL = get_sub_field('select_video_file'); if ($vidURL == "text"):?><?php the_sub_field('video_text_url');?><?php endif; ?><?php $vidURL = get_sub_field('select_video_file'); if ($vidURL == "upload"):?><?php the_sub_field('video_upload');?><?php endif; ?>">
<?php endif; ?>
											

<?php $vidFormat = get_sub_field('youtube_thumb'); if ($vidFormat == "default"):?> 

	<?php $vidFormat = get_sub_field('select_video_format'); if ($vidFormat == "youtube"):?> <img src="https://img.youtube.com/vi/<?php the_sub_field('youtube');?>/hqdefault.jpg"> <?php endif; ?>

<?php endif; ?>

<?php $vidFormat = get_sub_field('youtube_thumb'); if ($vidFormat == "custom"):?> 

	<?php $vidFormat = get_sub_field('select_video_format'); if ($vidFormat == "youtube"):?> <img src="<?php the_sub_field('video_thumb');?>"> <?php endif; ?>

<?php endif; ?>

<?php $vidFormat = get_sub_field('select_video_format'); if ($vidFormat == "mp4"):?> <img src="<?php the_sub_field('video_thumb');?>"> <?php endif; ?>
							
	<div class="vid-overlay">
		<div class="vid-table">
			<div class="cell"><i class="material-icons">play_circle_outline</i></div>
		</div>
	</div>				
	</div>
<div class="vid-cap"><?php the_sub_field('video_title');?></div>