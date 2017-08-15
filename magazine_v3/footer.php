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
    <div class="menu-title"><img src="http://hollywoodobscura.com/wp-content/uploads/2017/05/hollywood_obscura-1.png"/></div>
    <ul>
        <li><a href="#video-bg">Welcome</a></li>
        <li><a href="#intro">Introduction</a></li>
        <li><a href="#parallax">Parallax Cover</a></li>
        <li><a href="#audio">Audio Samples</a></li>
        <li><a href="#video">Video Sample</a></li>
        <li><a href="#layout">Basic Layout</a></li>
        <li><a href="#big-media">Big Media Link</a></li>
    </ul>
    
    
    <i class="material-icons close-menu">close</i>
</div>

<!--Video Overlay-->

<div class="modal-vid">
    <div class="movie-box">
        <div class="wide-screen">
            <div class="vid-holder">
	            <div class="close"><i class="material-icons">close</i></div>
                <img class="widescreen-img" src="https://s3.amazonaws.com/imglibs/bg_widescreen.gif"/>
                <img class="standard-img" src="https://s3.amazonaws.com/imglibs/standard_bg.gif"/>
                <img class="sixteen-nine" src="https://s3.amazonaws.com/imglibs/16x9_bg.png"/>
                <img class="pal" src="https://s3.amazonaws.com/imglibs/pal.png"/>
               
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