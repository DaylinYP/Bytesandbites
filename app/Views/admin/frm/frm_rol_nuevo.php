<?= $this->extend('admin/layout/menu'); ?>

<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main p-3 ">
    <main class="container d-flex justify-content-center">
        <?php echo validation_list_errors();?>
        <form action="<?= base_url('agregar_rol');?>" method="post" class="formulario">
            <div class="row">
                <div class="col-4">
                    <h1>
                        Nuevo Rol/Puesto
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>


            <section class="form-fondo" style="width: 500px;">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <label for="txt_nombre" class="pb-3">Nombre del Rol/Puesto:</label>
                        <input type="text" name="txt_nombre" class="form-control" value="<?= set_value('txt_nombre')?>" placeholder="Ingrese su Usuario">
                        <?php echo validation_show_error('txt_nombre');?>
                    </div>
                    <div class="row p-3">

                        <div class="col-lg-12 col-sm-12">
                            <label for="txt_usuario" class="pb-3">Descripcion:</label>
                            <div class="row">

                                <textarea name="" id="" class="col-lg-12 col-sm-12"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-lg-6 col-sm-12 ">
                        <label for="txt_precio" class="pb-3">Sueldo:</label>
                        <input type="number" name="txt_precio" class="form-control" value="<?php echo set_value('txt_precio')?>" placeholder="Ingrese su Usuario">
                        <?php echo validation_show_error('txt_precio'); ?>
                    </div>
                    <div class="col-lg-6 text-center p-3">
                        <button class="btn btn-primary" type="submit">guardar</button>
                    </div>
                </div>


            </section>

            <!---->


        </form>
    </main>
</div>
<hr>

<?= $this->endSection();?>