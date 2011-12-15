
<p>
    <a href="<?php echo base_url() ?>microsite">&larr; Go back</a>
</p>

<?php if ($site): ?>
    <h3 style="margin-bottom:18px"><?php echo $site->name ?> videos</h3>
<?php endif ?>

<p><a href="<?php echo base_url() ?>video/edit/site/<?php echo $site->id ?>">Create new video</a></p>

<?php if ($items): ?>
    <fieldset id="video-items" class="sortable-wrapper" style="margin-left:0px; text-align:center">
        <?php echo form_open() ?>
            <ul id="video-sortable" style="margin:0px;">
            <?php foreach ($items as $item): ?>
                <li class="span8 sortable-item item " id="<?php echo $item->id ?>">
                    <h4 class = "title"><?php echo $item->title ?></h4>
                    <div class="video" style="margin-bottom:10px;" data-video-id = "<?php echo $item->video ?>"><?php echo embed_youtube($item->video) ?></div>
                    <p class="item-nav">
                        <?php if ($item->ga_category && $item->ga_action && $item->ga_label && $item->ga_value): ?>
                            ✔
                        <?php endif ?>
                        <a href="<?php echo base_url() ?>video/edit/<?php echo $item->id ?>/site/<?php echo $site->id ?>" data-id = "<?php echo $item->id ?>">edit</a>
                        <a href="<?php echo base_url() ?>microsite/delete_video/<?php echo $item->id ?>">delete</a>
                    </p>
                </li>
            <?php endforeach ?>
            </ul>
        <?php echo form_close() ?>
    </fieldset>
<?php endif ?>