<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/stylesregistro.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php echo $this->renderSection("content")?>



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
                <button type="button" class="btn btn-danger"><b>Aplica aquí!</b></button>
            </div>
        </main>
    </section>

    <footer>
        <h6>Creado por: GRUPO #1</h6>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
