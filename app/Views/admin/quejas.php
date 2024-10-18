<?= $this->extend('admin/layout/menu'); ?>
<!--Finaliza menu-->
<?= $this->section('contenido'); ?>
<!--main modificable-->

<div class="main  p-3">
    <main class="container">
        <form action="#" class="form-fondo">
            <div class="row">
                <div class="col-4">
                    <h1>
                        Quejas
                    </h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>


            <section class="formulario">
                <section class="">
                    <div class="row text-center d-flex justify-content-between align-items-center ">
                        <?php foreach($datos as $quejas):?>
                        <div class="card m-4" style="width: 18rem;">
                            <div class="card-body">
                                <a href="" class=""></a>
                                <h1 class="card-img-top">No_orden</h1>
                                <h5 class="card-title"><?php echo $quejas['no_orden'];?></h5>
                                <p class="card-text"><?php echo $quejas['descripcion_quejas'];?></p>
                            </div>
                            <a href="<?= base_url('eliminar_quejas/') . $quejas['no_orden'];?>" class="btn btn-danger m-2 bi-trash" id="eliminar-queja" data-id="<?= $quejas['no_orden']; ?>"></a>
                        </div>          
                        <?php endforeach;?>
                    </div>
                </section>
            </section>

            <!---->


</div>
<hr>

</form>

</main>
</div>
<!---->
<script>
    document.querySelectorAll('#eliminar-queja').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevenir el comportamiento por defecto del enlace
            const id = this.getAttribute('data-id');

            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esta acción.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirigir a la URL de eliminación
                    window.location.href = "<?= base_url('eliminar_quejas/') ?>" + id;
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?= $this->endSection();?>