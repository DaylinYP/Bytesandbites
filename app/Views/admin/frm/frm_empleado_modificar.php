<?php echo $this->extend('admin/layout/menu'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?php echo $this->section('contenido'); ?>



<div class="main  p-3">
    <main class="container">
        <form action="<?= base_url('modificar_empleado'); ?>" method="post" class="formulario">
        <?php foreach($empleadosss as $empleadosss):?>
            <div class="row">
                <div class="col-4">
                    <h1>
                        Modificar Empleado: Datos del Empleado
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <p>

                <?php echo validation_list_errors(); ?>
            </p>

            <section class="form-fondo">    
                <div class="row pb-4">
                    <div class="col-lg-6 col-sm-12">
                        
                        <label for="txt_p_nombre" class="pb-3">Primer Nombre:</label>
                        
                            <input type="text" name="txt_pr_nombre" class="form-control" placeholder="Ingrese Primer nombre"
                                value="<?php echo set_value('txt_pr_nombre', $empleadosss['primer_nombre']); ?>">
                               
                            <label for="">
                            
                            <?php echo validation_show_error('txt_pr_nombre'); ?>
                            </label>

                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="txt_s_nombre" class="pb-3">Segundo Nombre:</label>
                        

                            <input type="text" name="txt_s_nombre" class="form-control" placeholder="Ingrese su Usuario"
                                value="<?php echo set_value('txt_s_nombre', $empleadosss['segundo_nombre']); ?>">
                            <label for="">
                                <?php echo validation_show_error('txt_s_nombre'); ?>
                            </label>

                        
                    </div>
                    
                        <div class="col-lg-6 col-sm-12">
                            <label for="txt_p_apellido" class="pb-3">Primer Apellido:</label>
                            <input type="text" name="txt_p_apellido" class="form-control" placeholder="Ingrese su Usuario"
                                value="<?php echo set_value('txt_p_apellido', $empleadosss['primer_apellido']) ?>">
                            <label for="txt_p_apellido">
                                <?php echo validation_show_error('txt_p_apellido'); ?>
                            </label>
                        </div>
                    
                        <div class="col-lg-6 col-sm-12">
                            <label for="txt_s_apellido" class="pb-3">Segundo Apellido:</label>
                            <input type="text" name="txt_s_apellido" class="form-control" placeholder="Ingrese su Usuario"
                                value="<?php echo set_value('txt_s_apellido', $empleadosss['segundo_apellido']) ?>">
                            <label for="">
                                <?php echo validation_show_error('txt_s_apellido'); ?>
                            </label>

                        
                        </div>

                            <div class="col-lg-6 col-sm-12">
                                <label for="txt_id" class="pb-3">id_empleado:</label>
                                <input type="text" name="txt_id" class="form-control" placeholder="Ingrese su Usuario"
                                    value="<?php echo set_value('txt_id', $empleadosss['id_empleado']) ?>">
                                <label for="">
                                    <?php echo validation_show_error('txt_id'); ?>
                                </label>
                            

                            </div>
                            
                                <div class="col-lg-6 col-sm-12 ">
                                    <label for="txt_dpi" class="pb-3">DPI:</label>
                                    <input type="number" name="txt_dpi" class="form-control" placeholder="Ingrese su Usuario"
                                        value="<?php echo set_value('txt_dpi', $empleadosss['dpi']) ?>">
                                    <label for="">
                                        <?php echo validation_show_error('txt_dpi'); ?>
                                    </label>

                                </div>

                            
                            <div class="col-lg-6 col-sm-12 ">

                                
                                    <label for="txt_nit" class="pb-3">nit:</label>
                                    <input type="number" name="txt_nit" class="form-control" placeholder="Ingrese su Usuario"
                                        value="<?php echo set_value('txt_nit', $empleadosss['nit']) ?>">
                                    <label for="">
                                        <?php echo validation_show_error('txt_nit'); ?>
                                    </label>
                                
                            </div>
                            <div class="col-lg-6 col-sm-12 ">
                                <label for="txt_email" class="pb-3">Email:</label>
                                

                                    <input type="email" name="txt_email_usuario" class="form-control" placeholder="Ingrese su Usuario"
                                        value="<?php echo set_value('txt_email_usuario', $empleadosss['email']) ?>">
                                    <label for="">
                                        <?php echo validation_show_error('txt_email_usuario'); ?>
                                    </label>
                                
                            </div>

                            <div class="col-lg-6">

                                
                                    <label for="txt_telefono" class="pb-3">Teléfono:</label>
                                    <input type="number" name="txt_telefono" class="form-control" placeholder="Ingrese su Usuario"
                                        value="<?php echo set_value('txt_telefono', $empleadosss['telefono']) ?>">
                                    <label for="">
                                        <?php echo validation_show_error('txt_telefono'); ?>
                                    </label>
                                
                            </div>
                            
                                <div class="col-lg-6 col-sm-10 ">
                                    <label for="txt_direccion" class="pb-3">Direccion:</label>
                                    <input type="text" name="txt_direccion" class="form-control" placeholder="Ingrese su Usuario"
                                        value="<?php echo set_value('txt_direccion', $empleadosss['direccion']) ?>">
                                    <label for="">
                                        <?php echo validation_show_error('txt_direccion'); ?>
                                    </label>
                                
                                </div>

                                <div class="col-lg-6 col-sm-12 ">
                                    
                                        <label for="txt_extension" class="pb-3">extension:</label>
                                        <input type="number" name="txt_extension" class="form-control" placeholder="Ingrese su Usuario"
                                            value="<?php echo set_value('txt_extension', $empleadosss['extension']); ?>">
                                        <label for="">
                                            <?php echo validation_show_error('txt_extension'); ?>
                                        </label>
                                    
                                </div>
                                <div class="col-lg-6 col-sm-12 ">
                                    <div class="row">
                                        
                                            <label for="txt_rol" class="pb-3">Rol/Puesto:</label>
                                            <select name="txt_rol" id="">
                                                <option value="">Seleccionar Rol/Puesto</option>
                                                <option value="1">Agente de Servicio</option>
                                                <option value="2">Técnico</option>
                                                <option value="3">Bodega</option>
                                                <option value="4">admin</option>
                                                <option value="<?php echo $empleadosss['id_rol'];?>" selected><?php echo set_value('txt_rol', $empleadosss['rol']);?></option>
                                            </select>
                                            <label for="">
                                                <?php echo validation_show_error('txt_rol'); ?>
                                            </label>
                                        
                                    </div>
                                </div>


                                <div class="col-lg-6 col-sm-12 ">
                                    <div class="row">
                                        
                                            <label for="txt_empresa" class="pb-3">Empresa:</label>
                                            <select name="txt_empresa" id="">
                                                <option value="">Seleccionar Sucursal</option>
                                                <option value="1">Sucursal zona 1</option>
                                                <option value="<?php echo $empleadosss['id_empresa'];?>" selected><?php echo set_value('txt_empresa', $empleadosss['sucursal']) ?></option>
                                            </select>
                                            <label for="">
                                                <?php echo validation_show_error('txt_empresa'); ?>
                                            </label>
                                        
                                    </div>
                                </div>

                </div>

                <!--Usuarios-->

                <div class="row">
                    <div class="col-4">
                        <h1>
                            Modificar Empleado: Usuario
                        </h1>
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <section class="form-fondo col-lg-6 col-sm-12 container text-center">
                    <div class="">
                        <div class="col-lg-6 offset-lg-3 col-sm-12">
                            
                                <label for="txt_email_usuario" class="pb-3">Nombre Usuario:</label>
                                <input type="text" name="txt_email_usuario" class="form-control" placeholder="Ingrese Primer nombre"
                                    value="<?php echo set_value('txt_email_usuario', $empleadosss['email']); ?>">
                                <label for="">
                                    <?php echo validation_show_error('txt_email_usuario'); ?>
                                </label>
                            
                        </div>

                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12">
                            
                                <label for="txt_s_nombre" class="pb-3">Contraseña:</label>
                                <input type="text" name="txt_contrasenia" class="form-control" placeholder="Ingrese la contraseña"
                                    value="<?php echo set_value('txt_contrasenia', $empleadosss['contrasenia']); ?>">
                                <label for="">
                                    <?php echo validation_show_error('txt_contrasenia'); ?>
                                </label>
                            
                        </div>

                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12">
                            
                                <label for="txt_p_apellido" class="pb-3">Fecha Creacion:</label>
                                <input type="date" name="txt_fecha_creacion" class="form-control" placeholder="Ingrese su Usuario"
                                    value="<?php echo set_value('txt_fecha_creacion', $empleadosss['fecha_creacion']); ?>" 
                                    readonly>
                                <label for="txt_p_apellido">
                                    <?php echo validation_show_error('txt_fecha_creacion'); ?>
                                </label>
                            
                        </div>
                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12">
                            
                                <label for="txt_p_apellido" class="pb-3">Fecha Ultima Modificación:</label>
                                <input type="date" name="txt_fecha_modificacion" class="form-control" placeholder="Ingrese su Usuario"
                                    value="<?php echo set_value('txt_fecha_modificacion', $empleadosss['fecha_modificacion']); ?>">
                                <label for="txt_p_apellido">
                                    <?php echo validation_show_error('txt_fecha_modificacion'); ?>
                                </label>
                            
                        </div>
                        <div class="col-lg-6 offset-lg-3 col-lg-6 col-sm-12 ">
                            <div class="row">
                                <label for="txt_estado" class="pb-3">Estado:</label>
                                <select name="txt_estado" id="">
                                    
                                    <option value="">Seleccionar Estado</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                    
                                    
                                        <option selected value="<?php echo $empleadosss['estado_id'];?>"><?php echo set_value('txt_estado', $empleadosss['estado']) ?></option>
                                        
                                     
                                    </select>
                                    <label for="">
                                        <?php echo validation_show_error('txt_estado'); ?>
                                    </label>
                            </div>
                        </div>




                        <div class="d-grid gap-2 d-md-flex p-3 justify-content-center">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                        </div>
                    </div>




                </section>

                <!---->




            </section>


            <!---->
            <?php endforeach; ?>
        </form>

</div>
<hr>

</section>



</main>
</div>

<?php echo $this->endSection(); ?>