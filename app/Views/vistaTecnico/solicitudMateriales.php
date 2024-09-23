<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Materiales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?=base_url('img/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('css/css_form_material.css') ?>">

        

    <style>
        * {
            margin: 0;
        }

        .form-fondo {
            background-color: rgba(58, 14, 94, 0.568);
            padding: 30px;
            border-radius: 40px;
            backdrop-filter: blur(55px);            border: 2px solid rgba(255, 255, 255, 2);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color:white;

        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');


        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        h1 {
            font-weight: 600;
            font-size: 1.5rem;
        }

        body {
            font-family: 'Comfortaa', sans-serif;
            background-color:white;
            background-image: linear-gradient(to left, rgb(207, 207, 207), rgb(255, 255, 255));
        }

        .wrapper {
            display: flex;
        }

        .main {
            
            background-size: cover;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
        }
        .titulo {
            font-family: "Quantico", sans-serif;
            font-size: 60px;
        }

        .texto {
            font-family: "Comfortaa", sans-serif;
        }

        .boton{
            width: 80%;
            font-size:xx-large;
        }

        #sidebar {
            height: 100vh;
            overflow-y: auto;
            position: sticky;
            width: 70px;
            min-width: 70px;
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
            <a href="<?php echo base_url('vistaclientes/index');?>">Bytes & Bits</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="<?php echo base_url('editarPerfil');?>" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Perfil del técnico</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href=" <?php echo base_url('ordenesDeServicio');?>" class="sidebar-link">
                <i class="lni lni-list"></i>
                <span>Órdenes de servicio</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="<?php echo base_url('solicitarMateriales'); ?>" class="sidebar-link">
                <i class="lni lni-package"></i>
                <span>Solicitud de Materiales</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
               data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                <i class="lni lni-menu"></i>
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
                <span>Configuración</span>
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

        <div class="main p-3 main">
            <main class="container">
                <form action="nombre">
                    <div class="row">
                        <div class="col-4">
                            <h1 class="titulo">
                                Datos del Técnico
                                </h1>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo">
                    <div class="row pt-4">
                            <div class="col">
                                <label for="txt_id_tecnico" class="pb-3" class="texto">Busque su ID</label>
                                <input type="text" name="txt_id_tecnico" class="form-control" class="texto" placeholder="Ingrese su ID">
                            </div>
                            <div class="col">
                                <label for="txt_nombre_tecnico" class="pb-3" class="texto">Nombre:</label>
                                <input type="text" name="txt_nombre_tecnico" class="form-control" class="texto" value="" readonly>
                            </div>
                            <div class="col">
                                <label for="txt_apellido_tecnico" class="pb-3" class="texto">Apellido:</label>
                                <input type="text" name="txt_apellido_tecnico" class="form-control" class="texto" value="" readonly>
                            </div>
                            <div class="col">
                                <button type="button" id="btnBuscar" class="btn btn-primary mt-4">
                                    Buscar
                                </button>
                       
                       
                    </section>
                    <div class="row py-4">
                        <div class="col-4">
                            <h1 class="titulo">
                                Material a solicitar
                            </h1>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo">
                        <div class="row pt-4">
                            <div class="col">
                                <label for="txt_id_material" class="pb-3">Código del material</label>
                                <input type="text" name="txt_id_material" class="form-control" placeholder="Ingrese el código del material">
                            </div>
                            <div class="col">
                                <label for="txt_marca_material" class="pb-3">Marca:</label>
                                <input type="text" name="txt_marca_material" class="form-control"  readonly>
                            </div>
                            
                        </div>
                        
                        <div class="col py-4">
                                <label for="txt_nombre_material" class="pb-3">Nombre:</label>
                                <input type="text" name="txt_nombre_material" class="form-control"  readonly>
                            </div>

                        <div class="col pb-4">
                            <label for="txt_cantidad_material" class="pb-3">Cantidad:</label>
                            <input type="number" name="txt_cantidad_material" class="form-control" id="txt_cantidad_material" placeholder="Ingrese la cantidad de material que necesita en ENTEROS"></input>
                        </div>
                        <div class="col py-4">
                            <label for="txt_fecha_material" class="pb-3">Fecha de solicitud:</label>
                            <input type="date" name="txt_fecha_material" class="form-control" id="txt_fecha_material"></>
                        </div>
                        
                        <div class="col py-4">
                            <label for="txt_usuario" class="pb-3">Descripción:</label>
                            <textarea name="txt_usuario" class="form-control" id=""></textarea>
                        </div>


                    
                        <div class="row pt-4">
                            <div class="col">
                                <label for="txt_observacion" class="pb-3">Observaciones:</label>
                                <textarea name="txt_observacion" class="form-control" style="height: 150px;" id=""></textarea>
                            </div>
                            
                        </div>

                        <div class="row pt-4">
                        <div class="col">
                        <button type="submit" class="btn btn-warning" id="btnAgregarMaterial" name="btnAgregarMaterial"><i class="bi bi-plus-circle-fill"></i> Agregar material </button>
                        </div>
                        </div>
                        </section>

                        <div class="row py-4">
                        <div class="col-4">
                            <h1 class="titulo">
                                Datos de la orden
                            </h1>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo">
                        <div class="col">
                                <label for="txt_id_orden" class="pb-3" class="texto">Ingrese el ID</label>
                                <input type="text" name="txt_id_orden" class="form-control" class="texto" placeholder="Ingrese el ID">
                            </div>
                            <div class="col">
                                <label for="txt_estado_orden" class="pb-3" class="texto">Estado:</label>
                                <input type="text" name="txt_estado_orden" class="form-control"  class="texto" readonly>
                            </div>
                            <div class="row pt-4">
                            <div class="col">
                                <label for="txt_observaciones_orden" class="pb-3">Observaciones:</label>
                                <textarea name="txt_observaciones_orden" class="form-control" style="height: 150px;" id=""></textarea>
                            </div>
                            </section>  

                            <div class="row pt-4">
                            <div class="col text-center">
                        
                        <button type="submit" class="btn btn-warning boton" id="btnSolicitarMaterial" name="btnSolicitarMaterial"><i class="bi bi-check2"></i> Ordenar material </button>
                        </div>
                        </div>
                            </form>

</main>         
                       
        </div>
        <hr>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!--
    <script src="<?=base_url('js/script.js')?>"></script>
    -->
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("expand");
        });

        document.getElementById('btnBuscar').addEventListener('click', function () {
            const idTecnico = document.getElementById('txt_id_tecnico').value;
            
            if (idTecnico) {
                fetch(`<?= base_url('buscarTecnico') ?>?id=${idTecnico}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data) {
                            document.getElementById('txt_nombre_tecnico').value = data.primer_nombre + ' ' + data.segundo_nombre;
                            document.getElementById('txt_apellido_tecnico').value = data.primer_apellido + ' ' + data.segundo_apellido;
                        } else {
                            alert('Técnico no encontrado');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error al buscar técnico');
                    });
            } else {
                alert('Por favor, ingrese un ID');
            }
        });
    </script>
</body>

</html> 

