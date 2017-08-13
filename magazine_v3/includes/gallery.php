<div class="full"><h2><?php the_sub_field('gallery_title');?></h2></div>
<div class="full gallery-box">

		<?php if( get_sub_field('gallery') ): ?>
		<?php while( has_sub_field('gallery') ):?>
		
		<?php  $image = get_sub_field('image');
				
				// vars
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption'];
			
				// thumbnail
				$size = 'thumbnail';
				$thumb = $image['sizes'][ $size ];
				$width = $image['sizes'][ $size . '-width' ];
				$height = $image['sizes'][ $size . '-height' ];
			?>
			
				
					<img imgurl="<?php echo $url; ?>" class="pop-image shadow" src="<?php echo $thumb; ?>">
											
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>