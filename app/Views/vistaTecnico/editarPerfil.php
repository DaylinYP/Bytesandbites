<?= $this->extend('admin/layout/menu_general'); ?>

<!--Finaliza menu-->
<?= $this->section('contenido'); ?>
<div class="main p-3 main">
    <main class="container">
        <form action="nombre">
            <div class="row">
                <div class="col-4">
                    <h1 class="titulo">
                        DATOS DEL TÉCNICO
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <section class="form-fondo">
                <?php if (isset($empleado)): ?>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_id_tecnico" class="pb-3 texto">ID del técnico</label>
                            <input type="text" name="txt_id_tecnico" class="form-control texto" value="<?= $empleado['id_empleado']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_nombre_tecnico" class="pb-3 texto">Nombre:</label>
                            <input type="text" name="txt_nombre_tecnico" class="form-control texto" value="<?= $empleado['primer_nombre']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_apellido_tecnico" class="pb-3 texto">Apellido:</label>
                            <input type="text" name="txt_apellido_tecnico" class="form-control texto" value="<?= $empleado['primer_apellido']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_email_tecnico" class="pb-3 texto">Email:</label>
                            <input type="email" name="txt_email_tecnico" class="form-control texto" value="<?= $empleado['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_telefono_tecnico" class="pb-3 texto">Teléfono:</label>
                            <input type="number" name="txt_telefono_tecnico" class="form-control texto" value="<?= $empleado['telefono']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_direccion_tecnico" class="pb-3 texto">Dirección:</label>
                            <input type="text" name="txt_direccion_tecnico" class="form-control texto" value="<?= $empleado['direccion']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="centro text-center">
                            <button type="button" id="btnActualizar" class="btn  btn-warning mt-4 text-center boton">
                                <i class="bi bi-pencil-square">Modificar información</i>
                            </button>
                        </div>
                    </div>
                <?php else: ?>
                    <p>No se encontraron datos del empleado.</p>
                <?php endif; ?>
            </section>
        </form>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<?= $this->endSection(); ?>
