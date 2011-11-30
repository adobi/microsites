
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
            <label for="background_color">Background color</label>
            <div class="input">
                <input type="text" name = "background_color" id = "background_color" class = "small" value = "<?php echo $item ? $item->background_color : '' ?>"/>
                <div id="colorpicker"></div>
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
        
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>        
        
    <?php echo form_close() ?>
</fieldset>
