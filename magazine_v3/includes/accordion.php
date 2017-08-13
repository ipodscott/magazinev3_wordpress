<div class="full">
								
	<?php if( get_sub_field('accordion') ): ?>
	<?php while( has_sub_field('accordion') ):?>
	
		<div class="acc-head"><i class="material-icons plus">keyboard_arrow_down</i><i class="material-icons minus">keyboard_arrow_up</i><?php the_sub_field('accordion_title');?></div>
		<div class="acc-body"> <p><?php the_sub_field('accordion_copy');?></p> </div>							
	
	<?php endwhile; ?>
	<?php endif; ?>	
					
</div>