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
            .site-header {
                width:510px;
                height:120px;
            }            
            .site-title {
                //padding-top:120px;
                width:510px;
                height:60px; 
                //background:#aaa;  
                margin-top:30px;             
            }
            
            .pills li a, .pills li a:hover {
                background:#ff7f00;
                color:#fff;
            }
            
            .pills li a:hover, .pills .active a {
                background:#cc6702;
            }
            
        </style>
        <script type="text/javascript">
            $(function() {
                $('.pills').pills();

                $('#images, #videos').slides({
                    'width': 450,
                    'height': 350,                    
                });
                
                $("[rel=fancybox]").fancybox();                
                
            })
        </script>
        
    <?php endif ?>
    
    <body>    
