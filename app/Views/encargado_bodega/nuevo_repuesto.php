<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Servicio</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="<?= base_url('img/favicon.ico') ?>" type="image/x-icon">
    <style>
        * {
            margin: 0;
        }
       /*nueva orden*/
        .form-fondo {
            font-weight: 400;
            font-style: normal; 
            padding: 30px;
            border-radius: 20px;
            backdrop-filter: blur(55px);
            box-shadow: 0 0 10px  rgba(0, 0, 0, .2);
          
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

      
        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        .titulo{
            font-family: "Quantico", sans-serif;
        }

        .texto{
            font-family: 'Comfortaa', sans-serif;
        }

        .color-seccion1{
            background-color: #7041df;
        }

        h1 {
            font-weight: 600;
            font-size: 1.5rem;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            display: flex;
        }

        .main {
            background-color: #ffffff;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
            background-image: linear-gradient(to left, rgb(207, 207, 207), rgb(255, 255, 255));
            color: hsl(0, 0%, 0%);                                 
            text-shadow: 1px 2px 2px #000000;
        }


        #sidebar {
            height: 100vh; 
            overflow-y: auto;
            position: sticky;
            width: 80px;
            min-width: 80px;
            z-index: 1000;
            transition: all .25s ease-in-out;
            background-color: #212122;
            display: flex;
            flex-direction: column;
            top: 0;
            left: 0;
        }

        #sidebar.expand {
            width: 260px;
            min-width: 260px;
        }

        .toggle-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
            padding: 1rem 1.5rem;
        }

        .toggle-btn i {
            font-size: 1.5rem;
            color: #FFF;
        }

        .sidebar-logo {
            margin: auto 0;
        }

        .sidebar-logo a {
            color: #FFF;
            font-size: 1.15rem;
            font-weight: 600;
        }

        #sidebar:not(.expand) .sidebar-logo,
        #sidebar:not(.expand) a.sidebar-link span {
            display: none;
        }

        .sidebar-nav {
            padding: 2rem 0;
            flex: 1 1 auto;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #FFF;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            margin-right: .75rem;
        }

        a.sidebar-link:hover {
            background-color: rgba(255, 255, 255, .075);
            border-left: 3px solid #7041df;
        }

        .sidebar-item {
            position: relative;
        }

        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
            position: absolute;
            top: 0;
            left: 70px;
            background-color: #0e2238;
            padding: 0;
            min-width: 15rem;
            display: none;
        }

        #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
            display: block;
            max-height: 15em;
            width: 100%;
            opacity: 1;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem .075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all .2s ease-out;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all .2s ease-out;
        }

        .icono-tamaño{
            max-width: 45px;
        }
        .titulo-principal{
            font-size: 2.5rem;
        }
        .cantidades-importantes{
            font-size: 5.0rem;
        }

        .card-title{
            font-size: 2.0rem;
        }
        /*ordenes*/
        .card{
            height: 300px;
            padding: 30px;
            border-radius: 40px;
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 2);
            box-shadow: 0 0 10px  rgba(0, 0, 0, .2);
        }
        .card-pendiente{
            background-color: rgba(253, 115, 115, 0.404) ;       
        }
        .card-proceso{
            background-color: rgba(115, 175, 253, 0.404) ;       
        }
        .card-terminada{
            background-color: rgba(170, 253, 115, 0.404) ;       
        }
        
        </style>

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="lista_repuestos">Bytes & Bits</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?=base_url('perfil_empleado')?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?=base_url('lista_repuestos')?>" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Repuestos</span>
                    </a>
                </li>
               
                <li class="sidebar-item">
                    <a href="<?=base_url('nuevo_repuesto')?>" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Nuevo Repuesto</span>
                    </a>
                </li>
                
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </div>
        </aside>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>
            <script src="script.js"></script>
            <script>
                const hamBurger = document.querySelector(".toggle-btn");
                hamBurger.addEventListener("click", function () {
                    document.querySelector("#sidebar").classList.toggle("expand");
                });

                function actualizarImg() {
                    const $inputfile = document.querySelector("#txt_imagen"),
                        $imgProducto = document.querySelector("#image");

                    // Escuchar cuando cambie
                    $inputfile.addEventListener("change", () => {
                        const files = $inputfile.files;

                        if (!files || !files.length) {
                            $imgProducto.src = "";
                            $imgProducto.style.display = "none"; // Ocultar si no hay archivo
                            return;
                        }

                        const archivoInicial = files[0];
                        const Url = URL.createObjectURL(archivoInicial);
                        $imgProducto.src = Url;
                        $imgProducto.style.display = "block"; // Mostrar imagen
                    });
                }
            </script>

</body>

</html>
