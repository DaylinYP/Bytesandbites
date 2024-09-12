<?php echo $this->extend('plantilla/layout_registro'); ?>

<?php echo $this->section('contenido'); ?>


<a class="btn btn-outline-warning shadow-lg p-3 mb-5 bg-body rounded botonRegresar "
    href="<?php echo base_url('vistaClientes/index') ?>" role="button"><i class="bi bi-arrow-left-square-fill">
        Regresar</i></a>


<div class="contenedor">
<section class="encabezadoBienvenidos" style="margin-top: 20%;">
    <h1 class="h1Bienvenidos">Bienvenido!</h1>
    <p class="pBienvenidos">Si no tienes una cuenta con nosotros, <br> porfavor llena los campos con tus datos para crear una cuenta con nosotros.</p>
</section>
    <section class="formulario1">
        <article>
            <h2 class="h2Bienvenidos">Registrarse</h2>
            <form method="POST" action="" autocomplete="off">
                <div class="inputbox">
                    <input type="text" required id="primerNombre" name="primerNombre">
                    <label for="primerNombre">Primer Nombre</label>
                </div>
                <div class="inputbox">
                    <input type="text" required id="segundoNombre" name="segundoNombre">
                    <label for="segundoNombre">Segundo Nombre</label>
                </div>
                <div class="inputbox">
                    <input type="text" required id="primerApellido" name="primerApellido">
                    <label for="primerApellido">Primer Apellido</label>
                </div>
                <div class="inputbox">
                    <input type="text" required id="segundoApellido" name="segundoApellido">
                    <label for="segundoApellido">Segundo Apellido</label>
                </div>
                <div class="inputbox">
                    <input type="email" required id="email" name="email">
                    <label for="email">Correo Electrónico</label>
                </div>
                <div class="inputbox">
                    <input type="number" required id="telefono" name="telefono">
                    <label for="telefono">Teléfono</label>
                </div>
                <div class="inputbox">
                    <input type="number" required id="nit" name="nit">
                    <label for="nit">NIT</label>
                </div>
                <button type="submit" class="btn btn-warning botonRegistrarse">Regístrate!</button>
                </form>
        </article>
    </section>
</div>
<?php echo $this->endSection(); ?>

