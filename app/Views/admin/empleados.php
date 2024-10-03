<?= $this->extend('admin/layout/menu'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main  p-3">
    <main class="container">
        <div class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>
                        Empleados
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
                <?= form_open('buscar')?>
                <div class="form-group">
                    <label for="busqueda">Buscar empleado:</label>
                    <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Nombre, apellido o cualquier otro campo...">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
                <?= form_close() ;?>
                <div class="text-center d-flex justify-content-evenly table-scroll">

                    <?php if (!empty($empleadoss)): ?>

                        <table class="table table-hover table-dark">
                            <thead class="">
                                <tr class="">
                                    <th>id_empleado</th>
                                    <th>dpi</th>
                                    <th class="">nombres</th>
                                    <th class="">apellidos</th>
                                    <th class="">email</th>
                                    <th class="">telefono</th>
                                    <th class="">direccion</th>
                                    <th class="">rol</th>
                                    <th class="">empresa</th>
                                    <th>extension</th>
                                    <th class="">modificar</th>
                                    <th class="">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($empleadoss as $empleados): ?>
                                    <tr>
                                        <td> <?php echo $empleados['id_empleado']; ?></td>
                                        <td><?php echo $empleados['dpi']; ?></td>
                                        <td><?php echo $empleados['primer_nombre'] .
                                                ' ' . $empleados['segundo_nombre']; ?>
                                        </td>
                                        <td><?php echo $empleados['primer_apellido'] .
                                                ' ' . $empleados['segundo_apellido']; ?></td>
                                        <td><?php echo $empleados['email']; ?></td>
                                        <td><?php echo $empleados['telefono']; ?></td>
                                        <td><?php echo $empleados['direccion']; ?></td>
                                        <td><?php echo $empleados['rol']; ?></td>
                                        <td><?php echo $empleados['sucursal'] ?></td>
                                        <td><?php echo $empleados['extension'] ?></td>
                                        <td>
                                            <a class="btn btn-primary bi bi-person-gear" href="<?= base_url('buscar_empleado/') . $empleados['id_empleado'] ?>"></a>
                                        </td>
                                        <td class="position-relative"><?php echo $empleados['estado']; ?></td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
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