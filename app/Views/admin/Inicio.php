<?php echo $this->extend('admin/layout/menu'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?php echo $this->section('contenido'); ?>


<div class="main  p-3">
    <main class="container">
        <form action="#" class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>
                        Inicio
                    </h1>
                    <h5>
                        Nombre: <?= esc($user_nombre); ?> <br>
                        Rol: <?= esc($user_role); ?> <br>
                        Usuario: <?= esc($user_name); ?>
                    </h5>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>


            <section class="formulario">
                <section class="">
                    <div class="row text-center d-flex justify-content-evenly m-3">
                        <div class="card m-2 carta rounded-5" style="width: 18rem;">
                            <img src="https://cdn-icons-png.freepik.com/512/7198/7198119.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="<?= ('empleados'); ?>" class="stretched-link"></a>
                                <h5 class="card-title">Empleados</h5>
                                <p class="card-text">Ver Empleados</p>
                            </div>
                        </div>
                        <div class="card m-2 carta rounded-5" style="width: 18rem;">
                            <img src="https://cdn-icons-png.flaticon.com/512/2519/2519166.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="<?= ('quejas'); ?>" class="stretched-link"></a>
                                <h5 class="card-title">Quejas</h5>
                                <p class="card-text">Ver Quejas</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>


                    <div class="">
                        <main class="container-fluid py-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="card card-pendiente">
                                        <div class="card-body">
                                            <h5 class="card-title titulo">Pendientes</h5>
                                            <p class="card-text cantidades-importantes text-end">5</p>
                                            <a href="#" class="btn btn-warning btn-lg shadow-lg border border-2 border-white">Ver</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card card-proceso">
                                        <div class="card-body">
                                            <h5 class="card-title titulo">En proceso</h5>
                                            <p class="card-text cantidades-importantes text-end">10</p>
                                            <a href="#" class="btn btn-warning btn-lg shadow-lg border border-2 border-white">Ver</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card card-terminada">
                                        <div class="card-body">
                                            <h5 class="card-title titulo">Finalizadas</h5>
                                            <p class="card-text cantidades-importantes text-end">25</p>
                                            <a href="#" class="btn btn-warning btn-lg shadow-lg border border-2 border-white">Ver</a>
                                        </div>
                                    </div>

                                </div>
                        </main>


                </section>
            </section>




</div>
<hr>

</form>

</main>
</div>
<!---->

<?php echo $this->endSection();
