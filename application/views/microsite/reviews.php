<fieldset>
    <?php if ($site): ?>
        <h3 style="margin-bottom:18px"><?php echo $site->name ?> reviews</h3>
    <?php endif ?>
    <?php if (validation_errors()): ?>
        <div class="alert-message block-message error">
            <?php echo validation_errors() ?>
        </div>
    <?php endif ?>    
    <?php echo form_open('', array('id'=>'edit-review-form')) ?>
    
        <div class="clearfix">
            <label for="title">Title</label>
            <div class="input">
                <input type="text" name = "title" id = "title" class = "xxlarge" value = ""/>
            </div>
        </div>    
        <div class="clearfix">
            <label for="url">Url</label>
            <div class="input">
                <input type="text" name = "url" id = "url" class = "xxlarge" value = "http://"/>
            </div>
        </div>     
        <div class="clearfix">
            <label for="description">Description</label>
            <div class="input">
                <textarea rows="5" name="description" id="description" class="xxlarge"></textarea>
            </div>
        </div>
        <div class="clearfix">
            <label for="url">Rating</label>
            <div class="input">
                <div id="rate-star"></div>
                <!-- <input type="text" name = "url" id = "url" class = "xxlarge" value = "http://"/> -->
            </div>
        </div>             
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>      
    <?php echo form_close() ?>
</fieldset>

<?php if ($items): ?>
    <fieldset>
        <?php foreach ($items as $item): ?>
            <div class="span16 item">
                <h4 class = "title">
                    <div class="star" data-rate="<?php echo $item->rate ?>"></div>
                    <a href="<?php echo $item->url ?>" target = "_blank"><?php echo $item->title ?></a>
                </h4>
                
                <div class="description"><?php echo htmlspecialchars_decode($item->description) ?></div>
                <p class="item-nav">
                    <a href="#" class="edit-review" data-id = "<?php echo $item->id ?>">edit</a>
                    <a href="<?php echo base_url() ?>microsite/delete_review/<?php echo $item->id ?>">delete</a>
                </p>
            </div>
        <?php endforeach ?>
    </fieldset>
<?php endif ?>