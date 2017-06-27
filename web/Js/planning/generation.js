
function getFramePlanning(id = null) {
    $.ajax({
        type: "POST",
        url: "planning/frame",
        data: {id_utilisateur: id},
        dataType: "html",
        success: function (response) {
            $("body").append(response);
            $("#modal_planning_generation").modal({
                keyboard: false
            }).on("hide.bs.modal",function(){
                $(this).remove();
            });
            $("#modal_planning_generation .select2").select2();
            $("#modal_planning_generation table").dataTable({dom : 'RTC<"clear">'});
        }
    });
}
