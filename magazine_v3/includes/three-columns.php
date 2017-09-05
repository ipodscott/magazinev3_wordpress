<div class="row multi-columns">
								   
								   <?php if( get_sub_field('show_or_hide_section_heading') ): ?>
					
								   			<div class="full full-title <?php the_sub_field('show_or_hide_section_heading'); ?>"><h2><?php the_sub_field('section_heading');?></h2></div>
					
								   <?php endif; ?>
								   
								   
								   
							    <div class="third">
							    	
							    	
							    	<?php while(has_sub_field("column_one")): ?>
									
											<?php if(get_row_layout() == "column_video_link"):?>
											
											<?php include('video-link.php');?>
					
																	 
											<?php elseif(get_row_layout() == "column_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_audio_link"):?>
											
												<?php include('audio-link.php');?>	
																			
											
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>
												
									
									<?php endif; ?>
									<?php endwhile; ?>
							    	
							    	
							    	
							    	
							    	 
							    			
							    </div>
							    
							   	    
							    <div class="third">
								   
								   <?php while(has_sub_field("column_two")): ?>
									
											<?php if(get_row_layout() == "column_video_link"):?>
											
											<?php include('video-link.php');?>
					
																	 
											<?php elseif(get_row_layout() == "column_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_audio_link"):?>
											
											<?php include('audio-link.php');?>	
																							
																			
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>
												
									
									<?php endif; ?>
									<?php endwhile; ?>
								   
							    
							    </div>
							    
							    
							    
							    
							     <div class="third last">
								   
								   <?php while(has_sub_field("column_three")): ?>
									
											<?php if(get_row_layout() == "column_video_link"):?>
											
											<?php include('video-link.php');?>
																	 
											<?php elseif(get_row_layout() == "column_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_audio_link"):?>
											
											<?php include('audio-link.php');?>													
																			
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>
												
									
									<?php endif; ?>
									<?php endwhile; ?>
								   
							    
							    </div>
							    
							    
							    