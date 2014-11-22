<div class="form-group">
    <?= form_label('Title', 'title'); ?>
    <?= form_input(array('name' => 'title', 'id' => 'title', 'class' => 'form-control', 'value' => (isset($blog) ? $blog->title : set_value('title')))); ?>
</div>
<div class="form-group">
    <?= form_label('Author', 'author'); ?>
    <?= form_input(array('name' => 'author', 'id' => 'author', 'class' => 'form-control', 'value' => (isset($blog) ? $blog->author : set_value('author')))); ?>
</div>
<div class="form-group">
    <?= form_label('Text', 'text'); ?>
    <?= form_textarea(array('name' => 'text', 'id' => 'text', 'class' => 'form-control', 'value' => (isset($blog) ? $blog->text : set_value('text')))); ?>
</div>