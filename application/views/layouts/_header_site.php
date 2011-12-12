<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" 
    <?php if ($_SERVER['HTTP_HOST'] !== 'localhost'): ?>
        style="overflow: hidden"
    <?php endif ?>
>
    <head>
    	<title>Microsites</title>
        <meta charset="utf-8">
        
        <link rel = "stylesheet" href="<?= base_url() ?>css/bootstrap.min.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>css/site.css" media="all" />
        
        <script src = "http://code.jquery.com/jquery-1.7.min.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-dropdown.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-tabs.js"></script>
        
        <script type="text/javascript">
            var GA = {
                track: function(elem) 
                {
    	            var category = elem.attr('data-ga-category'),
    	                action = elem.attr('data-ga-action'),
    	                label = elem.attr('data-ga-label'),
    	                value = elem.attr('data-ga-value'),
    	                nonInteraction = elem.attr('data-ga-noninteraction');
                    
        	        if (category && action && label && value) {
        	            
            	        if (nonInteraction == '1') {
            	            
                	        _gaq.push(['_trackEvent', category, action, label, value]);
            	        } else {
            	            
                	        _gaq.push(['_trackEvent', category, action, label, value, true]);
            	        }
            	        
            	        console.log('ga track event: ', elem);
        	        }                
                }
            }
        </script>

        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/slidesjs/slides.jquery.js"></script>
         
        <link rel = "stylesheet" href="<?= base_url() ?>scripts/plugins/fancybox/jquery.fancybox-1.3.4.css" media="all" />
        <script src="<?php echo base_url() ?>scripts/plugins/fancybox/jquery.fancybox-1.3.4.js"></script>
        <script src="<?php echo base_url(); ?>scripts/plugins/raty/js/jquery.raty.min.js"></script>    	    
  	    
        <script type="text/javascript">
            BASE_URL = "<?php echo base_url() ?>";
        </script>
        
    </head>
    
    <?php if ($site): ?>
        
        <style type="text/css">
            body, .container {
                background: <?php echo $site->background_color ?>
            }
            .content {
                background-image:url('<?php echo base_url() ?>uploads/<?php echo $site->background_image ?>');
                background-color: <?php echo $site->background_color ?>;
                
            }
            
            .review-item {
                //border-bottom:10px solid <?php echo $site->background_color ?>;
            }
            
            .content > * {
                color: <?php echo $site->font_color ?>;
            }
            
            .content a {
                color: <?php echo $site->link_color ?>!important;
            }
            
            <?php if ($site->about_background_color): ?>
                .game-info {
                    background: <?php echo $site->about_background_color ?>
                }
            <?php endif ?>
            
            <?php if ($site->reviews_background_color): ?>
                .reviews {
                    background: <?php echo $site->reviews_background_color ?>
                }
            <?php endif ?>
            <?php if ($site->stores_background_color): ?>
                .available-on {
                    background: <?php echo $site->stores_background_color ?>
                }
            <?php endif ?> 
            
            <?php if ($site->section_title_color): ?>
                .section-title {
                    color: <?php echo $site->section_title_color ?>
                }
            <?php endif ?>                        
        </style>
        <script type="text/javascript">
            (function($) {
                $(function() {
                    //$('.pills').pills();
    
                    $('#slideshow').slides({
                        width: 450,
                        height: 350,
                        //play: 5000,
                        //pause: 2500,  
                        effect: 'slide, fade',
                        hoverPause: true,
                        paginationClass: 'slide-pagination'                                     
                    });
                    
                    //$("[rel=fancybox]").fancybox();    
                    
                    $('.star').each(function(i, v) {
            	        var self = $(v);
            	        
            	        self.raty({
            	            path: App.URL + 'scripts/plugins/raty/img/',
            	            start: self.attr('data-rate'), 
            	            readOnly:true
                        });
            	    });                            
                    
            	    //$('.game-info h1, .available-on h2, .reviews h2').lettering();
            	    
            	    $('[data-ga=1]').bind('click', function() {
            	        var self = $(this);
                        
            	        GA.track(self);
            	        
            	        return true;
            	    });
                });
            }) (jQuery)
        </script>
        
    <?php endif ?>
    
    <body>  

        <div id="fb-root"></div>
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '<?php echo $site->app_id ?>', // App ID
              status     : true, // check login status
              cookie     : true, // enable cookies to allow the server to access the session
              oauth      : true, // enable OAuth 2.0
              xfbml      : true  // parse XFBML
            });
        
            FB.Canvas.setAutoGrow();
          };
        
          // Load the SDK Asynchronously
          (function(d){
             var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
             js = d.createElement('script'); js.id = id; js.async = true;
             js.src = "//connect.facebook.net/en_US/all.js";
             d.getElementsByTagName('head')[0].appendChild(js);
           }(document));
        </script>        
        <?php if ($site->ga_code): ?>
            <script type="text/javascript">
                <?php echo $site->ga_code ?>
            </script>
         <?php endif ?> 