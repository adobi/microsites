

<p>
    <a href="<?php echo base_url() ?>storetype/">&larr; Go back</a>
</p>

<?php if (validation_errors()): ?>
    <div class="alert-message block-message error">
        <?php echo validation_errors() ?>
    </div>
<?php endif ?>
<fieldset>

    <legend>
        <?php if ($item): ?>
            Edit store
        <?php else: ?>
            New store
        <?php endif ?>
    </legend>    
        
    <?php echo form_open_multipart('', array('id'=>'edit-storetype-form')) ?>
    
        <div class="clearfix">
            <label for="name">Name</label>
            <div class="input">
                <input type="text" name = "name" id = "name" class = "xxlarge" value = "<?php echo $item ? $item->name : '' ?>"/>
            </div>
        </div>    
    
        <div class="clearfix">
            <label for="logo">Logo</label>
            <div class="input">
                <?php if ($item && $item->logo): ?>
                    <div class="media-grid">
                        <a href="#" class="media-a">
                            <img src="<?php echo base_url() ?>uploads/<?php echo $item->logo ?>" alt="" class="thumbnail"/>
                        </a>
                    </div>
                    <p>
                        <a href="<?php echo base_url() ?>storetype/delete_image/<?php echo $item->id ?>">delete</a>
                    </p>
                <?php else: ?>
                    <input type="file" name = "logo" value = "" />
                    <span class="help-block">Image size 110x41.</span>
                <?php endif ?>
            </div>
            
        </div>                    
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>      
    <?php echo form_close() ?>
</fieldset>

