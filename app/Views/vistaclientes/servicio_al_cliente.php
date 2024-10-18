<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<div class="container">
    <a class="btn-regresar btn btn-danger shadow-lg p-2 mb-3 rounded" href="<?php echo base_url('regresar_Home') ?>" role="button">
        <i class="bi-arrow-left-square-fill"></i> Regresar
    </a>


    <div class="card-view d-flex justify-content-center align-items-center ">

        <div class="text-center">
            <h1 class="mb-4">Servicio al Cliente</h1>
            <div class="card" style="width: 20rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Quejas o Sugerencias</h5>
                    <p class="card-text">
                        ¿Deseas darnos una sugerencia de mejora en nuestro servicio?
                    </p>
                    <a href="#" class="btn btn-warning">Reportar</a>
                </div>
            </div>
        </div>
    </div>


</div>

<?php echo $this->endSection(); ?>