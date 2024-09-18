<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<section
    style="background-color:rgb(255, 194, 10); height:40px; width:100%; display: flex; justify-content: center; align-items: center; gap: 15px;">
    <a href="" class="icon-img"><img src="<?= base_url('img/26.png') ?>"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href=""><img src="<?= base_url('img/27.png') ?>" class="icon-img"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href=""><img src="<?= base_url('img/28.png') ?>" class="icon-img"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href=""><img src="<?= base_url('img/29.png') ?>" class="icon-img"
            class="animate__animated animate__pulse animate__infinite	infinite" alt=""
            style="width: 28px; height: 28px;"></a>
    <a href=""><img src="<?= base_url('img/30.png') ?>" class="icon-img"
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
            <li class="active"><a href="<?= base_url('index') ?>" class="links">Inicio</a></li>
            <li><a href="<?= base_url('quienes_somos') ?>">Quienes Somos</a></li>
            <li><a href="<?= base_url('registrarse') ?>">Registrarse</a></li>
            <li><a href="<?= base_url('login') ?>"><i class="bi bi-person-circle"></i> LOGIN</a></li>
            <li>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                    <button class="btn btn-warning" type="submit">Buscar</button>
                </form>
            </li>
        </ul>
    </nav>
<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 style="text-align: center;"> NUESTRA HISTORIA</h1>
                <p class="historaiQuienesSomos">
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
            <div class="col-sm-4"><img src="img/quienessomos.jpg" alt="" width="300px" height="300px" style="object-fit: cover;">
            </div>


        </div>
    </div>
<br>
    <?php echo $this->endSection(); ?>