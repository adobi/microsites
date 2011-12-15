
    
<p>
    <a href="<?php echo base_url() ?>microsite/videos/<?php echo $site ?>">&larr; Go back</a>
</p>
<fieldset>
    <?php if ($site): ?>
        <legend>Edit video</legend>
    <?php else: ?>
        <legend>New video</legend>
    <?php endif ?>
    <?php if (validation_errors()): ?>
        <div class="alert-message block-message error">
            <?php echo validation_errors() ?>
        </div>
    <?php endif ?> 
    <ul class="pills" data-pills="pills">
        <li class="active"><a href="#video">Video</a></li>
        <li><a href="#analytics">Analytics</a></li>
    </ul>         
    <?php echo form_open('', array('id'=>'edit-video-form')) ?>
        <div class="pill-content">
            <div id="video" class="active">
                <div class="clearfix">
                    <label for="title">Title</label>
                    <div class="input">
                        <input type="text" name = "title" id = "title" class = "xxlarge" value = "<?php echo $item ? $item->title : '' ?>"/>
                    </div>
                </div>    
            
                <div class="clearfix">
                    <label for="video">Youtube video id</label>
                    <div class="input">
                        <input type="text" name = "video" id = "video" class = "xxlarge" value = "<?php echo $item ? $item->video : '' ?>"/>
                        <span class="help-block">http://www.youtube.com/watch?v=<strong>1P3MegpkaMI</strong></span>
                        <!-- 
                        <textarea rows="3" name="video" id="video" class="xxlarge"></textarea>
                        
                         -->
                    </div>
                </div>
            </div>
            <div id="analytics">
                <?php echo $template['partials']['event_tracking'] ?>
            </div>            
        </div>            
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>      
    <?php echo form_close() ?>
</fieldset>