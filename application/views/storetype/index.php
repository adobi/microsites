
<p>
    <a href="<?php echo base_url() ?>storetype/edit">Create new store</a>
</p>

<?php if ($items): ?>
    <div class="span16 row store-items" style="margin-left:0px;">
        <?php foreach ($items as $item): ?>
            <div class="span2 item"  style="width:200px!important;">
                <p style="text-align:center"><strong><?php echo $item->name ?></strong></p>
                <p style="text-align:center">
                    
                    <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->logo ?>" alt="">
                </p>
                <p class="item-nav">
                    <a href="<?php echo base_url() ?>storetype/edit/<?php echo $item->id ?>">edit</a>
                    <a href="<?php echo base_url() ?>storetype/delete/<?php echo $item->id ?>">delete</a>
                </p>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>