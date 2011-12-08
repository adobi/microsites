
<p>
    <a href="<?php echo base_url() ?>microsite">&larr; Go back</a>
</p>
<?php if ($site): ?>


    <style type="text/css">
        p {
            margin-bottom:0px;
        }
    </style>    
    <fieldset>
        <legend><?php echo $site->name ?> is available in</legend>
    
        <p>
            <a href="<?php echo base_url() ?>store/edit/site/<?php echo $site->id ?>">Add to new store</a>
        </p>
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
                        <a href="<?php echo base_url() ?>store/edit/<?php echo $item->id ?>/site/<?php echo $site->id ?>">edit</a>
                        <a href="<?php echo base_url() ?>store/delete/<?php echo $item->id ?>">delete</a>
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
