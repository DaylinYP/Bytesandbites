<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <main class="container-fluid p-5">
        <div class="row ">
        
        <div class="row">
                <div class="col-xl-1 col-12">
                    <div class=" d-md-flex justify-content-md-end container py-5 animate__animated animate__slideInRight mx-4 my-4">
                        <a href="<?=base_url('menu_ordenes_servicio')?>" class="btn btn-outline-primary btn-lg position-absolute  translate-middle rounded-pill"><i class="bi bi-caret-left-square"></i></a>
                    </div>
                </div>
                <div class="col-xl-11 col-12">
                    <h1 class="titulo titulo-principal text-center py-5">
                    <?= isset($titulo_2) ? $titulo_2 : 'Lista de Órdenes' ?>
                    </h1>
                </div >
            </div>
            <?php if (isset($ordenes) && is_array($ordenes)) : ?>
    <?php foreach ($ordenes as $orden) : ?>
        <div class="col-xl-4 col-12 pb-5">
            <div class="card mb-3 form-fondo bg-dark text-light">
                <div class="card-body">
                    <h5 class="card-title">No. Orden: <?= isset($orden['no_orden']) ? $orden['no_orden'] : 'N/A' ?></h5>
                    <p>
                        <strong>Código del cliente:</strong> <?= isset($orden['id_cliente']) ? $orden['id_cliente'] : 'N/A' ?><br>
                        <strong>Nombre del cliente:</strong> <?= isset($orden['nombre_completo']) ? $orden['nombre_completo'] : 'N/A' ?><br>
                        <strong>Fecha de ingreso:</strong> <?= isset($orden['fecha_recepcion']) ? $orden['fecha_recepcion'] : 'N/A' ?><br>
                        <strong>Estado:</strong> <?= isset($orden['estado_orden']) ? $orden['estado_orden'] : 'N/A' ?><br>
                    </p>
                    <div>
                    <a href="<?= site_url('imprimir-orden/' . $orden['no_orden']) ?>" class="btn btn-warning form-control">
                            Ver Detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No se encontraron órdenes.</p>
<?php endif; ?>

        </div>
    </main>
<?= $this->endSection(); ?>
