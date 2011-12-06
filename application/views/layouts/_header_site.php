<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" style="overflow: hidden_">
    <head>
    	<title>Microsites</title>
        <meta charset="utf-8">
        
        <link rel = "stylesheet" href="<?= base_url() ?>css/bootstrap.min.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>css/site.css" media="all" />
        
        <script src = "http://code.jquery.com/jquery-1.7.min.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-dropdown.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-tabs.js"></script>
        

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
            body {
                background: <?php echo $site->background_color ?>
            }
            .content {
                background-image:url('<?php echo base_url() ?>uploads/<?php echo $site->background_image ?>');
                background-color: <?php echo $site->background_color ?>;
                
            }
            
        </style>
        <script type="text/javascript">
            $(function() {
                //$('.pills').pills();

                $('#slideshow').slides({
                    width: 450,
                    height: 350,
                    //play: 5000,
                    //pause: 2500,  
                    effect: 'slide, fade',
                    hoverPause: true                                      
                });
                
                $("[rel=fancybox]").fancybox();    
                
                $('.star').each(function(i, v) {
        	        var self = $(v);
        	        
        	        self.raty({
        	            path: App.URL + 'scripts/plugins/raty/img/',
        	            start: self.attr('data-rate'), 
        	            readOnly:true
                    });
        	    });                            
                
            })
        </script>
        
    <?php endif ?>
    
    <body>    
