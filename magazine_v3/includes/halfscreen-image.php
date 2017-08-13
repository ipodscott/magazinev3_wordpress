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
		
					<?php endif; ?>
					<?php endwhile; ?>
			    
		        		    
	        </div>
	    </div>
	</div>