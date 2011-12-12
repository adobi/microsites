
<p>
    <a  href="<?php echo base_url() ?>microsite">&larr; Go back</a>
</p>

<?php if ($site): ?>
    <h3 style="margin-bottom:18px"><?php echo $site->name ?> reviews</h3>
<?php endif ?>

<p><a href="<?php echo base_url() ?>review/edit/site/<?php echo $site->id ?>">Create new review</a></p>

<?php if ($items): ?>
    <fieldset class="sortable-wrapper">
        <?php echo form_open() ?>
            <ul id="review-sortable" style="margin:0; list-style-type:none">
                <?php foreach ($items as $item): ?>
                    <li class="span16 item" id="<?php echo $item->id ?>">
                        <h4 class = "title">
                            <div class="star" data-rate="<?php echo $item->rate ?>"></div>
                            <a href="<?php echo $item->url ?>" target = "_blank"><?php echo $item->title ?></a>
                            
                            <span class="pull-right">
                                <?php echo $item->press ?> <?php echo to_date($item->reviewd_at) ?>
                                <?php if ($item->press_logo): ?>
                                    <img src="<?php echo base_url() ?>uploads/<?php echo $item->press_logo ?>" alt="">
                                <?php endif ?>
                            </span>
                        </h4>
                        
                        <div class="description"><?php echo htmlspecialchars_decode($item->description) ?></div>
                        <p class="item-nav">
                            <?php if ($item->ga_category && $item->ga_action && $item->ga_label && $item->ga_value): ?>
                                ✔
                            <?php endif ?>                            
                            <a href="<?php echo base_url() ?>review/edit/<?php echo $item->id ?>/site/<?php echo $site->id ?>">edit</a>
                            <a href="<?php echo base_url() ?>review/delete/<?php echo $item->id ?>">delete</a>
                        </p>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php echo form_close() ?>
    </fieldset>
<?php endif ?>