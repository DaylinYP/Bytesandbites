<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
        <div class="main p-3">
            <main class="container">
                <!-- Formulario de Solicitud de Materiales -->
                <form action="<?php echo base_url('agregar_solicitud'); ?>" id="solicitudForm"nname="solicitudForm" novalidate method="post">
                    <div class="row">
                        <div class="col-8 pt-4">
                            <h1 class="titulo pt-4">SOLICITUD DE MATERIALES</h1>
                            <p class="pt-4">Por favor complete los campos para solicitar los materiales necesarios para el servicio</p>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo pt-4">
                        <div class="row">
                            <div class="col-12">
                                        <label for="txt_fecha_solicitud" class="pb-3">Fecha de Ingreso:</label>
                                        <input type="date" name="txt_fecha_solicitud[]" class="form-control">
                            </div>

                            <div class="col-12 col-md-4 pt-4">
                                <label for="txt_servicio" class="pb-3">Servicio:</label>
                                <select class="form-select" name="txt_servicio[]" aria-label="SELECCIONAR SERVICIO" required>
                                    <option selected>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($servicios as $servicio): ?>
                                        <option value="<?= $servicio['servicio_id']; ?>">
                                            <?= $servicio['nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, seleccione el servicio.
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pt-4">
                                <label for="txt_orden" class="pb-3">Número de Orden de Servicio:</label>
                                <select class="form-select" name="txt_orden[]" aria-label="SELECCIONAR ORDEN" required>
                                    <option selected>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($ordenes as $orden): ?>
                                        <option value="<?= $orden['no_orden']; ?>">
                                            <?= $orden['no_orden']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, seleccione la orden del servicio.
                                </div>
                            </div>
                            <div class="col-12 col-md-4 pt-4">
                                <label for="txt_repuesto" class="pb-3">Repuesto:</label>
                                <select class="form-select" name="txt_repuesto[]" aria-label="SELECCIONAR REPUESTO" required>
                                    <option selected>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($repuestos as $repuesto): ?>
                                        <option value="<?= $repuesto['id_repuesto']; ?>">
                                            <?= $repuesto['nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, seleccione el repuesto que necesita.
                                </div>
                            </div>
                            <div class="col">
                                <label for="txt_nuevo_repuesto" class="py-3">Nuevo repuesto</label>
                                <textarea name="txt_nuevo_repuesto[]" class="form-control" style="height: 150px;"></textarea>
                                <div class="invalid-feedback">
                                    Por favor, ingrese los detalles del repuesto que necesita.
                                </div>
                            </div>
                        </div>
                        <div class="row-12 pt-4 text-right ">
                             <button type="button"  class=" btn btn-secondary" onclick="limpiarFormulario()" >
                             <i class="bi bi-trash3"> </i>
                             Limpiar sección
                            </button>

                        <div class="row-12 pt-4 text-center">
                            
                            <button type="submit" class="btn btn-warning boton" id="btnSolicitarMaterial">
                                <i class="bi bi-check2"></i> Ordenar material
                            </button>
                        </div>
                    </section>

                    <!-- Mensajes de error de validación -->
                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger mt-3">
                            <?php echo $validation->listErrors(); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>
                </form>
            </main>
        </div>
    </div>
    <hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>

        // JavaScript de validación de Bootstrap
        (function() {
            'use strict';
            var forms = document.querySelectorAll('#solicitudForm');
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
        })();


        function limpiarFormulario() {
        // Seleccionar el formulario por su ID
        document.getElementById("solicitudForm").reset();
        }
    </script>
<?= $this->endSection(); ?> 
