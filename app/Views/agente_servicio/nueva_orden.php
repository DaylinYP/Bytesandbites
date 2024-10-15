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
            background-image: linear-gradient(to left, rgb(207, 207, 207), rgb(255, 255, 255));
            color: hsl(0, 0%, 0%);                                 
            text-shadow: 1px 2px 2px #000000;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
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
                    <a href="<?=base_url('/')?>">Bytes & Bits</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?=base_url('menu_ordenes_servicio')?>"class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Ordenes de Servicio</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?=base_url('orden/nueva')?>" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span> Nueva Orden de Servicio</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
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
                NUEVA ORDEN DE SERVICIO
            </h1>
            
            <div class="">
            <main class="container py-5">
            <form action="<?= base_url('orden/agregar') ?>" method="post">
            <!-- Sección: Datos del Cliente -->
                    <div class="row">
                        <div class="col-4">
                            <h1 class="titulo">Datos del Cliente</h1>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo bg-dark text-light texto">
                        <div class="row">
                            <div class="col pt-4">
                                <label for="txt_nit" class="pb-3">NIT:</label>
                                <input type="text" name="txt_nit" class="form-control" placeholder="Ingrese el NIT">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 pt-4">
                                <label for="txt_pNombre" class="pb-3">Primer Nombre:</label>
                                <input type="text" name="txt_pNombre" class="form-control" placeholder="Ingrese su primer nombre">
                            </div>
                            <div class="col-12 col-md-6 pt-4">
                                <label for="txt_sNombre" class="pb-3">Segundo Nombre:</label>
                                <input type="text" name="txt_sNombre" class="form-control" placeholder="Ingrese su segundo nombre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 pt-4">
                                <label for="txt_pApellido" class="pb-3">Primer Apellido:</label>
                                <input type="text" name="txt_pApellido" class="form-control" placeholder="Ingrese el primer apellido">
                            </div>
                            <div class="col-12 col-md-6 pt-4">
                                <label for="txt_sApellido" class="pb-3">Segundo Apellido:</label>
                                <input type="text" name="txt_sApellido" class="form-control" placeholder="Ingrese el segundo apellido">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 pt-4">
                                <label for="txt_email" class="pb-3">Email:</label>
                                <input type="email" name="txt_email" class="form-control" placeholder="Ingrese el email">
                            </div>
                            <div class="col-12 col-md-6 pt-4">
                                <label for="txt_telefono" class="pb-3">Teléfono:</label>
                                <input type="number" name="txt_telefono" class="form-control" placeholder="Ingrese el teléfono">
                            </div>
                        </div>
                    </section>

                    <!-- Sección: Datos del Equipo -->
                    <div class="row py-4">
                        <div class="col-4">
                            <h1 class="titulo">Datos del Equipo</h1>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>

                    <div id="equiposContainer">
                        <div class="equipo">
                            <section class="form-fondo bg-dark text-light texto">
                                <div class="row">
                                    <div class="col-12 col-md-4 pt-4">
                                        <label for="txt_tipo_equipo" class="pb-3">Tipo de Equipo:</label>
                                        <select class="form-select" name="txt_tipo_equipo[]" aria-label="Default select example" required>
                                            <option selected>-------------------Seleccionar-------------------</option>
                                            <?php foreach ($tiposEquipo as $tipoEquipo): ?>
                                                <option value="<?= $tipoEquipo['id_tipo_equipo']; ?>">
                                                    <?= $tipoEquipo['nombre_tipo']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 pt-4">
                                        <label for="txt_marca" class="pb-3">Marca:</label>
                                        <select class="form-select" name="txt_marca[]" aria-label="Default select example" required>
                                            <option selected>-------------------Seleccionar-------------------</option>
                                            <?php foreach ($marcas as $marca): ?>
                                                <option value="<?= $marca['id_marca']; ?>">
                                                    <?= $marca['nombre_marca']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 pt-4">
                                        <label for="txt_modelo" class="pb-3">Modelo:</label>
                                        <input type="text" name="txt_modelo[]" class="form-control" placeholder="Ingrese el modelo">
                                    </div>
                                </div>
                                <div class="col py-4">
                                    <label for="txt_descripcion_cliente" class="pb-3">Descripción:</label>
                                    <textarea name="txt_descripcion_cliente[]" class="form-control"></textarea>
                                </div>
                                <div class="col pb-4">
                                    <label for="txt_evaluacion" class="pb-3">Evaluación:</label>
                                    <textarea name="txt_evaluacion[]" class="form-control"></textarea>
                                </div>
                                <div class="col pb-4">
                                    <label for="txt_especificaciones" class="pb-3">Especificaciones:</label>
                                    <textarea name="txt_especificaciones[]" class="form-control"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 pt-4">
                                        <label for="txt_observaciones" class="pb-3">Observaciones:</label>
                                        <textarea name="txt_observaciones[]" class="form-control" style="height: 150px;"></textarea>
                                    </div>
                                    <div class="col-12 col-md-6 py-4">
                                        <div class="row">
                                            <div class="col">
                                                <label for="txt_fecha_ingreso" class="pb-3">Fecha de Ingreso:</label>
                                                <input type="date" name="txt_fecha_ingreso[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col">
                                                <label for="txt_fecha_estimada" class="pb-3">Fecha de Entrega Estimada:</label>
                                                <input type="date" name="txt_fecha_estimada[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <br><br><br>

                        </div>
                    </div>

                    <section>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div class="p-2 bd-highlight">
                                <a href="#" id="addButton">
                                    <img class="icono-tamaño" src="https://i.ibb.co/PDGXhYb/agregar-boton.png" alt="agregar-boton" border="0">
                                </a>
                            </div>
                            <div class="p-2 bd-highlight">
                                <h1 class="pt-2">Agregar otro equipo</h1>
                            </div>
                        </div>
                    </section>

                    <div class="container">
                    <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
                    </div>
                </form>
            </main>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("expand");
        });

        document.getElementById('addButton').addEventListener('click', function(e) {
                    e.preventDefault(); // Evita que el enlace recargue la página

                    // Clonar la sección del equipo
                    const equiposContainer = document.getElementById('equiposContainer');
                    const newEquipo = equiposContainer.querySelector('.equipo').cloneNode(true);

                    // Reiniciar los valores de los campos en el nuevo formulario
                    const inputs = newEquipo.querySelectorAll('input, select, textarea');
                    inputs.forEach(input => {
                        input.value = '';
                    });

                    // Agregar el nuevo formulario al contenedor
                    equiposContainer.appendChild(newEquipo);
                });
    </script>
</body>

</html>
