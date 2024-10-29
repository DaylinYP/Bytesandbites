
        function toggleTextarea() {
            const select = document.getElementById('repuestoSelect');
            const textarea = document.getElementById('nuevoRepuesto');

            if (select.value) {
                textarea.disabled = true; // Deshabilitar textarea si se selecciona un repuesto
                textarea.value = ''; // Limpiar el textarea si se selecciona un repuesto
            } else {
                textarea.disabled = false; // Habilitar textarea si no hay selección
            }
        }

        function toggleSelect() {
            const select = document.getElementById('repuestoSelect');
            const textarea = document.getElementById('nuevoRepuesto');

            if (textarea.value.trim() !== '') {
                select.disabled = true; // Deshabilitar select si hay texto en el textarea
            } else {
                select.disabled = false; // Habilitar select si el textarea está vacío
            }
        }

        // Inicializa el estado del textarea y select al cargar la página
        document.addEventListener('DOMContentLoaded', () => {
            toggleTextarea();
            toggleSelect();
        });



    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('solicitudForm');

        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevenir el envío inmediato

            // Verificar si todos los campos están llenos
            const fields = form.querySelectorAll('input, select, textarea');
            let allFieldsFilled = true;
            let errorMessage = '';

            // Verificación de campos obligatorios
            const fecha = form.querySelector('input[name="txt_fecha_solicitud"]');
            const servicio = form.querySelector('select[name="txt_servicio"]');
            const orden = form.querySelector('select[name="txt_orden"]');
            const repuesto = form.querySelector('select[name="txt_repuesto"]');
            const nuevoRepuesto = form.querySelector('textarea[name="txt_nuevo_repuesto"]');

            // Verificar campo de fecha
            if (fecha.value.trim() === '') {
                allFieldsFilled = false;
                fecha.classList.add('is-invalid');
                errorMessage += 'La fecha es obligatoria.\n';
            } else {
                fecha.classList.remove('is-invalid');
            }

            // Verificar servicio
            if (servicio.value === '-------------------Seleccionar-------------------') {
                allFieldsFilled = false;
                servicio.classList.add('is-invalid');
                errorMessage += 'Por favor, seleccione un servicio.\n';
            } else {
                servicio.classList.remove('is-invalid');
            }

            // Verificar orden
            if (orden.value === '-------------------Seleccionar-------------------') {
                allFieldsFilled = false;
                orden.classList.add('is-invalid');
                errorMessage += 'Por favor, seleccione una orden de servicio.\n';
            } else {
                orden.classList.remove('is-invalid');
            }

            // Verificar nuevo repuesto y repuesto
            if (nuevoRepuesto.value.trim() === '' && repuesto.value === '') {
                allFieldsFilled = false;
                nuevoRepuesto.classList.add('is-invalid');
                errorMessage += 'Por favor, ingrese un nuevo repuesto o seleccione uno existente.\n';
            } else {
                // Si hay un nuevo repuesto, el campo de repuesto no se necesita verificar
                nuevoRepuesto.classList.remove('is-invalid');
            }

            // Mostrar error si falta algún campo obligatorio
            if (!allFieldsFilled) {
                Swal.fire({
                    title: 'Error',
                    text: errorMessage,
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
                return; // Detener el proceso de envío si hay errores
            }

            // Mostrar confirmación de envío
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Deseas agregar este repuesto?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, agregar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Enviar el formulario si se confirma
                } else {
                    // Cancelar la acción
                    Swal.fire({
                        title: 'Cancelado',
                        text: 'El repuesto no se ha agregado',
                        icon: 'info',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        });

        
    });


    function limpiarFormulario() {
    const form = document.getElementById('solicitudForm'); // Asegúrate de seleccionar el formulario
    form.reset(); // Reinicia el formulario
    const invalidFields = form.querySelectorAll('.is-invalid');
    
    // Elimina clase de error de los campos inválidos
    invalidFields.forEach(field => {
        field.classList.remove('is-invalid'); 
    });

    // Si utilizas select para repuestos y nuevo repuesto
    const repuestoSelect = document.getElementById('repuestoSelect');
    const nuevoRepuesto = document.getElementById('nuevoRepuesto');
    
    // Reinicia el estado del select y textarea
    repuestoSelect.value = ''; // Reinicia el select
    nuevoRepuesto.value = ''; // Reinicia el textarea
    toggleTextarea(); // Asegúrate de que el estado se actualice
    toggleSelect(); // Asegúrate de que el estado se actualice
}

