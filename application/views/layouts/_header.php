<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" style="overflow: hidden_">
    <head>
    	<title>Microsites</title>
        <meta charset="utf-8">
        
        <link rel = "stylesheet" href="<?= base_url() ?>css/bootstrap.min.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>css/aristo.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>css/page.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>scripts/plugins/file-upload/jquery.fileupload-ui.css" media="all" />
        
        <script src = "http://code.jquery.com/jquery-1.7.min.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-dropdown.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-tabs.js"></script>
    
    </head>
    
    <body>    
        
    <div id="fb-root"></div>	
    
    <div class="container <?php echo $this->uri->segment(1) === 'microsite' ? 'span16' : 'span8' ?>" id="top">
    	<div class="content">
        <?php //if ($this->session->userdata('logged_in') && $this->uri->segment(1) === 'manage'): ?>
            
            <h3>Microsite management</h3>
            <div class="span16" id="main-nav">
                <ul class="tabs" data-dropdown="dropdown">
                    <li class="dropdown <?php echo $this->uri->segment(1) === 'microsite' ? 'active' : '' ?>" data-dropdown="dropdown">
                        <a href="#" class="dropdown-toggle">Sites</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>manage/competitors">Competitors</a></li>
                            <li><a href="<?php echo base_url() ?>manage/orders" >Orders</a></li>
                        </ul>
                    </li>
					<li <?php echo $this->uri->segment(2) === 'logout' ? 'class = "active"' : '' ?>>
						<a href="<?php echo base_url() ?>manage/logout">Logout</a>
					</li>
					
                </ul>
            </div>
            <script type="text/javascript">
                jQuery(function() {
                    jQuery('#main-nav').dropdown()
                })
            </script>

        <?php //endif ?>