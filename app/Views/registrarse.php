<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../Views/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>
    <style>
        h1 {
            text-shadow: 1px 2px 2px #000000;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
            color: white;
        }
        h2 {
        font-size: 2.8em;
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: black;
        text-shadow: 4px 2px rgba(201, 201, 201, 0.5);
    }

    </style>
    <div class="container">
        <br>
        <div>
            <h1>Clientes</h1>
            <a class="btn btn-outline-warning shadow-lg p-3 mb-5 bg-body rounded"
                href="<?php echo base_url('nuevo_cliente') ?>" role="button"><i class="bi bi-person-fill-add"> Agregar
                    Cliente</i></a>
        </div>
        <table class="table table-border table-striped table-hover table-dark shadow-lg p-3 mb-5 bg-body rounded">
            <thead>
                <tr class="bg-warning">
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>NIT</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $clientes) :
                ?>
                    <tr>
                        <td>
                            <?php echo $clientes['cliente_id']; ?>
                        </td>
                        <td>
                            <?php echo $clientes['nombre'] . " " . $clientes['apellido'] ?>
                        </td>
                        <td>
                            <?php echo $clientes['nit']; ?>
                        </td>
                        <td>
                            <?php echo $clientes['telefono']; ?>
                        </td>
                        <td>
                            <?php echo $clientes['correo_electronico']; ?>
                        </td>
                        <td>
                            <?php echo $clientes['direccion']; ?>
                        </td>
                        <td>
                            <?php echo $clientes['contrasenia']; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('actualizar_clientes/') . $clientes['cliente_id']; ?>"
                                class="btn btn-outline-info"><i class="bi bi-pencil-square"> Actualizar</i></a>
                            <a href="<?= base_url('eliminar_clientes/') . $clientes['cliente_id']; ?>"
                                class="btn btn-outline-danger"><i class="bi bi-trash-fill"> Eliminar</i></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous">
    </script>

</body>

</html>