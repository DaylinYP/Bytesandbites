<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>

<div class="container">
    <a class="btn-regresar btn btn-danger shadow-lg p-2 mb-3 rounded" href="<?php echo base_url('servicio_al_cliente') ?>" role="button">
        <i class="bi-arrow-left-square-fill"></i> Regresar
    </a>
</div>


<?php echo $this->endSection(); ?>