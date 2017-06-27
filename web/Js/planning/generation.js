
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
                    placeholder: $(this).attr('placeholder')
                });
            });
            $("#modal_planning_generation table").dataTable({dom: '<"clear">', filtering: false, ordering: false});

            $("#modal_planning_generation .date").datepicker();

        }
    });
}

function checkExclusion() {
    var date_debut = $("#date_debut_exclusion").val();
    var date_fin = $("#date_fin_exclusion").val();

    if (date_debut != "" && date_fin != "") {
        $("#bt_exclusion").prop('disabled', false);
    } else {
        $("#bt_exclusion").prop('disabled', true);
    }

}

function btExclusionClick() {
    var date_debut = $("#date_debut_exclusion").val();
    var date_fin = $("#date_fin_exclusion").val();
    var table = $("#table_exclusion");
    if (new Date(date_debut) > new Date(date_fin)) {
        alert("La date de début doit être plus petite que la date de fin");
    } else {
        if (table.find('td').hasClass("dataTables_empty")) {
            table.find('tbody').html("<tr class='ajout' ><td>" + date_debut + "</td><td>" + date_fin + "</td><td><button class='btn btn-danger' onclick='removeExclusion(this)'><i class='fa fa-remove'></i></button></td></tr>");
        } else {
            table.find('tbody').append("<tr class='ajout'><td>" + date_debut + "</td><td>" + date_fin + "</td><td><button class='btn btn-danger' onclick='removeExclusion(this)'><i class='fa fa-remove'></i></button></td></tr>");
        }
    }
}

function removeExclusion(bt) {
    $(bt).parents("tr").remove();
}

function btRechercherClick(){
    
}