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
        background-image: url(https://img.freepik.com/vector-gratis/fondo-geometrico-formas-luz-abstractas-publicidad-comercial_1017-42845.jpg?t=st=1725938037~exp=1725941637~hmac=3d24e9b634ffe66448b0b58fa86066db3ec33046a17d8391ac8d17d6a7d2c859&w=740);
        background-attachment: fixed;
        background-size: cover;
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

    .datos {
        background-color: rgba(252, 252, 252, 0.404);
        background-attachment: fixed;
        padding: 30px;
        margin: auto;
        margin-top: 100px;
        border-radius: 40px;
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 2);
        box-shadow: 0 0 20px rgba(0, 0, 0, .2);

    }

    h1 {
        color: rgb(255, 194, 10);
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

    }
</style>