<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="card shadow-lg form-signin text-center"> <!-- Agregar la clase text-center aquí para centrar el contenido -->
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4"><?= $title; ?></h1> <!-- Título centrado automáticamente por text-center -->
        <p><?= $message; ?></p>
        <div class="d-flex justify-content-center"> <!-- Centrar el botón -->
            <a href="<?= base_url(); ?>" class="btn btn-warning">
                Iniciar Sesión
            </a>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>