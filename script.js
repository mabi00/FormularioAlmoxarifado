$(document).ready(function () {
    $('#example').DataTable( {
        language: {
            url: 'traducao.json'},

    dom: 'Blfrtip',
    buttons: [
        {
            extend: 'copy',
            text: 'Copiar para CTRL+C',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ,7]
                }
        },
        {
            extend: 'print',
            text: 'Imprimir',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ,7]
                }
        },
        {
            extend: 'excel',
            text: 'Excel',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ,7]
                }
        },
        {
            extend: 'pdf',
            text: 'PDF',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ,7]
                }
        }
    ],
} );
    table.buttons().container()
    .appendTo( $('.col-md-6:eq(0)', table.table().container()) );
});

