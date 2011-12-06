<fieldset>
    <?php if ($site): ?>
        <h3 style="margin-bottom:18px"><?php echo $site->name ?> videos</h3>
    <?php endif ?>
    <?php if (validation_errors()): ?>
        <div class="alert-message block-message error">
            <?php echo validation_errors() ?>
        </div>
    <?php endif ?>    
    <?php echo form_open('', array('id'=>'edit-video-form')) ?>
    
        <div class="clearfix">
            <label for="title">Title</label>
            <div class="input">
                <input type="text" name = "title" id = "title" class = "xxlarge" value = ""/>
            </div>
        </div>    
    
        <div class="clearfix">
            <label for="video">Embed code</label>
            <div class="input">
                <textarea rows="3" name="video" id="video" class="xxlarge"></textarea>
                <span class="help-block">Set the video size to 450x350.</span>
            </div>
        </div>
            
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>      
    <?php echo form_close() ?>
</fieldset>

<?php if ($items): ?>
    <fieldset class="row" style="margin-left:0px;">
        <?php foreach ($items as $item): ?>
            <div class="span8 item">
                <h4 class = "title"><?php echo $item->title ?></h4>
                <div class="video"><?php echo htmlspecialchars_decode($item->video) ?></div>
                <p class="item-nav">
                    <a href="#" class="edit-video" data-id = "<?php echo $item->id ?>">edit</a>
                    <a href="<?php echo base_url() ?>microsite/delete_video/<?php echo $item->id ?>">delete</a>
                </p>
            </div>
        <?php endforeach ?>
    </fieldset>
<?php endif ?>