<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <main class="container-fluid p-5">

        <div class="row">
            <div class="col-xl-4 col-12 pb-5">
                <div class="card bg-danger">
                <div class="card-body">
                    <h5 class="card-title titulo">Pendientes</h5>
                    <p class="card-text cantidades-importantes text-end">
                        <?= isset($pendientesCount) ? $pendientesCount : 0 ?>
                    </p>
                    <a href="<?=base_url('ordenes_pendientes')?>" class="btn btn-dark btn-lg shadow-lg border border-2 border-white form-control">Ver</a>
                            
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-12 pb-5">
                <div class="card bg-warning">
                <div class="card-body">
                    <h5 class="card-title titulo">En proceso</h5>
                    <p class="card-text cantidades-importantes text-end">
                        <?= isset($enProcesoCount) ? $enProcesoCount : 0 ?>
                    </p>
                    <a href="<?=base_url('ordenes_enproceso')?>" class="btn btn-dark btn-lg shadow-lg border border-2 border-white form-control">Ver</a>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-12 pb-5">
                <div class="card bg-success">
                    <div class="card-body">
                    <h5 class="card-title titulo">Finalizadas</h5>
                    <p class="card-text cantidades-importantes text-end">
                        <?= isset($finalizadasCount) ? $finalizadasCount : 0 ?>
                    </p>
                    <a href="<?=base_url('ordenes_finalizadas')?>" class="btn btn-dark btn-lg shadow-lg border border-2 border-white form-control">Ver</a>
                    </div>
                </div>
                </div>
            </div>

    </main>
<?= $this->endSection(); ?>  