<div name="<?php the_sub_field('menu_link');?>" class="full-panel <?php if( get_sub_field('auto_height') ): ?>auto<?php endif; ?>">
		<div class="middle <?php if( get_sub_field('align_top') ): ?>top<?php endif; ?>">
		
		<div class="main-content">
		    	
		    	<?php while(has_sub_field("content_layouts")): ?>
				
					<?php if(get_row_layout() == "full_width_h1"):?>
						 
						<div class="full"><h1 class="center small"><?php the_sub_field('full_width_h1');?></h1></div>
					
					<?php elseif(get_row_layout() == "full_width_h2"):?>
					 	
					 	<div class="full"><h2><?php the_sub_field('full_width_h2');?></h2></div>	
						
					<?php elseif(get_row_layout() == "full_width_copy"):?>
							
						<div class="full">
					        <h2><?php the_sub_field('section_title');?></h2>
					        <?php the_sub_field('copy');?>
					    </div>
					    
					    <?php elseif(get_row_layout() == "spacer"):?>
					    
					    <div class="full" style="height:<?php the_sub_field('spacer_height');?>px"></div>
					    
					    <?php elseif(get_row_layout() == "accordion"):?>
							
							<?php include('accordion.php');?>
							
					
					<?php elseif(get_row_layout() == "gallery"):?>
							<?php include('gallery.php');?>					
					
					<?php elseif(get_row_layout() == "two_columns"):?>
		
							 
							<?php include('two-columns.php');?>
							   
					<?php elseif(get_row_layout() == "three_columns"):?>

			    
							<?php include('three-columns.php');?>
				
				<?php endif; ?>
				<?php endwhile; ?>	 
		    
			</div>
		</div>
	</div>
</div>