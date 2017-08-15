<div name="<?php the_sub_field('menu_link');?>" class="half-panel parallax <?php if( get_sub_field('dark_light') ): ?> dark<?php endif; ?>" style="background-image:url(<?php the_sub_field('cover_background');?>);" name="parallax">
	    <div class="panel-overlay <?php if( get_sub_field('dark_light') ): ?> dark<?php endif; ?>"></div>
		<div class="middle">
		    <div class="main-content">
			    
			    	<?php while(has_sub_field("cover_content")): ?>
						
						<?php if(get_row_layout() == "image_or_logo"):?>
					
							<div class="center"><span class="full-panel-logo"><img style="opacity:<?php the_sub_field('opacity')?>; -webkit-opacity:<?php the_sub_field('opacity')?>;" src="<?php the_sub_field('image_or_logo'); ?>"/></span></div>
						
						<?php elseif(get_row_layout() == "title"):?>
								
							<h1 class="center"><?php the_sub_field('title'); ?></h1>
						
						<?php elseif(get_row_layout() == "small_title"):?>
								
							<div class="center small-title"><span><?php the_sub_field('small_title'); ?></span></div>
							
						<?php elseif(get_row_layout() == "link"):?>	
							
							<div class="break center"><a href="<?php the_sub_field('link'); ?>"><btn><?php the_sub_field('link_title'); ?></btn></a></div>	
						
						<?php elseif(get_row_layout() == "big_media_link"):?>
						
						<?php $selectMp4 = get_sub_field('select_video_type'); if ($selectMp4 == "mp4"):?>
						
							<?php $selectMp4Source = get_sub_field('mp4_source'); if ($selectMp4Source == "url"):?>
	                   		      <img class="big-play movie-btn <?php the_sub_field('select');?>" vidurl="<?php the_sub_field('mp4_remote_source');?>" src="<?php bloginfo('template_directory'); ?>/images/play_dark_btn.svg">
	                   		<?php endif; ?>
	                   		
	                   		<?php $selectMp4Source = get_sub_field('mp4_source'); if ($selectMp4Source == "upload"):?>
	                   		      <img class="big-play movie-btn <?php the_sub_field('select');?>" vidurl="<?php the_sub_field('mp4_upload');?>" src="<?php bloginfo('template_directory'); ?>/images/play_dark_btn.svg">
	                   		<?php endif; ?>
	                   		
	                   	<?php endif; ?>
								
						<?php $selectMp4 = get_sub_field('select_video_type'); if ($selectMp4 == "youtube"):?>
						
							 <img class="big-tube movie-btn <?php the_sub_field('select');?>" vidurl="https://www.youtube.com/embed/<?php the_sub_field('youtube');?>?autoplay=1" src="<?php bloginfo('template_directory'); ?>/images/play_dark_btn.svg">
						<?php endif; ?>
		
					<?php endif; ?>
					<?php endwhile; ?>
			    
		        		    
	        </div>
	    </div>
	</div>