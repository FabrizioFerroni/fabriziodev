/*==================== RECARGAR PAGINA ====================*/
if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}

$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 0, "desc" ]],
        "language": {
            search: "Buscar:",
        processing: "Procesando...",
        lengthMenu: "Mostrar _MENU_ registros por página",
        info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
        infoFiltered: "(filtrado de un total de _MAX_ registros)",
        infoPostFix: "",
        loadingRecords: "Cargando...",
        zeroRecords: "No se encontraron resultados",
        emptyTable: "Ningún dato disponible en esta tabla",
         paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Último"
        },
        aria: {
            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
            sortDescending: ": Activar para ordenar la columna de manera descendente"
        },
        buttons:{
            copy: "Copiar",
            colvis: "Visibilidad"
        }
        }
    } );
    // $('[data-toggle="tooltip"]').tooltip();
} );

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})