<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>


<h1>Bienvenido</h1>
<a href="<?= base_url('logout');?>" class="btn btn-primary btn-sm">Cerrar Sesión</a>

<?php echo $this->endSection(); ?>