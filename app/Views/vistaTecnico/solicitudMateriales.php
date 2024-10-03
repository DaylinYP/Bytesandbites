<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Materiales</title>
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
                    <a href="<?php echo base_url('vistaclientes/index'); ?>">Bytes & Bits</a>
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
                <form action="nombre" id="solicitudForm" novalidate>
                    <div class="row">
                        <div class="col-8 pt-4">
                            <h1 class="titulo pt-4">SOLICITUD DE MATERIALES</h1>
                            <p class="pt-4">Por favor complete los campos para solicitar los materiales necesarios para el servicio</p>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo pt-4">
                        <div class="row">
                            <div class="col">
                                <label for="no_servicio_reparacion" class="pb-3">ID de servicio</label>
                                <input type="text" name="no_servicio_reparacion" id="no_servicio_reparacion" class="form-control" placeholder="Ingrese su ID" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese un ID de servicio.
                                </div>
                            </div>
                            <div class="col">
                                <label for="txt_orden_de_servicio" class="pb-3">Número de orden de servicio</label>
                                <input type="text" name="txt_orden_de_servicio" id="txt_orden_de_servicio" class="form-control" placeholder="Ingrese el número de orden de servicio" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese el número de orden de servicio.
                                </div>
                            </div>
                            <div class="col">
                                <label for="txt_no_repuesto" class="pb-3">Número de repuesto</label>
                                <input type="text" name="txt_no_repuesto" id="txt_no_repuesto" class="form-control" placeholder="Ingrese el número de repuesto" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese el número de repuesto.
                                </div>
                            </div>
                        </div>

                        <div class="row-12 pt-4 text-center">
                            <button type="submit" class="btn btn-warning boton" id="btnSolicitarMaterial">
                                <i class="bi bi-check2"></i> Ordenar material
                            </button>
                        </div>
                    </section>
                </form>
            </main>
        </div>
    </div>
    <hr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("expand");
        });

        // JavaScript de validación de Bootstrap
        (function() {
            'use strict';
            var forms = document.querySelectorAll('#solicitudForm');
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
        })();
    </script>
</body>

</html>
