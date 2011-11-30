
<p>
    <a href="<?php echo base_url() ?>microsite/edit">Create new site</a>
</p>

<?php if ($items): ?>
    
    <div class="span16">
        <?php foreach ($items as $item): ?>
            <div class="item">
                <h3><?php echo $item->name ?></h3>
                <p><?php echo $item->title ?></p>
                <p class="item-nav">
                    <a href="<?php echo base_url() ?>microsite/preview/<?php echo $item->id ?>"><strong>preview</strong></a>

                    <a href="<?php echo base_url() ?>microsite/reviews/<?php echo $item->id ?>">reviews</a>
                    <a href="<?php echo base_url() ?>microsite/images/<?php echo $item->id ?>">images</a>
                    <a href="<?php echo base_url() ?>microsite/videos/<?php echo $item->id ?>">videos</a>
                    
                    <a href="<?php echo base_url() ?>microsite/edit/<?php echo $item->id ?>">edit</a>
                    <a href="<?php echo base_url() ?>microsite/delete/<?php echo $item->id ?>">delete</a>
                </p>
            </div> 
        <?php endforeach ?>
    </div>

<?php endif ?>
