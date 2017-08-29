/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    var select_planning = 0;

    closeModal();

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