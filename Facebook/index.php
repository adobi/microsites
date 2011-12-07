
<h2>News</h2>
<?= form_open() ?>

    <fieldset>
        <div class = "clearfix">
            <label for="title">Title</label>
            <div class="input">
                <input type="text" name = "title" id = "title" value = "<?= $current_item ? $current_item->title : '' ?>" class = "xxlarge"/>
            </div>
        </div>
        <div class = "clearfix">
            <label for="available">Type</label>
            <div class="input">
                <?php echo form_dropdown('available', array('0'=>'iOS only', '1'=>'Android only', '2'=>'Both'), $current_item ? $current_item->available: '') ?>
            </div>
        </div>        
        <div class = "clearfix">
            <label for="content">Content</label>
            <div class="input">
                <textarea name="content" id="content" class = "xxlarge"><?= $current_item ? $current_item->content : '' ?></textarea>
            </div>
        </div>
        <div class = "actions">
            <?php if (is_numeric($this->uri->segment(3))): ?>
				<input type="submit" class = "btn primary" value = "Save Changes"/>
                <a href="<?= base_url() ?>news" class="btn">Add another one</a>
			<?php else: ?>
				<input type="submit" class = "btn primary" value = "Save"/>
            <?php endif ?>
        </div>
    </fieldset>

<?= form_close() ?>

<?php if ($items): ?>
    
    <?= $pagination_links ?>
    
    <table class="zebra-striped">
        <thead>
            <tr>
                <th>#</th>
                <th style="width:150px;">Title</th>
                <th>Content</th>
                <th style="width:120px">Created</th>
                <th style="width:100px;">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($items as $item) : ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->title ?></td>
                    <td><?= $item->content ?></td>
                    <td><?= $item->created ?></td>
                    <td>
                        <a href="<?= base_url() ?>news/index/<?= $item->id ?>/<?= $page ? 'page/'.$page : '' ?>" class="btn small">Edit</a>
                        <a href="<?= base_url() ?>news/delete/<?= $item->id ?>" class="btn small danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif ?>
