    <?php if (!$site): ?>
        <div class="container">
            <img src="<?php echo base_url() ?>images/404.jpg" alt="">
        </div>
    <?php else: ?>
        <div class="container span8" id="top">
        	<div class="content">
        	    <div class="span8 site-header"></div>
        	    <!-- <div class="span8 site-title">
        	        <h3 style=""><?php echo $site->title ?></h3>
        	    </div> -->
        	    <div id="slideshow" class="span8">
        	        <div class="slides_container span8">
            	        <?php if (isset($videos) && $videos): ?>
            	            <?php foreach ($videos as $item): ?>
                                <div>
                                    <?php echo htmlspecialchars_decode($item->video) ?>
                                </div>                                                              	            
            	            <?php endforeach ?>

            	        <?php endif ?>
            	        <?php if (isset($images) && $images): ?>
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
        	    <?php if (isset($stores) && $stores): ?>
        	        <h3>Available on</h3>
                    <div class="span9 available-on">
                        <?php foreach ($stores as $item): ?>
                            <a href="<?php echo $item->url ?>" target = "_blank"  class="store-icon">
                                <img src="<?php echo base_url() ?>uploads/<?php echo $item->logo ?>" alt="">
                            </a>
                        <?php endforeach ?>
                    </div>
        	    <?php endif ?>
        	    <div class="span8 game-info">
        	        <h3><?php echo $site->name ?></h3>
        	        <h4><?php echo $site->title ?></h4>
        	        <p><?php echo $site->description ?></p>
        	    </div>
        	    
            	<?php if (isset($reviews) && $reviews): ?>
            	    
                	<div class="span8 reviews">
                	    <h4>Reviews</h4>
                	    <?php foreach ($reviews as $item): ?>
                            <div class="span8 item review-item">
                                <h5 class = "title">
                                    <div class="star" data-rate="<?php echo $item->rate ?>"></div>
                                    <a href="<?php echo $item->url ?>" target = "_blank"><?php echo $item->title ?></a>
                                    <span class="pull-right">
                                        <?php if ($item->press_logo): ?>
                                            <img src="<?php echo base_url() ?>uploads/<?php echo $item->press_logo ?>" alt="<?php echo $item->press ?>" title="<?php echo $item->press ?>">
                                        <?php endif ?>           
                                    </span>                         
                                </h5>
                                <h6><?php echo $item->press ?></h6>

                                <div class="span8 description"><?php echo htmlspecialchars_decode($item->description) ?></div>
                            </div>            	        
                	    <?php endforeach ?>
                	</div>    
            	<?php endif ?>
            	
    <?php endif ?>            
