<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" style="overflow: hidden_">
    <head>
    	<title>Microsites</title>
        <meta charset="utf-8">
        
        <link rel = "stylesheet" href="<?= base_url() ?>css/bootstrap.min.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>css/aristo.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>css/page.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>scripts/plugins/file-upload/jquery.fileupload-ui.css" media="all" />
        <link rel = "stylesheet" href="<?= base_url() ?>scripts/plugins/colorpicker/farbtastic.css" media="all" />
        
        <script src = "http://code.jquery.com/jquery-1.7.min.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-dropdown.js"></script>
        <script src = "<?php echo base_url() ?>scripts/plugins/bootstrap-tabs.js"></script>
    
    	<script src="<?php echo base_url() ?>scripts/plugins/redactor/js/redactor/redactor.js"></script>
    	<link rel="stylesheet" href="<?php echo base_url() ?>scripts/plugins/redactor/js/redactor/css/redactor.css" />             
        
    </head>
    
    <body>    
        
    <div id="fb-root"></div>	
    
    <div class="container <?php echo in_array($this->uri->segment(1), array('', 'microsite', 'review', 'storetype', 'store', 'image', 'video', 'auth')) ? 'span16' : 'span8' ?>" id="top">
    	<div class="content">
        <?php if ($this->session->userdata('logged_in')): ?>
            
            <h3>Microsite management</h3>
            <div class="span16" id="main-nav">
                <ul class="tabs">
                    <li class="<?php echo in_array($this->uri->segment(1), array('', 'microsite', 'review')) ? 'active' : '' ?>">
                        <a href="<?php echo base_url() ?>microsite">Sites</a>
                    </li>
          <!-- 
					<li <?php echo $this->uri->segment(1) === 'storetype' ? 'class = "active"' : '' ?>>
						<a href="<?php echo base_url() ?>storetype">Stores</a>
					</li>
           -->     
					<li <?php echo $this->uri->segment(2) === 'logout' ? 'class = "active"' : '' ?>>
						<a href="<?php echo base_url() ?>auth/logout">Logout</a>
					</li>
                </ul>
            </div>
            <script type="text/javascript">
                jQuery(function() {
                    //jQuery('#main-nav').dropdown()
                })
            </script>
        <?php endif ?>
        
        <?php if ($this->uri->segment(1) === 'microsite' && ($this->uri->segment(2) !== 'index' || !$this->uri->segment(2)) && isset($site) && $site): ?>
          <div class="well">
            <h6>Other options for <?php echo $site->name ?></h6>
            <p class="item-nav" style="margin-right:0; text-align:left">
                <a href="<?php echo base_url() ?>social/<?php echo $site->url ?>" target = "_blank"><strong>preview</strong></a>
        
                <a href="<?php echo base_url() ?>microsite/stores/<?php echo $site->id ?>">stores</a>
                <a href="<?php echo base_url() ?>microsite/reviews/<?php echo $site->id ?>">reviews</a>
                <a href="<?php echo base_url() ?>microsite/images/<?php echo $site->id ?>">images</a>
                <a href="<?php echo base_url() ?>microsite/videos/<?php echo $site->id ?>">videos</a>
                
                <a href="<?php echo base_url() ?>microsite/edit/<?php echo $site->id ?>">edit</a>
                <a href="<?php echo base_url() ?>microsite/delete/<?php echo $site->id ?>">delete</a>
            </p>      
          </div>          
        <?php endif ?>