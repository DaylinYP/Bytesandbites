<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main  p-3">
    <main class="container">
        <div class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>
                        Clientes
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>


            <section class="formulario">
                <div class="d-grid gap-2 d-md-flex ">
                    <a href="<?= base_url('nuevo_empleado'); ?>" class="btn btn-primary bi bi-person-fill-add m-2"><br>Agregar Empleado</a>
                    <a href="<?= base_url('nuevo_rol'); ?>" class="btn btn-primary bi bi-diagram-3-fill m-2"><br>Roles/Puesto</a>

                    
                </div>
                <?= form_open('buscarCliente')?>
                <div class="form-group">
                    <label for="busqueda">Buscar Cliente:</label>
                    <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Nombre, apellido o cualquier otro campo...">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
                <?= form_close() ;?>
                <div class="text-center d-flex justify-content-evenly ">

                    
                <?php if (!empty($datos)): ?>
                    <div class="table-responsive" style="overflow-y: auto;">
                        <table class="table table-hover table-dark" id="myTable">
                            <thead class="">
                                <tr class="">
                                    <th>id</th>
                                    <th class="">nombres</th>
                                    <th class="">apellidos</th>
                                    <th class="">email</th>
                                    <th class="">telefono</th>
                                    <th class="">nit</th>
                                    <th class="">empresa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datos as $clientes): ?>
                                    <tr>
                                        <td> <?php echo $clientes['id_cliente']; ?></td>
                                        <td><?php echo $clientes['primer_nombre'] .
                                                ' ' . $clientes['segundo_nombre']; ?>
                                        </td>
                                        <td><?php echo $clientes['primer_apellido'] .
                                                ' ' . $clientes['segundo_apellido']; ?></td>
                                        <td><?php echo $clientes['email']; ?></td>
                                        <td><?php echo $clientes['telefono']; ?></td>
                                        <td><?php echo $clientes['nit'] ?></td>
                                        <td><?php echo $clientes['nombre_empresa'] ?></td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                        </div>
                        <div id="myTable_paginate" class="dataTables_paginate"></div>
                        <?php else: ?>
                        <p>No se encontraron resultados.</p>
                    <?php endif; ?>
                </div>
            </section>




        </div>
        <hr>

</div>

</main>
</div>

<!---->
<?= $this->endSection(); ?>