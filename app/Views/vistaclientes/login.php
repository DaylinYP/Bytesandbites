<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">


    <a class="btn btn-outline-warning shadow-lg p-3 mb-5 rounded" 
        href="<?php echo base_url('regresar_Home') ?>"
        role="button"><i class="bi bi-arrow-left-square-fill">Regresar</i>
    </a>



    <h1 class="text-center">BIENVENIDO!</h1>
    <p class="text-center">Porfavor, ingrese sus datos</p>
    <div class="card shadow-lg form-signin">
        <div class="card-body p-5">
            <h1 class="fs-4 card-title fw-bold mb-4">Iniciar sesión</h1>
            <form method="POST" action="<?= base_url('auth');?>" autocomplete="off">
                <?= csrf_field();?>

                <div class="mb-3">
                    <label for="txtCorreoElectronico" class="mb-2">Correo Electrónico</label>
                    <input type="email" required autofocus id="txtCorreoElectronico" name="txtCorreoElectronico"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <div class="mb-2 w-100">
                        <label for="txtContrasenia">Contraseña</label>
                        <input class="form-control" type="password" required id="txtContrasenia" name="txtContrasenia">

                        <a href="<?= base_url('password-request')?>">Olvidé mi contraseña</a>

                    </div>
                </div>

                <button type="submit" class="btn btn-danger">
                    Ingresar
                </button>
            </form>


            <?php if (session()->getFlashdata('errors') !== null): ?>
            <div class="alert alert-danger my-3" role="alert">
                <?= session()->getFlashdata('errors'); ?>
            </div>
            <?php endif; ?>

        </div>
        <div class="card-footer py-3 border-0">
            <div class="text-center">
                ¿No tienes una cuenta?<a href="<?=base_url('registro');?>">Regístrate aquí</a>
            </div>
        </div>
    </div><br><br>
</div>

<?php echo $this->endSection(); ?>