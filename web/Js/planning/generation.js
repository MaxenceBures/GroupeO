
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
                    placeholder: {
                        id: '-1', // the value of the option
                        text: $(this).attr('placeholder')
                    },
                    language: "fr"
                });
            });
            initDatatableAlternant();
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
    var html_table = "<tr class='ajout' ><td>" + date_debut + "</td><td>" + date_fin + "</td><td><button class='btn btn-danger' onclick='removeExclusion(this)'><i class='fa fa-remove'></i></button></td></tr>";
    if (table.find('td').hasClass("dataTables_empty")) {
        table.find('tbody').html(html_table);
    } else {
        table.find('tbody').append(html_table);
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
            url: '/alternant/recherchePlanning',
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
                        setDataAlternant(response);
                    }
                } else {
                    toastr.error("Erreur lors de la recuperation2");
                }
            }, error: function () {
                toastr.error("Erreur lors de la recuperation");
            }
        });
    } else {
        toastr.warning("Veuillez saisir au moins un champ");
    }
}

function setDataAlternant(alternants) {
    var html = "";
    $.each(alternants.datas, function (index, value) {
        html += '<tr>';
        html += '<td>' + value.nom + ' ' + value.prenom + '</td>';
        html += '<td>' + value.raisonsociale + ' (' + value.ville + ')</td>';
        html += '<td class="text-center">';
        html += '<button type="button" class="btn btn-sm btn-success" value="' + value.codestagiaire + '" id="bt_add_' + value.codestagiaire + '" onclick="btSelectStagiaireClick(this,' + value.codeentreprise + ')"><i class="fa fa-plus"></i></button>';
        html += '<button type="button" class="btn btn-sm btn-danger hidden" value="' + value.codestagiaire + '" id="bt_remove_' + value.codestagiaire + '" onclick="btUnSelectStagiaireClick(this)"><i class="fa fa-remove"></i></button></td>';
        html += '</tr>';
    });
    $('#table_apprenti tbody').append(html);
}

function btSelectStagiaireClick(bt, entreprise) {
    var value_stagiaire = $(bt).attr('value');
    var tr_html = $(bt).parents('tr').html();
    $('#table_apprenti tbody').html("");
    $('#table_apprenti tbody').html(tr_html);
    $("#bt_add_" + value_stagiaire).addClass('hidden');
    $("#bt_remove_" + value_stagiaire).removeClass('hidden');
    $("#modal-content-search").addClass('hidden');
    $("#entreprise").val("formation_" + entreprise);
    $("#entreprise").trigger("change");
}

function btUnSelectStagiaireClick(bt) {
    var value_stagiaire = $(bt).attr('value');
    initDatatableAlternant();
    $("bt_add_" + value_stagiaire).removeClass('hidden');
    $("bt_remove_" + value_stagiaire).addClass('hidden');
    $("#modal-content-search").removeClass('hidden');
}

function initDatatableAlternant() {
    $("#table_apprenti").dataTable().fnDestroy();
    $("#table_apprenti").dataTable({
        dom: '<"clear">',
        filtering: false,
        ordering: false,
        scrollY: "100px",
        scrollCollapse: true
    });
}

function btGenerationClick(){
    $.ajax({
        type: "POST",
        url: "/planning/editeur",
        data: {id_utilisateur: id},
        dataType: "html",
        success: function (response) {
            
        }
    });
}
