$(document).ready( function () {
    // $('#allArticles').DataTable({

    //     responsive: true,
    // });

    // $('#resultats-tables').DataTable({
    //     responsive:true,
    // });

    $('.ckeditor').ckeditor();

    CKEDITOR.replace('contenu', {
        hidden:false,
    });

        //  $('#example3').DataTable(
        //      {
        //         language: {
        //             url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"
        //         }
        //      }
        //  );



} );


