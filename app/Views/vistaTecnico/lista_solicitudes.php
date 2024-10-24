<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main p-3">
        <main class="container">


            <div class="row py-4">
                <div class="col-6">
                    <h1 class="titulo">
                        LISTA DE SOLICITUDES DE MATERIALES

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
                            <table class="table tabla vertical-bar horizoncal">
                                <thead class="thead bg-warning text-dark">
                                    <tr>
                                        <th>No. de Solicitud</th>
                                        <th>Fecha Solicitada</th>
                                        <th>Servicio</th>
                                        <th>No. de Orden</th>
                                        <th>Código del Repuesto</th>
                                        <th>Repuesto</th>
                                        <th>Nuevo Repuesto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($solicitudes as $solicitud): ?>
                                        <tr>
                                            <td><?php echo $solicitud['id_solicitud']; ?></td>
                                            <td><?php echo $solicitud['fecha_solicitud']; ?></td>
                                            <td>
                                                <?php echo $solicitud['servicio_id']; ?>
                                                <?php
                                                // Buscar el nombre del servicio
                                                foreach ($servicios as $servicio) {
                                                    if ($servicio['servicio_id'] == $solicitud['servicio_id']) {
                                                        echo $servicio['nombre'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $solicitud['no_orden']; ?></td>
                                            <td><?php echo $solicitud['id_repuesto']; ?></td>
                                            <td>
                                                <?php echo $solicitud['id_repuesto']; ?>
                                                <?php
                                                // Buscar el nombre del repuesto
                                                foreach ($repuestos as $repuesto) {
                                                    if ($repuesto['id_repuesto'] == $solicitud['id_repuesto']) {
                                                        echo $repuesto['nombre'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $solicitud['detalles_nuevo_repuesto']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
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

    