<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4 class="alert-success text-center"><?= (!empty($msg) ? $msg : ''); ?></h4>
            <h2><?= $article->title; ?></h2>
            <h4><?= $article->author; ?></h4>
            <p><?= $article->text; ?></p>
            <?= anchor('articles', 'Back'); ?> | <?= anchor('article/edit/'.$article->id, 'Edit'); ?>
        </div>
    </div>
</div>