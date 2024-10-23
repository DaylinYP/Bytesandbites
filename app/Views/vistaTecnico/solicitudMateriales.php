<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
        <div class="main p-3">
            <main class="container">
                <!-- Formulario de Solicitud de Materiales -->
                <form action="<?php echo base_url('solicitarMateriales/procesarSolicitud'); ?>" id="solicitudForm"nname="solicitudForm" novalidate method="post">
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
                            <div class="col">
                                <label for="no_servicio_reparacion" class="pb-3">ID de servicio</label>
                                <input type="text" name="no_servicio_reparacion" id="no_servicio_reparacion" class="form-control" placeholder="Ingrese su ID" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese un ID de servicio.
                                </div>
                            </div>
                            <div class="col">
                                <label for="txt_orden_de_servicio" class="pb-3">Número de orden de servicio</label>
                                <input type="text" name="txt_orden_de_servicio" id="txt_orden_de_servicio" class="form-control" placeholder="Ingrese el número de orden de servicio" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese el número de orden de servicio.
                                </div>
                            </div>
                            <div class="col">
                                <label for="txt_no_repuesto" class="pb-3">Número de repuesto</label>
                                <input type="text" name="txt_no_repuesto" id="txt_no_repuesto" class="form-control" placeholder="Ingrese el número de repuesto" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese el número de repuesto.
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
