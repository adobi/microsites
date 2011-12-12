

<p>
    <a href="<?php echo base_url() ?>microsite/reviews/<?php echo $site ?>">&larr; Go back</a>
</p>


<?php if (validation_errors()): ?>
    <div class="alert-message block-message error">
        <?php echo validation_errors() ?>
    </div>
<?php endif ?>
<fieldset>
 
    <legend>
        <?php if ($item): ?>
            Edit review
        <?php else: ?>
            New review
        <?php endif ?>
    </legend>    
       
    <?php echo form_open_multipart('', array('id'=>'edit-review-form')) ?>
        <div class="clearfix separator">
            <label><strong>Review</strong></label>
        </div>     
        <div class="section-content">
            <div class="clearfix">
                <label for="title">Title</label>
                <div class="input">
                    <input type="text" name = "title" id = "title" class = "xxlarge" value = "<?php echo $item ? $item->title : '' ?>"/>
                </div>
            </div>    
            <div class="clearfix">
                <label for="url">Url</label>
                <div class="input">
                    <input type="text" name = "url" id = "url" class = "xxlarge" value = "<?php echo $item ? $item->url : 'http://' ?>"/>
                </div>
            </div>     
            <div class="clearfix">
                <label for="description">Description</label>
                <div class="input">
                    <textarea rows="5" name="description" id="description" class="xxlarge"><?php echo $item ? $item->description : '' ?></textarea>
                </div>
            </div>
            <div class="clearfix">
                <label for="reviewd_at">Reviewd at</label>
                <div class="input">
                    <input type="text" name = "reviewd_at" id = "reviewd_at" class = "small datepicker" value = "<?php echo $item ? to_date($item->reviewd_at) : date('Y-m-d') ?>"/>
                </div>
            </div>         
            <div class="clearfix">
                <label for="url">Rating</label>
                <div class="input">
                    <div id="rate-star" data-rate = "<?php echo $item ? $item->rate : '' ?>"></div>
                </div>
            </div> 
            <div class="clearfix">
                <label for="press">Press</label>
                <div class="input">
                    <input type="text" name = "press" id = "press" class = "xxlarge" value = "<?php echo $item ? $item->press : '' ?>"/>
                </div>
            </div>     
            <div class="clearfix">
                <label for="press_logo">Press logo</label>
                <div class="input">
                    <?php if ($item && $item->press_logo): ?>
                        <div class="media-grid">
                            <a href="#" class="media-a">
                                <img src="<?php echo base_url() ?>uploads/<?php echo $item->press_logo ?>" alt="" class="thumbnail"/>
                            </a>
                        </div>
                        <p>
                            <a href="<?php echo base_url() ?>review/delete_image/<?php echo $item->id ?>">delete</a>
                        </p>
                    <?php else: ?>
                        <input type="file" name = "press_logo" value = "" />
                        <span class="help-block">Image size 30x30.</span>
                    <?php endif ?>
                </div>
                
            </div>    
        </div>
        <div class="clearfix separator">
            <label><strong>Analytics</strong></label>
        </div>  
        <div class="section-content">
            <?php echo $template['partials']['event_tracking'] ?>                               
        </div>                        
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>      
    <?php echo form_close() ?>
</fieldset>

