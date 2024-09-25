<?php echo $this->extend('layout/template'); ?>


<?php echo $this->section('content'); ?>


<div class="container">
    <br>
    <a class="btn btn-danger shadow-lg p-2 mb-3 rounded" href="<?php echo base_url('regresar_Home') ?>" role="button">
        <i class="bi-arrow-left-square-fill"></i> Regresar
    </a>

    <h1 class="h1Bienvenidos">¡Bienvenido!</h1>
    <p class="pBienvenidos text-center">Si no tienes una cuenta con nosotros, por favor llena los campos con tus datos
        para crear una cuenta.</p>
    <div class="card shadow-lg form-signin col-md-6 mx-auto">
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
                    <input type="text" required id="txtPrimerApellido" name="txtPrimerApellido"
                        value="<?= set_value('txtPrimerApellido'); ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="txtSegundoApellido">Segundo Apellido</label>
                    <input type="text" required id="txtSegundoApellido" name="txtSegundoApellido"
                        value="<?= set_value('txtSegundoApellido'); ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="txtEmail">Correo Electrónico</label>
                    <input type="email" required id="txtEmail" name="txtEmail" value="<?= set_value('txtEmail'); ?>"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="txtTelefono">Teléfono</label>
                    <input type="number" required id="txtTelefono" name="txtTelefono" maxlength="8"
                        value="<?= set_value('txtTelefono'); ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="txtNit">NIT</label>
                    <input type="number" required id="txtNit" name="txtNit" value="<?= set_value('txtNit'); ?>"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="txtContraseña">Contraseña</label>
                    <input type="password" required id="txtContrasenia" name="txtContrasenia" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="txtReContrasenia">Confirmar Contraseña</label>
                    <input type="password" required id="txtReContrasenia" name="txtReContrasenia" class="form-control">
                </div>


                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">
                        ¡Regístrate!
                    </button>
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
</div><br>

<?php echo $this->endSection(); ?>