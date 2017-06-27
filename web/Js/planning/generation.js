
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
            $("#modal_planning_generation table").dataTable({dom: 'RTC<"clear">'});

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
    
    table.append("<tr><td>"+date_debut+"</td><td>"+date_fin+"</td><td><button class='btn btn-danger' onclick='removeExclusion(this)'><i class='fa fa-remove-sign'></i></button></td></tr>");
    

} 

function removeExclusion(bt){
    $(bt).parents("tr").remove();
}