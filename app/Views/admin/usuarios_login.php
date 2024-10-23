<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <br>
    <a class="btn btn-danger shadow-lg p-2 mb-3 rounded" href="<?php echo base_url('regresar_Home') ?>" role="button">
        <i class="bi-arrow-left-square-fill"></i> Regresar
    </a>


    <h1 class="text-center">BIENVENIDO!</h1>
    <p class="text-center">Porfavor, ingrese sus datos</p>
    <div class="card shadow-lg form-signin" style="max-width: 400px; margin: auto;">
        <!-- Ajuste de ancho -->
        <div class="card-body p-4">
            <h1 class="fs-3 card-title fw-bold mb-4">Iniciar sesión</h1>
            <form method="post" action="<?= base_url('authe') ?>">
                <?= validation_list_errors(); ?>
                <?= csrf_field(); ?>
                <div class="mb-4">
                    <label for="txt_email_usuario" class="mb-2">Correo Electrónico</label>
                    <input type="email" required autofocus id="txt_email_usuario" name="txt_email_usuario"
                        class="form-control"  value="<?php echo set_value('txt_email_usuario') ?>">
                        <label for="">
                                <?php echo validation_show_error('txt_email_usuario'); ?>
                            </label>
                </div>

                <div class="mb-4">
                    <div class="mb-2 w-100">
                        <label for="txt_contrasenia">Contraseña</label>
                        <input class="form-control" type="password" required id="txtContrasenia" name="txt_contrasenia">


                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary text-center">
                        Ingresar
                    </button>
                </div>
            </form>
        </div>
        <div class="card-footer py-3 border-0">
            <div class="text-center">
                ¿No tienes una cuenta?<a href=""> Regístrate aquí</a>
            </div>
        </div>
    </div><br><br>
</div>

<?php echo $this->endSection(); ?>