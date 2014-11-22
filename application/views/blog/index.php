<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h4 class="alert-success text-center"><?= (!empty($msg) ? $msg : ''); ?></h4>
            <h2>All Blog Posts</h2>
            <?= anchor('blog/new', 'New Blog Post'); ?>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-xs-3 col-xs-offset-1">
            <h3>Title</h3>
        </div>
        <div class="col-xs-3">
            <h3>Author</h3>
        </div>
        <div class="col-xs-3">
            <h3>Date</h3>
        </div>
        <div class="col-xs-2">
            <h3>Modify</h3>
        </div>
    </div>
    <?php foreach($blogs as $blog): ?>
        <div class="row text-center">
            <div class="col-xs-1">
                <input type="checkbox" value="published" name="published" <?= ($blog->published ? 'checked' : ''); ?>>
            </div>
            <div class="col-xs-3">
                <?= anchor('blog/show/'.$blog->id, $blog->title); ?>
            </div>
            <div class="col-xs-3">
                <?= $blog->author; ?>
            </div>
            <div class="col-xs-3">
                <?php if($blog->updated_at > $blog->created_at):
                    echo 'Updated '.timespan(human_to_unix($blog->updated_at), now()).' ago';
                else:
                    echo timespan(human_to_unix($blog->created_at), now()).' ago';
                endif; ?>
            </div>
            <div class="col-xs-2">
                <?= anchor('blog/edit/'.$blog->id, 'Edit'); ?> | <?= anchor('blog/delete/'.$blog->id, 'Delete'); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>