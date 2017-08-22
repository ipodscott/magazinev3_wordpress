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
	
<?php if ( get_sub_field( 'use_custom_thumb_and_image' ) ): ?>

	<img imgurl="<?php the_sub_field('custom_large_image');?>" class="<?php if( get_sub_field('zoom') ): ?>pop-image <?php endif; ?> non-pop shadow" src="<?php the_sub_field('custom_thumb');?>">
	<div class="image-cap"><?php the_sub_field('image_caption');?></div>

<?php else: // field_name returned false ?>

	<img imgurl="<?php echo $url; ?>" class="<?php if( get_sub_field('zoom') ): ?>pop-image <?php endif; ?> non-pop shadow" src="<?php echo $medium; ?>">
	<div class="image-cap"><?php the_sub_field('image_caption');?></div>

<?php endif; // end of if field_name logic ?>

	