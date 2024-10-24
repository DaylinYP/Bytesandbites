<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main p-3">
        <main class="container">


            <div class="row py-4">
                <div class="col-4">
                    <h1 class="titulo">
                        ÓRDENES DE SERVICIO

                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <section class="form-fondo">

                <div class="row pt-4">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table  tabla">
                                <thead class="thead bg-warning text-dark">
                                    <tr>
                                        <th>No de Orden</th>
                                        <th>ID Cliente</th>
                                        <th>Fecha Recepción</th>
                                        <th>Fecha Entrega Estimada</th>
                                        <th>Fecha Entrega</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($datos as $orden): ?>
                                        <tr>
                                            <td><?php echo $orden['no_orden']; ?></td>
                                            <td><?php echo $orden['id_cliente']; ?></td>
                                            <td><?php echo $orden['fecha_recepcion']; ?></td>
                                            <td><?php echo $orden['fecha_entrega_estimada']; ?></td>
                                            <td><?php echo $orden['fecha_entrega']; ?></td>
                                            <td><?php echo $orden['estado_orden']; ?></td>
                                            <td>
                                                <a href="<?= base_url('buscar_orden/') . $orden['no_orden'] ?>" class="btn btn-success">
                                                    <i class="bi bi-pencil-square">Actualizar</i>
                                                </a>
                                                <a href="<?= base_url('eliminar_orden/') . $orden['no_orden'] ?>" class="btn btn-danger">
                                                    <i class="bi bi-trash">Eliminar</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php 
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="<?= base_url('js/script.js') ?>"></script>
<?= $this->endSection(); ?> 

    