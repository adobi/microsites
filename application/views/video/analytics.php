
<p>
    <a href="<?php echo base_url() ?>microsite/videos/<?php echo $item->site_id ?>">&larr; Go back</a>
</p>

<fieldset>
    <legend>Google Analytics</legend>
    <?php echo form_open() ?>

        <div class="clearfix">
            <label>Image</label>
            <div class="input">
                <?php echo htmlspecialchars_decode($item->video) ?>
            </div>        
        </div>
        

        <?php echo $template['partials']['event_tracking'] ?>

        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>       

    <?php echo form_close() ?>
</fieldset>