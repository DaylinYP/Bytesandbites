$(document).ready(function() {
	$('#myTable').DataTable({
        language: {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        },
		responsive: "true",
		dom: 'Bfrtilp',
		buttons: [
			{
				extend: 'excelHtml5',
				titleAttr: 'Exportar a Excel',
				text: '<i class="fas fa-file-excel"></i>',
				className: 'btn btn-success'
			},
			{
				extend: 'pdfHtml5',
				titleAttr: 'Exportar a PDF',
				text:      '<i class="fas fa-file-pdf"></i> ',
				className: 'btn btn-danger'
			},
			{
				extend: 'print',
				titleAttr: 'Imprimir',
				text:      '<i class="fa fa-print"></i> ',
				className: 'btn btn-secondary'
			}
		],
		paging: true,
        searching: false, // Desactivar la barra de búsqueda
		pagingType: "full_numbers",
		"initComplete": function(settings, json) {
			// Mueve la paginación después de inicializar
			$('.dataTables_paginate').appendTo('#myTable_paginate');
		}
	});
});

$(document).ready(function() {
	$('#myyTable').DataTable({
        language: {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        },
		responsive: "true",
		dom: 'Bfrtilp',
		buttons: [
			{
				extend: 'excelHtml5',
				titleAttr: 'Exportar a Excel',
				text: '<i class="fas fa-file-excel"></i>',
				className: 'btn btn-success'
			},
			{
				extend: 'pdfHtml5',
				titleAttr: 'Exportar a PDF',
				text:      '<i class="fas fa-file-pdf"></i> ',
				className: 'btn btn-danger'
			},
			{
				extend: 'print',
				titleAttr: 'Imprimir',
				text:      '<i class="fa fa-print"></i> ',
				className: 'btn btn-secondary'
			}
		],
		paging: true,
        searching: true, // Desactivar la barra de búsqueda
		pagingType: "full_numbers",
		"initComplete": function(settings, json) {
			// Mueve la paginación después de inicializar
			$('.dataTables_paginate').appendTo('#myTable_paginate');
		}
	});
});