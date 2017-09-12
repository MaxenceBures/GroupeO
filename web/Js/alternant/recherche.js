/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    var entreprise = 0;
    var formation = 0;
    //0 = pas de date
    //1 = date debut
    //2 = date fin
    //3 = date debut fin
    var date_status = -1;

    loadSelectEntreprise();
    loadSelectFormation();
    initDatatable();
    initDate();



    $('#form_search').submit(false);

    $('#rechercher').click(function(){
        var deb_val = $('#date_deb').val();
        var fin_val = $('#date_fin').val();

        var use_date = $('#use_date').is(':checked');

        if(use_date){
            if(deb_val != "" && fin_val ==""){
                date_status = 1;
            }
            if(deb_val == "" && fin_val !=""){
                date_status = 2;
            }
            if(deb_val != "" && fin_val !=""){
                if (new Date(deb_val) > new Date(fin_val)) {
                    toastr.error("Verifier les dates");
                }else{
                    date_status = 3;
                }
            }
            if(deb_val == "" && fin_val ==""){
                toastr.error("Verifier les dates");
            }
        }else{
            date_status = 0;
        }

        if(date_status != -1){
            search();
        }

    });

    function initDate(){
        $('#date_deb').datepicker({
            autoclose: true
        });

        $('#date_fin').datepicker({
            autoclose: true
        });

    }

    function search(){
        emptyTable();
        var input_nom = $('#input_nom').val();
        var input_prenom = $('#input_prenom').val();
        var input_mail = $('#input_mail').val();
        var select_entreprise = $("#select_entreprise option:selected" ).val();
        var select_formation = $("#select_formation option:selected" ).val();
        var deb_val = $('#date_deb').val();
        var fin_val = $('#date_fin').val();

        if(select_formation === undefined){
            select_formation = -1;
        }

        if(select_entreprise === undefined){
            select_entreprise = -1;
        }

        switch (date_status){
            case 0:
                deb_val = "";
                fin_val = "";
                break;
            case 1:
                fin_val = "";
                break;
            case 2:
                deb_val = "";
                break;
        }


        var recherche = {'nom' : input_nom, 'prenom' : input_prenom, 'mail' : input_mail, 'entreprise' : select_entreprise, 'formation' : select_formation, 'date_debut' : deb_val, 'date_fin' : fin_val, 'date_status' : date_status};

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
                            var html = '<tr>' +
                                '<td>'+value.nom+' '+value.prenom+'</td>' +
                                '<td>'+value.email+'</td>';

                            if(value.codeentreprise === 0){
                                html += '<td>'+value.raisonsociale+'</td>';
                            }else{
                                html += '<td>'+value.raisonsociale+'('+value.ville+')</td>';
                            }

                            if(value.code_formation === 0){
                                html += '<td>'+value.libelle_formation+'</td>';
                            }else{
                                html +=  '<td>'+value.libelle_formation+'('+value.code_formation+')'+'</td>';
                            }

                            html += '<td><a href="/alternant/detail/'+value.codestagiaire+'">Detail</a></td></tr>';

                            $('#liste_utilisateur_ligne').append(html);

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
        emptyTable();
    }
});