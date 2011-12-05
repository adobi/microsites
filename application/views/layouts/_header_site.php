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
        
        <!-- 
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/themes/pascal/pascal.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/themes/orman/orman.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/galleria/jquery.nivo.slider.js"></script>        

        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/chocoslider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/galleria/jquery.chocoslider.js"></script>        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>scripts/plugins/diapo/diapo.css" />

        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/diapo/scripts/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/diapo/scripts/jquery.hoverIntent.minified.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/diapo/scripts/diapo.js"></script>
         -->
         
        <!-- 
        <link rel="stylesheet" type="text/css" media="screen" href="http://projects.craftedpixelz.co.uk/craftyslide/css/craftyslide.css" />
        <script type="text/javascript" src = "http://projects.craftedpixelz.co.uk/craftyslide/js/craftyslide.min.js"></script>
         -->
        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/slidesjs/slides.jquery.js"></script>
         
        <link rel = "stylesheet" href="<?= base_url() ?>scripts/plugins/fancybox/jquery.fancybox-1.3.4.css" media="all" />
        <script src="<?php echo base_url() ?>scripts/plugins/fancybox/jquery.fancybox-1.3.4.js"></script>

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
                background:url('<?php echo base_url() ?>uploads/<?php echo $site->background_image ?>') no-repeat transparent;
            }
            
            .site-title {
                padding-top:80px;
            }
            
            .site-title h4 {
                padding:5px; color:#000;
            }
            .pills {
                margin-left:20px;
                margin-top:20px;
            }
            .pills li a, .pills li a:hover {
                background:#ff7f00;
                color:#fff;
            }
            
            .pills li a:hover, .pills .active a {
                background:#cc6702;
            }
            
            #images, #videos, .pix_diapo {
                height:340px;
                width:450px;
                margin:0 auto;
            }
            
            #videos {
                
            }
            
            #images {
                
            }
            
            #images a {
                display:block;
                
            }
            
            #pix_pag {
                width:450px;
            }
            
           
       
        </style>
        <script type="text/javascript">
            $(function() {
                $('.pills').pills();
                
                //$('#slider').nivoSlider();

                //$('#images').chocoslider({auto:true});
                
                //$('#images .pix_diapo, #videos .pix_diapo').diapo({fx: 'simpleFade'});
                //$('#images .pix_diapo, #videos .pix_diapo').diapoStop();
                
                $('#images, #videos').slides({
                    'width': 450,
                    'height': 350,                    
                });
                
                $("[rel=fancybox]").fancybox();                
                
            })
        </script>
        
    <?php endif ?>
    
    <body>    
        
    <?php if (!$site): ?>
        <div class="container">
            <img src="<?php echo base_url() ?>images/404.jpg" alt="">
        </div>
    <?php else: ?>
        <div class="container span8" id="top">
        	<div class="content">
        	    <div class="span8 site-title">
        	        <h4 style=""><?php echo $site->title ?></h4>
        	    </div>
        	    
        	    <ul class="pills" data-tabs="tabs">
        	        <li><a href="#images">Images</a></li>
        	        <li><a href="#videos">Videos</a></li>
        	    </ul>
        	    <div class="pill-content">
            	    <div id="images" class="span8 active">
            	        <div class="slides_container">
                	        <?php if (isset($images)): ?>
                    	            <?php foreach ($images as $item): ?>
                    	                <!-- 
                    	                <a rel = "fancybox" href="<?php echo base_url() ?>uploads/<?php echo $item->image ?>">
                        	                <img src="<?php echo base_url() ?>uploads/thumbs/<?php echo $item->image ?>" alt="" title = "">
                        	            </a>
                        	             -->
                        	             <!-- 
                                        <div data-thumb="<?php echo base_url() ?>uploads/thumbs/<?php echo $item->image ?>" >
                        	                <a rel = "fancybox" href="<?php echo base_url() ?>uploads/<?php echo $item->image ?>">
                            	                <img src="<?php echo base_url() ?>uploads/thumbs/<?php echo $item->image ?>" alt="" title = "" width="450" height="350">
                            	            </a>
                                            <div class="caption elemHover fromLeft">Képfelirat</div>
                                        </div>
                                        <li>
                                            <a rel = "fancybox" href="<?php echo base_url() ?>uploads/<?php echo $item->image ?>">
                                                <img src="<?php echo base_url() ?>uploads/thumbs/<?php echo $item->image ?>" alt="" title = "" width="450" height="350">
                                            </a>
                                        </li>
                                         -->   
                                        <div>
                                            <a rel = "fancybox" href="<?php echo base_url() ?>uploads/<?php echo $item->image ?>">
                                                <img src="<?php echo base_url() ?>uploads/thumbs/<?php echo $item->image ?>" alt="" title = "" width="450" height="350">
                                            </a>
                                        </div>                                                              	            
                    	            <?php endforeach ?>

                	        <?php endif ?>
                	    </div>
            	    </div>
            	    <div id="videos" class="span8">
            	        <div class="slides_container">
                	        <?php if (isset($videos)): ?>
                    	            <?php foreach ($videos as $item): ?>
                                        <div>
                                            <iframe width="450" height="330" src="http://www.youtube.com/embed/qas5lWp7_R0?wmode=transparent&autoplay=0" frameborder="0" allowfullscreen></iframe>                                        
                                        </div>                                                              	            
                    	            <?php endforeach ?>

                	        <?php endif ?>
                	    <!-- </div> -->
            	    </div>
            	    
            	</div>
    <?php endif ?>            
