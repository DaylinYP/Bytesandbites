<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Servicio</title>
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
    <link rel="stylesheet" href="<?= base_url('css/tecnico.css') ?>">

</head>

<body>
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
                    <a href="<?php echo base_url('editarPerfil'); ?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Perfil del técnico</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('ordenesDeServicio'); ?>" class="sidebar-link">
                        <i class="lni lni-list"></i>
                        <span>Órdenes de servicio</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('solicitarMateriales'); ?>" class="sidebar-link">
                        <i class="lni lni-package"></i>
                        <span>Solicitud de Materiales</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-menu"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Configuración</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <main class="container">


                <div class="row py-4">
                    <div class="col-4">
                        <h1 class="titulo">
                            ÓRDENES DE SERVICIO

                        </h1>
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <section class="form-fondo">

                    <div class="row pt-4">
                        <div class="col">
                            <table class="table table-border table-striped table-light">
                                <thead>
                                    <tr>
                                        <th>No de Orden</th>
                                        <th>ID Cliente</th>
                                        <th>Fecha Recepción</th>
                                        <th>Fecha Entrega Estimada</th>
                                        <th>Fecha Entrega</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datos as $orden): ?>
                                        <tr>
                                            <td><?= $orden['no_orden']; ?></td>
                                            <td><?= $orden['id_cliente']; ?></td>
                                            <td><?= $orden['fecha_recepcion']; ?></td>
                                            <td><?= $orden['fecha_entrega_estimada']; ?></td>
                                            <td><?= $orden['fecha_entrega']; ?></td>
                                            <td>
                                                <a href="<?= base_url('buscar_orden/') . $orden['no_orden'] ?>" class="btn btn-success">
                                                    <i class="bi bi-pencil-square">Actualizar</i>
                                                </a>
                                                <a href="<?= base_url('eliminar_orden/') . $orden['no_orden'] ?>" class="btn btn-danger">
                                                    <i class="bi bi-trash">Eliminar</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="<?= base_url('js/script.js') ?>"></script>

    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("expand");
        });
    </script>
</body>

</html>