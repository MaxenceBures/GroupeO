/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    closeModal();

    $('#update_password').click(function() {
        openModal();
    });

    $('#modal_btn_save').click(function(){
        if ($('#input_password').val() !== ""){
            update_password();
        }
    });

    $('[id^="btn_close_"]').click(function() {
        closeModal();
    });

    function openModal(){
        $('#modal_password').show();
    }

    function closeModal(){
        $('#modal_password').hide()
    }

    function update_password(){

        var new_password = $("#input_password" ).val();

        var utilisateur = {'password' : new_password};

        $.ajax({
            type: "POST",
            url: "/password_update",
            data: {
                utilisateur: utilisateur
            },
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    toastr.success("Modification effectuée");
                }else{
                    toastr.error("Erreur lors de l'enregistrement");
                }
            },error: function(){
                toastr.error("Erreur lors de l'enregistrement");
            }
        });
    }
});