<div class="row multi-columns">
								   
								   <?php if( get_sub_field('show_or_hide_section_heading') ): ?>
					
								   			<div class="full <?php the_sub_field('show_or_hide_section_heading'); ?>"><h2><?php the_sub_field('section_heading');?></h2></div>
					
								   <?php endif; ?>
								   
								   
								   
							    <div class="third">
							    	
							    	
							    	<?php while(has_sub_field("column_one")): ?>
									
											<?php if(get_row_layout() == "column_one_video_link"):?>
											
											<?php include('video-link.php');?>
					
																	 
											<?php elseif(get_row_layout() == "column_one_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_one_audio_link"):?>
											
												<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "text_link"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_text_url');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
											<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "upload"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_upload');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
																			
											
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>
												
									
									<?php endif; ?>
									<?php endwhile; ?>
							    	
							    	
							    	
							    	
							    	 
							    			
							    </div>
							    
							   	    
							    <div class="third">
								   
								   <?php while(has_sub_field("column_two")): ?>
									
											<?php if(get_row_layout() == "column_two_video_link"):?>
											
											<?php include('video-link.php');?>
					
																	 
											<?php elseif(get_row_layout() == "column_two_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_two_audio_link"):?>
											
											<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "text_link"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_text_url');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
											<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "upload"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_upload');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
												
																			
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>
												
									
									<?php endif; ?>
									<?php endwhile; ?>
								   
							    
							    </div>
							    
							    
							    
							    
							     <div class="third">
								   
								   <?php while(has_sub_field("column_three")): ?>
									
											<?php if(get_row_layout() == "column_three_video_link"):?>
											
											<?php include('video-link.php');?>
																	 
											<?php elseif(get_row_layout() == "column_three_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_three_audio_link"):?>
											
											<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "text_link"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_text_url');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
											<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "upload"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_upload');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
												
																			
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>
												
									
									<?php endif; ?>
									<?php endwhile; ?>
								   
							    
							    </div>
							    
							    
							    