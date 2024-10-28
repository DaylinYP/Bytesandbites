<?= $this->extend('admin/layout/menu_general'); ?>
<?= $this->section('contenido'); ?>

<main class="container pb-5">
    <div class="row pt-5">
        <div class="col-12 col-md-4">
            <img src="https://i.pinimg.com/736x/85/b5/e1/85b5e10ab56e79fefcd7b8e074e7b73b.jpg" alt="" style="width:95%;" class="rounded">
        </div>
        <div class="col-12 py-4 col-md-8">
            <h1 class="titulo">
                <?php if ($ordenes['id_estado_orden'] == 3): ?>
                    FACTURA
                <?php else: ?>
                    ÓRDEN DE SERVICIO
                <?php endif; ?>
            </h1>
        </div>
    </div>
    <div class="texto">
        <section class="row pt-5">
            <div class="col-12 pb-3 col-lg-6">
                <h4>No. Orden: <?= $ordenes['no_orden']; ?></h4>
            </div>
            <div class="col-12 col-lg-6">
                <h4>Fecha de Recepción: <?= $ordenes['fecha_recepcion']; ?></h4>
            </div>
        </section>

        <section>
            <div class="bg-dark">
                <br>
                <h4 class="text-warning text-center">DATOS DEL CLIENTE</h4>
                <br>
            </div>
            <div class="row py-3">
                <div>
                    <strong>Nombre Completo: </strong><?=$clientes['primer_nombre'] . ' ' . $clientes['segundo_nombre'] . ' ' . $clientes['primer_apellido'] . ' ' . $clientes['segundo_apellido']; ?></div>
                <div class="row">
                    <div class="col-12 col-md-6 py-3"><strong>Correo Electrónico:  </strong><?= $clientes['email']; ?></div>
                    <div class="col-12 col-md-6 py-3"><strong>Teléfono: </strong><?= $clientes['telefono']; ?></div>
                </div>
        </section>

        <?php if ($ordenes['id_estado_orden'] != 3): ?>
            <section>
                <div class="bg-dark">
                    <br>
                    <h4 class="text-warning text-center">INFORME DEL EQUIPO</h4>
                    <br>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 py-3"><strong>Tipo de Equipo: </strong><?= $tiposEquipo['nombre_tipo']; ?></div>
                    <div class="col-12 col-lg-4 py-3"><strong>Marca: </strong><?= $marcas['nombre_marca']; ?></div>
                    <div class="col-12 col-lg-4 py-3"><strong>Modelo: </strong><?= $detalleEquipos['modelo']; ?></div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-7 py-3"><strong>Agente de Servicio: </strong><?= $empleado['primer_nombre'] . ' ' . $empleado['segundo_nombre'] . ' ' . $empleado['primer_apellido'] . ' ' . $empleado['segundo_apellido']; ?></div>
                    <div class="col-12 col-lg-5 py-3"><strong>Fecha Estimada de Entrega: </strong><?= $ordenes['fecha_entrega_estimada']; ?></div>
                </div>
                
                <div class="col-12 py-3"><strong>Descripcion del Cliente: </strong><?= $detalleEquipos['descripcion_cliente']; ?><br></div>
                <div class="col-12 py-3"><strong>Evaluación del Agente: </strong><?= $detalleEquipos['evaluacion_agente']; ?><br></div>
                <div class="col-12 py-3"><strong>Especificaciones: </strong><?= $detalleEquipos['especificaciones_equipo']; ?><br></div>
                <div class="col-12 py-3"><strong>Observaciones: </strong><?= $detalleEquipos['observaciones']; ?><br></div>
            </section>
        <?php endif; ?>
            
        <?php if ($ordenes['id_estado_orden'] == 3): ?>
            <section>
                <div class="bg-dark">
                    <br>
                    <h4 class="text-warning text-center">INFORME DEL EQUIPO</h4>
                    <br>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 py-3"><strong>Tipo de Equipo: </strong><?= $tiposEquipo['nombre_tipo']; ?></div>
                    <div class="col-12 col-lg-4 py-3"><strong>Marca: </strong><?= $marcas['nombre_marca']; ?></div>
                    <div class="col-12 col-lg-4 py-3"><strong>Modelo: </strong><?= $detalleEquipos['modelo']; ?></div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-7 py-3"><strong>Agente de Servicio: </strong><?= $empleado['primer_nombre'] . ' ' . $empleado['segundo_nombre'] . ' ' . $empleado['primer_apellido'] . ' ' . $empleado['segundo_apellido']; ?></div>
                    <div class="col-12 col-lg-5 py-3"><strong>Fecha Entrega: </strong><?= $ordenes['fecha_entrega']; ?></div>
                </div>
                <div class="col-12 py-3"><strong>Especificaciones: </strong><?= $detalleEquipos['especificaciones_equipo']; ?><br></div>
                <div class="col-12 py-3"><strong>Observaciones: </strong><?= $detalleEquipos['observaciones']; ?><br></div>
            </section>
            <section>
                <div class="bg-dark">
                    <br>
                    <h4 class="text-warning text-center">INFORME DEL SERVICIO REALIZADO</h4>
                    <br>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 py-3">
                        <strong>Técnico: </strong>
                        <?= $empleado2['primer_nombre'] . ' ' . $empleado2['segundo_nombre'] . ' ' . $empleado2['primer_apellido'] . ' ' . $empleado2['segundo_apellido']; ?>
                    </div>                
                    <div class="col-12 col-lg-6 py-3"><strong>Servicio: </strong><?= $servicio['servicio_id']; ?></div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5 py-3"><strong>Fecha de Ingreso a Servicio: </strong><?= $servicioRep['fecha_ingreso']; ?></div>
                    <div class="col-12 col-lg-5 py-3"><strong>Fecha de Salida a Servicio: </strong><?= $servicioRep['fecha_finalizacion']; ?></div>
                </div>
                
                <div class="col-12 py-3"><strong>Descripción del Técnico: </strong><?= $servicioRep['descripcion']; ?><br></div>
    
            </section>
            <section>
            <div class="bg-dark">
                    <br>
                    <h4 class="text-warning text-center">PAGOS A REALIZAR</h4>
                    <br>
                </div>
                <div class="col-12 py-3"><strong>Precio del Servicio: </strong><?= $servicioRep['precio_reparacion']; ?><br></div>
                <div class="col-12 py-3">
                    <strong>Precio del repuesto utilizado: </strong><?= isset($detalleRep['precio_detalle_reparacion']) ? $detalleRep['precio_detalle_reparacion'] : 'N/A'; ?><br>
                </div>
                <div class="col-12 py-3">
                    <strong>Precio a Pagar: </strong>
                    <?php 
                    // Sumar precios si ambos existen y son numéricos
                    $precioServicio = isset($servicioRep['precio_reparacion']) ? $servicioRep['precio_reparacion'] : 0;
                    $precioRepuesto = isset($detalleRep['precio_detalle_reparacion']) ? $detalleRep['precio_detalle_reparacion'] : 0;
                    $precioTotal = $precioServicio + $precioRepuesto;
                    echo $precioTotal;
                    ?><br>
                </div>
    
            </section>
        <?php endif; ?>
        <hr>
        <!-- Botón para Imprimir -->
    <div class="text-end py-3">
        <button id="btnImprimir" class="btn btn-warning form-control">Imprimir Orden</button>
    </div>
        <hr>
        <footer style="background-color: rgb(89, 70, 121)" class="p-5 text-white rounded-bottom">
            <div class="row">
                <div class="col-12 col-lg-8 py-3">
                    <h5 class="pt-5">
                        <strong>Empresa: </strong><?= $empresa['nombre_empresa'];?>
                    </h5>
                </div>
                <div class="col-12 col-lg-4 py-3">
                    <h6 class="col-12 py-3"><strong>Direccin: </strong><?= $empresa['direccion']; ?></h6>
                    <h6 class="col-12  py-3"><strong>Teléfono: </strong><?= $empresa['telefono']; ?></h6>

                </div>
            </div>

            
        </footer>
    </div>
</main>
<script>
    document.getElementById('btnImprimir').addEventListener('click', function() {
        window.print();
    });
</script>
<style>
    @media print {
        /* Ocultar el botón de imprimir en la impresión */
        #btnImprimir {
            display: none;
        }
        
        #sidebar {
            display: none;
        }
        
        /* Asegúrate de que los colores y estilos se mantengan */
        body {
            -webkit-print-color-adjust: exact; /* Chrome, Safari */
            print-color-adjust: exact; /* Firefox */
        }
    }
</style>

<?= $this->endSection(); ?>
