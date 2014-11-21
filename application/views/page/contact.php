<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2><?= $title; ?></h2>
            <?= $posted_info; ?>
            <?= form_open('contact'); ?>
                <div class="form-group">
                    <?= form_label('Name', 'name'); ?>
                    <?= form_input(array('type' => 'text', 'name' => 'name', 'id' => 'name', 'class' => 'form-control'), null, 'required'); ?>
                </div>
                <div class="form-group">
                    <?= form_label('Email', 'email'); ?>
                    <?= form_input(array('type' => 'email', 'name' => 'email', 'id' => 'email', 'class' => 'form-control'), null, 'required'); ?>
                </div>
                <div class="form-group">
                    <?= form_label('Message', 'message'); ?>
                    <?= form_textarea(array('id' => 'message', 'name' => 'message', 'class' => 'form-control'), null, 'required'); ?>
                </div>
                <div class="form-group text-right">
                    <?= form_submit('submit', 'Send', 'class="btn btn-lg"'); ?>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>