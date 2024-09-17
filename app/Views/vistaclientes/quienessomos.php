<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<style>
    .section-Identidad {
        background-color: black;
        width: 100%;
        height: 500px;
        gap: 50px;
    }
    .divHistoria{
        width: 60%;
        margin: 30px;
    }
    @media screen and (max-width: 1250px) {

        .section-Identidad{
            display: grid;
            grid-template-columns: auto;
        }
    }
</style>


<section class="section-Identidad">
    <div class="div-Historia">
        <h1 style="text-align: center;"> NUESTRA HISTORIA</h1>
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
    <div>
        <img src="" alt="" width="300px" height="300px">
    </div>
</section>
<br>


<?php echo $this->endSection(); ?>