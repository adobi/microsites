<!DOCTYPE html> 
<html xmlns:og="http://ogp.me/ns" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en" > 
	<head> 
	<title>Race Of Champions The Official Game</title> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>css/mobile.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
    <?php if (isset($_SERVER['HTTPS'])) : ?>
        
        <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-27023014-2']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
          })();
        
        </script>            
        
    <?php else: ?>
        <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-27023014-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                
            var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
          })();
        
        </script>            
    <?php endif ?>
</head> 

<body> 
    
    
    <div id="fb-root"></div>
    <!--
    <script>
        (function() {
          var e = document.createElement('script'); e.async = true;
              e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
              document.getElementById('fb-root').appendChild(e);
        }());
    </script>
    
    <script>
        window.fbAsyncInit = function() {
            FB.init({ 
                appId: '221014684620305',
                status: true,
                cookie: true,
                xfbml: true,
                oauth: true
            });
        };
    </script>  
    -->
    
    
    <script src=" http://connect.facebook.net/en_US/all.js"></script>
    <script type="text/javascript" charset="utf-8">

    </script>

    <div data-role="page" data-add-back-btn="true"> 
        <?php if ($this->uri->segment(1) !== 'payment'): ?>
            
        	<div data-role="header">
        	    
        	    <h1 style="margin:0px;">Race Of Champions<br> The Official Game</h1>
        	</div> 
        <?php endif ?>
    	<div data-role="content" id="content">
    
     
    	    
