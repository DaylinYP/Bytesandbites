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
                <a href="<?= base_url('nuevo_repuesto') ?>" class="btn btn-outline-primary btn-lg position-absolute  translate-middle rounded-pill">
                    <i class="bi bi-plus-square px-2"></i> Nuevo Repuesto
                </a>
            </div>

        </div>

        <div>
            <main class="container-fluid py-5">
                <div class="table-responsive">
                    <table class="table table-striped table-hover shadow-lg border border-white animate__animated animate__slideInRight">
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
                                    <td class="text-light"><img src="<?= $repuesto['img_repuesto'] ?>" alt="Imagen del repuesto" class="img_lista img-thumbnail"></td>
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
<?= $this->endSection(); ?> 
   