<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <br>
    <h1 class="h1Bienvenidos text-center ">SELECCIONE SU TIPO DE USUARIO</h1>
    <hr class="usuario">
    <div class="row justify-content-center text-center btn-login">
        <div class="col-2 col-md-6 mb-2  text-center">
            <button type="button" class="btn btn-primary btn-lg btn-block animate__animated animate__pulse animate__infinite animate__slow"><i class="bi bi-person-fill"> Cliente</i></button>
        </div>
        <div class="col-12 col-md-6 mb-2  text-center">
            <button type="button" class="btn btn-primary btn-lg btn-block animate__animated animate__pulse animate__infinite animate__slow"><i class="bi bi-person-vcard-fill"> Empleado</i></button>
        </div>
    </div>
</div>
<br>
<?php echo $this->endSection(); ?>
