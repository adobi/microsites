    <?php if (!$site): ?>
        <div class="container">
            <img src="<?php echo base_url() ?>images/404.jpg" alt="">
        </div>
    <?php else: ?>
        <div class="container span8" id="top">
        	<div class="content">
        	    <div class="span8 site-header"></div>
        	    <div class="span8 site-title">
        	        <h3 style=""><?php echo $site->title ?></h3>
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
                                            <?php echo htmlspecialchars_decode($item->video) ?>
                                        </div>                                                              	            
                    	            <?php endforeach ?>

                	        <?php endif ?>
                	    </div>
            	    </div>
            	    
            	</div> <!-- pill-content -->
            	<?php if (isset($reviews)): ?>
                	<div class="span8 reviews">
                	    <h4>Reviews</h4>
                	    <?php foreach ($reviews as $item): ?>
                            <div class="span8 item">
                                <h4 class = "title">
                                    <div class="star" data-rate="<?php echo $item->rate ?>"></div>
                                    <a href="<?php echo $item->url ?>" target = "_blank"><?php echo $item->title ?></a>
                                </h4>
                                
                                <div class="description"><?php echo htmlspecialchars_decode($item->description) ?></div>
                                <p class="item-nav">
                                    <a href="#" class="edit-review" data-id = "<?php echo $item->id ?>">edit</a>
                                    <a href="<?php echo base_url() ?>microsite/delete_review/<?php echo $item->id ?>">delete</a>
                                </p>
                            </div>            	        
                	    <?php endforeach ?>
                	</div>    
            	<?php endif ?>
            	
    <?php endif ?>            
