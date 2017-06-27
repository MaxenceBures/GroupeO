
function getFramePlanning(id = null) {
    $.ajax({
        type: "POST",
        url: "planning/frame",
        data: {id_utilisateur: id},
        dataType: "html",
        success: function (response) {
            $("body").append(response);

            $("#modal_planning_generation").modal({
                keyboard: false,
                backdrop: 'static'
            }).on("hide.bs.modal", function () {
                $(this).remove();
            });

            $("#modal_planning_generation .select2").each(function () {
                $(this).select2({
                    placeholder: $(this).attr('placeholder'),
                    language: "fr"
                });
            });
            $("#modal_planning_generation table").dataTable({
                dom: '<"clear">',
                filtering: false,
                ordering: false,
                scrollY: "100px",
                scrollCollapse: true
            });

            $("#modal_planning_generation .datemask").inputmask('dd/mm/yyyy', {'placeholder': 'jj/mm/aaaa'})();

        }
    });
}

function checkExclusion() {
    var date_debut = $("#date_debut_exclusion").val();
    var date_fin = $("#date_fin_exclusion").val();

    if (date_debut != "" && date_fin != "") {
        if (new Date(date_debut) > new Date(date_fin)) {
            alert("La date de début doit être plus petite que la date de fin");
        } else {
            $("#bt_exclusion").prop('disabled', false);
        }
    } else {
        $("#bt_exclusion").prop('disabled', true);
    }

}

function btExclusionClick() {
    var date_debut = $("#date_debut_exclusion").val();
    var date_fin = $("#date_fin_exclusion").val();
    var table = $("#table_exclusion");
    if (table.find('td').hasClass("dataTables_empty")) {
        table.find('tbody').html("<tr class='ajout' ><td>" + date_debut + "</td><td>" + date_fin + "</td><td><button class='btn btn-danger' onclick='removeExclusion(this)'><i class='fa fa-remove'></i></button></td></tr>");
    } else {
        table.find('tbody').append("<tr class='ajout'><td>" + date_debut + "</td><td>" + date_fin + "</td><td><button class='btn btn-danger' onclick='removeExclusion(this)'><i class='fa fa-remove'></i></button></td></tr>");
    }

}

function removeExclusion(bt) {
    $(bt).parents("tr").remove();
}

function btRechercherClick() {
    var input_nom = $('#name').val();
    var input_prenom = $('#surname').val();
    var input_mail = $('#email').val();

    var recherche = {'nom': input_nom, 'prenom': input_prenom, 'mail': input_mail, 'entreprise': -1, 'formation': -1};
    if (input_nom != "" || input_prenom != "" || input_mail != "") {
        $.ajax({
            type: "POST",
            url: 'alternant/chargement',
            data: {
                recherche: recherche
            },
            dataType: "json",
            success: function (response) {
                $("#table_apprenti tbody").html("");
                if (response.status == "ok") {
                    if (response.datas.length == 0) {
                        toastr.warning('Utilisateur introuvable');
                    } else {
                        $.each(response.datas, function (index, value) {
                            $('#table_apprenti tbody').append('<tr>' +
                                    '<td>' + value.nom + ' ' + value.prenom + '</td>' +
                                    '<td>' + value.raisonsociale + ' (' + value.ville + ')</td>' +
                                    '<td><button type="button" class="btn btn-sm btn-success" value="' + value.codestagiaire + '"><i class="fa fa-plus"></i></button></td>' +
                                    '</tr>');
                        });
                    }

                } else {
                    toastr.error("Erreur lors de la recuperation2");
                }
            }, error: function () {
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }else{
         toastr.warning("Veuillez saisir au moins un champ");
    }
}