<?php echo $this->extend('admin/layout/menu'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?php echo $this->section('contenido'); ?>



<div class="main  p-3">
    <main class="container">
        <form action="<?= base_url('agregar_empleado'); ?>" method="post" class="formulario" id="form-new">
            <?= csrf_field(); ?>
            <div class="row">
                <div class="col-4">
                    <h1>
                        Nuevo Empleado : Datos del empleado
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <section class="form-fondo">
                <div class="row pb-4">
                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_p_nombre" class="pb-3">Primer Nombre:</label>
                        <input type="text" name="txt_pr_nombre" class="form-control" placeholder="Ingrese Primer nombre"
                            value="<?php echo set_value('txt_pr_nombre') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_pr_nombre'); ?>
                        </label>

                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_s_nombre" class="pb-3">Segundo Nombre:</label>
                        <input type="text" name="txt_s_nombre" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_s_nombre') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_s_nombre'); ?>
                        </label>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_p_apellido" class="pb-3">Primer Apellido:</label>
                        <input type="text" name="txt_p_apellido" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_p_apellido') ?>">
                        <label for="txt_p_apellido">
                            <?php echo validation_show_error('txt_p_apellido'); ?>
                        </label>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_s_apellido" class="pb-3">Segundo Apellido:</label>
                        <input type="text" name="txt_s_apellido" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_s_apellido') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_s_apellido'); ?>
                        </label>

                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_id" class="pb-3">id_empleado:</label>
                        <input type="text" name="txt_id" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_id') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_id'); ?>
                        </label>

                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_dpi" class="pb-3">DPI:</label>
                        <input type="number" name="txt_dpi" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_dpi') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_dpi'); ?>
                        </label>
                    </div>

                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_nit" class="pb-3">nit:</label>
                        <input type="number" name="txt_nit" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_nit') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_nit'); ?>
                        </label>

                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_email" class="pb-3">Email:</label>
                        <input type="email" name="txt_email_usuario" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_email_usuario') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_email_usuario'); ?>
                        </label>

                    </div>
                    <div class="col-lg-6">
                        <label for="txt_telefono" class="pb-3">Teléfono:</label>
                        <input type="number" name="txt_telefono" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_telefono') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_telefono'); ?>
                        </label>
                    </div>
                    <div class="col-lg-6 col-sm-10 ">
                        <label for="txt_direccion" class="pb-3">Direccion:</label>
                        <input type="text" name="txt_direccion" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_direccion') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_direccion'); ?>
                        </label>
                    </div>

                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_extension" class="pb-3">extension:</label>
                        <input type="number" name="txt_extension" class="form-control" placeholder="Ingrese su Usuario"
                            value="<?php echo set_value('txt_extension') ?>">
                        <label for="">
                            <?php echo validation_show_error('txt_extension'); ?>
                        </label>
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <div class="row">

                            <label for="txt_rol" class="pb-3">Rol/Puesto:</label>
                            <select name="txt_rol" id="">
                                <option value="">Seleccionar Rol/Puesto</option>
                                <option value="1">Agente de Servicio</option>
                                <option value="2">Técnico</option>
                                <option value="3">Bodega</option>
                                <option value="4">admin</option>
                                <option value=""><?php echo set_value('txt_rol') ?></option>
                            </select>
                            <label for="">
                                <?php echo validation_show_error('txt_rol'); ?>
                            </label>
                        </div>
                    </div>


                    <div class="col-lg-6 col-sm-12 ">
                        <div class="row">
                            <label for="txt_empresa" class="pb-3">Empresa:</label>
                            <select name="txt_empresa" id="">
                                <option value="">Seleccionar Sucursal</option>
                                <option value="1">Sucursal zona 1</option>
                                <option value=""><?php echo set_value('txt_empresa') ?></option>
                            </select>
                            <label for="">
                                <?php echo validation_show_error('txt_empresa'); ?>
                            </label>

                        </div>
                    </div>

                </div>

                <!--Usuarios-->

                <div class="row">
                    <div class="col-4">
                        <h1>
                            Nuevo Empleado: Usuario
                        </h1>
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <section class="form-fondo col-lg-6 col-sm-12 container text-center">
                    <div class="">
                        <div class="col-lg-6 offset-lg-3 col-sm-12">
                            <label for="txt_p_nombre" class="pb-3">Nombre Usuario:</label>
                            <input type="text" name="txt_usuario" class="form-control" placeholder="Ingrese Primer nombre"
                                value="<?php echo set_value('txt_email_usuario') ?>">
                            <label for="">
                                <?php echo validation_show_error('txt_email_usuario'); ?>
                            </label>

                        </div>
                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12">
                            <label for="txt_s_nombre" class="pb-3">Contraseña:</label>
                            <input type="password" name="txt_contrasenia" class="form-control" placeholder="Ingrese la contraseña"
                                value="<?php echo set_value('txt_contrasenia') ?>">
                            <label for="">
                                <?php echo validation_show_error('txt_contrasenia'); ?>
                            </label>
                        </div>

                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12">
                            <label for="txt_p_apellido" class="pb-3">Fecha Creacion:</label>
                            <input type="date" name="txt_fecha_creacion" class="form-control" placeholder="Ingrese su Usuario"
                                value="<?php echo set_value('txt_fecha_creacion') ?>">
                            <label for="txt_p_apellido">
                                <?php echo validation_show_error('txt_fecha_creacion'); ?>
                            </label>
                        </div>
                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12 ">
                            <div class="row">

                                <label for="txt_estado" class="pb-3">Estado:</label>
                                <select name="txt_estado" id="">

                                    <option value="">Seleccionar Estado</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                    <option value=""><?php echo set_value('txt_estado') ?></option>
                                </select>
                                <label for="">
                                    <?php echo validation_show_error('txt_estado'); ?>
                                </label>
                            </div>
                        </div>



                        <div class="d-grid gap-2 d-md-flex p-3 justify-content-center">
                            <button class="btn btn-primary" id="btn-agregar" type="submit">Agregar Empleado</button>
                        </div>
                    </div>




                </section>

                <!---->

        </form>

</div>
<hr>

</section>



</main>
</div>


<!--alerta-->
<script> //Alertas para asegurar el envio de formulario y deteccion de errores
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
        document.getElementById('form-new').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevenir el envío inmediato

            // Confirmar actualización
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Deseas actualizar este registro?",
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
                        text: 'La actualización no se ha realizado',
                        icon: 'info',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--alerta finaliza-->


<?php echo $this->endSection(); ?>