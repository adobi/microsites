
<p>
    <a  href="<?php echo base_url() ?>microsite">&larr; Go back</a>
</p>

<?php if ($site): ?>
    <h3 style="margin-bottom:18px"><?php echo $site->name ?> reviews</h3>
<?php endif ?>

<p><a href="<?php echo base_url() ?>review/edit/site/<?php echo $site->id ?>">add new review</a></p>

<?php if ($items): ?>
    <fieldset>
        <?php foreach ($items as $item): ?>
            <div class="span16 item">
                <h4 class = "title">
                    <div class="star" data-rate="<?php echo $item->rate ?>"></div>
                    <a href="<?php echo $item->url ?>" target = "_blank"><?php echo $item->title ?></a>
                    
                    <span class="pull-right">
                        <?php echo $item->press ?>
                        <?php if ($item->press_logo): ?>
                            <img src="<?php echo base_url() ?>uploads/<?php echo $item->press_logo ?>" alt="">
                        <?php endif ?>
                    </span>
                </h4>
                
                <div class="description"><?php echo htmlspecialchars_decode($item->description) ?></div>
                <p class="item-nav">
                    <a href="<?php echo base_url() ?>review/edit/<?php echo $item->id ?>/site/<?php echo $site->id ?>">edit</a>
                    <a href="<?php echo base_url() ?>review/delete/<?php echo $item->id ?>">delete</a>
                </p>
            </div>
        <?php endforeach ?>
    </fieldset>
<?php endif ?>