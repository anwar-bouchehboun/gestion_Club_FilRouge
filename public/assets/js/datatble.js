$(document).ready(function() {
    $('#datatable').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json"
        },
        lengthChange: false,
         pageLength: 5 // Set the default number of items per page to 5
    });
});
