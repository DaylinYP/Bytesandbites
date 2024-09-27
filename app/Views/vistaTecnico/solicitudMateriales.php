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
    <link rel="icon" href="<?=base_url('img/favicon.ico') ?>" type="image/x-icon">
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
            <a href="<?php echo base_url('vistaclientes/index');?>">Bytes & Bits</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="<?php echo base_url('editarPerfil');?>" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Perfil del técnico</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href=" <?php echo base_url('ordenesDeServicio');?>" class="sidebar-link">
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

        <div class="main p-3 main">
            <main class="container">
                <form action="nombre">
                    <div class="row">
                        <div class="col-8 pt-4">
                            <h1 class="titulo pt-4">
                                SOLICITUD DE MATERIALES
                                </h1>
                                <p class="pt-4">Por favor complete los campos para solicitar los materiales necesarios para el servicio</p>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo" class="pt-4">
                    <div class="row pt-4">
                            <div class="col">
                                <label for="no_servicio_reparacion" class="pb-3" class="texto">ID de servicio</label>
                                <input type="text" name="no_servicio_reparacion" class="form-control" class="texto" placeholder="Ingrese su ID">
                            </div>
                            <div class="col">
                                <label for="txt_orden_de_servicio" class="pb-3" class="texto">Número de orden de servicio</label>
                                <input type="text" name="txt_orden_de_servicio" class="form-control" class="texto" value="" placeholder="Ingrese el número de orden de servicio">
                            </div>
                            <div class="col">
                                <label for="txt_no_repuesto" class="pb-3" class="texto">Número de repuesto</label>
                                <input type="text" name="txt_no_repuesto" class="form-control" class="texto" value="" placeholder="Ingrese el número de repuesto">
                            </div>
                            <div class="row-12 pt-4 text-center centro ">
                            <button type="submit" class="btn btn-warning boton" id="btnSolicitarMaterial" name="btnSolicitarMaterial"><i class="bi bi-check2"></i> Ordenar material </button>

                            </div>
                                </button>
                       
                       
                    </section>
                    
                        </div>
                        </div>
                            </form>

</main>         
                       
        </div>
        <hr>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!--
    <script src="<?=base_url('js/script.js')?>"></script>
    -->
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("expand");
        });

        document.getElementById('btnBuscar').addEventListener('click', function () {
            const idTecnico = document.getElementById('txt_id_tecnico').value;
            
            if (idTecnico) {
                fetch(`<?= base_url('buscarTecnico') ?>?id=${idTecnico}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data) {
                            document.getElementById('txt_nombre_tecnico').value = data.primer_nombre + ' ' + data.segundo_nombre;
                            document.getElementById('txt_apellido_tecnico').value = data.primer_apellido + ' ' + data.segundo_apellido;
                        } else {
                            alert('Técnico no encontrado');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error al buscar técnico');
                    });
            } else {
                alert('Por favor, ingrese un ID');
            }
        });
    </script>
</body>

</html> 

