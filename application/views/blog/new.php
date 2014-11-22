<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="alert-danger"><?= validation_errors(); ?></div>
            <h2><?= $title; ?></h2>
            <?= form_open('blog/new'); ?>
                <?php $this->load->view('blog/_form'); ?>
                <div class="form-group text-right">
                    <?= form_submit(array('name' => 'submit', 'value' => 'Create Blog Post')); ?>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>