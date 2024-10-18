<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="card shadow-lg form-signin text-center"> 
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4"><?= $title; ?></h1>
        <p><?= $message; ?></p>
        <div class="d-flex justify-content-center"> 
            <a href="<?= base_url(); ?>" class="btn btn-warning">
                Iniciar Sesión
            </a>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>