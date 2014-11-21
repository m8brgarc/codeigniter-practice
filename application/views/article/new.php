<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?= validation_errors(); ?>
            <h2><?= $title; ?></h2>
            <?= form_open('article/new'); ?>
                <?php $this->load->view('article/_form'); ?>
            <div class="form-group text-right">
                <?= form_submit(array('name' => 'submit', 'value' => 'Create Article')); ?>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>