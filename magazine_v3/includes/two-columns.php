<div class="row multi-columns">
								   
								   <?php if( get_sub_field('show_or_hide_section_heading') ): ?>
					
								   			<div class="full full-title <?php the_sub_field('show_or_hide_section_heading'); ?>"><h2><?php the_sub_field('section_heading');?></h2></div>
					
								   <?php endif; ?>
								   
								   
								   
							    <div class="<?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "super_narrow_right"):?>three-quarters<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "super_narrow_left"):?>quarter<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "fifty_fifty"):?>half<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "narrow_left"):?>forty<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "wide_right"):?>sixty<? endif;?> <?php the_sub_field('column_one_alignment');?>">
							    	
							    	
							    	<?php while(has_sub_field("column_one")): ?>
									
											<?php if(get_row_layout() == "column_video_link"):?>
											
											<?php include('video-link.php');?>					
																	 
											<?php elseif(get_row_layout() == "column_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_audio_link"):?>
											
												<?php include('audio-link.php');?>
											
																			
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
							    
							   	    
							    <div class="<?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "super_narrow_right"):?>quarter<? endif;?><?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "super_narrow_left"):?>three-quarters<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "fifty_fifty"):?>half<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "narrow_left"):?>sixty<? endif;?> <?php $columnWidth = get_sub_field('column_settings'); if ($columnWidth == "wide_right"):?>forty<? endif;?> <?php the_sub_field('column_two_alignment');?>">
								   
								   <?php while(has_sub_field("column_two")): ?>
									
											<?php if(get_row_layout() == "column_video_link"):?>
											
											<?php include('video-link.php');?>	
					
																	 
											<?php elseif(get_row_layout() == "column_copy"):?>
												<?php the_sub_field('copy');?>
									 										 
											<?php elseif(get_row_layout() == "column_audio_link"):?>
											
											<?php include('audio-link.php');?>												
																			
											<?php elseif(get_row_layout() == "accordion"):?>
											
												<?php if( get_sub_field('accordion') ): ?>
												<?php while( has_sub_field('accordion') ):?>
								
													<div class="acc-head"><i class="material-icons plus">keyboard_arrow_down</i><i class="material-icons minus">keyboard_arrow_up</i><?php the_sub_field('accordion_title');?></div>
													<div class="acc-body"> <p><?php the_sub_field('accordion_copy');?></p> </div>							
					
												<?php endwhile; ?>
												<?php endif; ?>
												
											<?php elseif(get_row_layout() == "image"):?>
											
												<?php include('images.php')?>		
												
									
									<?php endif; ?>
									<?php endwhile; ?>
								   
							    
							    </div>