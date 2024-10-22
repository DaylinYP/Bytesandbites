<?php echo $this->extend('admin/layout/menu_general'); ?>
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
                        <div class="col-lg-4 col-md-12 pb-5">
                          <div class="card bg-danger text-light">
                            <div class="card-body">
                              <h5>Pendientes</h5>
                              <p class="card-text cantidades-importantes text-end">
                                    <?= isset($pendientesCount) ? $pendientesCount : 0 ?>
                              </p>
                              <a href="<?=base_url('ordenes_pendientes')?>" class="btn btn-dark btn-lg shadow-lg border border-2 border-white form-control">Ver</a>
                              
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pb-5">
                          <div class="card bg-warning text-light">
                            <div class="card-body">
                              <h5>En proceso</h5>
                              <p class="card-text cantidades-importantes text-end">
                                    <?= isset($enProcesoCount) ? $enProcesoCount : 0 ?>
                              </p>
                              <a href="<?=base_url('ordenes_enproceso')?>" class="btn btn-dark btn-lg shadow-lg border border-2 border-white form-control">Ver</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pb-5">
                            <div class="card bg-success text-light">
                              <div class="card-body">
                                <h5>Finalizadas</h5>
                                <p class="card-text cantidades-importantes text-end">
                                    <?= isset($finalizadasCount) ? $finalizadasCount : 0 ?>
                                </p>
                                <a href="<?=base_url('ordenes_finalizadas')?>" class="btn btn-dark btn-lg shadow-lg border border-2 border-white form-control">Ver</a>
                              </div>
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
