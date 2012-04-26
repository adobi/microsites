
<p>
    <a href="<?php echo base_url() ?>microsite">&larr; Go back</a>
</p>
<fieldset>
    <legend>
        <?php if ($site): ?>
            <?php echo $site->name ?>
        <?php else: ?>
            New site
        <?php endif ?>
    </legend>
    <?php if (validation_errors()): ?>
        <div class="alert-message block-message error">
            <?php echo validation_errors() ?>
        </div>
    <?php endif ?>

    <ul class="pills" data-pills="pills">
        <li class="active"><a href="#game">Game</a></li>
        <li><a href="#social">Social</a></li>
        <li><a href="#sections">Sections</a></li>
        <li><a href="#page">Page</a></li>
    </ul>
    <?php echo  form_open_multipart('', array('id'=>'edit-site-form')) ?>
        <div class="pill-content">
            <div class="active" id="game">
                <!-- 
                <div class="clearfix  separator">
                    <label><strong>Game</strong></label>
                </div>
                 -->
                <div class="section-content">
                    <div class="clearfix">
                        <label for="name">Name</label>
                        <div class="input">
                            <input type="text" name = "name" id = "name" class = "xxlarge" value = "<?php echo $site ? $site->name : '' ?>"/>
                        </div>
                    </div>
            
                    <div class="clearfix">
                        <label for="url">Url</label>
                        <div class="input">
                            <input type="text" name = "url" id = "url" class = "xxlarge" value = "<?php echo $site ? $site->url : '' ?>"/>
                        </div>
                    </div>
                    <div class="clearfix">
                        <label for="title">Title</label>
                        <div class="input">
                            <input type="text" name = "title" id = "title" class = "xxlarge" value = "<?php echo $site ? $site->title : '' ?>"/>
                        </div>
                    </div>
                    <div class="clearfix">
                        <label for="description">Description</label>
                        <div class="input">
                            <textarea rows="3" name="description" id="redactor" class="xxlarge"  style="width: 100%; height: 320px;"><?php echo $site ? $site->description : '' ?></textarea>
                        </div>
                    </div> 
                </div>
            </div>
            <div id="social">
                <!-- 
                <div class="clearfix separator">
                    <label><strong>Social</strong></label>
                </div>
                 -->
                <div class="section-content">
                    <div class="clearfix">
                        <label for="app_id">Facebook app id</label>
                        <div class="input">
                            <input type="text" name = "app_id" id = "app_id" class = "xxlarge" value = "<?php echo $site ? $site->app_id : '' ?>"/>
                        </div>
                    </div>
                    <div class="clearfix">
                        <label for="ga_code">Tracking code</label>
                        <div class="input">
                            <textarea rows="12" name="ga_code" id="ga_code" class="xxlarge"><?php echo $site ? $site->ga_code : '' ?></textarea>
                            <span class="help-block">without <em><code>&lt;script&gt;</code></em> tags</span>
                        </div>
                    </div>        
                </div>
            </div>     
            <div id="sections">
                <!-- 
                <div class="clearfix separator">
                    <label><strong>Sections</strong></label>
                </div>
                 -->
                <ul class="pills" data-pills="pills">
                    <li class="active"><a href="#section-header">Header</a></li>
                    <li><a href="#section-game">Game</a></li>
                    <li><a href="#section-pagination">Slides pagination</a></li>
                    <li><a href="#section-available">Available in</a></li>                    
                    <li><a href="#section-review">Review</a></li>                    
                </ul> 
                <div class="section-content pill-content">
                    <!-- 
                    <div class="clearfix separator">
                        <label><strong>Headers</strong></label>
                    </div>
                     -->
                    <div id = "section-header" class=" active section-content">
                        <div class="clearfix">
                            <label for="about_background_color">Title Color</label>
                            <div class="input">
                                <input type="text" name = "section_title_color" id = "section_title_color" class = "small" value = "<?php echo $site ? ($site->section_title_color ? $site->section_title_color : '#')  : '#' ?>"/>
                                <div id="section_title_colorpicker"></div>
                            </div>
                        </div>            
                    </div>
                    <!-- 
                    <div class="clearfix separator">
                        <label><strong>Game</strong></label>
                    </div>
                     -->
                    <div id="section-game" class="section-content">
                        <div class="clearfix">
                            <label for="game_title_color">Title color</label>
                            <div class="input">
                                <input type="text" name = "game_title_color" id = "game_title_color" class = "small" value = "<?php echo $site ? ($site->game_title_color ? $site->game_title_color : '#')  : '#' ?>"/>
                                <div id="game_title_colorpicker"></div>
                            </div>
                        </div> 
        
                        <div class="clearfix">
                            <label for="about_background_color">Description background color</label>
                            <div class="input">
                                <input type="text" name = "about_background_color" id = "about_background_color" class = "small" value = "<?php echo $site ? ($site->about_background_color ? $site->about_background_color : '#')  : '#' ?>"/>
                                <div id="about_colorpicker"></div>
                            </div>
                        </div> 
                    </div>
                    <!-- 
                    <div class="clearfix separator">
                        <label><strong>Slides pagination</strong></label>
                    </div>
                     -->
                    <div id="section-pagination" class="section-content">
                        <div class="clearfix">
                            <label for="about_background_color">Link color</label>
                            <div class="input">
                                <input type="text" name = "page_link_color" id = "page_link_color" class = "small" value = "<?php echo $site ? ($site->page_link_color ? $site->page_link_color : '#')  : '#' ?>"/>
                                <div id="page_link_colorpicker"></div>
                            </div>
                        </div> 
                        <div class="clearfix">
                            <label for="about_background_color">Active link color</label>
                            <div class="input">
                                <input type="text" name = "page_active_color" id = "page_active_color" class = "small" value = "<?php echo $site ? ($site->page_active_color ? $site->page_active_color : '#')  : '#' ?>"/>
                                <div id="page_active_colorpicker"></div>
                            </div>
                        </div> 
                    </div>
                    <!-- 
                    <div class="clearfix separator">
                        <label><strong>Available in</strong></label>
                    </div>
                     -->     
                    <div id="section-available" class="section-content">                   
                        <div class="clearfix">
                            <label for="stores_background_color">Stores  background color</label>
                            <div class="input">
                                <input type="text" name = "stores_background_color" id = "stores_background_color" class = "small" value = "<?php echo $site ? ($site->stores_background_color ? $site->stores_background_color : '#')  : '#' ?>"/>
                                <div id="stores_colorpicker"></div>
                            </div>
                        </div> 
                        <div class="clearfix">
                            <label for="bubble_border_color">Bubble border color</label>
                            <div class="input">
                                <input type="text" name = "bubble_border_color" id = "bubble_border_color" class = "small" value = "<?php echo $site ? ($site->bubble_border_color ? $site->bubble_border_color : '#')  : '#' ?>"/>
                                <div id="bubble_border_colorpicker"></div>
                            </div>
                        </div> 
                        <div class="clearfix">
                            <label for="bubble_color">Bubble text color</label>
                            <div class="input">
                                <input type="text" name = "bubble_color" id = "bubble_color" class = "small" value = "<?php echo $site ? ($site->bubble_color ? $site->bubble_color : '#')  : '#' ?>"/>
                                <div id="bubble_colorpicker"></div>
                            </div>
                        </div>                         
                        <div class="clearfix">
                            <label for="bubble_background_color">Bubbel background color</label>
                            <div class="input">
                                <input type="text" name = "bubble_background_color" id = "bubble_background_color" class = "small" value = "<?php echo $site ? ($site->bubble_background_color ? $site->bubble_background_color : '#')  : '#' ?>"/>
                                <div id="bubble_background_colorpicker"></div>
                            </div>
                        </div> 
                    </div>   
                    <!-- 
                    <div class="clearfix separator">
                        <label><strong>Review</strong></label>
                    </div>
                     -->    
                    <div id="section-review" class="section-content"> 
                        <div class="clearfix">
                            <label for="reviews_background_color">Review item background color</label>
                            <div class="input">
                                <input type="text" name = "reviews_background_color" id = "reviews_background_color" class = "small" value = "<?php echo $site ? ($site->reviews_background_color ? $site->reviews_background_color : '#')  : '#' ?>"/>
                                <div id="reviews_colorpicker"></div>
                            </div>
                        </div> 
                        <div class="clearfix">
                            <label for="reviews_link_color">Review item title color</label>
                            <div class="input">
                                <input type="text" name = "reviews_link_color" id = "reviews_link_color" class = "small" value = "<?php echo $site ? ($site->reviews_link_color ? $site->reviews_link_color : '#')  : '#' ?>"/>
                                <div id="reviews_link_colorpicker"></div>
                            </div>
                        </div> 
                        <div class="clearfix">
                            <label for="reviews_press_color">Review item press color</label>
                            <div class="input">
                                <input type="text" name = "reviews_press_color" id = "reviews_press_color" class = "small" value = "<?php echo $site ? ($site->reviews_press_color ? $site->reviews_press_color : '#')  : '#' ?>"/>
                                <div id="reviews_press_colorpicker"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="page">
                <!-- 
                <div class="clearfix separator">
                    <label><strong>Page</strong></label>
                </div>
                 -->               
                <div class="section-content">
                    <div class="clearfix">
                        <label for="body_background_color">Body background color</label>
                        <div class="input">
                            <input type="text" name = "body_background_color" id = "body_background_color" class = "small" value = "<?php echo $site ? ($site->body_background_color ? $site->body_background_color : '#') : '#' ?>"/>
                            <div id="body_colorpicker"></div>
                        </div>
                    </div>        
        
                    <div class="clearfix">
                        <label for="background_color">Container background color</label>
                        <div class="input">
                            <input type="text" name = "background_color" id = "background_color" class = "small" value = "<?php echo $site ? ($site->background_color ? $site->background_color : '#') : '#' ?>"/>
                            <div id="background_colorpicker"></div>
                        </div>
                    </div>        
                    <div class="clearfix">
                        <label for="background_image">Background image</label>
                        <div class="input">
                            <?php if ($site && $site->background_image): ?>
                                <div class="media-grid">
                                    <a href="#" class="media-a">
                                        <img src="<?php echo base_url() ?>uploads/original/<?php echo $site->background_image ?>" alt="" class="thumbnail"/>
                                    </a>
                                </div>
                                <p>
                                    <a href="<?php echo base_url() ?>microsite/delete_image/<?php echo $site->id ?>">delete image</a>
                                </p>
                            <?php else: ?>
                                <input type="file" name = "background_image" value = "" />
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="clearfix">
                        <label for="font_color">Font color</label>
                        <div class="input">
                            <input type="text" name = "font_color" id = "font_color" class = "small" value = "<?php echo $site ? ($site->font_color ? $site->font_color : '#')  : '#' ?>"/>
                            <div id="font_colorpicker"></div>
                        </div>
                    </div> 
                    <div class="clearfix">
                        <label for="link_color">Link color</label>
                        <div class="input">
                            <input type="text" name = "link_color" id = "link_color" class = "small" value = "<?php echo $site ? ($site->link_color ? $site->link_color : '#')  : '#' ?>"/>
                            <div id="link_colorpicker"></div>
                        </div>
                    </div>              
                </div>
            </div>    
        </div>
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>        
            
    <?php echo form_close() ?>

</fieldset>
