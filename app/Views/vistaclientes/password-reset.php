<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="card shadow-lg form-signin">
    <div class="card-body p-5">
        <h1 class="h1Bienvenidos fs-4 card-title fw-bold mb-4 text-center">¿Has olvidado tu contraseña?</h1>
        <form action="<?= base_url('password/reset') ?>" method="POST" autocomplete="off" style="max-width: 300px; margin: auto;">
          <?= csrf_field();?>
        <input type="hidden" name="token" value="<?= $token;?>">
        <div class="mb-3">
                <label for="password">Nueva Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" required autofocus>
            </div>
            <div class="mb-3">
                <label for="repassword">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="repassword" id="repassword" required>
            </div>
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-warning sm-auto">Restablecer Contraseña</button>
            </div>
        </form>
        <?php if (session()->getFlashdata('errors') !== null): ?>
            <div class="alert alert-danger my-3" role="alert">
                <?= session()->getFlashdata('errors'); ?>
            </div>
        <?php endif; ?>
    </div>

</div>

<?php echo $this->endSection(); ?>