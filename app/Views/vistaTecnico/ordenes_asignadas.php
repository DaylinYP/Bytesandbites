<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
<div class="main p-3">
    <main class="container">

        <div class="row py-4">
            <div class="col-4">
                <h1 class="titulo">ÓRDENES ASIGNADAS</h1>
            </div>
            <div class="col">
                <hr>
            </div>
        </div>
        <section class="form-fondo">

            <div class="row pt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table tabla">
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
                                <?php foreach ($datos as $orden): ?>
                                    <tr>
                                        <td><?php echo $orden['no_orden']; ?></td>
                                        <td><?php echo $orden['id_cliente']; ?></td>
                                        <td><?php echo $orden['fecha_recepcion']; ?></td>
                                        <td><?php echo $orden['fecha_entrega_estimada']; ?></td>
                                        <td><?php echo $orden['fecha_entrega']; ?></td>
                                        <td><?php echo $orden['estado_orden']; ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-12 col-xl-6 pb-2">
                                                    <a href="#" class="btn btn-primary" >
                                                        <i class="bi bi-pencil-square">Información de la Orden</i>
                                                    </a>

                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <a href="#" class="btn btn-success" onclick="finalizarOrden('<?= $orden['no_orden'] ?>')">
                                                        <i class="bi bi-pencil-square">Finalizar Orden</i>
                                                    </a>

                                                </div>
                                            </div>
                                        </td>
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
<script>
    function finalizarOrden(noOrden) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Deseas asignar esta orden?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, asignar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Corrige la URL para redireccionar al controlador asignarOrden
                window.location.href = "<?= base_url('ordenes_asignadas') ?>" + noOrden;
            } else {
                Swal.fire({
                    title: 'Cancelado',
                    text: 'La orden no ha sido asignada',
                    icon: 'info',
                    confirmButtonText: 'Aceptar'
                });
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?= $this->endSection(); ?>
