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
<style>
* {
    margin: 0;
}

body {
    background-image: linear-gradient(to left, rgb(2, 113, 96), rgb(0, 48, 41));
    color: hsl(0, 0%, 100%);
}

header {
    margin: 5px;
}

.imagen {
    margin-right: 5px;
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
    /* Distribuye espacio entre los elementos */
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
    height: 100%;
    /* Asegura que el ul ocupe todo el alto del nav */
}

nav ul li {
    margin: 0 20px;
    /* Ajusta el espacio entre los elementos del menú */
}

nav ul li a {
    color: white;
    font-size: 16px;
    padding: 8px 12px;
    /* Espacio entre ícono y texto */
    border-radius: 3px;
    text-transform: uppercase;
    text-decoration: none;
    display: flex;
    align-items: center;
    /* Alineación vertical del ícono */
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

/* Media Query para pantallas menores a 768px */
@media screen and (max-width: 1200px) {
    nav {
        margin: 20px 0 20px 0;
        background-color: rgba(0, 0, 0, 0.5);
        height: 100px;
        width: 100%;
    }

    .checkbtn {
        display: block;
    }

    ul {
        position: fixed;
        width: 120%;
        height: 80vh;
        background: black;
        top: 140px;
        left: -10%;
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
        margin: 20px;
    }
}
</style>

<body>
    <section style="background-color:rgb(255, 194, 10); height:40px; width:100%;"></section>
    <div class="contenedor">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li>
                    <header class="header">
                        <img src="logo_path_here" class="logotipo" width="200px" height="100px">
                    </header>
                </li>
                <li class="active"><a href="index.html" class="links">Inicio</a></li>
                <li><a href="#">Quienes Somos</a></li>
                <li><a href="#">Marcas</a></li>
                <li><a href="#">Servicio al Cliente</a></li>
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

                <div class="carousel-item active c-item" style="  height: 600px;">
                    <img src="https://i.pinimg.com/736x/74/f0/96/74f096f35b69e8dec2fdaa087a8e0238.jpg"
                        class="d-block w-100 c-img" alt="..."
                        style="height: 100%;object-fit: cover; margin-left:10px; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 600px;">
                    <img src="https://i.pinimg.com/736x/b4/30/93/b430934d47a6a51f14bf4d6d7135271f.jpg"
                        class="d-block w-100 c-img" alt="..."
                        style="height: 100%;object-fit: cover; margin-left:10px; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 600px;margin-right:30px;">
                    <img src="https://i.pinimg.com/736x/90/1d/7f/901d7f9e95cd42c8e992ec90f46ff66a.jpg"
                        class="d-block w-100 c-img" alt="..."
                        style="height: 100%;object-fit: cover; margin-left:10px; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 600px;">
                    <img src="https://i.pinimg.com/736x/3e/0b/31/3e0b31081759d4351f5d1d985b54ed4e.jpg"
                        class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover; margin-left:10px; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 600px;">
                    <img src="https://i.pinimg.com/736x/f5/ab/72/f5ab7279bcd5eeaa1fd39b24ef98a36b.jpg"
                        class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover; margin-left:10px; margin-right:30px;">
                </div>
                <div class="carousel-item c-item" style="  height: 600px;">
                    <img src="https://i.pinimg.com/736x/12/73/80/1273800108bf924d0ea417086529c86d.jpg"
                        class="d-block w-100" alt="..."
                        style="height: 100%;object-fit: cover; margin-left:10px; margin-right:30px;">
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>