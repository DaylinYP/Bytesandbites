<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <br>
    <h1 class="h1Bienvenidos text-center">SELECCIONE SU TIPO DE USUARIO</h1>
    <hr>
    <div class="row justify-content-center text-center btn-login">
        <div class="col-12 col-md-6 mb-2  text-center">
            <button type="button" class="btn btn-warning btn-lg btn-block">Cliente</button>
        </div>
        <div class="col-12 col-md-6 mb-2  text-center">
            <button type="button" class="btn btn-danger btn-lg btn-block">Empleado</button>
        </div>
    </div>
</div>
<br>
<?php echo $this->endSection(); ?>
