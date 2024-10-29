<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main p-3">
    <main class="container">
        <div class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>Detalles de la Orden: <?= $orden['no_orden'] ?? 'N/A' ?></h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>

            <section class="formulario">
                <div class="text-center d-flex justify-content-evenly pt-4">
                    <?php if (!empty($detalles_equipos)): ?>
                        <form>
                            <?php foreach ($detalles_equipos as $de): ?>
                                <div class="border p-3 mb-3 rounded">
                                    <h5>No. Orden: <?= $de['no_orden'] ?? 'N/A' ?></h5>
                                    <div class="mb-3">
                                        <label>Fecha de Ingreso:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_recepcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado de la Orden:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if ($orden) {
                                                $estado_filtrado = array_filter($estados_ordenes, fn($es) => $es['id_estado_orden'] == $orden['id_estado_orden']);
                                                $estado = reset($estado_filtrado);
                                                echo $estado ? $estado['estado_orden'] : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombre del Cliente:</label>
                                        <input type="text" class="form-control" value="<?php
                                            echo $cliente ? "{$cliente['primer_nombre']} " . ($cliente['segundo_nombre'] ?? '') . " {$cliente['primer_apellido']} " . ($cliente['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Teléfono:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['telefono'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['email'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Agente de Servicio:</label>
                                        <input type="text" class="form-control" value="<?php 
                                            $empleado = array_filter($empleados, fn($e) => $e['id_empleado'] == $de['id_agente']);
                                            $empleado = reset($empleado);
                                            echo $empleado ? "{$empleado['primer_nombre']} " . ($empleado['segundo_nombre'] ?? '') . " {$empleado['primer_apellido']} " . ($empleado['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo de Equipo:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $tipo_equipo = array_filter($tipos_equipo, fn($tipo) => $tipo['id_tipo_equipo'] == $de['id_tipo_equipo']);
                                            $tipo_equipo = reset($tipo_equipo);
                                            echo $tipo_equipo ? $tipo_equipo['nombre_tipo'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Marca:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $marca = array_filter($marcas, fn($m) => $m['id_marca'] == $de['id_marca']);
                                            $marca = reset($marca);
                                            echo $marca ? $marca['nombre_marca'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Modelo:</label>
                                        <input type="text" class="form-control" value="<?= $de['modelo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Cliente:</label>
                                        <input type="text" class="form-control" value="<?= $de['descripcion_cliente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Evaluación del Agente:</label>
                                        <input type="text" class="form-control" value="<?= $de['evaluacion_agente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Observaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['observaciones'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Especificaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['especificaciones_equipo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ingreso a Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_ingreso'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Técnico:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['tecnico_id'])) {
                                                $tecnicos_filtrados = array_filter($empleados, fn($e) => $e['id_empleado'] == $servicio_reparacion['tecnico_id']);
                                                $tecnico = reset($tecnicos_filtrados);
                                                echo $tecnico ? "{$tecnico['primer_nombre']} " . ($tecnico['segundo_nombre'] ?? '') . " {$tecnico['primer_apellido']} " . ($tecnico['segundo_apellido'] ?? '') : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Servicio Realizado:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['servicio_id'])) {
                                                $servicios_filtrados = array_filter($servicios, fn($ser) => $ser['servicio_id'] == $servicio_reparacion['servicio_id']);
                                                $servicio = reset($servicios_filtrados);
                                                echo $servicio ? $servicio['nombre'] : 'N/A';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Técnico:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['descripcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cantidad de Repuestos Utilizados:</label>
                                        <input type="text" class="form-control" value="<?= count($repuestos) ?? '0' ?>" readonly> <!-- Suponiendo que tienes un array de repuestos -->
                                    </div>
                                    <div class="mb-3">
                                        <label>Salida de Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_finalizacion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Fecha de Entrega:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_entrega'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Precio Total:</label>
                                        <input type="text" class="form-control" value="<?= $orden['precio_total'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Empresa:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $empresa_filtrada = array_filter($empresas, fn($em) => $em['id_empresa'] == ($cliente['id_empresa'] ?? null));
                                            $empresa = reset($empresa_filtrada);
                                            echo $empresa ? $empresa['nombre_empresa'] : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    <?php else: ?>
                        <p>No se encontraron

                    <?php endif; ?>
                </div>
            </section>
        </div>
        <hr>
    </main>
</div>

<!----
<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main p-3">
    <main class="container">
        <div class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>Detalles de la Orden: <?= $orden['no_orden'] ?? 'N/A' ?></h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>

            <section class="formulario">
                <div class="text-center d-flex justify-content-evenly pt-4">
                    <?php if (!empty($detalles_equipos)): ?>
                        <form>
                            <?php foreach ($detalles_equipos as $de): ?>
                                <div class="border p-3 mb-3 rounded">
                                    <h5>No. Orden: <?= $de['no_orden'] ?? 'N/A' ?></h5>
                                    <div class="mb-3">
                                        <label>Fecha de Ingreso:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_recepcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado de la Orden:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if ($orden) {
                                                $estado_filtrado = array_filter($estados_ordenes, fn($es) => $es['id_estado_orden'] == $orden['id_estado_orden']);
                                                $estado = reset($estado_filtrado);
                                                echo $estado ? $estado['estado_orden'] : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombre del Cliente:</label>
                                        <input type="text" class="form-control" value="<?php
                                            echo $cliente ? "{$cliente['primer_nombre']} " . ($cliente['segundo_nombre'] ?? '') . " {$cliente['primer_apellido']} " . ($cliente['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Teléfono:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['telefono'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['email'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Agente de Servicio:</label>
                                        <input type="text" class="form-control" value="<?php 
                                            $empleado = array_filter($empleados, fn($e) => $e['id_empleado'] == $de['id_agente']);
                                            $empleado = reset($empleado);
                                            echo $empleado ? "{$empleado['primer_nombre']} " . ($empleado['segundo_nombre'] ?? '') . " {$empleado['primer_apellido']} " . ($empleado['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo de Equipo:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $tipo_equipo = array_filter($tipos_equipo, fn($tipo) => $tipo['id_tipo_equipo'] == $de['id_tipo_equipo']);
                                            $tipo_equipo = reset($tipo_equipo);
                                            echo $tipo_equipo ? $tipo_equipo['nombre_tipo'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Marca:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $marca = array_filter($marcas, fn($m) => $m['id_marca'] == $de['id_marca']);
                                            $marca = reset($marca);
                                            echo $marca ? $marca['nombre_marca'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Modelo:</label>
                                        <input type="text" class="form-control" value="<?= $de['modelo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Cliente:</label>
                                        <input type="text" class="form-control" value="<?= $de['descripcion_cliente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Evaluación del Agente:</label>
                                        <input type="text" class="form-control" value="<?= $de['evaluacion_agente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Observaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['observaciones'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Especificaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['especificaciones_equipo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ingreso a Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_ingreso'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Técnico:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['tecnico_id'])) {
                                                $tecnicos_filtrados = array_filter($empleados, fn($e) => $e['id_empleado'] == $servicio_reparacion['tecnico_id']);
                                                $tecnico = reset($tecnicos_filtrados);
                                                echo $tecnico ? "{$tecnico['primer_nombre']} " . ($tecnico['segundo_nombre'] ?? '') . " {$tecnico['primer_apellido']} " . ($tecnico['segundo_apellido'] ?? '') : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Servicio Realizado:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['servicio_id'])) {
                                                $servicios_filtrados = array_filter($servicios, fn($ser) => $ser['servicio_id'] == $servicio_reparacion['servicio_id']);
                                                $servicio = reset($servicios_filtrados);
                                                echo $servicio ? $servicio['nombre'] : 'N/A';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Técnico:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['descripcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cantidad de Repuestos Utilizados:</label>
                                        <input type="text" class="form-control" value="<?= count($repuestos) ?? '0' ?>" readonly> <!-- Suponiendo que tienes un array de repuestos -->
                                    </div>
                                    <div class="mb-3">
                                        <label>Salida de Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_finalizacion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Fecha de Entrega:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_entrega'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Precio Total:</label>
                                        <input type="text" class="form-control" value="<?= $orden['precio_total'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Empresa:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $empresa_filtrada = array_filter($empresas, fn($em) => $em['id_empresa'] == ($cliente['id_empresa'] ?? null));
                                            $empresa = reset($empresa_filtrada);
                                            echo $empresa ? $empresa['nombre_empresa'] : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    <?php else: ?>
                        <p>No se encontraron

                    <?php endif; ?>
                </div>
            </section>
        </div>
        <hr>
    </main>
</div>

<!----
<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main p-3">
    <main class="container">
        <div class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>Detalles de la Orden: <?= $orden['no_orden'] ?? 'N/A' ?></h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>

            <section class="formulario">
                <div class="text-center d-flex justify-content-evenly pt-4">
                    <?php if (!empty($detalles_equipos)): ?>
                        <form>
                            <?php foreach ($detalles_equipos as $de): ?>
                                <div class="border p-3 mb-3 rounded">
                                    <h5>No. Orden: <?= $de['no_orden'] ?? 'N/A' ?></h5>
                                    <div class="mb-3">
                                        <label>Fecha de Ingreso:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_recepcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado de la Orden:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if ($orden) {
                                                $estado_filtrado = array_filter($estados_ordenes, fn($es) => $es['id_estado_orden'] == $orden['id_estado_orden']);
                                                $estado = reset($estado_filtrado);
                                                echo $estado ? $estado['estado_orden'] : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombre del Cliente:</label>
                                        <input type="text" class="form-control" value="<?php
                                            echo $cliente ? "{$cliente['primer_nombre']} " . ($cliente['segundo_nombre'] ?? '') . " {$cliente['primer_apellido']} " . ($cliente['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Teléfono:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['telefono'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['email'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Agente de Servicio:</label>
                                        <input type="text" class="form-control" value="<?php 
                                            $empleado = array_filter($empleados, fn($e) => $e['id_empleado'] == $de['id_agente']);
                                            $empleado = reset($empleado);
                                            echo $empleado ? "{$empleado['primer_nombre']} " . ($empleado['segundo_nombre'] ?? '') . " {$empleado['primer_apellido']} " . ($empleado['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo de Equipo:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $tipo_equipo = array_filter($tipos_equipo, fn($tipo) => $tipo['id_tipo_equipo'] == $de['id_tipo_equipo']);
                                            $tipo_equipo = reset($tipo_equipo);
                                            echo $tipo_equipo ? $tipo_equipo['nombre_tipo'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Marca:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $marca = array_filter($marcas, fn($m) => $m['id_marca'] == $de['id_marca']);
                                            $marca = reset($marca);
                                            echo $marca ? $marca['nombre_marca'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Modelo:</label>
                                        <input type="text" class="form-control" value="<?= $de['modelo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Cliente:</label>
                                        <input type="text" class="form-control" value="<?= $de['descripcion_cliente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Evaluación del Agente:</label>
                                        <input type="text" class="form-control" value="<?= $de['evaluacion_agente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Observaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['observaciones'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Especificaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['especificaciones_equipo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ingreso a Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_ingreso'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Técnico:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['tecnico_id'])) {
                                                $tecnicos_filtrados = array_filter($empleados, fn($e) => $e['id_empleado'] == $servicio_reparacion['tecnico_id']);
                                                $tecnico = reset($tecnicos_filtrados);
                                                echo $tecnico ? "{$tecnico['primer_nombre']} " . ($tecnico['segundo_nombre'] ?? '') . " {$tecnico['primer_apellido']} " . ($tecnico['segundo_apellido'] ?? '') : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Servicio Realizado:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['servicio_id'])) {
                                                $servicios_filtrados = array_filter($servicios, fn($ser) => $ser['servicio_id'] == $servicio_reparacion['servicio_id']);
                                                $servicio = reset($servicios_filtrados);
                                                echo $servicio ? $servicio['nombre'] : 'N/A';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Técnico:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['descripcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cantidad de Repuestos Utilizados:</label>
                                        <input type="text" class="form-control" value="<?= count($repuestos) ?? '0' ?>" readonly> <!-- Suponiendo que tienes un array de repuestos -->
                                    </div>
                                    <div class="mb-3">
                                        <label>Salida de Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_finalizacion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Fecha de Entrega:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_entrega'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Precio Total:</label>
                                        <input type="text" class="form-control" value="<?= $orden['precio_total'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Empresa:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $empresa_filtrada = array_filter($empresas, fn($em) => $em['id_empresa'] == ($cliente['id_empresa'] ?? null));
                                            $empresa = reset($empresa_filtrada);
                                            echo $empresa ? $empresa['nombre_empresa'] : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    <?php else: ?>
                        <p>No se encontraron

                    <?php endif; ?>
                </div>
            </section>
        </div>
        <hr>
    </main>
</div>

<!----
<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>

<div class="main p-3">
    <main class="container">
        <div class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>Detalles de la Orden: <?= $orden['no_orden'] ?? 'N/A' ?></h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>

            <section class="formulario">
                <div class="text-center d-flex justify-content-evenly pt-4">
                    <?php if (!empty($detalles_equipos)): ?>
                        <form>
                            <?php foreach ($detalles_equipos as $de): ?>
                                <div class="border p-3 mb-3 rounded">
                                    <h5>No. Orden: <?= $de['no_orden'] ?? 'N/A' ?></h5>
                                    <div class="mb-3">
                                        <label>Fecha de Ingreso:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_recepcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado de la Orden:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if ($orden) {
                                                $estado_filtrado = array_filter($estados_ordenes, fn($es) => $es['id_estado_orden'] == $orden['id_estado_orden']);
                                                $estado = reset($estado_filtrado);
                                                echo $estado ? $estado['estado_orden'] : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombre del Cliente:</label>
                                        <input type="text" class="form-control" value="<?php
                                            echo $cliente ? "{$cliente['primer_nombre']} " . ($cliente['segundo_nombre'] ?? '') . " {$cliente['primer_apellido']} " . ($cliente['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Teléfono:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['telefono'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" value="<?= $cliente['email'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Agente de Servicio:</label>
                                        <input type="text" class="form-control" value="<?php 
                                            $empleado = array_filter($empleados, fn($e) => $e['id_empleado'] == $de['id_agente']);
                                            $empleado = reset($empleado);
                                            echo $empleado ? "{$empleado['primer_nombre']} " . ($empleado['segundo_nombre'] ?? '') . " {$empleado['primer_apellido']} " . ($empleado['segundo_apellido'] ?? '') : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo de Equipo:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $tipo_equipo = array_filter($tipos_equipo, fn($tipo) => $tipo['id_tipo_equipo'] == $de['id_tipo_equipo']);
                                            $tipo_equipo = reset($tipo_equipo);
                                            echo $tipo_equipo ? $tipo_equipo['nombre_tipo'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Marca:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $marca = array_filter($marcas, fn($m) => $m['id_marca'] == $de['id_marca']);
                                            $marca = reset($marca);
                                            echo $marca ? $marca['nombre_marca'] : 'N/A';
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Modelo:</label>
                                        <input type="text" class="form-control" value="<?= $de['modelo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Cliente:</label>
                                        <input type="text" class="form-control" value="<?= $de['descripcion_cliente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Evaluación del Agente:</label>
                                        <input type="text" class="form-control" value="<?= $de['evaluacion_agente'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Observaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['observaciones'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Especificaciones:</label>
                                        <input type="text" class="form-control" value="<?= $de['especificaciones_equipo'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ingreso a Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_ingreso'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Técnico:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['tecnico_id'])) {
                                                $tecnicos_filtrados = array_filter($empleados, fn($e) => $e['id_empleado'] == $servicio_reparacion['tecnico_id']);
                                                $tecnico = reset($tecnicos_filtrados);
                                                echo $tecnico ? "{$tecnico['primer_nombre']} " . ($tecnico['segundo_nombre'] ?? '') . " {$tecnico['primer_apellido']} " . ($tecnico['segundo_apellido'] ?? '') : 'Desconocido';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Servicio Realizado:</label>
                                        <input type="text" class="form-control" value="<?php
                                            if (isset($servicio_reparacion['servicio_id'])) {
                                                $servicios_filtrados = array_filter($servicios, fn($ser) => $ser['servicio_id'] == $servicio_reparacion['servicio_id']);
                                                $servicio = reset($servicios_filtrados);
                                                echo $servicio ? $servicio['nombre'] : 'N/A';
                                            } else {
                                                echo 'N/A';
                                            }
                                        ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripción del Técnico:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['descripcion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cantidad de Repuestos Utilizados:</label>
                                        <input type="text" class="form-control" value="<?= count($repuestos) ?? '0' ?>" readonly> <!-- Suponiendo que tienes un array de repuestos -->
                                    </div>
                                    <div class="mb-3">
                                        <label>Salida de Servicio:</label>
                                        <input type="text" class="form-control" value="<?= $servicio_reparacion['fecha_finalizacion'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Fecha de Entrega:</label>
                                        <input type="text" class="form-control" value="<?= $orden['fecha_entrega'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Precio Total:</label>
                                        <input type="text" class="form-control" value="<?= $orden['precio_total'] ?? 'N/A' ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Empresa:</label>
                                        <input type="text" class="form-control" value="<?php
                                            $empresa_filtrada = array_filter($empresas, fn($em) => $em['id_empresa'] == ($cliente['id_empresa'] ?? null));
                                            $empresa = reset($empresa_filtrada);
                                            echo $empresa ? $empresa['nombre_empresa'] : 'Desconocido';
                                        ?>" readonly>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    <?php else: ?>
                        <p>No se encontraron

                    <?php endif; ?>
                </div>
            </section>
        </div>
        <hr>
    </main>
</div>

<!----
