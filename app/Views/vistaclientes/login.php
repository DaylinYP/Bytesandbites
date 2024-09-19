<?php echo $this->extend('layout/layout_registro'); ?>

<?php echo $this->section('content'); ?>

<a class="btn btn-outline-warning shadow-lg p-3 mb-5 bg-body rounded botonRegresar"
    href="<?php echo base_url('regresar_Home') ?>" role="button">
    <i class="bi bi-arrow-left-square-fill"> Regresar</i>
</a>

    <div class="contenedor">
        <h1>BIENVENIDO!</h1>
        <p>Porfavor, ingrese sus datos</p>
        <section class="formulario1">
            <article>
                <h2>Iniciar Sesión</h2>
                <form method="POST" action="<?= base_url('auth');?>" autocomplete="off">
                    <?= csrf_field();?>
                    <div class="inputbox">
                        <input type="email" required id="txtCorreoElectronico" name="txtCorreoElectronico">
                        <label for="txtCorreoElectronico">Correo Electrónico</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" required id="txtContrasenia" name="txtContrasenia">
                        <label for="txtContrasenia">Contraseña</label>
                    </div>
                    <a href="<?= base_url('password-request')?>">Olvidé mi contraseña</a>
                    <button type="button" class="btn btn-warning botonIngresar"><b>Ingresar</b></button>
                </form>


                <?php if (session()->getFlashdata('errors') !== null): ?>
                <div class="alert alert-danger my-3" role="alert">
                    <?= session()->getFlashdata('errors'); ?>
                </div>
            <?php endif; ?>

            
            <div>
                <p>¿No tienes una cuenta?</p> <a href="<?=base_url('registro');?>">Regístrate aquí</a>
            </div>
            </article>
        </section>
    </div>
    <p>Si aún no tienes una cuenta presiona, <a href="#">Regístrate</a></p>

    <?php echo $this->endSection(); ?>





