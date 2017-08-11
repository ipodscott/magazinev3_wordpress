<?php  $image = get_sub_field('image_thumb');
	$url = $image['url'];
									
	// medium
	$size = 'medium';
	$medium = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];
	
	// thumbnail
	$size = 'thumbnail';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];
	?>
	
	
	<img imgurl="<?php echo $url; ?>" class="<?php if( get_sub_field('zoom') ): ?>pop-image <?php endif; ?> non-pop shadow" src="<?php echo $medium; ?>">
	<div class="image-cap">Image Caption</div>