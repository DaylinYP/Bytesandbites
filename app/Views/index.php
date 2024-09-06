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
  margin: 10px;
}
.imagen {
    margin-right: 8px;
    float: right;
    margin-top: 10px;
}

/* INICIA NAV */
nav {
    background-color: rgba(0, 0, 0, 0.5);
    height: 120px;
    width: 100%;
}

nav ul {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav ul li {
    display: inline-block;
    line-height: 20px;
    margin: 0 7px;
}

nav ul li a {
    color: white;
    font-size: 18px;
    padding: 10px 10px;
    border-radius: 3px;
    text-transform: uppercase;
    text-decoration: none;
}

li a.active,
li a:hover {
    background-color: white;
    color: black;
    transition: 0.5s;
}
.navbar-custom{
    background-color: transparent !important;
    width: 100%;
    padding: 0;
  }
  .navbar-form {
    width: 100%;
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
        width: 95%;
        height: 85vh;
        background: #032921;
        top: 280px;
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

    li a.hover,
    li a.active {
        background: none;
        color: rgb(0, 20, 46);
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
    <div class="contenedor">

        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li>
                    <header class="header">
                        <img src="img/logo.jpg" class="imaintecap" width="230px" height="110px">
                    </header>
                </li>
                <li class="active"><a href="index.html" class="links">Inicio</a></li>
                <li class=""><a href="" class="links">Quienes Somos</a></li>
                <li class=""><a href="" class="links">Marcas</a></li>
                <li class=""><a href="" class="links">Servicio al Cliente</a></li>
                <li>LOGIN</li>
            </ul>
        </nav>
    </div>
    <nav class="navbar navbar-light navbar-custom">
        <div class="navbar-form">
            <form class="d-flex" style="width: 90%;">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-warning" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            </div>
            <div class="carousel-item">
                <img src="/img/carrusel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/carrusel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carrusel3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>