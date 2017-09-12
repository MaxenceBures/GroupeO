/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    var select_planning = 0;

    closeModal();
    initDatatable();

    $('[id^="planning_modifier_"]').click(function() {
        openModal();
        select_planning = $(this).attr('id').replace('planning_modifier_','');
    });

    $('#btn_save').click(function(){
        if (select_planning !== 0){
            update_planning_status();
        }
    });

    $('[id^="btn_close_"]').click(function() {
        closeModal();
        select_planning = 0;
    });

    function initDatatable(){
        //$('#liste_planning').dataTable();

        var fr = {
            "sProcessing":     "Traitement en cours...",
            "sSearch":         "Rechercher&nbsp;:",
            "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
            "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
            "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            "sInfoPostFix":    "",
            "sLoadingRecords": "Chargement en cours...",
            "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
            "oPaginate": {
                "sFirst":      "Premier",
                "sPrevious":   "Pr&eacute;c&eacute;dent",
                "sNext":       "Suivant",
                "sLast":       "Dernier"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
            }
        };
        $('#liste_planning').DataTable( {
            "paging":   true,
            "ordering": false,
            "info":     true,
            "bFilter":  false,
            "bLengthChange": false,
            "language": fr
        } );
    }

    function openModal(){
        $('#modal_status').show();
    }

    function closeModal(){
        $('#modal_status').hide()
    }

    function update_planning_status(){
        var select_status = $("#select_status option:selected" ).val();

        var recherche = {'planning' : select_planning, 'status' : select_status};

        $.ajax({
            type: "POST",
            url: "/planning/status_update",
            data : {
                recherche : recherche
            } ,
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){

                    var result = "";

                    switch(select_status) {
                        case "1":
                            result = "Validée";
                            break;
                        case "2":
                            result = "Refusée";
                            break;
                        case "3":
                            result = "En cours de validation";
                            break;
                        case "4":
                            result = "Terminée";
                            break;
                        case "5":
                            result = "En cours de formation";
                            break;
                    }

                    $('#td_etat_'+select_planning).html(result);
                }else{
                    toastr.error("Erreur lors de la modification");
                }
            },error: function(){
                toastr.error("Erreur lors de la modification");
            }
        });
    }
});