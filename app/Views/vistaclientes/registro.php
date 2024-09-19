<?php echo $this->extend('layout/template'); ?>


<?php echo $this->section('content'); ?>


<a class="btn btn-outline-warning shadow-lg p-3 mb-5 rounded" href="<?php echo base_url('regresar_Home') ?>"
    role="button"><i class="bi bi-arrow-left-square-fill">Regresar</i>
</a>



<div class="container">
    <div class="card shadow-lg form-signin">
        <div class="card-body p-5">
            <h1 class="fs-4 card-title fw-bold mb-4">Registro</h1>
            <form method="POST" action="<?php echo base_url('registro') ?>" autocomplete="off">
                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label class="mb-2" for="txtPrimerNombre">Nombre</label>
                    <input type="text" class="form-control" type="text" required id="txtPrimerNombre"
                        name="txtPrimerNombre" value="<?= set_value('txtPrimerNombre');?>">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="txtSegundoNombre">Segundo Nombre</label>
                    <input class="form-control" type="text" required id="txtSegundoNombre" name="txtSegundoNombre"
                        value="<?= set_value('txtSegundoNombre'); ?>">
                </div>





                
                <div class="mb-3">
                <label class="mb-2" for="txtPrimerApellido">Primer Apellido</label>
                <input type="email" class="form-control" name="email" id="email" value="" required>
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="user">Usuario</label>
                    <input type="text" class="form-control" name="user" id="user" value="" required>
                </div>

                <div class="mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="mb-3">
                    <label for="repassword">Confirmar contraseña</label>
                    <input type="password" class="form-control" name="repassword" id="repassword" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
            </form>

        </div>
        <div class="card-footer py-3 border-0">
            <div class="text-center">
                <a href="login.html">Iniciar sesión</a>
            </div>
        </div>
    </div>



    <div class="contenedor">
        <section class="encabezadoBienvenidos" style="margin-top: 20%;">
            <h1 class="h1Bienvenidos">¡Bienvenido!</h1>
            <p class="pBienvenidos">Si no tienes una cuenta con nosotros, por favor llena los campos con tus datos para
                crear una cuenta.</p>
        </section>

        <section class="formulario1">
            <article>
                <h2 class="h2Bienvenidos">Registrarse</h2>
                <form method="POST" action="<?php echo base_url('registro') ?>" autocomplete="off">

                    <?= csrf_field(); ?>
                    <div class="inputbox">
                        <input type="text" required id="txtPrimerNombre" name="txtPrimerNombre"
                            value="<?= set_value('txtPrimerNombre'); ?>">
                        <label for="txtPrimerNombre">Primer Nombre</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" required id="txtSegundoNombre" name="txtSegundoNombre"
                            value="<?= set_value('txtSegundoNombre'); ?>">
                        <label for="txtSegundoNombre">Segundo Nombre</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" required id="txtPrimerApellido" name="txtPrimerApellido"
                            value="<?= set_value('txtPrimerApellido'); ?>">
                        <label for="txtPrimerApellido">Primer Apellido</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" required id="txtSegundoApellido" name="txtSegundoApellido"
                            value="<?= set_value('txtSegundoApellido'); ?>">
                        <label for="txtSegundoApellido">Segundo Apellido</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" required id="txtEmail" name="txtEmail"
                            value="<?= set_value('txtEmail'); ?>">
                        <label for="txtEmail">Correo Electrónico</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" required id="txtTelefono" name="txtTelefono" maxlength="8"
                            value="<?= set_value('txtTelefono'); ?>">
                        <label for="txtTelefono">Teléfono</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" required id="txtNit" name="txtNit" value="<?= set_value('txtNit'); ?>">
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
                    <div style="text-align:center; margin-top:25px;">
                        <a style="color:white;" href="<?= base_url('login'); ?>">Iniciar Sesión</a>
                    </div>

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