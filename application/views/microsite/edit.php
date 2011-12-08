
<p>
    <a href="<?php echo base_url() ?>microsite">&larr; Go back</a>
</p>
<fieldset>
    <legend>
        <?php if ($item): ?>
            <?php echo $item->name ?>
        <?php else: ?>
            New site
        <?php endif ?>
    </legend>
    <?php if (validation_errors()): ?>
        <div class="alert-message block-message error">
            <?php echo validation_errors() ?>
        </div>
    <?php endif ?>
    
    <?php echo  form_open_multipart('', array('id'=>'edit-site-form')) ?>
        <div class="clearfix  separator">
            <label><strong>Game</strong></label>
        </div>
        <div class="section-content">
            <div class="clearfix">
                <label for="name">Name</label>
                <div class="input">
                    <input type="text" name = "name" id = "name" class = "xxlarge" value = "<?php echo $item ? $item->name : '' ?>"/>
                </div>
            </div>
    
            <div class="clearfix">
                <label for="url">Url</label>
                <div class="input">
                    <input type="text" name = "url" id = "url" class = "xxlarge" value = "<?php echo $item ? $item->url : '' ?>"/>
                </div>
            </div>
            <div class="clearfix">
                <label for="title">Title</label>
                <div class="input">
                    <input type="text" name = "title" id = "title" class = "xxlarge" value = "<?php echo $item ? $item->title : '' ?>"/>
                </div>
            </div>
            <div class="clearfix">
                <label for="description">Description</label>
                <div class="input">
                    <textarea rows="3" name="description" id="description" class="xxlarge"><?php echo $item ? $item->description : '' ?></textarea>
                </div>
            </div> 
        </div>
        
        <div class="clearfix separator">
            <label><strong>Social</strong></label>
        </div>
        <div class="section-content">
            <div class="clearfix">
                <label for="app_id">Facebook app id</label>
                <div class="input">
                    <input type="text" name = "app_id" id = "app_id" class = "xxlarge" value = "<?php echo $item ? $item->app_id : '' ?>"/>
                </div>
            </div>
            <div class="clearfix">
                <label for="ga_code">Tracking code</label>
                <div class="input">
                    <textarea rows="3" name="ga_code" id="ga_code" class="xxlarge"><?php echo $item ? $item->ga_code : '' ?></textarea>
                </div>
            </div>        
        </div>
        
        <div class="clearfix separator">
            <label><strong>Sections</strong></label>
        </div>
        <div class="section-content">
            <div class="clearfix">
                <label for="about_background_color">About</label>
                <div class="input">
                    <input type="text" name = "about_background_color" id = "about_background_color" class = "small" value = "<?php echo $item ? ($item->about_background_color ? $item->about_background_color : '#')  : '#' ?>"/>
                    <div id="about_colorpicker"></div>
                </div>
            </div> 
            <div class="clearfix">
                <label for="stores_background_color">Stores</label>
                <div class="input">
                    <input type="text" name = "stores_background_color" id = "stores_background_color" class = "small" value = "<?php echo $item ? ($item->stores_background_color ? $item->stores_background_color : '#')  : '#' ?>"/>
                    <div id="stores_colorpicker"></div>
                </div>
            </div>            
            <div class="clearfix">
                <label for="reviews_background_color">Review item</label>
                <div class="input">
                    <input type="text" name = "reviews_background_color" id = "reviews_background_color" class = "small" value = "<?php echo $item ? ($item->reviews_background_color ? $item->reviews_background_color : '#')  : '#' ?>"/>
                    <div id="reviews_colorpicker"></div>
                </div>
            </div> 
        </div>
        
        <div class="clearfix separator">
            <label><strong>Page</strong></label>
        </div>               
        <div class="section-content">
            <div class="clearfix">
                <label for="font_color">Font color</label>
                <div class="input">
                    <input type="text" name = "font_color" id = "font_color" class = "small" value = "<?php echo $item ? ($item->font_color ? $item->font_color : '#')  : '#' ?>"/>
                    <div id="font_colorpicker"></div>
                </div>
            </div> 
            <div class="clearfix">
                <label for="link_color">Link color</label>
                <div class="input">
                    <input type="text" name = "link_color" id = "link_color" class = "small" value = "<?php echo $item ? ($item->link_color ? $item->link_color : '#')  : '#' ?>"/>
                    <div id="link_colorpicker"></div>
                </div>
            </div>  
            <div class="clearfix">
                <label for="background_color">Background color</label>
                <div class="input">
                    <input type="text" name = "background_color" id = "background_color" class = "small" value = "<?php echo $item ? ($item->background_color ? $item->background_color : '#') : '#' ?>"/>
                    <div id="background_colorpicker"></div>
                </div>
            </div>        
            <div class="clearfix">
                <label for="background_image">Background image</label>
                <div class="input">
                    <?php if ($item && $item->background_image): ?>
                        <div class="media-grid">
                            <a href="#" class="media-a">
                                <img src="<?php echo base_url() ?>uploads/<?php echo $item->background_image ?>" alt="" class="thumbnail"/>
                            </a>
                        </div>
                        <p>
                            <a href="<?php echo base_url() ?>microsite/delete_image/<?php echo $item->id ?>">delete image</a>
                        </p>
                    <?php else: ?>
                        <input type="file" name = "background_image" value = "" />
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>        
        
    <?php echo form_close() ?>
</fieldset>
