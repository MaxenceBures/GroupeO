/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    loadSelectEntreprise();
    loadSelectFormation();

    function loadSelectFormation(){
        $('#select_formation').select2({
            placeholder: "Selectionner une formation",
            allowClear: true
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