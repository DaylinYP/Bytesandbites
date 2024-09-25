<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('img/favicon.ico') ?>" type="image/x-icon">

    <style>
        * {
            margin: 0;
        }

        .form-fondo {

            background-color: rgba(58, 14, 94, 0.450);
            padding: 30px;
            border-radius: 40px;
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 2);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            width: 60%;
            color: white;

        }



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
            background-color: white;
            background-image: linear-gradient(to left, rgb(207, 207, 207), rgb(255, 255, 255));
        }


        .main {

            background-size: cover;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
        }

        .boton {
            width: 80%;
            font-size: xx-large;
        }

        .titulo {
            font-family: "Quantico", sans-serif;
            font-size: 30px;
        }
        .titulo1 {
            font-family: "Quantico", sans-serif;
            font-size: 15px;
        }

        .texto {
            font-family: "Comfortaa", sans-serif;
        }

        .container {
            text-align: center;
            display: flex;
            justify-content: space-around;
            padding: 60px;
        }

        .valid-feedback {
            color: rgb(255, 255, 255);
        }

        .invalid-feedback {
            color: rgb(255, 255, 255);
        }

        .button {
            font-size: 40px;

        }
    </style>

</head>

<body>

    <div class="main p-3">
        <main class="container">
            <section class="form-fondo">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-screwdriver" viewBox="0 0 16 16">
                        <path d="M0 .995.995 0l3.064 2.19a1 1 0 0 1 .417.809v.07c0 .264.105.517.291.704l5.677 5.676.909-.303a1 1 0 0 1 1.018.24l3.338 3.339a.995.995 0 0 1 0 1.406L14.13 15.71a.995.995 0 0 1-1.406 0l-3.337-3.34a1 1 0 0 1-.24-1.018l.302-.909-5.676-5.677a1 1 0 0 0-.704-.291H3a1 1 0 0 1-.81-.417zm11.293 9.595a.497.497 0 1 0-.703.703l2.984 2.984a.497.497 0 0 0 .703-.703z" />
                    </svg>
                </div>
                <h1 class="titulo pt-4">
                    INICIO DE SESIÓN

                </h1>
                <h3 class="titulo1">
                    TÉCNICO
                </h3>

                <form action="" class="needs-validation" novalidate>
                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                        <input type="text" class="form-control" placeholder="usuario" aria-label="Username" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese un nombre de usuario.</div>
                    </div>

                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" placeholder="contraseña" aria-label="password" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese una contraseña.</div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-warning" type="submit" id="btnEnviar" name="btnEnviar">Ingresar</button>
                    </div>
                </form>


            </section>

        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>