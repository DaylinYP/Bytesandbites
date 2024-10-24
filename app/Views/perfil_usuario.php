<?= $this->extend('admin/layout/menu_general'); ?>

<!--Finaliza menu-->
<?= $this->section('contenido'); ?>
<div class="main p-3 main">
    <main class="container">
        <form action="nombre">
            <div class="row">
                <div class="col-4">
                    <h1 class="titulo text-dark">
                        DATOS DEL Usuario
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <section class="form-fondo">
                
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_nombre_tecnico" class="pb-3 texto">Rol:</label>
                            <input type="text" name="txt_nombre_tecnico" class="form-control texto" value="<?= esc($user_role); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_id_tecnico" class="pb-3 texto">ID del Usuario:</label>
                            <input type="text" name="txt_id_tecnico" class="form-control texto" value="<?= esc($logged_in); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_nombre_tecnico" class="pb-3 texto">Nombre:</label>
                            <input type="text" name="txt_nombre_tecnico" class="form-control texto" value="<?= esc($user_empleado); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_email_tecnico" class="pb-3 texto">DPI:</label>
                            <input type="email" name="txt_email_tecnico" class="form-control texto" value="<?= esc($user_dpi); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_email_tecnico" class="pb-3 texto">Nit:</label>
                            <input type="email" name="txt_email_tecnico" class="form-control texto" value="<?= esc($user_nit); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_email_tecnico" class="pb-3 texto">Email:</label>
                            <input type="email" name="txt_email_tecnico" class="form-control texto" value="<?= esc($user_email); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_telefono_tecnico" class="pb-3 texto">Teléfono:</label>
                            <input type="tel" name="txt_telefono_tecnico" class="form-control texto" value="<?= esc($user_telefono); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_direccion_tecnico" class="pb-3 texto">Dirección:</label>
                            <input type="tel" name="txt_telefono_tecnico" class="form-control texto" value="<?= esc($user_direccion); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_direccion_tecnico" class="pb-3 texto">Empresa:</label>
                            <input type="tel" name="txt_telefono_tecnico" class="form-control texto" value="<?= esc($user_nombre_empresa); ?>" readonly>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <label for="txt_direccion_tecnico" class="pb-3 texto">Extención:</label>
                            <input type="tel" name="txt_telefono_tecnico" class="form-control texto" value="<?= esc($user_extension); ?>" readonly>
                        </div>
                    </div>

            </section>
        </form>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<?= $this->endSection(); ?>
