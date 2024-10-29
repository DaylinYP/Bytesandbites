<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main p-3">
        <main class="container contenedor">
            <section class="form-fondo">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-screwdriver" viewBox="0 0 16 16">
                        <path d="M0 .995.995 0l3.064 2.19a1 1 0 0 1 .417.809v.07c0 .264.105.517.291.704l5.677 5.676.909-.303a1 1 0 0 1 1.018.24l3.338 3.339a.995.995 0 0 1 0 1.406L14.13 15.71a.995.995 0 0 1-1.406 0l-3.337-3.34a1 1 0 0 1-.24-1.018l.302-.909-5.676-5.677a1 1 0 0 0-.704-.291H3a1 1 0 0 1-.81-.417zm11.293 9.595a.497.497 0 1 0-.703.703l2.984 2.984a.497.497 0 0 0 .703-.703z" />
                    </svg>
                </div>
                <h1 class="titulo pt-4 text-center">
                    INICIO DE SESIÓN

                </h1>
                <h3 class="titulo1 text-center">
                    TÉCNICO
                </h3>

                <form action="" class="needs-validation sesion" novalidate>
                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                        <input type="text" class="form-control" placeholder="usuario" aria-label="Username" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese un nombre de usuario.</div>
                    </div>

                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" placeholder="contraseña" aria-label="password" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese una contraseña.</div>
                    </div>

                    <div class="col-12 pt-4">
                        <button class="btn btn-warning boton " type="submit" id="btnEnviar" name="btnEnviar">Ingresar</button>
                    </div>
                </form>


            </section>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
<?= $this->endSection(); ?> 

<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main p-3">
        <main class="container contenedor">
            <section class="form-fondo">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-screwdriver" viewBox="0 0 16 16">
                        <path d="M0 .995.995 0l3.064 2.19a1 1 0 0 1 .417.809v.07c0 .264.105.517.291.704l5.677 5.676.909-.303a1 1 0 0 1 1.018.24l3.338 3.339a.995.995 0 0 1 0 1.406L14.13 15.71a.995.995 0 0 1-1.406 0l-3.337-3.34a1 1 0 0 1-.24-1.018l.302-.909-5.676-5.677a1 1 0 0 0-.704-.291H3a1 1 0 0 1-.81-.417zm11.293 9.595a.497.497 0 1 0-.703.703l2.984 2.984a.497.497 0 0 0 .703-.703z" />
                    </svg>
                </div>
                <h1 class="titulo pt-4 text-center">
                    INICIO DE SESIÓN

                </h1>
                <h3 class="titulo1 text-center">
                    TÉCNICO
                </h3>

                <form action="" class="needs-validation sesion" novalidate>
                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                        <input type="text" class="form-control" placeholder="usuario" aria-label="Username" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese un nombre de usuario.</div>
                    </div>

                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" placeholder="contraseña" aria-label="password" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese una contraseña.</div>
                    </div>

                    <div class="col-12 pt-4">
                        <button class="btn btn-warning boton " type="submit" id="btnEnviar" name="btnEnviar">Ingresar</button>
                    </div>
                </form>


            </section>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
<?= $this->endSection(); ?> 

<?= $this->extend('admin/layout/menu_general'); ?>
<!--Finaliza menu-->

<!--main modificable-->
<?= $this->section('contenido'); ?>
    <div class="main p-3">
        <main class="container contenedor">
            <section class="form-fondo">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-screwdriver" viewBox="0 0 16 16">
                        <path d="M0 .995.995 0l3.064 2.19a1 1 0 0 1 .417.809v.07c0 .264.105.517.291.704l5.677 5.676.909-.303a1 1 0 0 1 1.018.24l3.338 3.339a.995.995 0 0 1 0 1.406L14.13 15.71a.995.995 0 0 1-1.406 0l-3.337-3.34a1 1 0 0 1-.24-1.018l.302-.909-5.676-5.677a1 1 0 0 0-.704-.291H3a1 1 0 0 1-.81-.417zm11.293 9.595a.497.497 0 1 0-.703.703l2.984 2.984a.497.497 0 0 0 .703-.703z" />
                    </svg>
                </div>
                <h1 class="titulo pt-4 text-center">
                    INICIO DE SESIÓN

                </h1>
                <h3 class="titulo1 text-center">
                    TÉCNICO
                </h3>

                <form action="" class="needs-validation sesion" novalidate>
                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                        <input type="text" class="form-control" placeholder="usuario" aria-label="Username" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese un nombre de usuario.</div>
                    </div>

                    <div class="input-group mb-3 pt-5">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" placeholder="contraseña" aria-label="password" aria-describedby="basic-addon1" required>
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Por favor, ingrese una contraseña.</div>
                    </div>

                    <div class="col-12 pt-4">
                        <button class="btn btn-warning boton " type="submit" id="btnEnviar" name="btnEnviar">Ingresar</button>
                    </div>
                </form>


            </section>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
<?= $this->endSection(); ?> 

