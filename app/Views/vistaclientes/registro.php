<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<a class="btn btn-outline-warning shadow-lg p-3 mb-5 bg-body rounded botonRegresar"
    href="<?php echo base_url('vistaClientes/index') ?>" role="button">
    <i class="bi bi-arrow-left-square-fill"> Regresar</i>
</a>

<div class="contenedor">
    <section class="encabezadoBienvenidos" style="margin-top: 20%;">
        <h1 class="h1Bienvenidos">¡Bienvenido!</h1>
        <p class="pBienvenidos">Si no tienes una cuenta con nosotros, <br> por favor llena los campos con tus datos para crear una cuenta.</p>
    </section>

    <section class="formulario1">
        <article>
            <h2 class="h2Bienvenidos">Registrarse</h2>
            <form method="POST" action="<?php echo base_url('registro') ?>" autocomplete="off">

                <?= csrf_field() ?>
                <div class="inputbox">
                    <input type="text" required id="txtPrimerNombre" name="txtPrimerNombre">
                    <label for="txtPrimerNombre">Primer Nombre</label>
                </div>
                <div class="inputbox">
                    <input type="text" required id="txtSegundoNombre" name="txtSegundoNombre">
                    <label for="txtSegundoNombre">Segundo Nombre</label>
                </div>
                <div class="inputbox">
                    <input type="text" required id="txtPrimerApellido" name="txtPrimerApellido">
                    <label for="txtPrimerApellido">Primer Apellido</label>
                </div>
                <div class="inputbox">
                    <input type="text" required id="txtSegundoApellido" name="txtSegundoApellido">
                    <label for="txtSegundoApellido">Segundo Apellido</label>
                </div>
                <div class="inputbox">
                    <input type="email" required id="txtEmail" name="txtEmail">
                    <label for="txtEmail">Correo Electrónico</label>
                </div>
                <div class="inputbox">
                    <input type="number" required id="txtTelefono" name="txtTelefono" maxlength="8">
                    <label for="txtTelefono">Teléfono</label>
                </div>
                <div class="inputbox">
                    <input type="number" required id="txtNit" name="txtNit">
                    <label for="txtNit">NIT</label>
                </div>
                <div class="inputbox">
                    <input type="password" required id="txtContrasenia" name="txtContrasenia">
                    <label for="txtContrasenia">Contraseña</label>
                </div>
                <div class="inputbox">
                    <input type="password" required id="txtReContrasenia" name="txtReContrasenia">
                    <label for="txtReContrasenia">Confirmar contraseña</label>
                </div>
                <button type="submit" class="btn btn-warning botonRegistrarse">¡Regístrate!</button>
            </form>
            <?php if (session()->getFlashdata('errors') !== null): ?>
                <div class="alert alert-danger my-3" role="alert">
                    <?= session()->getFlashdata('errors'); ?>
                </div>
            <?php endif; ?>

        </article>
    </section>
</div>

<?php echo $this->endSection(); ?>