<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../Views/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<!--ESTILOS-->
<style>
    * {
        margin: 0;
    }

    body {
        background: white;
        font-size: 1rem;

    }

    header {
        margin: 5px;
    }

    /* INICIA SLIDER*/

    .slider {
        height: 350px;
        margin: auto;
        position: relative;
        width: 95%;
        display: grid;
        place-items: center;
        overflow: hidden;

    }

    .slide-track {
        display: flex;
        width: calc(450px * 18);
        animation: scroll 40s linear infinite;
    }

    .slide-track:hover {
        animation-play-state: paused;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px *9));
        }
    }

    .slide {
        height: 250px;
        width: 300px;
        display: flex;
        align-items: center;
        padding: 15px;
        perspective: 100px;

    }

    .easeout {
        width: 100%;
        transition: transform 1s;
        box-shadow: 5px 2px 20px #2e2e2e;
    }

    .easeout:hover {
        transform: translateZ(20px);
    }

    .slider::before,
    .slider::after {
        background: linear-gradient(to right, rgba(255, 255, 255, 1)0%,
                rgba(255, 255, 255, 0)100%);
        content: "";
        height: 100%;
        position: absolute;
        width: 10%;
        z-index: 2;
    }

    .slider::before {
        left: 0;
        top: 0;
    }

    .slider::after {
        left: 0;
        top: 0;
    }

    /* TERMINA SLIDER */


    /* INICIA NAV */
    nav {
        background-color: rgb(0, 0, 0);
        height: 110px;
        width: 100%;
        font-family: "Quantico", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    nav ul {
        display: flex;
        justify-content: space-around;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 0;
        height: 100%;
    }

    nav ul li {
        margin: 0 20px;
    }

    nav ul li a {
        color: white;
        font-size: 16px;
        padding: 8px 12px;
        border-radius: 3px;
        text-transform: uppercase;
        text-decoration: none;
        display: flex;
        align-items: center;
    }

    li a.active,
    li a:hover {
        background-color: rgb(255, 194, 10);
        color: black;
        transition: 0.5s;
    }

    .navbar-custom {
        background-color: transparent !important;
        width: 100%;
        padding: 0;
    }

    .navbar-form {
        width: 60%;
        display: flex;
        justify-content: center;
    }

    /*FINALIZA NAV*/

    /*MENU DE HAMBURGUESA*/

    .enlace {
        position: absolute;
        padding: 20px 50px;
    }

    .checkbtn {
        font-size: 20px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        display: none;
    }

    #check {
        display: none;
    }

    /*TERMINA MENÚ DE HAMBURGUESA*/


    /*INICIA ESTILOS DE CONTENEDOR DE VALORES*/
    .divValores {
        background-color: #291444;
        min-width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1rem;
        font-family: 'Comfortaa', cursive;

    }

    .datos {
        background-color: rgba(252, 252, 252, 0.404);
        padding: 30px;
        margin: auto;
        margin-top: 80px;
        border-radius: 40px;
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 2);
        box-shadow: 0 0 20px rgba(0, 0, 0, .2);
        border-radius: 30px 0 30px 0;
    }

    .divValores1,
    .divValores2 {
        background-color: rgba(212, 212, 212, 0.404);
        color: rgb(255, 255, 255);
        height: 100%;
        width: 600px;
        border-radius: 30px 0 30px 0;
        box-shadow: 5px 2px 15px #2e2e2e;
    }

    .divHistoria {
        margin-top: 100px;
        background-color: rgba(212, 212, 212, 0.404);
        color: rgb(255, 255, 255);
        height: 100%;
        width: 90%;
        margin-bottom: 40px;
        padding: 30px 30px 30px;
        box-shadow: 5px 2px 15px #2e2e2e;
        border-radius: 30px 0 30px 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }


    .divHistoria:hover,
    .divValores1:hover,
    .divValores2:hover {
        background-color: rgba(201, 201, 201, 0.5);
        transition: 0.5s;
        box-shadow: 5px 2px 15px rgb(49, 48, 48);
    }

    /*TERMINA CONTENEDOR DE VALORES*/


    /*INICIA ESTILOS PARA CONTENEDOR DE REDES SOCIALES*/
    .contenedorRedes {
        height: 400px;
        width: 100%;
        background-color: rgb(0, 0, 0);
    }

    .contenedorRedesInterno {
        height: 100px;
        display: grid;
        grid-template-columns: auto auto auto;
        align-items: center;
        justify-content: center;
        gap: 40px;
        font-family: 'Comfortaa', cursive;

    }

    .divRedesInterno1,
    .divRedesInterno2,
    .divRedesInterno3 {
        padding: 60px 150px;
        margin-top: 50px;
        width: 500px;
        height: 100%;
        
    }

    .bi {
        color: rgb(255, 194, 10);
        font-size: 1.4em;

    }

    h5 {
        color: rgb(255, 194, 10);
        text-shadow: 1px 2px 2px #000000;

    }

    .pRedes {
        color: rgb(255, 255, 255);
        text-shadow: 1px 1px 2px #000000;

    }

    .icon-text {
        display: flex;
        align-items: center;
        gap: 10px;
        /* Espacio entre el ícono y el texto */
    }

    .icon-text i {
        font-size: 1.5em;
    }

    /*ESTILOS DE CONTENEDOR NUESTROS SERVICIOS*/
    .contenedorServicios {
        display: grid;
        grid-template-columns: auto auto auto;
        justify-content: space-around;
        margin-top: 40px;
        margin-bottom: 40px;
        background-color: #291444;
        min-width: 100%;

    }

    .divServicios1,
    .divServicios3,
    .divServicios5 {
        height: 400px;
        width: 400px;
        margin-bottom: 40px;
        position: relative;
        box-shadow: 5px 8px 12px black;
        cursor: pointer;
        transition: all 0.3s ease-in-out;

    }

    .divServicios2,
    .divServicios4,
    .divServicios6 {
        height: 400px;
        width: 400px;
        margin-top: 40px;
        margin-bottom: 40px;
        position: relative;
        box-shadow: 5px 8px 12px black;

    }

    .divServicios1 h4,
    .divServicios2 h4,
    .divServicios3 h4,
    .divServicios4 h4,
    .divServicios5 h4,
    .divServicios6 h4 {
        font-size: 2rem;
        position: absolute;
        color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-shadow: 0 0 8px rgba(0, 0, 0, 0.8);
    }

    .divServicios1:hover,
    .divServicios2:hover,
    .divServicios3:hover,
    .divServicios4:hover,
    .divServicios5:hover,
    .divServicios6:hover {
        transform: scale(1.1);
        box-shadow: 13px 15px 37px black;
    }

    /*FINALIZA CONTENEDOR DE SERVICIOS*/


    /*******************/
    h3 {
        font-size: 1.5rem;
        font-family: 'Comfortaa', cursive;
        font-weight: 600;
        font-style: normal;
        text-shadow: 1px 2px 2px #000000;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 10px;
        color: white;
    }

    .titulosH2 {
        font-size: 5em;
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: black;
        text-shadow: 4px 2px rgba(201, 201, 201, 0.5);
    }

    h6 {
        color: rgb(255, 255, 255);
        font-family: 'Comfortaa', sans-serif;
        font-weight: 400;
        font-style: normal;
        text-align: center;
        text-shadow: 1px 2px 2px #000000;

    }

    footer {
        padding: 20px;
        background-color: #150a28d8;
        height: 50px;
        box-shadow: 5px 2px 15px #2e2e2e;
        border-radius: 0px 0 30px 30px;
    }


    /*INICIA MEDIA QUERIES*/
    @media screen and (max-width: 1250px) {
        nav {
            margin: 20px 0;
            background-color: rgb(0, 0, 0);
            height: 100px;
            width: 100%;
        }

        .checkbtn {
            display: block;
        }

        ul {
            position: fixed;
            width: 80%;
            height: 100vh;
            background: black;
            top: 0;
            left: -100%;
            text-align: center;
            transition: all .5s;
            display: flex;
            flex-direction: column;
            z-index: 1;
        }

        nav ul li {
            margin: 30px 0;
        }

        nav ul li a {
            font-size: 15px;
        }

        li a.active,
        li a:hover {
            background-color: rgb(255, 194, 10);
            color: black;
            transition: 0.5s;
        }

        #check:checked~ul {
            left: 0;
        }

        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }

        .titulosH2 {
        font-size: 2em;
        color: black;
        text-shadow: 4px 2px rgba(201, 201, 201, 0.5);
    }

        .divValores1,
        .divValores2 {
            width: 90%;
            height: 100%;
        }

        .divHistoria {
            height: 80%;
            width: 90%;
            /* Asegurar que no sea tan ancha en pantallas pequeñas */
            margin-left: auto;
            /* Centrar en resoluciones más pequeñas */
            margin-right: auto;
            margin-top: 150px;
        }

        .divValores {
            display: grid;
            grid-template-columns: auto;
        }

        .contenedorRedes {
            height: 100%;
            display: grid;
            grid-template-columns: auto;
            margin-bottom: 1px;
        }

        .contenedorRedesInterno {
            height: 100%;
            display: grid;
            grid-template-columns: auto;
            align-items: center;
            justify-content: center;
            gap: 20px;

        }

        .divRedesInterno1,
        .divRedesInterno2,
        .divRedesInterno3 {
            width: 100%;
        }

        .contenedorServicios {
            display: grid;
            grid-template-columns: auto;

        }

        .divServicios1,
        .divServicios3,
        .divServicios5 {
            height: 300px;
            width: 300px;
            margin-bottom: 40px;

        }

        .divServicios2,
        .divServicios4,
        .divServicios6 {
            height: 300px;
            width: 300px;
            margin-bottom: 40px;
        }

    }
</style>

<body>
    <section
        style="background-color:rgb(255, 194, 10); height:40px; width:100%; display: flex; justify-content: center; align-items: center; gap: 15px;">
        <a href="" class="icon-img"><img src="<?= base_url('img/26.png') ?>"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/27.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/28.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/29.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/30.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
    </section>
    <div class="contenedor">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li>
                    <header class="header">
                        <img src="" class="logotipo" width="250px" height="100px">
                    </header>
                </li>
                <li class="active"><a href="index.html" class="links">Inicio</a></li>
                <li><a href="#">Quienes Somos</a></li>
                <li><a href="#">Marcas</a></li>
                <li><a href="#">Registrarse</a></li>
                <li><a href="#"><i class="bi bi-person-circle"></i> LOGIN</a></li>
                <li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                        <button class="btn btn-warning" type="submit">Buscar</button>
                    </form>
                </li>
            </ul>
        </nav>
        <div id="carouselExampleSlidesOnly" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active c-item" style="height: 800px;">
                    <img src="<?= base_url('img/promocion1.png') ?>" class="d-block w-100 c-img" alt="..."
                        style="height: 100%;object-fit: cover;">
                </div>
                <div class="carousel-item c-item" style="height: 800px;">
                    <img src="<?= base_url('img/carrusel12.jpg') ?>" class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover;">
                </div>
                <div class="carousel-item c-item" style="  height: 800px;">
                    <img src="<?= base_url('img/promocion2.png') ?>" class="d-block w-100 c-img" alt="..."
                        style="height: 100%;object-fit: cover; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 800px;">
                    <img src="<?= base_url('img/carrusel22.jpg') ?>" class="d-block w-100 c-img" alt="..."
                        style="height: 100%;object-fit: cover; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 800px;">
                    <img src="<?= base_url('img/carrusel32.jpg') ?>" class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 800px;">
                    <img src="<?= base_url('img/promocion3.png') ?>" class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 800px;">
                    <img src="<?= base_url('img/carrusel42.jpg') ?>" class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover; margin-right:30px;">
                </div>
            </div>
        </div>

        <div class="contenedorServicios" style="margin-top: 40px;"></div>
        <h2 class="titulosH2">NUESTROS SERVICIOS</h2>
        <section class="contenedorServicios">
            <div class="divServicios1">
                <img src="<?= base_url('img/reparacioncomputadoras.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
                <h4>Reparación de <br>Computadoras</h4>
            </div>
            <div class="divServicios2">
                <img src="<?= base_url('img/instalaciondesoftware.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
                <h4>Instalación de Software</h4>
            </div>
            <div class="divServicios3">
                <img src="<?= base_url('img/recuperaciondedatos.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
                <h4>Recuperación de Datos</h4>
            </div>
            <div class="divServicios4">
                <img src="<?= base_url('img/migraciondedatos.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
                <h4>Migración de Datos</h4>
            </div>
            <div class="divServicios5">
                <img src="<?= base_url('img/mantenimientopreventivo.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
                <h4>Mantenimiento Preventivo</h4>
            </div>
            <div class="divServicios6">
                <img src="<?= base_url('img/seguridadinformatica.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
                <h4>Seguridad Informática</h4>
            </div>

        </section>

        <div class="divColaboradores">
            <h2 class="titulosH2">COLABORADORES</h2>
            <!--IMAGENES-->
            <div class="slider">
                <div class=" slide-track">
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores1.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores2.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores3.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores4.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores5.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores6.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores7.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores8.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores9.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores10.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores11.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores12.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores13.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores14.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores15.png') ?>" alt="" class="easeout">
                    </div>


                    <!--IMAGENES DUBLICADAS-->

                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores1.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores2.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores3.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores4.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores5.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores6.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores7.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores8.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores9.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores10.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores11.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores12.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores13.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores14.png') ?>" alt="" class="easeout">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('img/colaboradores15.png') ?>" alt="" class="easeout">
                    </div>
                </div>
            </div>
        </div>


        <div class="divValores">
            <div class="container">
                <div class="row">
                    <div class="col-6 datos divValores1">
                        <h3>MISIÓN</h3>
                        <p>
                            Proporcionar servicios técnicos confiables y eficientes en reparación, recuperación de datos
                            y
                            mantenimiento de sistemas, asegurando que nuestros clientes puedan operar con tranquilidad y
                            seguridad en un mundo digital.
                        </p>
                    </div>
                    <div class="col-6 datos divValores2">
                        <h3>VISIÓN</h3>
                        <p>
                            Ser el referente líder en servicios técnicos en la región, reconocidos por nuestra capacidad
                            para
                            resolver problemas complejos de manera rápida y efectiva, y por nuestra dedicación a
                            mantener la
                            satisfacción y confianza de nuestros clientes.
                        </p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-8 datos divHistoria">
                        <h3>HISTORIA</h3>
                        <p>
                            Bytes and Bites: Innovación y Confiabilidad desde Guatemala. Fundada en 2024 en Guatemala,
                            Bytes
                            and Bites nació de la visión compartida de un grupo de colaboradores apasionados por la
                            tecnología y la innovación. Desde el principio, su misión fue clara: ofrecer soluciones
                            técnicas
                            confiables y de alta calidad que facilitaran la vida digital de sus clientes.
                            <br><br>
                            Lo que comenzó como un pequeño taller se ha transformado en un referente en el campo de la
                            reparación y recuperación de datos. El equipo de Bytes and Bites está compuesto por expertos
                            en
                            diversas áreas tecnológicas, todos unidos por un compromiso con la excelencia y un profundo
                            respeto
                            por las necesidades de sus clientes.
                            <br><br>
                            Hoy, Bytes and Bites sigue creciendo, manteniendo siempre su compromiso con la innovación y
                            la
                            satisfacción del cliente, asegurándose de que la tecnología siga siendo una herramienta
                            poderosa y
                            accesible para todos.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <section class="contenedorRedes">
        <main class="contenedorRedesInterno">
            <div class="divRedesInterno1">
                <div>
                    <h5>¡CONTÁCTANOS!</h5>
                    <div class="icon-text">
                        <i class="bi bi-person-fill"></i>
                        <h6>Atención al Cliente</h6>
                    </div>
                    <p class="pRedes">Lunes a Viernes de 8 a 16hrs.<br>
                        (502) 2329-0000</p>
                </div>
                <div>
                    <div class="icon-text">
                        <i class="bi bi-whatsapp"></i>
                        <h6>Whatsapp</h6>
                    </div>
                    <p class="pRedes">Lunes a Viernes de 8 a 16hrs.<br>
                        (502) 5844-0000</p>
                </div>
            </div>
            <div class="divRedesInterno2">
                <div>
                    <h5>REDES SOCIALES</h5>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-envelope-fill"></i>
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div>
                    <p class="pRedes">
                        2326-0202 <br>
                        6 avenida 14-12 Zona 9, <br> Ciudad de Guatemala
                        <br> contactcenter@bytesandbits.com.gt
                    </p>
                </div>
            </div>
            <div class="divRedesInterno3">
                <h5>Empleo</h5>
                <button type="button" class="btn btn-warning">Aplica aquí!</button>
            </div>
        </main>
    </section>

    </div>
    <footer>
        <h6>Creado por: GRUPO #1</h6>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>