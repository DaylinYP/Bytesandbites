<?= $this->extend('admin/layout/menu'); ?>
<!--Finaliza menu-->
<?= $this->section('contenido'); ?>
<!--main modificable-->

<div class="main  p-3">
    <main class="container">
        <form action="#" class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>
                        Quejas
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>


            <section class="formulario">
                <section class="">
                    <?php foreach($datos as $quejas):?>
                    <div class="row text-center d-flex justify-content-evenly m-3">
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body">
                                <a href="" class="stretched-link"></a>
                                <h1 class="card-img-top">No_orden</h1>
                                <h5 class="card-title"><?php echo esc($quejas['no_orden'])?></h5>
                                <p class="card-text"><?php echo esc($quejas['descripcion_quejas'])?></p>
                            </div>
                        </div>          
                    </div>
                    <?php endforeach;?>
                </section>
            </section>

            <!---->


</div>
<hr>

</form>

</main>
</div>
<!---->

<?= $this->endSection();?>