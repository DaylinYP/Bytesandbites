<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--letras-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('img/favicon.ico'); ?> ?v=1.0" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('admin/admin.css');  ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> <!--alerta estilo-->

</head>

<body>

    <!--Menu-->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Bytes & Bits</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?= base_url('Inicio'); ?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('quejas'); ?>" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Quejas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('empleados'); ?>" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Empleados</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-menu"></i>
                        <span>Ordenes</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                Listados Productos
                            </a>
                            <a href="<?= base_url('verClientes'); ?>" class="sidebar-link">
                                Listados Clientes
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a id="btn-salir" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>


        <!--Finaliza menu-->


        <?php echo $this->renderSection('contenido'); ?>


        <!---->
        <!--alerta-->
        <script>
            document.querySelectorAll('#btn-salir').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');

                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "Saldras de la Sesion",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, Salir',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "<?= base_url('/salir') ?>";
                        }
                    });
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!--alerta finaliza-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script>
            const hamBurger = document.querySelector(".toggle-btn");

            hamBurger.addEventListener("click", function() {
                document.querySelector("#sidebar").classList.toggle("expand");
            });
        </script>

</body>

</html>