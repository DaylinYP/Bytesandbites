<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <main class="container p-5">
    <form action="<?= base_url('orden/agregar') ?>" method="post" id="form-new">
    <?= csrf_field(); ?>

    <!-- Sección: Datos del Cliente -->
    <div class="row">
        <div class="col-4">
            <h1 class="titulo">Datos del Cliente</h1>
        </div>
        <div class="col">
            <hr>
        </div>
    </div>
    <section class="form-fondo bg-dark text-light texto">
        <div class="row">
            <div class="col pt-4">
                <label for="txt_nit" class="pb-3">NIT:</label>
                <input type="text" name="txt_nit" class="form-control" placeholder="Ingrese el NIT" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 pt-4">
                <label for="txt_pNombre" class="pb-3">Primer Nombre:</label>
                <input type="text" name="txt_pNombre" class="form-control" placeholder="Ingrese su primer nombre" required>
            </div>
            <div class="col-12 col-md-6 pt-4">
                <label for="txt_sNombre" class="pb-3">Segundo Nombre:</label>
                <input type="text" name="txt_sNombre" class="form-control" placeholder="Ingrese su segundo nombre">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 pt-4">
                <label for="txt_pApellido" class="pb-3">Primer Apellido:</label>
                <input type="text" name="txt_pApellido" class="form-control" placeholder="Ingrese el primer apellido" required>
            </div>
            <div class="col-12 col-md-6 pt-4">
                <label for="txt_sApellido" class="pb-3">Segundo Apellido:</label>
                <input type="text" name="txt_sApellido" class="form-control" placeholder="Ingrese el segundo apellido">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 pt-4">
                <label for="txt_email" class="pb-3">Email:</label>
                <input type="email" name="txt_email" class="form-control" placeholder="Ingrese el email" required>
            </div>
            <div class="col-12 col-md-6 pt-4">
                <label for="txt_telefono" class="pb-3">Teléfono:</label>
                <input type="number" name="txt_telefono" class="form-control" placeholder="Ingrese el teléfono" required>
            </div>
        </div>
    </section>

    <!-- Sección: Datos del Equipo -->
    <div class="row py-4">
        <div class="col-4">
            <h1 class="titulo">Datos del Equipo</h1>
        </div>
        <div class="col">
            <hr>
        </div>
    </div>

    <div id="equiposContainer">
        <div class="equipo">
            <section class="form-fondo bg-dark text-light texto">
                <div class="row">
                    <div class="col-12 col-md-4 pt-4">
                        <label for="txt_tipo_equipo" class="pb-3">Tipo de Equipo:</label>
                        <select class="form-select" name="txt_tipo_equipo[]" aria-label="Default select example" required>
                            <option selected disabled>Seleccionar</option>
                            <?php foreach ($tiposEquipo as $tipoEquipo): ?>
                                <option value="<?= $tipoEquipo['id_tipo_equipo']; ?>">
                                    <?= $tipoEquipo['nombre_tipo']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 pt-4">
                        <label for="txt_marca" class="pb-3">Marca:</label>
                        <select class="form-select" name="txt_marca[]" aria-label="Default select example" required>
                            <option selected disabled>Seleccionar</option>
                            <?php foreach ($marcas as $marca): ?>
                                <option value="<?= $marca['id_marca']; ?>">
                                    <?= $marca['nombre_marca']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 pt-4">
                        <label for="txt_modelo" class="pb-3">Modelo:</label>
                        <input type="text" name="txt_modelo[]" class="form-control" placeholder="Ingrese el modelo" required>
                    </div>
                </div>
                <div class="col py-4">
                    <label for="txt_descripcion_cliente" class="pb-3">Descripción:</label>
                    <textarea name="txt_descripcion_cliente[]" class="form-control" required></textarea>
                </div>
                <div class="col pb-4">
                    <label for="txt_evaluacion" class="pb-3">Evaluación:</label>
                    <textarea name="txt_evaluacion[]" class="form-control" required></textarea>
                </div>
                <div class="col pb-4">
                    <label for="txt_especificaciones" class="pb-3">Especificaciones:</label>
                    <textarea name="txt_especificaciones[]" class="form-control" required></textarea>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 pt-4">
                        <label for="txt_observaciones" class="pb-3">Observaciones:</label>
                        <textarea name="txt_observaciones[]" class="form-control" style="height: 150px;" required></textarea>
                    </div>
                    <div class="col-12 col-md-6 py-4">
                        <div class="row">
                            <div class="col">
                                <label for="txt_fecha_ingreso" class="pb-3">Fecha de Ingreso:</label>
                                <input type="date" name="txt_fecha_ingreso[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col">
                                <label for="txt_fecha_estimada" class="pb-3">Fecha de Entrega Estimada:</label>
                                <input type="date" name="txt_fecha_estimada[]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse py-4">
                    <button type="button" class="btn btn-danger removeEquipo">Eliminar equipo</button>
                </div>
            </section>
            <br><br><br>
        </div>
    </div>

    <section>
        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight">
                <a href="#" id="addButton">
                    <img class="icono-tamaño" src="https://i.ibb.co/PDGXhYb/agregar-boton.png" alt="agregar-boton" border="0">
                </a>
            </div>
            <div class="p-2 bd-highlight">
                <h1 class="pt-2">Agregar otro equipo</h1>
            </div>
        </div>
    </section>

    <div class="container">
        <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
    </div>
</form>

    </main>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("expand");
        });

        // Funcionalidad para agregar un nuevo equipo
        document.getElementById('addButton').addEventListener('click', function(e) {
            e.preventDefault(); // Evita que el enlace recargue la página

            // Clonar la sección del equipo
            const equiposContainer = document.getElementById('equiposContainer');
            const newEquipo = equiposContainer.querySelector('.equipo').cloneNode(true);

            // Reiniciar los valores de los campos en el nuevo formulario
            const inputs = newEquipo.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.value = '';
            });

            // Agregar el nuevo formulario al contenedor
            equiposContainer.appendChild(newEquipo);

            // Agregar el evento de eliminar al nuevo botón de "Eliminar equipo"
            newEquipo.querySelector('.removeEquipo').addEventListener('click', function() {
                newEquipo.remove();
            });
        });

        // Funcionalidad para eliminar un equipo
        document.querySelectorAll('.removeEquipo').forEach(button => {
            button.addEventListener('click', function() {
                button.closest('.equipo').remove();
            });
        });
    </script>

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
                    text: "¿Deseas agregar la nueva orden?",
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
<?= $this->endSection(); ?> 

