
<?php if ($site): ?>

    <?php if (validation_errors()): ?>
        <div class="alert-message block-message error">
            <?php echo validation_errors() ?>
        </div>
    <?php endif ?>
    <style type="text/css">
        p {
            margin-bottom:0px;
        }
    </style>
    <fieldset>
        <legend>Stores</legend>
        <?php echo form_open() ?>
        <div class="clearfix">
            <label for="name">Select a store</label>
            <div class="input">
            <?php if ($avaliable_stores): ?>
                <div class="row" style="margin-left:0px;">
                <?php foreach ($avaliable_stores as $item): ?>
                    <div class="span2 item" style="width:160px!important;">
                        <label for="<?php echo $item->id ?>" style="display:inline-block;width:160px;cursor:pointer">
                            <p style="text-align:center">
                                    <img src="<?php echo base_url() ?>uploads/<?php echo $item->logo ?>" alt="">
                            </p> 
                            <p style="text-align:center">
                                <input type="radio" name = "type_id" value = "<?php echo $item->id ?>" id = "<?php echo $item->id ?>">
                            </p>          
                        </label>             
                    </div>
                <?php endforeach ?>
                </div>
            <?php endif ?>
            </div>
        </div> 
        <div class="clearfix">
            <label for="url">Url</label>
            <div class="input">
                <input type="text" name = "url" id = "url" class = "xxlarge" value = "http://"/>
            </div>
        </div>          
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>                 
        <?php echo form_close() ?>
    </fieldset>
    
    <fieldset>
        <legend><?php echo $site->name ?> is available in</legend>
        <?php if ($stores): ?>
            <div class="row" style="margin-left:0px;">
            <?php foreach ($stores as $item): ?>
                <div class="span2 item" style="width:160px!important;">
                    <p style="text-align:center">
                        <a href="<?php echo $item->url ?>" target = "_blank">
                            <img src="<?php echo base_url() ?>uploads/<?php echo $item->logo ?>" alt="">
                        </a>
                    </p> 
                    <p class="item-nav">
                        <a href="<?php echo base_url() ?>microsite/delete_store/<?php echo $item->id ?>">delete</a>
                    </p>  
                </div>
            <?php endforeach ?>
            </div>
        <?php endif ?>
    </fieldset>
<?php else: ?>
    <div class="alert-message block-message error">
        First select a site
    </div>
    
<?php endif ?>
