/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    var utilisateur_id = 0;
    var utilisateur_name = "";
    var utilisateur_mail = "";
    var utilisateur_role = "";


   initDatatable();



    $('#save_datas').click(function() {
        if(utilisateur_id == 0){
            saveDatas();
        }
        else{
            updateDatas();
        }
    });

    $('.supprimer').click(function () {
        removeDatas($(this).attr('value'));
    })

    $('.mail').click(function () {
        newPassword($(this).attr('value'));
    })

    $('.click').click(function(){
        utilisateur_id = $(this).attr('value');
        var i =0;
        $('#liste_utilisateur_ligne_'+utilisateur_id+' td').each(function() {
            switch(i) {
                case 0:
                    utilisateur_name = this.innerText;
                    break;
                case 1:
                    utilisateur_mail = this.innerText;
                    break;
                case 2:
                    utilisateur_role = this.innerText;
                    break;
                case 3:
                    break;
                default:
                    console.log('error');
            }
            i++;
        });

        loadDatas();
    })

    $('#clear_datas').click(function(){
        clearDatas();
    });

    function newPassword(id){
        var utilisateur = {id:id};

        $.ajax({
            type: "POST",
            url: "/utilisateur/envoi_mdp",
            data: {
                utilisateur: utilisateur
            },
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    toastr.success("Mot de passe envoyé par Mail");
                }else{
                    toastr.error("Erreur lors de l'enregistrement");
                }
            },error: function(){
                toastr.error("Erreur lors de l'enregistrement");
            }
        });
    }

    function removeDatas(id){
        var utilisateur = {id:id};

        $.ajax({
            type: "POST",
            url: "/utilisateur/supprimer",
            data: {
                utilisateur: utilisateur
            },
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    toastr.success("Suppression effectué");

                     closeDatatable();
                     $('#liste_utilisateur_ligne_'+id).remove();
                     initDatatable();
                }else{
                    toastr.error("Erreur lors de l'enregistrement");
                }
            },error: function(){
                toastr.error("Erreur lors de l'enregistrement");
            }
        });
    }

    function clearDatas(){
        utilisateur_id = 0;
        utilisateur_role = "";
        utilisateur_name = "";
        utilisateur_mail = "";

        $('#input_nom').val(utilisateur_name);
        $('#input_mail').val(utilisateur_mail);

        $("#input_password").prop('disabled', false);
    }

    function loadDatas(){
        $('#input_nom').val(utilisateur_name);
        $('#input_mail').val(utilisateur_mail);

        if(utilisateur_role == "ROLE_ADMIN"){
            $("#select_role option:first").attr('selected','selected');
        }else{
            $("#select_role option:last").attr('selected','selected');
        }

        $("#input_password").prop('disabled', true);


    }

    function initDatatable(){
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

        $('#liste_utilisateur').DataTable( {
            "paging":   true,
            "ordering": false,
            "info":     false,
            "language": fr
        } );
    }

    function closeDatatable() {
        $('#liste_utilisateur').dataTable().fnDestroy();
    }

    function updateDatas(){
        var input_nom = $('#input_nom').val();
        var input_mail = $('#input_mail').val();
        var input_role = $("#select_role option:selected").text();

        var utilisateur_existant = {id: utilisateur_id,nom:$('#input_nom').val(), mail:$('#input_mail').val(),role: $("#select_role option:selected" ).text()};


        $.ajax({
            type: "POST",
            url: "/utilisateur/modifier",
            data: {
                utilisateur: utilisateur_existant
            },
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    toastr.success("Modification effectuée");
                    closeDatatable();

                    var i =0;
                    $('#liste_utilisateur_ligne_'+utilisateur_id+' td').each(function() {
                        switch(i) {
                            case 0:
                                this.innerText = input_nom;
                                break;
                            case 1:
                                this.innerText = input_mail;
                                break;
                            case 2:
                                this.innerText = response.utilisateur_role;
                                break;
                            case 3:
                                break;
                            default:
                                console.log('error');
                        }
                        i++;
                    });
                    initDatatable();
                }else{
                    toastr.error("Erreur lors de l'enregistrement");
                }
            },error: function(){
                toastr.error("Erreur lors de l'enregistrement");
            }
        });
    }

    function saveDatas(){
        var input_nom = $('#input_nom').val();
        var input_mail = $('#input_mail').val();
        var input_pass = $('#input_password').val();
        var input_role = $("#select_role option:selected" ).text();

        var nouveau_utilisateur = {nom:$('#input_nom').val(), mail:$('#input_mail').val(), motdepasse:$('#input_password').val(),role: $("#select_role option:selected" ).text()};


        $.ajax({
            type: "POST",
            url: "/utilisateur/ajouter",
            data: {
                utilisateur: nouveau_utilisateur
            },
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    var utilisateur_id = response.utilisateur_id;
                    var utilisateur_role = response.utilisateur_role;

                    toastr.success("Enregistrement effectué");

                    closeDatatable();
                    $('#liste_utilisateur_ligne').append('<tr><td>'+input_nom+'</td><td>'+input_mail+'</td><td>'+utilisateur_role+'</td><td><a class="click" value="'+utilisateur_id+'">Edit</a> <a class="supprimer" value="'+utilisateur_id+'">Supprimer</a> <a class="mail" value="'+utilisateur_id+'">Mail</a></td></tr>');
                    initDatatable();
                }else{
                    toastr.error("Erreur lors de l'enregistrement");
                }
            },error: function(){
                toastr.error("Erreur lors de l'enregistrement");
            }
        });
    }
});