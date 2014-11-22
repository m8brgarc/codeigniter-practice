<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h4 class="alert-success text-center"><?= (!empty($msg) ? $msg : ''); ?></h4>
            <h2>All Articles</h2>
            <?= anchor('article/new', 'New Article'); ?>
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
    <?php foreach($articles as $article): ?>
    <div class="row text-center">
        <div class="col-xs-1">
            <input type="checkbox" value="published" name="published" <?= ($article->published ? 'checked' : ''); ?>>
        </div>
        <div class="col-xs-3">
            <?= anchor('article/show/'.$article->id, $article->title); ?>
        </div>
        <div class="col-xs-3">
            <?= $article->author; ?>
        </div>
        <div class="col-xs-3">
            <?php if($article->updated_at > $article->created_at):
                echo 'Updated '.timespan(human_to_unix($article->updated_at), now()).' ago';
            else:
                echo timespan(human_to_unix($article->created_at), now()).' ago';
            endif; ?>
        </div>
        <div class="col-xs-2">
            <?= anchor('article/edit/'.$article->id, 'Edit'); ?> | <?= anchor('article/delete/'.$article->id, 'Delete'); ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>