<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<div class="container">
    <a class="btn-regresar btn btn-danger shadow-lg p-2 mb-3 rounded"
        href="<?php echo base_url('servicio_al_cliente'); ?>" role="button">
        <i class="bi-arrow-left-square-fill"></i> Servicio al Cliente
    </a>

    <h1 class="text-center">Reporte Queja/Sugerencia</h1>

    <form id="form-queja" action="<?= base_url('agregar_reporte'); ?>" method="post">
    <?= csrf_field(); ?>

    <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="txtNoOrden" class="form-label">No. Orden</label>
                        <input
                            type="number"
                            name="txtNoOrden"
                            id="txtNoOrden"
                            class="form-control"
                            placeholder="Ingrese su número de orden"
                            value="<?= isset($datos['no_orden']) ? $datos['no_orden'] : ''; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtDescripcionQueja" class="form-label">Descripción</label>
                        <textarea
                            class="form-control"
                            name="txtDescripcionQueja"
                            id="txtDescripcionQueja"
                            rows="3"><?= isset($datos['descripcion_quejas']) ? $datos['descripcion_quejas'] : ''; ?></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning text-center" id="btn-enviar">Enviar</button>
            </div>
        </div>
    </form>
</div>

<?php echo $this->endSection(); ?>


