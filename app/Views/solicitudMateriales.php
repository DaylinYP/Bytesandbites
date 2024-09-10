<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de materiales</title>
    <link rel="icon" href="<?= base_url('img/favicon.ico') ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/css_form_material.css') ?>">
    <style>
        h1 {
            font-family: 'Quantico', sans-serif;
        }

        p {
            font-family: 'Comfortaa', sans-serif;
            font-weight:bolder;
        }
        .texto_cuerpo {
            font-family: 'Comfortaa', sans-serif;
            font-weight:bolder;
        }

        #encabezado {
            padding-top: 5%;
            justify-content: space-around;
            text-align: left;
            padding-bottom: 5%;
        }
        .titulo{
            padding-left: 12%;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="bg bg-dark " id="encabezado">
        <h1 class="text-white titulo">SOLICITUD DE MATERIALES</h1>
        <br><br>
        <div class="container bg-light bg-gradient rounded">
            <form action="<?= base_url('solicitar_materiales') ?>" method="get">
                <br><br><br>
                <h3 class="text-center">Completa todos los campos</h3>
                <div>
                    <h3></h3>
                    <div class="container text-center texto_cuerpo">
                        <div class="row">
                            <div class="col">
                                Column
                            </div>
                            <div class="col">
                                Column
                            </div>
                            <div class="col">
                                Column
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>