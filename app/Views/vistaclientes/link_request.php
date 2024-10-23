<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="card shadow-lg form-signin">
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4">Has olvidado tu contraseña</h1>
        <form action="<?= base_url('password-email')?>" method="POST" autocomplete="off">
            <div class="mb-3">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" name="email" id="email" required autofocus>
            </div>
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary ms-auto">Enviar enlace</button>
            </div>
        </form>
    </div>

    <div class="card-footer py-3 border-0">
        <div class="text-center">
            <a href="<?= base_url('login');?>">Iniciar sesión</a>
        </div>
    </div>

</div>

<?php echo $this->endSection(); ?>