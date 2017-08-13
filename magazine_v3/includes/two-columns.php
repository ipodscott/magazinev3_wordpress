<div class="row two-columns">
								   
								   <?php if( get_sub_field('show_or_hide_section_heading') ): ?>
					
								   			<div class="full <?php the_sub_field('show_or_hide_section_heading'); ?>"><h2><?php the_sub_field('section_heading');?></h2></div>
					
								   <?php endif; ?>
								   
								   
								   
							    <div class=" <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "fifty_fifty"):?>half<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "narrow_left"):?>forty<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "wide_right"):?>sixty<? endif;?> <?php the_sub_field('column_one_alignment');?>">
							    	
							    	
							    	<?php while(has_sub_field("column_one")): ?>
									
											<?php if(get_row_layout() == "column_one_video_link"):?>
											
											<?php $vidFormat = get_sub_field('col-one-select_video_format'); if ($vidFormat == "youtube"):?>
												<div class="tube-link <?php the_sub_field('select_video_size'); ?>" vidurl="https://www.youtube.com/embed/<?php the_sub_field('youtube');?>?autoplay=1">
											<?php endif; ?>
											
											<?php $vidFormat = get_sub_field('col-one-select_video_format'); if ($vidFormat == "mp4"):?>
												<div class="vid-link movie-btn <?php the_sub_field('select_video_size'); ?>" vidurl="<?php $vidURL = get_sub_field('select_video_file'); if ($vidURL == "text"):?><?php the_sub_field('video_text_url');?><?php endif; ?><?php $vidURL = get_sub_field('select_video_file'); if ($vidURL == "upload"):?><?php the_sub_field('video_upload');?><?php endif; ?>">
											<?php endif; ?>
											
											
									
													<img src="<?php the_sub_field('video_thumb');?>">
													<div class="vid-overlay">
														<div class="vid-table">
															<div class="cell"><i class="material-icons">play_circle_outline</i></div>
														</div>
													</div>				
												</div>
				<div class="vid-cap"><?php the_sub_field('video_title');?></div>
					
																	 
											<?php elseif(get_row_layout() == "column_one_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_one_audio_link"):?>
											
												 <?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "text_link"):?><div class="play-audio" audioUrl=""><?php the_sub_field('audio_text_url');?> <i class="material-icons">volume_up</i></div><? endif;?>
												 <?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "upload"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_upload');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
																			
											<?php elseif(get_row_layout() == "accordion"):?>
											<div class="accordion-box">
												<?php if( get_sub_field('accordion') ): ?>
												<?php while( has_sub_field('accordion') ):?>
								
													<div class="acc-head"><i class="material-icons plus">keyboard_arrow_down</i><i class="material-icons minus">keyboard_arrow_up</i><?php the_sub_field('accordion_title');?></div>
													<div class="acc-body"> <p><?php the_sub_field('accordion_copy');?></p> </div>							
					
												<?php endwhile; ?>
												<?php endif; ?>
											</div>
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>
												
									
									<?php endif; ?>
									<?php endwhile; ?>
							    	
							    	
							    	
							    	
							    	 
							    			
							    </div>
							    
							   	    
							    <div class="<?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "fifty_fifty"):?>half<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "narrow_left"):?>sixty<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "wide_right"):?>forty<? endif;?> <?php the_sub_field('column_two_alignment');?>">
								   
								   <?php while(has_sub_field("column_two")): ?>
									
											<?php if(get_row_layout() == "column_two_video_link"):?>
											
											<?php $vidFormat = get_sub_field('col-two-select_video_format'); if ($vidFormat == "youtube"):?>
												<div class="tube-link <?php the_sub_field('select_video_size'); ?>" vidurl="https://www.youtube.com/embed/<?php the_sub_field('youtube');?>?autoplay=1">
											<?php endif; ?>
											
											<?php $vidFormat = get_sub_field('col-two-select_video_format'); if ($vidFormat == "mp4"):?>
												<div class="vid-link movie-btn <?php the_sub_field('select_video_size'); ?>" vidurl="<?php $vidURL = get_sub_field('select_video_file'); if ($vidURL == "text"):?><?php the_sub_field('video_text_url');?><?php endif; ?><?php $vidURL = get_sub_field('select_video_file'); if ($vidURL == "upload"):?><?php the_sub_field('video_upload');?><?php endif; ?>">
											<?php endif; ?>
											
											
									
													<img src="<?php the_sub_field('video_thumb');?>">
													<div class="vid-overlay">
														<div class="vid-table">
															<div class="cell"><i class="material-icons">play_circle_outline</i></div>
														</div>
													</div>				
												</div>
				<div class="vid-cap"><?php the_sub_field('video_title');?></div>
					
																	 
											<?php elseif(get_row_layout() == "column_two_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_two_audio_link"):?>
											
											<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "text_link"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_text_url');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
											<?php $selectAudio = get_sub_field('select_audio_file'); if ($selectAudio == "upload"):?><div class="play-audio" audioUrl="<?php the_sub_field('audio_upload');?>"><?php the_sub_field('audio_title');?> <i class="material-icons">volume_up</i></div><? endif;?>
												
																			
											<?php elseif(get_row_layout() == "accordion"):?>
											
												<?php if( get_sub_field('accordion') ): ?>
												<?php while( has_sub_field('accordion') ):?>
								
													<div class="acc-head"><i class="material-icons plus">keyboard_arrow_down</i><i class="material-icons minus">keyboard_arrow_up</i><?php the_sub_field('accordion_title');?></div>
													<div class="acc-body"> <p><?php the_sub_field('accordion_copy');?></p> </div>							
					
												<?php endwhile; ?>
												<?php endif; ?>		
												
									
									<?php endif; ?>
									<?php endwhile; ?>
								   
							    
							    </div>