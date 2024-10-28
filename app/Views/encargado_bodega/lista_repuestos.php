<<<<<<< HEAD
<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main texto p-3">
        <div class="row container-fluid">

            <div class="row py-2">
                <div class="col-6">
                    <h1 class="titulo">
                        Lista de Repuestos
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>

            </div>
            <div class="col-12 d-md-flex justify-content-md-end  pb-5 animate__animated animate__slideInRight">
                <a href="<?= base_url('nuevo_repuesto') ?>" class="btn btn-outline-dark btn-lg position-absolute  translate-middle rounded-pill">
                    <i class="bi bi-plus-square p-1"></i> Nuevo Repuesto
                </a>
            </div>

        <div>
            <main class="container-fluid py-5">
                <div class="table-responsive">
                    <table class="table table-striped table-hover shadow-lg border border-white animate__animated animate__slideInRight" id="dataTable">
                        <thead class="bg-warning">
                            <tr>
                                <th scope="col">Código del Repuesto</th>
                                <th scope="col">Nombre del Repuesto</th>
                                <th scope="col">tipo de Equipo</th>
                                <th scope="col">Marca</th>
                                <th scope="col">modelo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="bg-dark">
                            <?php foreach ($repuestos as $repuesto): ?>
                                <tr>
                                    <td class="text-light"><?= $repuesto['id_repuesto'] ?></td>
                                    <td class="text-light"><?= $repuesto['nombre'] ?></td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre del tipo de equipo
                                        foreach ($tiposEquipo as $tipo) {
                                            if ($tipo['id_tipo_equipo'] == $repuesto['id_tipo_equipo']) {
                                                echo $tipo['nombre_tipo'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre de la marca
                                        foreach ($marcas as $marca) {
                                            if ($marca['id_marca'] == $repuesto['id_marca']) {
                                                echo $marca['nombre_marca'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light"><?= $repuesto['modelo'] ?></td>
                                    <td class="text-light"><?= $repuesto['precio_repuesto'] ?></td>
                                    <td>
                                        <?php if ($repuesto['img_repuesto']): ?>
                                            <img src="<?= base_url($repuesto['img_repuesto']); ?>" alt="Imagen del repuesto" style="width:100px;height:100px;">
                                        <?php else: ?>
                                            <span>No hay imagen</span>
                                        <?php endif; ?>
                                    </td>                                    
                                    <td class="text-light"><?= $repuesto['cantidad'] ?></td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre del proveedor
                                        foreach ($proveedores as $proveedor) {
                                            if ($proveedor['id_proveedor'] == $repuesto['id_proveedor']) {
                                                echo $proveedor['nombre_proveedor'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light"><?= $repuesto['descripcion'] ?></td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre de la marca
                                        foreach ($estadoRepuestos as $estadoRepuesto) {
                                            if ($estadoRepuesto['id_estado_repuesto'] == $repuesto['id_estado_repuesto']) {
                                                echo $estadoRepuesto['estado'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="buscar_repuesto/<?= $repuesto['id_repuesto'] ?>" class="btn btn-primary btn-md form-control me-md-2"><i class="bi bi-pencil-square"></i></a>
                                            <a href="eliminar_Repuesto/<?= $repuesto['id_repuesto'] ?>" class="btn btn-danger form-control"><i class="bi bi-trash3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </main>
        </div>
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

        
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--alerta finaliza-->
    
<?= $this->endSection(); ?> 
=======
<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main texto p-3">
        <div class="row container-fluid">

            <div class="col-11 text-center">
                <h1 class="titulo   titulo-principal  py-5">
                    Lista de Repuestos
                </h1>

            </div>
            <div class="col-1 d-md-flex justify-content-md-end  py-5 animate__animated animate__slideInRight">
                <a href="<?= base_url('nuevo_repuesto') ?>" class="btn btn-outline-dark btn-lg position-absolute  translate-middle rounded-pill">
                    <i class="bi bi-plus-square p-1"></i> Nuevo Repuesto
                </a>
            </div>

        </div>

        <div>
            <main class="container-fluid py-5">
                <div class="table-responsive">
                    <table class="table table-striped table-hover shadow-lg border border-white animate__animated animate__slideInRight" id="dataTable">
                        <thead class="bg-warning">
                            <tr>
                                <th scope="col">Código del Repuesto</th>
                                <th scope="col">Nombre del Repuesto</th>
                                <th scope="col">tipo de Equipo</th>
                                <th scope="col">Marca</th>
                                <th scope="col">modelo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="bg-dark">
                            <?php foreach ($repuestos as $repuesto): ?>
                                <tr>
                                    <td class="text-light"><?= $repuesto['id_repuesto'] ?></td>
                                    <td class="text-light"><?= $repuesto['nombre'] ?></td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre del tipo de equipo
                                        foreach ($tiposEquipo as $tipo) {
                                            if ($tipo['id_tipo_equipo'] == $repuesto['id_tipo_equipo']) {
                                                echo $tipo['nombre_tipo'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre de la marca
                                        foreach ($marcas as $marca) {
                                            if ($marca['id_marca'] == $repuesto['id_marca']) {
                                                echo $marca['nombre_marca'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light"><?= $repuesto['modelo'] ?></td>
                                    <td class="text-light"><?= $repuesto['precio_repuesto'] ?></td>
                                    <td>
                                        <?php if ($repuesto['img_repuesto']): ?>
                                            <img src="<?= base_url($repuesto['img_repuesto']); ?>" alt="Imagen del repuesto" style="width:100px;height:100px;">
                                        <?php else: ?>
                                            <span>No hay imagen</span>
                                        <?php endif; ?>
                                    </td>                                    <td class="text-light"><?= $repuesto['cantidad'] ?></td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre del proveedor
                                        foreach ($proveedores as $proveedor) {
                                            if ($proveedor['id_proveedor'] == $repuesto['id_proveedor']) {
                                                echo $proveedor['nombre_proveedor'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light"><?= $repuesto['descripcion'] ?></td>
                                    <td class="text-light">
                                        <?php
                                        // Buscar el nombre de la marca
                                        foreach ($estadoRepuestos as $estadoRepuesto) {
                                            if ($estadoRepuesto['id_estado_repuesto'] == $repuesto['id_estado_repuesto']) {
                                                echo $estadoRepuesto['estado'];
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-light">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="buscar_repuesto/<?= $repuesto['id_repuesto'] ?>" class="btn btn-primary btn-md form-control me-md-2"><i class="bi bi-pencil-square"></i></a>
                                            <a href="eliminar_Repuesto/<?= $repuesto['id_repuesto'] ?>" class="btn btn-danger form-control"><i class="bi bi-trash3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </main>
        </div>
    </div>
    <!--datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>
<?= $this->endSection(); ?> 
>>>>>>> 09f152e5f9d6fc0f306d54c9b8088dba08fd6a2c
   