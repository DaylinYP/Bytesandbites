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
</head>

<!--ESTILOS-->
<style>
    * {
        margin: 0;
    }

    body {
        background-image: linear-gradient(to right bottom, #004417, #06491a, #0d4e1d, #135421, #195924, #226730, #2b753d, #33834a, #409f66, #4cbb83, #58d8a2, #64f6c3);
        color: hsl(0, 0%, 100%);
    }

    .titulosH2 {
        color: rgb(255, 255, 255);
        font-family: "Quantico", sans-serif;
        font-weight: 400;
        font-style: normal;
        text-align: center;
    }

    header {
        margin: 5px;
    }

    .imagen {
        margin-right: 2px;
        float: right;
        margin-top: 10px;
    }

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

    .slider {

        height: 250px;
        margin: auto;
        position: relative;
        width: 90%;
        display: grid;
        place-items: center;
    }

    .slide-track {
        display: flex;
        width: calc(250px * 18);
    }

    .slide {
        height: 200px;
        width: 250px;
        display: flex;
        align-items: center;
        padding: 15px;
    }

    .easeout {
        width: 90%;
    }

    .slider::before,
    .slider::after {
        background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0)100%);
        content: "";
        height: 100%;
        position: absolute;
        width: 15%;
        z-index: 2;
    }

    .slider::before {
        left: 0;
        top: 0;
    }

    .slider::after {
        right: 0;
        top: 0;
        transform: rotateZ(100deg);
    }

    .sectionValores {
        height: 250px;
        width: 100%;
        display: flex;
        justify-content: space-around;

    }

    .divValores1,
    .divValores2 {
        background-color: rgb(255, 194, 10);
        color: black;
        height: 100%;
        width: 650px;
        padding: 30px 30px 30px;
        box-shadow: 5px 2px 20px #000000;
        border-radius: 30px 0 30px 0;

    }

    .divHistoria {
        margin-top: 100px;
        background-color: #eac63e;
        color: black;
        height: 100%;
        width: 65%;
        padding: 30px 30px 30px;
        box-shadow: 6px 2px 20px #000000;
        border-radius: 30px 0 30px 0;
        margin-left: auto;
        /* Añadir margen automático a la izquierda */
        margin-right: auto;
        /* Añadir margen automático a la derecha */
    }


    .divValores1:hover,
    .divValores2:hover,
    .divHistoria:hover {
        background-color: rgb(212, 160, 6);
        color: rgb(255, 255, 255);
        transition: 0.5s;
        box-shadow: 5px 2px 20px #2e2e2e;

    }

    .sectionHistoria {
        display: flex;
    }

    .divImagenHistoria {
        margin-top: 80px;

    }

    h3 {
        font-family: "Nerko One", cursive;
        font-weight: 600;
        font-style: normal;
        text-shadow: 1px 2px 2px #000000;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 10px;

    }

    .contenedorRedes {
        height: 900px;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .contenedorRedesInterno {
        height: 700px;
        display: grid;
        grid-template-columns: auto auto auto;
        align-items: center;
        justify-content: center;
        gap: 40px;

    }

    .divRedesInterno1,
    .divRedesInterno2,
    .divRedesInterno3 {
        margin-top: 100px;
        width: 500px;
        background-color: white;
        height: 100%;



    }

    @media screen and (max-width: 1250px) {
        nav {
            margin: 20px 0;
            background-color: rgba(0, 0, 0, 0.5);
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
            color: rgb(255, 255, 255);
            font-family: "Quantico", sans-serif;
            font-weight: 200;
            font-style: normal;
            text-align: center;
        }

        .sectionValores {
            height: 300px;
            width: 100%;
            margin-top: 150px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
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
            margin-top: 180px;
        }

        .sectionHistoria {
            display: grid;
            grid-template-columns: auto;
        }

        .divImagenHistoria {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contenedorRedesInterno {
            height: 500px;
            display: grid;
            grid-template-columns: auto;
            align-items: center;
            justify-content: center;
            gap: 40px;

        }

        .divRedesInterno1,
        .divRedesInterno2,
        .divRedesInterno3 {
            margin-top: 100px;
            width: 250px;
        }

    }
</style>

<body>
    <section
        style="background-color:rgb(255, 194, 10); height:40px; width:100%; display: flex; justify-content: center; align-items: center; gap: 15px;">
        <a href=""><img src="<?= base_url('img/26.png') ?>" alt="" style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/27.png') ?>" alt="" style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/28.png') ?>" alt="" style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/29.png') ?>" alt="" style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/30.png') ?>" alt="" style="width: 28px; height: 28px;"></a>
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
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active c-item" style="  height: 800px;">
                    <img src="<?= base_url('img/promocion1.png') ?>" class="d-block w-100 c-img" alt="..."
                        style="height: 100%;object-fit: cover;  margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 800px;">
                    <img src="<?= base_url('img/carrusel12.jpg') ?>" class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover;  margin-right:30px;">
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
                    <img src="<?= base_url('img/carrusel42') ?>" class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover; margin-right:30px;">
                </div>

            </div>
        </div>
        <br>



        <h2 class="titulosH2">NUESTROS SERVICIOS</h2>
        <h2 class="titulosH2">COLABORADORES</h2>
        <!--IMAGENES-->
        <div class="slider">
            <section class="sectionColaboradores slide-track">
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
                    <img src="<?= base_url('img/colabotadores12.png') ?>" alt="" class="easeout">
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
                    <img src="<?= base_url('img/colabotadores12.png') ?>" alt="" class="easeout">
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
            </section>
        </div>
        <br><br>
        <h2 style="text-align: center;">NUESTROS VALORES</h2>
        <section class="sectionValores">
            <div class="divValores1">
                <h3>MISIÓN</h3>
                <P>
                    Proporcionar servicios técnicos confiables y eficientes en reparación, recuperación de datos y
                    mantenimiento de sistemas, asegurando que nuestros clientes puedan operar con tranquilidad y
                    seguridad en un mundo digital.
                </P>
            </div>
            <div class="divValores2">
                <h3>VISIÓN</h3>
                <p>Ser el referente líder en servicios técnicos en la región, reconocidos por nuestra capacidad para
                    resolver problemas complejos de manera rápida y efectiva, y por nuestra dedicación a mantener la
                    satisfacción y confianza de nuestros clientes.</p>
            </div>
        </section>
        <section class="sectionHistoria">
            <div class="divHistoria">
                <h3>HISTORIA</h3>
                <p>Bytes and Bites: Innovación y Confiabilidad desde Guatemala
                    Fundada en 2024 en Guatemala, Bytes and Bites nació de la visión compartida de un grupo de
                    colaboradores apasionados por la tecnología y la innovación. Desde el principio, su misión fue
                    clara: ofrecer soluciones técnicas confiables y de alta calidad que facilitaran la vida digital de
                    sus clientes.
                    <br><br>
                    Lo que comenzó como un pequeño taller se ha transformado en un referente en el campo de la
                    reparación y recuperación de datos. El equipo de Bytes and Bites está compuesto por expertos en
                    diversas áreas tecnológicas, todos unidos por un compromiso con la excelencia y un profundo respeto
                    por las necesidades de sus clientes.
                    Con el paso del tiempo, Bytes and Bites se ha convertido en una empresa reconocida por su capacidad
                    para resolver problemas complejos, siempre con un enfoque humano y cercano. Desde reparaciones
                    rápidas hasta la recuperación de datos vitales, la empresa ha demostrado ser un aliado confiable
                    para particulares y empresas por igual.
                    Hoy, Bytes and Bites sigue creciendo, manteniendo siempre su compromiso con la innovación y la
                    satisfacción del cliente, asegurándose de que la tecnología siga siendo una herramienta poderosa y
                    accesible para todos.
                </p>
            </div>
            <div class="divImagenHistoria">
                <img src=" <?= base_url(' img/historiafoto.jpg') ?> " alt=""
                    style="width:400px; height:300px; object-fit: cover;box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-right: 20px;">
            </div>
        </section>
        <br><br>

        <section class="contenedorRedes">
            <main class="contenedorRedesInterno">
                <div class="divRedesInterno1"></div>
                <div class="divRedesInterno2"></div>
                <div class="divRedesInterno3"></div>
            </main>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html