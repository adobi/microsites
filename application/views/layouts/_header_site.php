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
            
            #images {
                background:red;
                height:300px;
            }
            
            #videos {
                background:green;
                height:300px;
            }
            
        </style>
        
        <script type="text/javascript">
            $(function() {
                $('.pills').pills()
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
            	        
            	    </div>
            	    
            	    <div id="videos" class="span8">
            	        
            	    </div>
            	</div>
    <?php endif ?>            
