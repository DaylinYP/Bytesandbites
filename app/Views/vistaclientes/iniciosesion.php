<?php echo $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>


    <button type="button" class="btn btn-outline-warning btn-lg botonRegresar">
        <i class="bi bi-arrow-left-square-fill">  Regresar</i>
    </button>
    <div class="contenedor">
        <h1>BIENVENIDO!</h1>
        <p>Porfavor, ingrese sus datos</p>
        <section class="formulario1">
            <article>
                <h2>Iniciar Sesión</h2>
                <form>
                    <div class="inputbox">
                        <input type="email" required id="correoElectronico" name="correoElectronico">
                        <label for="correoElectronico">Correo Electrónico</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" required id="contrasenia" name="contrasenia">
                        <label for="contrasenia">Contraseña</label>
                    </div>
                    <button type="button" class="btn btn-warning botonIngresar"><b>Ingresar</b></button>
                </form>
            </article>
        </section>
    </div>
    <p>Si aún no tienes una cuenta presiona, <a href="#">Regístrate</a></p>

    <?php echo $this->endSection(); ?>



<?php echo $this->section('scripts'); ?>
<script>
   
</script>

<?php echo $this->endSection(); ?>