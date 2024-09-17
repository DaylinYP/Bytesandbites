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
    <link rel="stylesheet" href="<?= base_url('css/css_form_material.css') ?>">

    <style>
        /* Your styles */
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <!-- Sidebar content -->
        </aside>
        <div class="main p-3">
            <main class="container">
                <form action="nombre">
                    <!-- Other form sections -->

                    <div class="row py-4">
                        <div class="col-4">
                            <h1 class="titulo">
                                Material a solicitar
                            </h1>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <section class="form-fondo">
                        <div class="row pt-4">
                            <div class="col">
                                <label for="txt_id_material" class="pb-3">Código del material</label>
                                <input type="text" name="txt_id_material" class="form-control" placeholder="Ingrese el código del material">
                            </div>
                            <div class="col">
                                <label for="txt_marca_material" class="pb-3">Marca:</label>
                                <input type="text" name="txt_marca_material" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col py-4">
                            <label for="txt_nombre_material" class="pb-3">Nombre:</label>
                            <input type="text" name="txt_nombre_material" class="form-control" readonly>
                        </div>

                        <div class="col pb-4">
                            <label for="txt_cantidad_material" class="pb-3">Cantidad:</label>
                            <input type="number" name="txt_cantidad_material" class="form-control" id="txt_cantidad_material" placeholder="Ingrese la cantidad de material que necesita en ENTEROS"></input>
                        </div>

                        <div class="col py-4">
                            <label for="txt_fecha_material" class="pb-3">Fecha de solicitud:</label>
                            <input type="date" name="txt_fecha_material" class="form-control" id="txt_fecha_material"></input>
                        </div>

                        <!-- Added Table -->
                        <div class="row pt-4">
                            <div class="col">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Código</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>Teclado</td>
                                            <td>Logitech</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Mouse</td>
                                            <td>HP</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Monitor</td>
                                            <td>Dell</td>
                                            <td>2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Continue with the form -->
                </form>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeo..." crossorigin="anonymous"></script>
</body>
</html>
