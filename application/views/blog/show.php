<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4 class="alert-success text-center"><?= (!empty($msg) ? $msg : ''); ?></h4>
            <h2><?= $blog->title; ?></h2>
            <h4><?= $blog->author; ?></h4>
            <p><?= $blog->text; ?></p>
            <?= anchor('blogs', 'Back'); ?> | <?= anchor('blog/edit/'.$blog->id, 'Edit'); ?>
        </div>
    </div>
</div>