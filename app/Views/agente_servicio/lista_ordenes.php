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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
        }
       
        .form-fondo {

            font-weight: 400;
            font-style: normal;
            border: 2px solid rgba(214, 214, 214, 0.5);      
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
            min-height: 300px;
            padding: 30px;
            border-radius: 40px;
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 2);
            box-shadow: 0 0 10px  rgba(0, 0, 0, .2);

        }
        /*formulario popup*/


        .modal-container {
        display: flex;
        background-color: rgba(0, 0, 0, 0.3);
        align-items: center;
        justify-content: center;
        position: fixed;
        pointer-events: none;
        opacity: 0;  
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        transition: opacity 0.3s ease;
        }

        .show {
        pointer-events: auto;
        opacity: 1;
        }

        .modal {
        background-color: #fff;
        width: 600px;
        max-width: 100%;
        padding: 30px 50px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        text-align: center;
        }

        .modal h1 {
        margin: 0;
        }

        .modal p {
        opacity: 0.7;
        font-size: 14px;
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
                    <a href="<?=base_url('menu_ordenes_servicio')?>">Bytes & Bits</a>
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
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </div>
        </aside>
        <div class="main texto p-3">

        <div class="row">
                <div class="col-1">
                    <div class=" d-md-flex justify-content-md-end container py-5 animate__animated animate__slideInRight mx-4 my-4">
                        <a href="<?=base_url('menu_ordenes_servicio')?>" class="btn btn-outline-primary btn-lg position-absolute  translate-middle rounded-pill"><i class="bi bi-caret-left-square"></i></a>
                    </div>
                </div>
                <div class="col-11">
                    <h1 class="titulo titulo-principal text-center py-5">
                    <?= isset($titulo) ? $titulo : 'Lista de Órdenes' ?>
                    </h1>
                </div >
            </div>
        
            <div>        
            <main class="container-fluid py-5">
                <div class="row ">
                    <?php if (isset($ordenes) && is_array($ordenes)) : ?>
                        <?php foreach ($ordenes as $orden) : ?>
                            <div class="col-md-4">
                                <div class="card mb-3 form-fondo bg-dark text-light">
                                    <div class="card-body">
                                        <h5 class="card-title">No. Orden: <?= isset($orden['no_orden']) ? $orden['no_orden'] : 'N/A' ?></h5>
                                        <p>
                                            <strong>Código del cliente:</strong> <?= isset($orden['id_cliente']) ? $orden['id_cliente'] : 'N/A' ?><br>
                                            <strong>Nombre del cliente:</strong> <?= isset($orden['nombre_completo']) ? $orden['nombre_completo'] : 'N/A' ?><br>
                                            <strong>Fecha de ingreso:</strong> <?= isset($orden['fecha_recepcion']) ? $orden['fecha_recepcion'] : 'N/A' ?><br>
                                            <strong>Estado:</strong> <?= isset($orden['estado_orden']) ? $orden['estado_orden'] : 'N/A' ?><br>
                                        </p>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="" class="btn btn-warning">
                                            Ver Detalles
                                        </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No se encontraron órdenes .</p>
                    <?php endif; ?>
                </div>
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

        const open = document.getElementById('open');
        const modal_container = document.getElementById('modal_container');
        const close = document.getElementById('close');

        open.addEventListener('click', () => {
        modal_container.classList.add('show');  
        });

        close.addEventListener('click', () => {
        modal_container.classList.remove('show');
        });
    </script>
</body>

</html>
