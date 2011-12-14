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
                                <div class="slide video-play" data-video-id = "<?php echo $item->video ?>"
                                    data-ga-category = "<?php echo $item->ga_category ?>"
                                    data-ga-action = "<?php echo $item->ga_action ?>" 
                                    data-ga-label = "<?php echo $item->ga_label ?>" 
                                    data-ga-value = "<?php echo $item->ga_value ?>" 
                                    data-ga-noninteraction = "<?php echo $item->ga_noninteraction ?>"
                                >
                                    <?php //echo htmlspecialchars_decode($item->video) ?>
                                    <?php echo youtube_video_image($item->video) ?>
                                </div>                                                              	            
            	            <?php endforeach ?>

            	        <?php endif ?>
            	        <?php if (isset($images) && $images): ?>
            	            <?php foreach ($images as $item): ?>

                                <div class="slide"  style="tex-talign:center;"
                                    data-ga-category = "<?php echo $item->ga_category ?>"
                                    data-ga-action = "<?php echo $item->ga_action ?>" 
                                    data-ga-label = "<?php echo $item->ga_label ?>" 
                                    data-ga-value = "<?php echo $item->ga_value ?>" 
                                    data-ga-noninteraction = "<?php echo $item->ga_noninteraction ?>"
                                >
                                    <!-- 
                                    <a rel = "fancybox" href="<?php echo base_url() ?>uploads/<?php echo $item->image ?>">
                                     -->
                                        <img src="<?php echo base_url() ?>uploads/<?php echo $item->image ?>" alt="" title = "" height="340"  class="max-width: 450px;">
                                    <!-- </a> -->
                                </div>                                                              	            
            	            <?php endforeach ?>

            	        <?php endif ?>
            	    </div>
        	    </div>
        	    <p style="text-align:center">
                    <a class = "btn" href="#" onclick=window.open("http://www.facebook.com/dialog/pagetab?app_id=<?php echo $site->app_id ?>&display=popup&next=<?php echo base_url() ?>social/<?php echo $site->url ?>/","PageTab","width=500,height=200");>Add to my page</a>
        	        
        	    </p>
        	    <div class="span8 game-info">
        	        <h1 class="game-title"><?php echo $site->name ?></h1>
        	        <h2 class="section-title"><?php echo $site->title ?></h2>
        	        <p><?php echo $site->description ?></p>
        	    </div>
        	    <?php if (isset($stores) && $stores): ?>
                    <div class="span9 available-on">
            	        <h2 class="section-title">Available on</h2>
            	        <div class="span7" style="margin:0 auto;margin-top:10px;">
                            <?php foreach ($stores as $item): ?>
                                <div class="span2" style="width:120px; display:inline-block;">
                                    <a href="<?php echo $item->url ?>" target = "_blank"  class="store-icon" 
                                        data-ga = "1" 
                                        data-ga-category = "<?php echo $item->ga_category ?>"
                                        data-ga-action = "<?php echo $item->ga_action ?>" 
                                        data-ga-label = "<?php echo $item->ga_label ?>" 
                                        data-ga-value = "<?php echo $item->ga_value ?>" 
                                        data-ga-noninteraction = "<?php echo $item->ga_noninteraction ?>"
                                    >
                                        <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->logo ?>" alt="">
                                    </a>
                                    <?php if ($item->label): ?>
                                        
                                        <div class="popover below" style="">
                                            <div class="arrow" style=""></div>
                                            <div class="inner" style="">
                                                <div class="title"><strong><?php echo $item->label ?></strong></div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="popover below inactive" style="">
                                            <div class="arrow" ></div>
                                            <div class="inner" >
                                                <div class="title"><strong>&nbsp;</strong></div>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
        	    <?php endif ?>
        	    
            	<?php if (isset($reviews) && $reviews): ?>
            	    
                	<div class="span8 reviews">
                	    <h2 class="section-title">Reviews</h2>
                	    <?php foreach ($reviews as $item): ?>
                            <div class="span8 item review-item">
                                <h5 class = "title">
                                    <div class="star" data-rate="<?php echo $item->rate ?>"></div>
                                    <a href="<?php echo $item->url ?>" target = "_blank" 
                                        data-ga = "1" 
                                        data-ga-category = "<?php echo $item->ga_category ?>"
                                        data-ga-action = "<?php echo $item->ga_action ?>" 
                                        data-ga-label = "<?php echo $item->ga_label ?>" 
                                        data-ga-value = "<?php echo $item->ga_value ?>" 
                                        data-ga-noninteraction = "<?php echo $item->ga_noninteraction ?>"                                        
                                    ><?php echo $item->title ?></a>
                                    <span class="pull-right">
                                        <?php if ($item->press_logo): ?>
                                            <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->press_logo ?>" alt="<?php echo $item->press ?>" title="<?php echo $item->press ?>">
                                        <?php endif ?>           
                                    </span>                         
                                </h5>
                                <h6 class="press"><?php echo $item->press ?> (<?php echo to_date($item->reviewd_at) ?>)</h6>

                                <div class="span8 review-description"><?php echo htmlspecialchars_decode($item->description) ?></div>
                            </div>            	        
                	    <?php endforeach ?>
                	</div>    
            	<?php endif ?>
    <?php endif ?>            
