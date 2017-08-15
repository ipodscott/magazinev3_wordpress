<!--Media Layers-->

<div class="footer-audio">
    <div class="audio-box shadow">
        <div class="controls shadow">
            
            <i class="hide-audio material-icons">remove</i>
            
  <i class="material-icons close-audio">close</i>
        </div>
        <audio class="myAudio" id="myAudio" src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/try_me.mp3" controls></audio>
    </div>
</div>

<div class="media-overlay"></div>

<div class="img-pop-box">
    <div class="img-container">
        <div class="img-box">
            <div class="img-holder">
               
                <img class="shadow myImage" src="<?php bloginfo('template_directory'); ?>/images/place_holder.jpg">
                
            </div>
        </div>
    </div>
</div>

<!--Menu Layers-->

<div class="close-media"><i class="material-icons">close</i></div>

<div class="menu-layer"></div>




<div class="side-buttons show-right shadow">
    <i class="material-icons">volume_up</i>
</div>

<i class="material-icons menu-btn">menu</i>

<div class="menu shadow">
    <div class="menu-title"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-title.svg"/></div>
    <ul>
        
        <?php while(has_sub_field("page_content")): ?>

		<?php if(get_row_layout() == "full_screen_cover"):?>
		
			<?php if( get_sub_field('exclude') ): ?><li><a href="#<?php the_sub_field('menu_link');?>"><?php the_sub_field('section_name');?></a></li><?php endif; ?>
					
		<?php elseif(get_row_layout() == "half_screen_cover_with_image"):?>
		
			<?php if( get_sub_field('exclude') ): ?><li><a href="#<?php the_sub_field('menu_link');?>"><?php the_sub_field('section_name');?></a></li><?php endif; ?>
			
		<?php elseif(get_row_layout() == "content_layouts"):?>
		
			<?php if( get_sub_field('exclude') ): ?><li><a href="#<?php the_sub_field('menu_link');?>"><?php the_sub_field('section_name');?></a></li><?php endif; ?>
		    
		<?php endif; ?>
		<?php endwhile; ?>
        
    </ul>
     <div class="menu-footer"><img src="<?php echo get_template_directory_uri(); ?>/images/menu_footer.svg"/></div>
    
    <i class="material-icons close-menu">close</i>
</div>

<!--Video Overlay-->

<div class="modal-vid">
    <div class="movie-box">
        <div class="wide-screen">
            <div class="vid-holder">
	            <div class="close"><i class="material-icons">close</i></div>
                <img class="widescreen-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_widescreen.gif"/>
                <img class="standard-img" src="<?php echo get_template_directory_uri(); ?>/images/standard_bg.gif"/>
                <img class="sixteen-nine" src="<?php echo get_template_directory_uri(); ?>/images/16x9_bg.png"/>
                <img class="vintage-wide" src="<?php echo get_template_directory_uri(); ?>/images/vintage-wide.png"/>
                <img class="pal" src="<?php echo get_template_directory_uri(); ?>/images/pal.png"/>
               
                <video id="myVideo" class="myVideo hide" src="" controls></video>
                <iframe class="youTube hide" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<div class="btt-footer">
   <a href="#the-top"><img class="shadow" src="<?php bloginfo('template_directory'); ?>/images/top_link.svg"></a>
</div>

<!-- Close All --> </div>

<div class="open-overlay">
	<div class="open-overlay-box">
		<div class="open-overlay-logo"><img class="cover-title-image" src="<?php bloginfo('template_directory'); ?>/images/spinner.svg"></div>
	</div>
</div>



<link href="//fonts.googleapis.com/css?family=Lato:300,400,700|Oswald:400,500,600,700|Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/audioplayer.css">
<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/audioplayer_min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

<?php wp_footer(); ?>

</body>
</html>