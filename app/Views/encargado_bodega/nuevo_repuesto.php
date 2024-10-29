<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main texto p-3">
        
        <h1 class="titulo titulo-principal text-center py-5">
            Nuevo Repuesto
        </h1>
        
        
        <main class="container">
            <form action="agregar_repuesto" method="post" enctype="multipart/form-data" class="needs-validation" id="form-new" novalidate>
                <?= csrf_field(); ?>

                <!-- Alerta de Bootstrap para campos faltantes -->
                <div class="alert alert-warning d-none" id="alertaFormulario" role="alert">
                    Por favor, complete todos los campos obligatorios.
                </div>


                <section class="bg-dark form-fondo texto text-light">
                    <div class="row pt-4">
                        <div class="row pb-4">
                            <div class="col">
                                <label for="txt_id_repuesto" class="pb-3">Código del Repuesto:</label>
                                <input type="text" name="txt_id_repuesto" class="form-control" placeholder="Ingrese el código del repuesto" value="<?php echo set_value('txt_id_repuesto') ?>" required>
                                    
                                    <?php if (validation_show_error('txt_id_repuesto')): ?>
                                        <div class="alert alert-danger mt-2">
                                            <?php echo validation_show_error('txt_id_repuesto'); ?>
                                        </div>
                                    <?php endif; ?>
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <div class="col">
                                <label for="txt_nombre" class="pb-3">Nombre del Repuesto:</label>
                                <input type="text" name="txt_nombre" class="form-control" placeholder="Ingrese el nombre" value="<?php echo set_value('txt_nombre') ?>" required>
                                <?php if (validation_show_error('txt_nombre')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_nombre'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-6 col-md-12">
                            <label for="txt_tipo_equipo" class="pb-3">Tipo de Equipo:</label>
                                <select class="form-select" name="txt_tipo_equipo" aria-label="Default select example" required>
                                    <option value="" selected disabled>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($tiposEquipo as $tipoEquipo): ?>
                                        <option value="<?= $tipoEquipo['id_tipo_equipo']; ?>" <?= set_select('txt_tipo_equipo', $tipoEquipo['id_tipo_equipo']) ?>>
                                            <?= $tipoEquipo['nombre_tipo']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (validation_show_error('txt_tipo_equipo')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?= validation_show_error('txt_tipo_equipo'); ?>
                                    </div>
                                <?php else: ?>
                                    <div class="invalid-feedback">Seleccione un tipo de equipo.</div>
                                <?php endif; ?>
                            </div>
                            <div class="col">
                            <label for="txt_marca" class="pb-3">Marca:</label>
                                <select class="form-select" name="txt_marca" aria-label="Default select example" required>
                                    <option value="" selected disabled>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?= $marca['id_marca']; ?>" <?= set_select('txt_marca', $marca['id_marca']) ?>>
                                            <?= $marca['nombre_marca']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (validation_show_error('txt_marca')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?= validation_show_error('txt_marca'); ?>
                                    </div>
                                <?php else: ?>
                                    <div class="invalid-feedback">Seleccione una marca.</div>
                                <?php endif; ?>
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                            <label for="txt_modelo" class="pb-3">Modelo:</label>
                                <input type="text" name="txt_modelo" class="form-control" placeholder="Ingrese el modelo" value="<?php echo set_value('txt_modelo') ?>" required>
                                <?php if (validation_show_error('txt_modelo')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_modelo'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <div class="col">
                                <label for="txt_precio" class="pb-3">Precio:</label>
                                <input type="number" name="txt_precio" class="form-control" placeholder="Ingrese el precio" value="<?php echo set_value('txt_precio') ?>" required>
                                <?php if (validation_show_error('txt_precio')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_precio'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="invalid-feedback">Ingrese el precio del repuesto.</div>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <label for="txt_proveedor" class="pb-3">Proveedor:</label>
                                <select class="form-select" name="txt_proveedor" aria-label="Default select example" required>
                                    <option value="" selected disabled>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($proveedores as $proveedor): ?>
                                        <option value="<?= $proveedor['id_proveedor']; ?>" <?= set_select('txt_proveedor', $proveedor['id_proveedor']) ?>>
                                            <?= $proveedor['nombre_proveedor']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (validation_show_error('txt_proveedor')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?= validation_show_error('txt_proveedor'); ?>
                                    </div>
                                <?php else: ?>
                                    <div class="invalid-feedback">Seleccione un proveedor.</div>
                                <?php endif; ?>
                            </div>
                            <div class="col">
                                <label for="txt_cantidad" class="pb-3">Cantidad:</label>
                                <input type="number" name="txt_cantidad" class="form-control" placeholder="Ingrese la cantidad disponible" value="<?php echo set_value('txt_cantidad') ?>" required>
                                <?php if (validation_show_error('txt_cantidad')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_cantidad'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="invalid-feedback">Ingrese la cantidad disponible.</div>
                            </div>
                            <div class="col pt-2">
                                <label for="txt_imagen" class="form-label">Imagen:</label>
                                <input type="file" id="txt_imagen" name="txt_imagen" class="form-control" onchange="actualizarImg()" required>
                                <?php if (validation_show_error('txt_imagen')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_imagen'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="invalid-feedback">Por favor, suba una imagen del repuesto.</div>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-12 col-lg-9">
                                <label for="txt_descripcion_repuesto" class="pb-3">Descripción:</label>
                                <textarea name="txt_descripcion_repuesto" class="form-control" placeholder="Ingrese una pequeña descripción del producto" required><?php echo set_value('txt_descripcion_repuesto') ?></textarea>
                                <?php if (validation_show_error('txt_descripcion_repuesto')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo validation_show_error('txt_descripcion_repuesto'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="txt_estado_repuesto" class="pb-3">Estado:</label>
                                <select class="form-select" name="txt_estado_repuesto" aria-label="Default select example" required>
                                    <option value="" selected disabled>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($estadoRepuestos as $estadoRepuesto): ?>
                                        <option value="<?= $estadoRepuesto['id_estado_repuesto'] ?>" <?= set_select('txt_estado_repuesto', $estadoRepuesto['id_estado_repuesto']) ?>>
                                            <?= $estadoRepuesto['estado']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>

                                <?php if (validation_show_error('txt_estado_repuesto')): ?>
                                    <div class="alert alert-danger mt-2">
                                        <?= validation_show_error('txt_estado_repuesto'); ?>
                                    </div>
                                <?php else: ?>
                                    <div class="invalid-feedback">Seleccione el estado del repuesto.</div>
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <img id="image" src="" alt="Previsualización de la imagen" style="display: none; width: 200px; height: auto;">
                            </div>
                        </div>
                    </div>
                </section>
                <div class="mb-8 pt-4 pt-5">
                    <button type="submit" id="btnGuardar" class="btn btn-warning form-control" name="btnGuardar">Guardar Datos</button>
                </div>
            </form>
        </main>
    </div> 

    <!-- Ingreso de imagenes -->

    <script>
    function actualizarImg() {
        const fileInput = document.getElementById('txt_imagen');
        const imgPreview = document.getElementById('img_repuesto');
        
        const file = fileInput.files[0];
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                imgPreview.style.display = 'block';
            }
            
            reader.readAsDataURL(file);
        } else {
            imgPreview.style.display = 'none';
        }
    }
    </script>  


    <!-- Script de validación de Bootstrap -->
    <script>
        // Inicialización de validación de Bootstrap
        (function() {
            'use strict';
            var formulario = document.querySelector('.needs-validation');
            
            formulario.addEventListener('submit', function(event) {
                if (!formulario.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    document.getElementById('alertaFormulario').classList.remove('d-none');
                } else {
                    document.getElementById('alertaFormulario').classList.add('d-none');
                }
                formulario.classList.add('was-validated');
            }, false);
        })();
</script>


<!--alerta-->
<script>
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

            // Verificar si todos los campos están llenos
            const fields = document.querySelectorAll('#form-new input, #form-new select, #form-new textarea');
            let allFieldsFilled = true;

            fields.forEach(field => {
                if (field.value.trim() === '' && field.hasAttribute('required')) {
                    allFieldsFilled = false;
                    field.classList.add('is-invalid'); // Agregar clase para mostrar error visualmente
                } else {
                    field.classList.remove('is-invalid'); // Remover error si el campo está lleno
                }
            });

            // Mostrar error si falta algún campo obligatorio
            if (!allFieldsFilled) {
                Swal.fire({
                    title: 'Error',
                    text: 'Por favor, complete todos los campos obligatorios.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
                return; // Detener el proceso de envío si hay errores
            }

            // Confirmar actualización
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Deseas agregar este repuesto?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, agregar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit(); // Enviar el formulario si se confirma
                } else {
                    // Cancelar la acción
                    Swal.fire({
                        title: 'Cancelado',
                        text: 'El repuesto no se ha agregado',
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
<?= $this->endSection(); ?> 