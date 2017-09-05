<?php 

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function youtube_function($atts, $content = null) {
   extract(shortcode_atts(array(
      "size" => 'standard-btn',
      "caption" => '',
      "src" => '',
      "caption" => '',
   ), $atts));
   return '
   <div class="tube-link '.$size.'-btn" vidurl="https://www.youtube.com/embed/'.$src.'?autoplay=1&amp;rel=0">
		 <img src="https://img.youtube.com/vi/'.$src.'/hqdefault.jpg"> 
		<div class="vid-overlay">
			<div class="vid-table">
				<div class="cell"><i class="material-icons">play_circle_outline</i></div>
			</div>
		</div>				
	</div>
	<div class="vid-cap">'.$caption.'</div>
	';
}
add_shortcode("youtube", "youtube_function");

function mp4_function($atts, $content = null) {
   extract(shortcode_atts(array(
      "size" => 'standard-btn',
      "caption" => '',
      "src" => '',
      "thumb" => '',
      "caption" => ''
   ), $atts));
   return '
   
   <div class="vid-link movie-btn '.$size.'-btn" vidurl="'.$src.'">
	 <img src="'.$thumb.'"> 							
	<div class="vid-overlay">
		<div class="vid-table">
			<div class="cell"><i class="material-icons">play_circle_outline</i></div>
		</div>
	</div>				
	</div>
	<div class="vid-cap">'.$caption.'</div>
   	';
}
add_shortcode("mp4", "mp4_function");


function play_audio_function($atts, $content = null) {
   extract(shortcode_atts(array(
   		"src" => '',
   		"title" => ''
   ), $atts));
   return '<div class="play-audio" audiourl="'.$src.'">'.$title.' <i class="material-icons">volume_up</i></div>';
}
add_shortcode("audio", "play_audio_function");


function big_play_audio_function($atts, $content = null) {
   extract(shortcode_atts(array(
   		"src" => '',
   		"title" => ''
   ), $atts));
   return '
   <div class="big-audio big-play-btn" audiourl="'.$src.'">
   <img class="audio-spinner" src="<?php echo get_template_directory_uri(); ?>/images/audio_eclipse.svg">
		<i class="material-icons">volume_up</i>
	</div>
	<div class="vid-cap">'.$caption.'</div>
   ';
}
add_shortcode("big-audio", "big_play_audio_function");