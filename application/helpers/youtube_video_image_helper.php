<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('youtube_video_image')) {
	
		function youtube_video_image($video) {
            
			return '<img data-video-id = "'.$video.'" class = "youtube-image" src = "http://img.youtube.com/vi/'.$video.'/0.jpg" style = "opacity:0.6; filter: alpha(opacity = 60); width:450px; height: 340px;"/>';
		}	
	}

?>