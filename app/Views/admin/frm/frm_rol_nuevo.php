<?= $this->extend('admin/layout/menu_general'); ?>

<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main p-3 ">
    <main class="container d-flex justify-content-center">
        <form action="<?= base_url('agregar_rol'); ?>" method="post" class="formulario" id="form-rol">
            <?= csrf_field(); ?>
            <div class="row">
                <div class="col-4">
                    <h1>
                        Nuevo Rol/Puesto
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>


            <section class="form-fondo" style="width: 500px;">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <label for="txt_nombre" class="pb-3">Nombre del Rol/Puesto:</label>
                        <input type="text" name="txt_nombre" class="form-control" value="<?= set_value('txt_nombre') ?>" placeholder="Nombre del Rol/Puesto">
                        <?php if (validation_show_error('txt_nombre')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_nombre'); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="row p-3">

                        <div class="col-lg-12 col-sm-12">
                            <label for="txt_descripcion_rol" class="pb-3">Descripcion:</label>
                            <div class="row">

                                <textarea name="txt_descripcion_rol" id="" value="<?= set_value('txt_descripcion_rol'); ?>" class="col-lg-12 col-sm-12"></textarea>
                                <?php if (validation_show_error('txt_descripcion_rol')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_descripcion_rol'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_precio" class="pb-3">Sueldo:</label>
                        <input type="number" name="txt_precio" class="form-control" value="<?php echo set_value('txt_precio') ?>" placeholder="Ingrese un precio">
                        <?php if (validation_show_error('txt_precio')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_precio'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 text-center p-3">
                        <button class="btn btn-primary" type="submit">guardar</button>
                    </div>
                </div>


            </section>

            <!---->


        </form>
    </main>
</div>
<hr>
<!--Alerta <<<<-->

<script>
    //Alertas para asegurar el envio de formulario y deteccion de errores
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar alerta de error si existe
        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                title: 'Error',
                text: "<?php echo session()->getFlashdata('error'); ?>",
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        <?php endif; ?>

        // Mostrar alerta de éxito si existe
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                title: '¡Bien hecho!',
                text: "<?php echo session()->getFlashdata('success'); ?>",
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        <?php endif; ?>

        // Manejar el envío del formulario
        document.getElementById('form-rol').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevenir el envío inmediato

            // Confirmar actualización
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Deseas agregar este registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, actualizar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar el formulario
                    this.submit();
                } else {
                    // Cancelar actualización
                    Swal.fire({
                        title: 'Cancelado',
                        text: 'No se ha realizado la acción',
                        icon: 'info',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        });
    });
</script>
<!---Finaliza Alerta>>>>-->
<?= $this->endSection(); ?>