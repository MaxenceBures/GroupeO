/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    loadSelectEntreprise();
    loadSelectFormation();

    $('#rechercher').click(function(){
       search();
    });

    function search(){
        var input_nom = $('#input_nom').val();
        var input_prenom = $('#input_prenom').val();
        var input_mail = $('#input_mail').val();
        var select_entreprise = $("#select_entreprise option:selected" ).val();
        var select_formation = $("#select_formation option:selected" ).val();

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

                }else{
                    toastr.error("Erreur lors de la recuperation");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function loadSelectFormation(){
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
});