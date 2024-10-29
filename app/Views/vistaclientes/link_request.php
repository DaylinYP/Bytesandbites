<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="card shadow-lg form-signin">
    <div class="card-body p-5">
        <h1 class="h1Bienvenidos fs-4 card-title fw-bold mb-4 text-center">¿Has olvidado tu contraseña?</h1>
        <form action="<?= base_url('password-email') ?>" method="POST" autocomplete="off" style="max-width: 300px; margin: auto;">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <div class="mb-3">
            
                <label for="email">Correo Electrónico</label> 
                <input type="email" class="form-control" name="email" id="email" required autofocus> 
            </div>
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-warning sm-auto">Enviar enlace</button>
            </div>
        </form>
        <?php if (session()->getFlashdata('errors') !== null): ?>
            <div class="alert alert-danger my-3" role="alert">
                <?= session()->getFlashdata('errors'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="card-footer py-3 border-0">
        <div class="text-center">
            <a href="<?= base_url('login'); ?>">Iniciar sesión</a>
        </div>
    </div>

</div>

<?php echo $this->endSection(); ?>
