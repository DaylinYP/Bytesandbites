<?php echo $this->extend('admin/layout/menu_general'); ?>
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
                        <input type="text" name="txt_pr_nombre" class="form-control" placeholder="Ingrese Primer Nombre"
                            value="<?php echo set_value('txt_pr_nombre') ?>">
                        <?php if (validation_show_error('txt_pr_nombre')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_pr_nombre'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_s_nombre" class="pb-3">Segundo Nombre:</label>
                        <input type="text" name="txt_s_nombre" class="form-control" placeholder="Ingrese Segundo Nombre"
                            value="<?php echo set_value('txt_s_nombre') ?>">
                        <?php if (validation_show_error('txt_s_nombre')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_s_nombre'); ?>
                            </div>
                        <?php endif; ?>

                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_p_apellido" class="pb-3">Primer Apellido:</label>
                        <input type="text" name="txt_p_apellido" class="form-control" placeholder="Ingrese Primer Apellido"
                            value="<?php echo set_value('txt_p_apellido') ?>">
                        <?php if (validation_show_error('txt_p_apellido')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_p_apellido'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_s_apellido" class="pb-3">Segundo Apellido:</label>
                        <input type="text" name="txt_s_apellido" class="form-control" placeholder="Ingrese Segundo Apellido"
                            value="<?php echo set_value('txt_s_apellido') ?>">
                        <?php if (validation_show_error('txt_s_apellido')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_s_apellido'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_dpi" class="pb-3">DPI:</label>
                        <input type="number" name="txt_dpi" class="form-control" placeholder="Ingrese Dpi"
                            value="<?php echo set_value('txt_dpi') ?>">
                        <?php if (validation_show_error('txt_dpi')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_dpi'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_nit" class="pb-3">nit:</label>
                        <input type="number" name="txt_nit" class="form-control" placeholder="Ingrese NIT"
                            value="<?php echo set_value('txt_nit') ?>">
                        <?php if (validation_show_error('txt_nit')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_nit'); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_email" class="pb-3">Email:</label>
                        <input type="email" name="txt_email" class="form-control" placeholder="Ingrese Correo Electrónico"
                            value="<?php echo set_value('txt_email') ?>">
                        <?php if (validation_show_error('txt_email')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_email'); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="col-lg-6">
                        <label for="txt_telefono" class="pb-3">Teléfono:</label>
                        <input type="number" name="txt_telefono" class="form-control" placeholder="Ingrese No.Telefono"
                            value="<?php echo set_value('txt_telefono') ?>">
                        <?php if (validation_show_error('txt_telefono')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_telefono'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-sm-10 ">
                        <label for="txt_direccion" class="pb-3">Direccion:</label>
                        <input type="text" name="txt_direccion" class="form-control" placeholder="Ingrese Dirección"
                            value="<?php echo set_value('txt_direccion') ?>">
                        <?php if (validation_show_error('txt_direccion')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_direccion'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_extension" class="pb-3">extension:</label>
                        <input type="number" name="txt_extension" class="form-control" placeholder="Ingrese Extension"
                            value="<?php echo set_value('txt_extension') ?>">
                        <?php if (validation_show_error('txt_extension')): ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo validation_show_error('txt_extension'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <div class="row">
                            <label for="txt_rol" class="pb-3">Rol/Puesto:</label>
                            <select name="txt_rol" id="">
                                <option value="">Seleccionar Rol/Puesto</option>
                                <?php foreach ($roles as $datos): ?>
                                    <option value="<?= $datos['id_rol'] ?>" <?= set_select('txt_rol', $datos['id_rol']) ?>><?= $datos['nombre_rol']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (validation_show_error('txt_rol')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?php echo validation_show_error('txt_rol'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 ">
                        <div class="row">
                            <label for="txt_empresa" class="pb-3">Empresa</label>
                            <select name="txt_empresa" id="">
                                <option value="">Seleccionar Rol/Puesto</option>
                                <?php foreach ($empresa as $datos): ?>
                                    <option value="<?= $datos['id_empresa'] ?>" <?= set_select('txt_empresa', $datos['id_empresa']) ?>><?= $datos['nombre_empresa']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (validation_show_error('txt_empresa')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?php echo validation_show_error('txt_empresa'); ?>
                                </div>
                            <?php endif; ?>
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
                            <input type="text" name="txt_email_usuario" class="form-control" placeholder="Ingrese Usuario"
                                value="<?php echo set_value('txt_email_usuario') ?>">
                            <?php if (validation_show_error('txt_email_usuario')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?php echo validation_show_error('txt_email_usuario'); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12">
                            <label for="txt_s_nombre" class="pb-3">Contraseña:</label>
                            <input type="password" name="txt_contrasenia" class="form-control" placeholder="Ingrese Contraseña"
                                value="<?php echo set_value('txt_contrasenia') ?>">
                            <?php if (validation_show_error('txt_contrasenia')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?php echo validation_show_error('txt_contrasenia'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12">
                            <label for="txt_p_apellido" class="pb-3">Fecha Creacion:</label>
                            <input type="date" name="txt_fecha_creacion" class="form-control" placeholder="Ingrese fecha de Hoy"
                                value="<?php echo set_value('txt_fecha_creacion') ?>">
                            <?php if (validation_show_error('txt_fecha_creacion')): ?>
                                <div class="alert alert-danger mt-2">
                                    <?php echo validation_show_error('txt_fecha_creacion'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12 ">
                            <div class="row">
                                <label for="txt_estado" class="pb-3">Rol/Puesto:</label>
                                <select name="txt_estado" id="">
                                    <option value="">Seleccionar Rol/Puesto</option>
                                    <?php foreach ($estado as $datos): ?>
                                        <option value="<?= $datos['estado_id'] ?>" <?= set_select('txt_estado', $datos['estado_id']) ?>><?= $datos['nombre']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (validation_show_error('txt_estado')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_estado'); ?>
                                    </div>
                                <?php endif; ?>
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