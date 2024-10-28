<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main texto p-3">
        
        <h1 class="titulo titulo-principal text-center py-5">
            Nuevo Repuesto
        </h1>
        
        
        <main class="container">
            <form action="agregar_repuesto" method="post" enctype="multipart/form-data"> <!-- Agregado enctype -->
                <section class="bg-dark form-fondo texto text-light">
                    <div class="row pt-4">
                        <div class="row pb-4">
                            <div class="col">
                                <label for="txt_id_repuesto" class="pb-3">Código del Repuesto:</label>
                                <input type="text" name="txt_id_repuesto" class="form-control" placeholder="Ingrese el código del repuesto" required>
                            </div>
                            <div class="col">
                                <label for="txt_nombre" class="pb-3">Nombre del Repuesto:</label>
                                <input type="text" name="txt_nombre" class="form-control" placeholder="Ingrese el nombre" required>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-6 col-md-12">
                                <label for="txt_tipo_equipo" class="pb-3">Tipo de Equipo:</label>
                                <select class="form-select" name="txt_tipo_equipo" aria-label="Default select example" required>
                                    <option selected>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($tiposEquipo as $tipoEquipo): ?>
                                        <option value="<?= $tipoEquipo['id_tipo_equipo']; ?>">
                                            <?= $tipoEquipo['nombre_tipo']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="txt_marca" class="pb-3">Marca:</label>
                                <select class="form-select" name="txt_marca" aria-label="Default select example" required>
                                    <option selected>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?= $marca['id_marca']; ?>">
                                            <?= $marca['nombre_marca']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <label for="txt_modelo" class="pb-3">Modelo:</label>
                                <input type="text" name="txt_modelo" class="form-control" placeholder="Ingrese el modelo" required>
                            </div>
                            <div class="col">
                                <label for="txt_precio" class="pb-3">Precio:</label>
                                <input type="number" name="txt_precio" class="form-control" placeholder="Ingrese el precio" required>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <label for="txt_proveedor" class="pb-3">Proveedor:</label>
                                <select class="form-select" name="txt_proveedor" aria-label="Default select example" required>
                                    <option selected>-------------------Seleccionar-------------------</option>
                                    <?php foreach ($proveedores as $proveedor): ?>
                                        <option value="<?= $proveedor['id_proveedor']; ?>">
                                            <?= $proveedor['nombre_proveedor']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="txt_cantidad" class="pb-3">Cantidad:</label>
                                <input type="number" name="txt_cantidad" class="form-control" placeholder="Ingrese la cantidad disponible" required>
                            </div>
                            <div class="col pt-2">
                                <label for="txt_imagen" class="form-label">Imagen: </label>
                                <input type="file" id="txt_imagen" name="txt_imagen" class="form-control" onchange="actualizarImg()"> <!-- Cambiado onclick por onchange -->
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-12 col-lg-9">
                                <label for="txt_descripcion_repuesto" class="pb-3">Descripcion:</label>
                                <textarea name="txt_descripcion_repuesto" class="form-control" placeholder="Ingrese una pequeña descripción del producto" required></textarea>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="txt_estado_repuesto" class="pb-3">Estado:</label>
                                    <select class="form-select" name="txt_estado_repuesto" aria-label="Default select example" required>
                                        <option selected>-------------------Seleccionar-------------------</option>
                                        <?php foreach ($estadoRepuestos as $estadoRepuesto): ?>
                                            <option value="<?= $estadoRepuesto['id_estado_repuesto']; ?>">
                                                <?= $estadoRepuesto['estado']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>    
                            </div >
                        </div>
                        <div class="row pb-4">
                            <div class="col">
                                <img id="image" src="" alt="Previsualización de la imagen" style="display: none; width: 200px; height: auto;"/> <!-- Imagen para la previsualización -->
                            </div>
                        </div>
                    </div>
                </section>
                <div class="mb-8 pt-4 pt-5">    
                    <button type="submit" id="btnGuardar" class="btn btn-warning form-control" name="btnGuardar">Guardar Datos</button>
                </div>
            </form>
        </main>
    </div> 
    <script>
    function actualizarImg() {
        const fileInput = document.getElementById('txt_imagen');
        const imgPreview = document.getElementById('img_repuesto');
        
        const file = fileInput.files[0];
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                imgPreview.style.display = 'block';
            }
            
            reader.readAsDataURL(file);
        } else {
            imgPreview.style.display = 'none';
        }
    }
    </script>  
<?= $this->endSection(); ?> 