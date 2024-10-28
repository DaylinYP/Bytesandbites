<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->
<?= $this->section('styles'); ?>
    <link rel="stylesheet" href="<?= base_url('admin/admin.css'); ?>">
<?= $this->endSection(); ?>
<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main  p-3">
    <main class="container">
        <div class="col-xl-1 col-12">
                    <div class=" d-md-flex justify-content-md-end container py-3 animate__animated animate__slideInRight mx-4 my-4">
                        <a href="<?=base_url('menu_ordenes_servicio')?>" class="btn btn-outline-primary btn-lg position-absolute  translate-middle rounded-pill"><i class="bi bi-caret-left-square"></i></a>
                    </div>
                </div>
                <div class="col-xl-11 col-12">
                    
        </div >
        <div class="form-fondo">
            <div class="row">
                
                <div class="col-4">
                <h1>
                        Lista de Òrdenes
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>


            <section class="formulario">
                
            
                <div class="text-center d-flex justify-content-evenly pt-4">
                    <?php if (!empty($detalles_equipos)): ?>
                        <div style="overflow-x: auto; width: 100%; overflow-y: auto; max-height: 800px; width: 100%;">
                            <table class="table table-hover table-dark table-responsive">
                                <thead class="text-dark">
                                    <tr>
                                        <th>No. Orden</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Estado de la Orden</th>
                                        <th>Nombre del Cliente</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Agente de Servicio</th>
                                        <th>Tipo de Equipo</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Descripción del Cliente</th>
                                        <th>Evaluación del Agente</th>
                                        <th>Observaciones</th>
                                        <th>Especificaciones</th>
                                        <th>Ingreso a Servicio</th>
                                        <th>Técnico</th>
                                        <th>Servicio Realizado</th>
                                        <th>Descripción del Técnico</th>
                                        <th>Cantidad de Repuestos Utilizados</th>
                                        <th>Salida de Servicio</th>
                                        <th>Fecha de Entrega</th>
                                        <th>Precio Total</th>
                                        <th>Empresa</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($detalles_equipos as $de): ?>
                                    <?php
                                    // Verificar si 'no_orden' existe en $de
                                    if (isset($de['no_orden'])) {
                                        // Obtener la orden asociada al detalle de equipo
                                        $orden_filtrada = array_filter($ordenes, fn($o) => $o['no_orden'] == $de['no_orden']);
                                        $orden = reset($orden_filtrada);
                                    } else {
                                        // Si no existe 'no_orden', manejar el caso de error
                                        $orden = null;
                                    }

                                    // Verificar si la orden tiene cliente asociado
                                    if ($orden) {
                                        $cliente_filtrado = array_filter($clientes, fn($c) => $c['id_cliente'] == $orden['id_cliente']);
                                        $cliente = reset($cliente_filtrado);
                                    } else {
                                        $cliente = null;
                                    }

                                    // Verificar si el detalle de equipo tiene un servicio de reparación asociado
                                    if (isset($de['id_detalle_equipo'])) {
                                        $servicios_reparacion_filtrado = array_filter($servicios_reparacion, fn($sr) => $sr['id_detalle_equipo'] == $de['id_detalle_equipo']);
                                        $servicio_reparacion = reset($servicios_reparacion_filtrado);
                                    } else {
                                        $servicio_reparacion = null;
                                    }

                                    ?>
                                    <tr>
                                        <td><?= $de['no_orden'] ?? 'N/A' ?></td>
                                        <td><?= $orden['fecha_recepcion'] ?? 'N/A' ?></td>
                                        <td>
                                            <?php
                                            if ($orden) {
                                                $estado_filtrado = array_filter($estados_ordenes, fn($es) => $es['id_estado_orden'] == $orden['id_estado_orden']);
                                                $estado = reset($estado_filtrado); 
                                                echo $estado ? $estado['estado_orden'] : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $cliente ? "{$cliente['primer_nombre']} " . ($cliente['segundo_nombre'] ?? '') . " {$cliente['primer_apellido']} " . ($cliente['segundo_apellido'] ?? '') : 'Desconocido';
                                            ?>
                                        </td>
                                        <td><?= $cliente['telefono'] ?? 'N/A' ?></td>
                                        <td><?= $cliente['email'] ?? 'N/A' ?></td>
                                        <td>
                                            <?php 
                                            // Buscar el nombre del empleado correspondiente al id_agente
                                            $empleado = array_filter($empleados, fn($e) => $e['id_empleado'] == $de['id_agente']);
                                            $empleado = reset($empleado);
                                            echo $empleado ? "{$empleado['primer_nombre']} " . ($empleado['segundo_nombre'] ?? '') . " {$empleado['primer_apellido']} " . ($empleado['segundo_apellido'] ?? '') : 'Desconocido';
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            // Buscar el tipo de equipo correspondiente
                                            $tipo_equipo = array_filter($tipos_equipo, fn($tipo) => $tipo['id_tipo_equipo'] == $de['id_tipo_equipo']);
                                            $tipo_equipo = reset($tipo_equipo);
                                            echo $tipo_equipo ? $tipo_equipo['nombre_tipo'] : 'N/A';
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            // Buscar la marca correspondiente
                                            $marca = array_filter($marcas, fn($m) => $m['id_marca'] == $de['id_marca']);
                                            $marca = reset($marca);
                                            echo $marca ? $marca['nombre_marca'] : 'N/A';
                                            ?>
                                        </td>
                                        <td><?= $de['modelo'] ?? 'N/A' ?></td>
                                        <td><?= $de['descripcion_cliente'] ?? 'N/A' ?></td>
                                        <td><?= $de['evaluacion_agente'] ?? 'N/A' ?></td>
                                        <td><?= $de['observaciones'] ?? 'N/A' ?></td>
                                        <td><?= $de['especificaciones_equipo'] ?? 'N/A' ?></td>
                                        <td><?= $servicio_reparacion['fecha_ingreso'] ?? 'N/A' ?></td>
                                        <td>
                                            <?php
                                            // Verificar si hay un técnico asignado
                                            if (isset($servicio_reparacion['tecnico_id'])) {
                                                $tecnicos_filtrados = array_filter($empleados, fn($e) => $e['id_empleado'] == $servicio_reparacion['tecnico_id']);
                                                $tecnico = reset($tecnicos_filtrados);
                                                echo $tecnico ? "{$tecnico['primer_nombre']} " . ($tecnico['segundo_nombre'] ?? '') . " {$tecnico['primer_apellido']} " . ($tecnico['segundo_apellido'] ?? '') : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                // Verificar si hay un servicio asignado
                                                if (isset($servicio_reparacion['servicio_id'])) {
                                                    // Filtrar el servicio correspondiente
                                                    $servicios_filtrados = array_filter($servicios, fn($ser) => $ser['servicio_id'] == $servicio_reparacion['servicio_id']);
                                                    $servicio = reset($servicios_filtrados);
                                                    echo $servicio ? $servicio['nombre'] : 'N/A';
                                                } else {
                                                    echo 'N/A';
                                                }
                                            ?>
                                        </td>
                                        <td><?= $servicio_reparacion['descripcion'] ?? 'N/A' ?></td>
                                        <td>2</td>
                                        <td><?= $servicio_reparacion['fecha_finalizacion'] ?? 'N/A' ?></td>
                                        <td><?= $orden['fecha_entrega'] ?? 'N/A' ?></td>
                                        <td>3</td>
                                        <td>
                                            <?php
                                            $empresa_filtrada = array_filter($empresas, fn($em) => $em['id_empresa'] == ($cliente['id_empresa'] ?? null));
                                            $empresa = reset($empresa_filtrada);
                                            echo $empresa ? $empresa['nombre_empresa'] : 'Desconocido';
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <p>No se encontraron resultados.</p>
                    <?php endif; ?>
                </div>
            </section>




        </div>
        <hr>

</div>

</main>
</div>


<!---->
<?= $this->endSection(); ?>

