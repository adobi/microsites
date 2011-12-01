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
        
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/themes/pascal/pascal.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/themes/orman/orman.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/galleria/jquery.nivo.slider.js"></script>        

        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/galleria/chocoslider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url() ?>scripts/plugins/galleria/jquery.chocoslider.js"></script>        
        
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
                padding-top:130px;
            }
            
            .site-title h4 {
                padding:5px; color:#eee;
            }
            .pills {
                margin-left:10px;
                margin-top:50px;
            }
            .pills li a, .pills li a:hover {
                background:#ff7f00;
                color:#fff;
            }
            
            .pills li a:hover, .pills .active a {
                background:#cc6702;
            }
            
            #images, #videos {
                height:180px;
                width:420px;
                margin:0 auto;
            }
            
            #videos {
                background-color:green;
            }
            
            #images {
                background:red;
            }
            
            #images a {
                display:block;
                
            }
       
        </style>
        <script type="text/javascript">
            $(function() {
                $('.pills').pills();
                
                //$('#slider').nivoSlider();

                $('#images').chocoslider({auto:true});
                
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
        	<div class="content span8">
        	    <div class="span8 site-title">
        	        <h4 style=""><?php echo $site->title ?></h4>
        	    </div>
        	    
        	    <ul class="pills" data-tabs="tabs">
        	        <li><a href="#images">Images</a></li>
        	        <li><a href="#videos">Videos</a></li>
        	    </ul>
        	    <div class="pill-content">
            	    <div id="images" class="span8 active">
                	        <?php if (isset($images)): ?>
                    	            <?php foreach ($images as $item): ?>
                    	                <a rel = "fancybox" href="<?php echo base_url() ?>uploads/<?php echo $item->image ?>">
                        	                <img src="<?php echo base_url() ?>uploads/thumbs/<?php echo $item->image ?>" alt="" title = "">
                        	            </a>
                    	            <?php endforeach ?>
                	        <?php endif ?>
            	    </div>
            	    <div id="videos" class="span8">
            	        <?php if (isset($videos)): ?>
            	            <?php foreach ($videos as $item): ?>
            	                img
            	            <?php endforeach ?>
            	        <?php endif ?>
            	    </div>
            	    
            	</div>
    <?php endif ?>            
