
<p>
    <a href="<?php echo base_url() ?>microsite">&larr; Go back</a>
</p>
<?php if ($site): ?>


    <style type="text/css">
        p {
            margin-bottom:0px;
        }
    </style>    
    <fieldset class="sortable-wrapper">
        <legend><?php echo $site->name ?> is available in</legend>
        <?php echo form_open() ?>
            <p style="margin-bottom:10px;">
                <a href="<?php echo base_url() ?>store/edit/site/<?php echo $site->id ?>">Add to new store</a>
            </p>
            <?php if ($stores): ?>
                <ul id="store-sortable" style="margin-left:0px;">
                <?php foreach ($stores as $item): ?>
                    <li class="sortable-item span2" style="width:160px!important;"id = "<?php echo $item->id ?>">
                        <p style="text-align:center"><strong><?php echo $item->label ? $item->label : '&nbsp;' ?></strong></p>
                        <p style="text-align:center">
                            <a href="<?php echo $item->url ?>" target = "_blank">
                                <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->logo ?>" alt="">
                            </a>
                        </p> 
                        <p class="item-nav">
                            <?php if ($item->ga_category && $item->ga_action && $item->ga_label && $item->ga_value): ?>
                                ✔
                            <?php endif ?>                            
                            <a href="<?php echo base_url() ?>store/edit/<?php echo $item->id ?>/site/<?php echo $site->id ?>">edit</a>
                            <a href="<?php echo base_url() ?>store/delete/<?php echo $item->id ?>">delete</a>
                        </p>  
                    </li>
                <?php endforeach ?>
                </ul>
            <?php endif ?>
        <?php echo form_close() ?>
    </fieldset>
<?php else: ?>
    <div class="alert-message block-message error">
        First select a site
    </div>
    
<?php endif ?>
