    
<p>
    <a href="<?php echo base_url() ?>microsite/stores/<?php echo $site->id ?>">&larr; Go back</a>
</p>
    
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
        <legend>Stores for <?php echo $site->name ?></legend>
        <?php echo form_open() ?>
        <div class="clearfix">
            <label for="name">Select a store</label>
            <div class="input">
            <?php if ($avaliable_stores): ?>
                <div class="row" style="margin-left:0px;">
                <?php foreach ($avaliable_stores as $s): ?>
                    <div class="span2 item" style="width:160px!important;">
                        <label for="<?php echo $s->id ?>" style="display:inline-block;width:160px;cursor:pointer">
                            <p style="text-align:center">
                                    <img src="<?php echo base_url() ?>uploads/<?php echo $s->logo ?>" alt="">
                            </p> 
                            <p style="text-align:center">
                                <input type="radio" name = "type_id" value = "<?php echo $s->id ?>" id = "<?php echo $s->id ?>">
                            </p>          
                        </label>             
                    </div>
                <?php endforeach ?>
                </div>
            <?php endif ?>
            </div>
        </div> 
        <?php if ($item): ?>
                
            <div class="clearfix">
                <label for="url">Store</label>
                <div class="input">
                    <img src="<?php echo base_url() ?>uploads/<?php echo $item->logo ?>" alt="">
                </div>
            </div>  
        <?php endif ?>
        
        <div class="clearfix">
            <label for="url">Url</label>
            <div class="input">
                <input type="text" name = "url" id = "url" class = "xxlarge" value = "<?php echo $item ? $item->url : 'http://' ?>"/>
            </div>
        </div>  
        <div class="clearfix">
            <label for="url"><strong>Analytics</strong></label>
        </div>  
        <div class="clearfix">
            <label for="ga_category">Category</label>
            <div class="input">
                <input type="text" name = "ga_category" id = "ga_category" class = "xxlarge" value = "<?php echo $item ? $item->ga_category : '' ?>"/>
            </div>
        </div>                  
        <div class="clearfix">
            <label for="ga_action">Action</label>
            <div class="input">
                <input type="text" name = "ga_action" id = "ga_action" class = "xxlarge" value = "<?php echo $item ? $item->ga_action : '' ?>"/>
            </div>
        </div>                  
        <div class="clearfix">
            <label for="ga_label">Label</label>
            <div class="input">
                <input type="text" name = "ga_label" id = "ga_label" class = "xxlarge" value = "<?php echo $item ? $item->ga_label : '' ?>"/>
            </div>
        </div>                  
        <div class="clearfix">
            <label for="ga_value">Value</label>
            <div class="input">
                <input type="text" name = "ga_value" id = "ga_value" class = "xxlarge" value = "<?php echo $item ? $item->ga_value : '' ?>"/>
            </div>
        </div>                  
        <div class="actions">
            <input type="submit" value="Save" class="btn primary"> &nbsp; <a class="btn" href="<?php echo base_url() ?>microsite">Cancel</a>
        </div>                 
        <?php echo form_close() ?>
    </fieldset>
