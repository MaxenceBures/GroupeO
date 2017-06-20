/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    /*$('#liste_utilisateur').DataTable( {
        "paging":   true,
        "ordering": false,
        "info":     false
    } );*/

    $('#save_datas').click(function() {
        var input_nom = $('#input_nom').val();
        var input_prenom = $('#input_prenom').val();
        var input_mail = $('#input_mail').val();
        var input_pass = $('#input_password').val();
        var input_role = $("#select_role option:selected" ).text();

        var nouveau_utilisateur = {nom:$('#input_nom').val(), prenom:$('#input_prenom').val(), mail:$('#input_mail').val(), motdepasse:$('#input_password').val(),role: $("#select_role option:selected" ).text()};


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
                    toastr.success("Enregistrement effectué");
                }else{
                    toastr.error("Erreur lors de l'enregistrement");
                }
            },error: function(){
                toastr.error("Erreur lors de l'enregistrement");
            }
        });
    });
});