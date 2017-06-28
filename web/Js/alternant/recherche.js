/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    var entreprise = 0;
    var formation = 0;

    loadSelectEntreprise();
    loadSelectFormation();
    initDatatable();

    $('#form_search').submit(false);

    $('#rechercher').click(function(){
       search();
    });

    function search(){
        emptyTable();
        var input_nom = $('#input_nom').val();
        var input_prenom = $('#input_prenom').val();
        var input_mail = $('#input_mail').val();
        var select_entreprise = $("#select_entreprise option:selected" ).val();
        var select_formation = $("#select_formation option:selected" ).val();

        if(select_formation === undefined){
            select_formation = -1;
        }

        if(select_entreprise === undefined){
            select_entreprise = -1;
        }

        var recherche = {'nom' : input_nom, 'prenom' : input_prenom, 'mail' : input_mail, 'entreprise' : select_entreprise, 'formation' : select_formation};

        $.ajax({
            type: "POST",
            url: "/alternant/chargement",
            data : {
                recherche : recherche
            } ,
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    if(response.datas.length == 0){
                        toastr.warning('Utilisateur introuvable');
                    }else{
                        closeDatatable();
                        $.each(response.datas, function(index,value){
                            $('#liste_utilisateur_ligne').append('<tr>' +
                                '<td>'+value.nom+' '+value.prenom+'</td>' +
                                '<td>'+value.email+'</td>' +
                                '<td>'+value.raisonsociale+'('+value.ville+')</td>' +
                                '<td>'+value.libelle_formation+'('+value.code_formation+')'+'</td>' +
                                '<td><a href="/alternant/detail/'+value.codestagiaire+'">Detail</a></td></tr>');
                        });
                        initDatatable();
                    }

                }else{
                    toastr.error("Erreur lors de la recuperation2");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function emptyTable(){
        $("#liste_utilisateur_ligne").html("");
    }

    function loadSelectFormation(){
        $('#select_formation').append('<option value="-1">Selectionner une formation</option>');

        $.ajax({
            type: "POST",
            url: "/formation/liste",
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    var temp = response.formations;
                    $.each($.parseJSON(temp), function(index,value){
                        $('#select_formation').append('<option value="'+value.id+'">'+value.long+' ('+value.court+')</option>');
                    });

                    $('#select_formation').select2({
                        placeholder: "Selectionner une formation",
                        allowClear: true
                    });
                }else{
                    toastr.error("Erreur lors de la recuperation");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function loadSelectEntreprise(){

        $('#select_entreprise').append('<option value="-1">Selectionner une entreprise</option>');

        $.ajax({
            type: "POST",
            url: "/entreprise/liste",
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    var temp = response.entreprises;

                    $.each($.parseJSON(temp), function(index,value){
                      $('#select_entreprise').append('<option value="'+value.id+'">'+value.raison+' ('+value.ville+')</option>');
                    });

                    $('#select_entreprise').select2({
                        placeholder: "Selectionner une entreprise",
                        allowClear: true
                    });
                }else{
                    toastr.error("Erreur lors de la recuperation");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function initDatatable(){
        $('#liste_utilisateur').DataTable( {
            "paging":   true,
            "ordering": false,
            "info":     false
        } );
    }

    function closeDatatable() {
        $('#liste_utilisateur').dataTable().fnDestroy();
        emptyTable();
    }
});