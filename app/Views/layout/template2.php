<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : 'Login'; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css?v=1.0') ?>">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> 

</head>

<body>

    <!--Button Sticky-->
    <button class="button-sticky chat-button" type="button" onclick="window.location.href='<?= base_url('servicio_al_cliente_lg') ?>'">
        <i class="bi bi-emoji-smile-fill"></i>
    </button>

    <section
        style="background-color:rgb(255, 194, 10); height:40px; width:100%; display: flex; justify-content: center; align-items: center; gap: 15px;">
        <a href="https://www.instagram.com/" class="icon-img"><img src="<?= base_url('img/26.png') ?>"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href="https://www.gmail.com/mail/help/intl/es/about.html?iframe" class="icon-img"><img src="<?= base_url('img/27.png') ?>"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href="https://www.whatsapp.com/" class="icon-img"><img src="<?= base_url('img/28.png') ?>"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href="https://www.facebook.com/" class="icon-img"><img src="<?= base_url('img/29.png') ?>"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href="https://www.google.com/maps/@14.6232368,-90.5183232,15z?entry=ttu&g_ep=EgoyMDI0MDkyMy4wIKXMDSoASAFQAw%3D%3D" class="icon-img"><img src="<?= base_url('img/30.png') ?>"
                class="animate__animated animate__pulse animate__infinite	infinite" alt=""
                style="width: 28px; height: 28px;"></a>
    </section>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li>
                <header class="header">
                    <img src="<?= base_url('img/logotipoBb.png'); ?>" class="logotipo" width="280px" height="80px">
                </header>
            </li>
            <li class="active"><a href="<?= base_url('inicio_dos') ?>" class="links">Inicio</a></li>
            <li><a href="<?= base_url('quienes_somos2') ?>">Quienes Somos</a></li>
            <li><a href="<?= base_url('quienes_somos2') ?>">Marcas</a></li>

            <li>
                <form class="d-flex">
                    <input class="form-control form-control-sm me-2" type="search" placeholder=""
                        aria-label="Search" style="height: 35px; margin-top:15px;">
                    <button class="btn btn-warning btn-sm" type="submit" style="height: 30px; margin-top:15px">Buscar</button>
            <li class="nav-item ms-3 d-flex align-items-center">
                <button class="btn btn-outline-danger btn-sm chat-button2"
                    id="logout-button"
                    type="button"
                    style="height: 35px;">
                    <i class="bi bi-escape"></i> Salir
                </button>
            </li>
            </form>
            </li>
        </ul>
    </nav>

    <?php echo $this->renderSection("content") ?>

    <section class="contenedorRedes">
        <main class="contenedorRedesInterno">
            <div class="divRedesInterno1">
                <div>
                    <h5>¡CONTÁCTANOS!</h5>
                    <div class="icon-text">
                        <i class="bi bi-person-fill icono"></i>
                        <h6>Atención al Cliente</h6>
                    </div>
                    <p class="pRedes">Lunes a Viernes de 8 a 16hrs.<br>
                        (502) 2329-0000</p>
                </div>
                <div>
                    <div class="icon-text">
                        <i class="bi bi-whatsapp icono"></i>
                        <h6>Whatsapp</h6>
                    </div>
                    <p class="pRedes">Lunes a Viernes de 8 a 16hrs.<br>
                        (502) 5844-0000</p>
                </div>
            </div>
            <div class="divRedesInterno2">
                <div>
                    <h5>REDES SOCIALES</h5>
                    <i class="bi bi-instagram icono"></i>
                    <i class="bi bi-envelope-fill icono"></i>
                    <i class="bi bi-whatsapp icono"></i>
                    <i class="bi bi-facebook icono"></i>
                    <i class="bi bi-geo-alt icono"></i>
                </div>
                <div>
                    <p class="pRedes">
                        2326-0202 <br>
                        6 avenida 14-12 Zona 9, <br> Ciudad de Guatemala
                        <br> andbitsb@gmail.com
                    </p>
                </div>
            </div>
            <div class="divRedesInterno3">
                <h5 style="color: rgb(255, 194, 10);">Empleo</h5>
                <button type="button" class="btn btn-danger"><b>Aplica aquí!</b></button>
            </div>
        </main>
    </section>

    <footer>
        <h6>Creado por: GRUPO #1</h6>
    </footer>

    <!--ALERTAS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formQueja = document.querySelector('#form-queja');
        const formLogin = document.querySelector('#form-login');
        const logoutButton = document.querySelector('#logout-button');

        // Alerta al enviar formulario de queja
        if (formQueja) {
            formQueja.addEventListener('submit', function (event) {
                event.preventDefault();
                Swal.fire({
                    title: "Enviado",
                    text: "Tu reporte ha sido enviado con éxito",
                    icon: "success",
                    customClass: {
                        popup: 'custom-popup',
                        title: 'custom-title',
                        confirmButton: 'custom-btn',
                        cancelButton: 'custom-cancel'
                    }
                }).then(() => {
                    this.submit();
                }).catch(err => console.error("Error", err));
            });
        }

        // Alerta al iniciar sesión
        if (formLogin) {
            formLogin.addEventListener('submit', function (event) {
                event.preventDefault();
                Swal.fire({
                    title: "Bienvenido a Bytes&Bits!",
                    text: "Has iniciado sesión",
                    icon: "success",
                    customClass: {
                        popup: 'custom-popup',
                        title: 'custom-title',
                        confirmButton: 'custom-btn',
                        cancelButton: 'custom-cancel'
                    }
                }).then(() => {
                    this.submit();
                }).catch(err => console.error("Error", err));
            });
        }

        // Cerrar sesión con confirmación y redirección
        if (logoutButton) {
            logoutButton.addEventListener('click', function () {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¿Quieres cerrar sesión?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, cerrar sesión!',
                    cancelButtonText: 'Cancelar',
                    customClass: {
                        popup: 'custom-popup',
                        title: 'custom-title',
                        confirmButton: 'custom-btn',
                        cancelButton: 'custom-cancel'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '<?= base_url("/") ?>?logout=true';
                    }
                });
            });
        }

        // Mostrar alerta y redirigir si el usuario ha cerrado sesión
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('logout') === 'true') {
            Swal.fire({
                title: "Sesión Cerrada",
                text: "Has cerrado sesión correctamente.",
                icon: "success",
                customClass: {
                    popup: 'custom-popup',
                    title: 'custom-title',
                    confirmButton: 'custom-btn'
                }
            }).then(() => {
                window.location.href = '<?= base_url("/") ?>';
            });
        }
    });
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>