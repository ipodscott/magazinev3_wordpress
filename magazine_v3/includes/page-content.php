<?php while(has_sub_field("page_content")): ?>

<?php if(get_row_layout() == "full_screen_cover"):?>

	<?php include('fullscreen-cover.php');?>
	
<?php elseif(get_row_layout() == "full_screen_cover_with_video"):?>
	
	<?php include('fullscreen-video.php');?>
	
<?php elseif(get_row_layout() == "half_screen_cover_with_image"):?>
	
	<?php include('halfscreen-image.php');?>
	
<?php elseif(get_row_layout() == "content_layouts"):?>

	<?php include('content_layouts.php');?>
    
<?php endif; ?>
<?php endwhile; ?>