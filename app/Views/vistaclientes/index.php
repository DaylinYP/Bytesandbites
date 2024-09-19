<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<section
    style="background-color:rgb(255, 194, 10); height:40px; width:100%; display: flex; justify-content: center; align-items: center; gap: 15px;">
    <a href="" class="icon-img"><img src="<?= base_url('img/26.png') ?>"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href="" class="icon-img" ><img src="<?= base_url('img/27.png') ?>"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href="" class="icon-img" ><img src="<?= base_url('img/28.png') ?>"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href="" class="icon-img" ><img src="<?= base_url('img/29.png') ?>"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href="" class="icon-img" ><img src="<?= base_url('img/30.png') ?>"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
</section>
<div class="contenedor">
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li>
                <header class="header">
                    <img src="" class="logotipo" width="250px" height="100px">
                </header>
            </li>
            <li class="active"><a href="<?= base_url('regresar_Home')?>" class="links">Inicio</a></li>
            <li><a href="<?= base_url('quienes_somos')?>">Quienes Somos</a></li>
            <li><a href="<?= base_url('registrarse')?>">Registrarse</a></li>
            <li><a href="<?= base_url('login')?>"><i class="bi bi-person-circle"></i> LOGIN</a></li>
            <li>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                    <button class="btn btn-warning" type="submit">Buscar</button>
                </form>
            </li>
        </ul>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active c-item" style="height: 800px;">
                <img src="<?= base_url('img/promocion1.png') ?>" class="d-block w-100 c-img" alt="..."
                    style="height: 100%;object-fit: cover;">
            </div>
            <div class="carousel-item c-item" style="height: 800px;">
                <img src="<?= base_url('img/carrusel12.jpg') ?>" class="d-block w-100" alt="..."
                    style="height: 100%;object-fit: cover;">
            </div>
            <div class="carousel-item c-item" style="  height: 800px;">
                <img src="<?= base_url('img/promocion2.png') ?>" class="d-block w-100 c-img" alt="..."
                    style="height: 100%;object-fit: cover; margin-right:30px;">
            </div>
            <div class="carousel-item c-item" style="  height: 800px;">
                <img src="<?= base_url('img/carrusel22.jpg') ?>" class="d-block w-100 c-img" alt="..."
                    style="height: 100%;object-fit: cover; margin-right:30px;">
            </div>
            <div class="carousel-item c-item" style="  height: 800px;">
                <img src="<?= base_url('img/carrusel32.jpg') ?>" class="d-block w-100" alt="..."
                    style="height: 100%;object-fit: cover; margin-right:30px;">
            </div>
            <div class="carousel-item c-item" style="  height: 800px;">
                <img src="<?= base_url('img/promocion3.png') ?>" class="d-block w-100" alt="..."
                    style="height: 100%;object-fit: cover; margin-right:30px;">
            </div>
            <div class="carousel-item c-item" style="  height: 800px;">
                <img src="<?= base_url('img/carrusel42.jpg') ?>" class="d-block w-100" alt="..."
                    style="height: 100%;object-fit: cover; margin-right:30px;">
            </div>
        </div>
    </div>

    <div class="contenedorServicios" style="margin-top: 40px;"></div>
    <h2 class="titulosH2">NUESTROS SERVICIOS</h2>
    <section class="contenedorServicios">
        <div class="divServicios1">
            <img src="<?= base_url('img/reparacioncomputadoras.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
            <h4>Reparación de <br>Computadoras</h4>
        </div>
        <div class="divServicios2">
            <img src="<?= base_url('img/instalaciondesoftware.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
            <h4>Instalación de Software</h4>
        </div>
        <div class="divServicios3">
            <img src="<?= base_url('img/recuperaciondedatos.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
            <h4>Recuperación de Datos</h4>
        </div>
        <div class="divServicios4">
            <img src="<?= base_url('img/migraciondedatos.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
            <h4>Migración de Datos</h4>
        </div>
        <div class="divServicios5">
            <img src="<?= base_url('img/mantenimientopreventivo.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
            <h4>Mantenimiento Preventivo</h4>
        </div>
        <div class="divServicios6">
            <img src="<?= base_url('img/seguridadinformatica.jpg') ?>" alt="" style="width:100%;height:100%;object-fit: cover;border-radius: 20px;">
            <h4>Seguridad Informática</h4>
        </div>

    </section>

    <div class="divColaboradores">
        <h2 class="titulosH2">COLABORADORES</h2>
        <!--IMAGENES-->
        <div class="slider">
            <div class=" slide-track">
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores1.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores2.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores3.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores4.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores5.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores6.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores7.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores8.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores9.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores10.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores11.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores12.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores13.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores14.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores15.png') ?>" alt="" class="easeout">
                </div>


                <!--IMAGENES DUBLICADAS-->

                <div class="slide">
                    <img src="<?= base_url('img/colaboradores1.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores2.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores3.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores4.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores5.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores6.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores7.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores8.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores9.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores10.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores11.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores12.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores13.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores14.png') ?>" alt="" class="easeout">
                </div>
                <div class="slide">
                    <img src="<?= base_url('img/colaboradores15.png') ?>" alt="" class="easeout">
                </div>
            </div>
        </div>
    </div>


    <div class="divValores">
        <div class="container">
            <div class="row">
                <div class="col-6 datos divValores1">
                    <h3>MISIÓN</h3>
                    <p>
                        Proporcionar servicios técnicos confiables y eficientes en reparación, recuperación de datos
                        y
                        mantenimiento de sistemas, asegurando que nuestros clientes puedan operar con tranquilidad y
                        seguridad en un mundo digital.
                    </p>
                </div>
                <div class="col-6 datos divValores2">
                    <h3>VISIÓN</h3>
                    <p>
                        Ser el referente líder en servicios técnicos en la región, reconocidos por nuestra capacidad
                        para
                        resolver problemas complejos de manera rápida y efectiva, y por nuestra dedicación a
                        mantener la
                        satisfacción y confianza de nuestros clientes.
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="col-8 datos divHistoria">
                    <h3>HISTORIA</h3>
                    <p>
                        Bytes and Bites: Innovación y Confiabilidad desde Guatemala. Fundada en 2024 en Guatemala,
                        Bytes
                        and Bites nació de la visión compartida de un grupo de colaboradores apasionados por la
                        tecnología y la innovación. Desde el principio, su misión fue clara: ofrecer soluciones
                        técnicas
                        confiables y de alta calidad que facilitaran la vida digital de sus clientes.
                        <br><br>
                        Lo que comenzó como un pequeño taller se ha transformado en un referente en el campo de la
                        reparación y recuperación de datos. El equipo de Bytes and Bites está compuesto por expertos
                        en
                        diversas áreas tecnológicas, todos unidos por un compromiso con la excelencia y un profundo
                        respeto
                        por las necesidades de sus clientes.
                        <br><br>
                        Hoy, Bytes and Bites sigue creciendo, manteniendo siempre su compromiso con la innovación y
                        la
                        satisfacción del cliente, asegurándose de que la tecnología siga siendo una herramienta
                        poderosa y
                        accesible para todos.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<?php echo $this->endSection(); ?>




