
<?php if( get_sub_field('select_background_type') == 'image' ): ?>
	<div name="<?php the_sub_field('menu_link');?>" class="fadey full-panel parallax <?php if( get_sub_field('dark_light') ): ?> dark<?php endif; ?>" style="background-image:url(<?php the_sub_field('cover_background');?>);">
<?php endif; ?>

<?php if( get_sub_field('select_background_type') == 'video' ): ?>
	<div name="<?php the_sub_field('menu_link');?>" class="full-panel fadey <?php if( get_sub_field('dark_light') ): ?> dark<?php endif; ?>" >
    <div class="vid-bg-box">
        <video src="<?php the_sub_field('cover_background_video');?>" class="video_background" autoplay="autoplay" loop="loop"> </video>
    </div>
<?php endif; ?>


    <div class="panel-overlay <?php if( get_sub_field('dark_light') ): ?> dark<?php endif; ?>"></div>
	<div class="middle">
	    <div class="main-content <?php if( get_sub_field('dark_light') ): ?> dark<?php endif; ?>">
		    
		    	<?php while(has_sub_field("cover_content")): ?>
					
					<?php if(get_row_layout() == "image_or_logo"):?>
				
						<div class="center">
							<span class="full-panel-logo">
								<a href="<?php the_sub_field('cover_link');?>"><img style="opacity:<?php the_sub_field('opacity')?>; -webkit-opacity:<?php the_sub_field('opacity')?>;" src="<?php the_sub_field('image_or_logo'); ?>"/></a>
							</span>
						</div>
					
					<?php elseif(get_row_layout() == "title"):?>
							
						<h1 class="center"><?php the_sub_field('title'); ?></h1>
					
					<?php elseif(get_row_layout() == "small_title"):?>
							
						<div class="center small-title"><span><?php the_sub_field('small_title'); ?></span></div>
						
					<?php elseif(get_row_layout() == "link"):?>	
						
						<div class="break center"><a href="<?php the_sub_field('link'); ?>"><btn><?php the_sub_field('link_title'); ?></btn></a></div>
					
					<?php elseif(get_row_layout() == "big_media_link"):?>
						
						
						<?php include('big-media-link.php');?>			

	
				<?php endif; ?>
				<?php endwhile; ?>
		    
	        		    
        </div>
    </div>
</div>