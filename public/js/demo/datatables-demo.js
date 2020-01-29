// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable( {
    "language": {
        "lengthMenu": "A apresentar _MENU_ registos por página",
        "zeroRecords": "Não encontramos nada - Desculpe",
        "info": "A apresentar página _PAGE_ de _PAGES_",
        "infoEmpty": "Não existem registos disponíveis",
        "infoFiltered": "(filtered from _MAX_ total records)"
    }
    });
});
