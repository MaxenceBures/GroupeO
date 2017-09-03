
$("#lieu option:first").prop('selected', true)
$("#lieu").select2({
    placeholder: {
        id: '', // the value of the option
        text: $(this).attr('placeholder')
    },
    language: "fr"
});

$("#table-planning").dataTable({
    dom: 'rt<"clear">',
    filtering: false,
    ordering: false,
    scrollY: "350px",
    scrollCollapse: false
});

$("#table-planning").droppable();

$("#table-modules").dataTable({
    dom: 'rt<"clear">',
    filtering: false,
    ordering: false,
    scrollY: $(document).innerHeight() - 300,
    scrollCollapse: false,
    "pageLength": 500
});

$("#table-modules-Independant").dataTable({
    dom: 'rt<"clear">',
    filtering: false,
    ordering: false,
    scrollY: $(document).innerHeight() - 300,
    scrollCollapse: false,
    "pageLength": 500
});


$(document).ready(function () {
    getCours();
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
    $("a[data-toggle=\"tab\"]").on("shown.bs.tab", function (e) {
        $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
    });
});


function getCours() {
    var cours = [];
    var data = {
        modules: getModulesChecked(true),
        modules_selected: getModulesSelected().length == 0 ? "0" : getModulesSelected(),
        lieux: $("#lieu").val(),
        debut: $("#date_debut_contrat").text(),
        fin: $("#date_fin_contrat").text()
    };
    $.ajax({
        type: "POST",
        url: "/cours/liste_cours_planning",
        data: {data: data},
        dataType: "json",
        success: function (response) {
            var liste = response.cours;
            for (var i = 0; i < liste.length; i++) {
                var debut = moment(liste[i]['start']['date']);
                var fin = moment(liste[i]['end']['date']);
                var lieu = liste[i]['lieu'] != null ? liste[i]['lieu'] : "Tous centre";
                cours.push({
                    "id": liste[i]['id'],
                    "title": liste[i]['libellemodule'] + " - " + lieu,
                    "taskId": liste[i]['idmodule'],
                    "start": debut.format('YYYY-MM-DD'),
                    "end": fin.add(1, 'days').format('YYYY-MM-DD'),
                    "allDay": true
                });
            }
            if ($("#calendar").hasClass('init')) {
                $('#calendar').fullCalendar('removeEvents');
                $('#calendar').fullCalendar('renderEvents', cours, true);
            } else {
//                cours = getJoursFeriesCalendar(cours);
                initCalendar(cours);
            }
        }
    });
}

// A voir pour séparer les cours en deux lors de l'affichage des cours
function splitCoursWhenFerie(debut, fin, lieu) {

}

function getJoursFeries() {
    var jours_ferie_temps = [];
    var date_debut = new Date(convertDate($("#date_debut_contrat").text(), false));
    var date_fin = new Date(convertDate($("#date_fin_contrat").text(), false));
    var nb_annee = date_fin.getFullYear() - date_debut.getFullYear();
    for (var i = 0; i < nb_annee + 1; i++) {
        var list_feries = moment().getFerieList(date_fin.getFullYear() - i)
        $.each(list_feries, function () {
            var date = $(this)[0].date;
            jours_ferie_temps.push(moment(date, 'YYYY-MM-DD'));
        })
    }
    return jours_ferie_temps;
}

function initCalendar(cours) {
    var date_debut_contrat = $("#date_debut_contrat").text();
    var date = new Date(convertDate(date_debut_contrat, false));
    $('.overlay').removeClass('hidden');
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month'
        },
        lang: "fr",
        defaultDate: date,
        firstDay: 1,
        events: cours,
        buttonIcons: false, // show the prev/next text
        weekNumbers: true,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        droppable: false,
        hiddenDays: [0, 6], // this allows things to be dropped onto the calendar !!!
        dropAccept: '#table-planning_wrapper',
        dragRevertDuration: 0,
        eventDrop: function (event, delta, revertFunc, jsEvent, ui, view) {
        },
        drop: function (date, jsEvent, ui, resourceId) { // this function is called when something is dropped
        },
        eventDragStop: function (event, jsEvent, ui, view) {
            if (isEventOverDiv(jsEvent.clientX, jsEvent.clientY)) {
                if (checkDateOnDrop(event.start, event.end)) {
                    $("#overlay-table").removeClass("hidden");
                    event.className += "hidden";
                    $('#calendar').fullCalendar('updateEvent', event);
                    onDropEventToPlanning(event);
                    setClassHiddenEvent(event.taskId, true);
                } else {
                    toastr.error("Il y a déja un cours plannifer à ces dates");
                }
            }
        },
        eventClick: function (calEvent, jsEvent, view) {

            alert('Event: ' + calEvent.title);
            alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
            alert('View: ' + view.name);

            // change the border color just for fun
            $(this).css('border-color', 'red');

        },
        eventAfterAllRender: function (view) {
            //Use view.intervalStart and view.intervalEnd to find date range of holidays
            //Make ajax call to find holidays in range.
//            var fourthOfJuly = moment('2014-07-04', 'YYYY-MM-DD');
            var feries = getJoursFeries();
            var joursferies;
            for (var i = 0; i < feries.length; i++) {
                joursferies = feries[i];
                if (view.name == 'month') {
                    $("td[data-date=" + joursferies.format('YYYY-MM-DD') + "]").addClass('ferie').find('a').text('Férié').prop('disabled', true);
                } else if (view.name == 'agendaWeek') {
                    var classNames = $("th:contains(' " + joursferies.format('M/D') + "')").attr("class");
                    if (classNames != null) {
                        var classNamesArray = classNames.split(" ");
                        for (var j = 0; j < classNamesArray.length; j++) {
                            if (classNamesArray[j].indexOf('fc-col') > -1) {
                                $("td." + classNamesArray[j]).addClass('ferie');
                                break;
                            }
                        }
                    }
                } else if (view.name == 'agendaDay') {
                    if (joursferies.format('YYYY-MM-DD') == $('#calendar').fullCalendar('getDate').format('YYYY-MM-DD')) {
                        $("td.fc-col0").addClass('ferie');
                    }
                    ;
                }
            }
        }
    }).addClass('init');

    $('.overlay').addClass('hidden');
}

function isEventOverDiv(x, y) {

    var external_events = $('#table-planning_wrapper');
    var offset = external_events.offset();
    offset.right = external_events.width() + offset.left;
    offset.bottom = external_events.height() + offset.top;
    // Compare
    if (x >= offset.left
            && y >= offset.top
            && x <= offset.right
            && y <= offset.bottom) {
        return true;
    }
    return false;
}

function onModulesChecked() {
    getCours();
}


function getModulesChecked(checked) {
    var item = checked ? "input[type='checkbox']:checked" : "input[type='checkbox']";
    var modules = [];
    $("#table-modules tbody tr").find(item).each(function () {
        modules.push($(this).val());
    });
    return modules;
}

function getModulesSelected() {
    var modules = [];
    $("#table-planning tbody .ajouter").each(function () {
        var id = $(this).attr('id');
        modules.push(id.replace('module_planning_', ''));
    });
    return modules;
}

function onDropEventToPlanning(event) {
    var idCours = event.id;
    $("#overlay-table").removeClass("hidden");
    if (idCours != null) {
        $.ajax({
            type: "POST",
            url: "/cours/recherche",
            data: {data: idCours},
            dataType: "json",
            success: function (response) {
                var cours = response.cours;
                var debut_cours = convertDate2(cours.start['date']);
                var fin_cours = convertDate2(cours.end['date']);
                var ordre = $(".cours_planning").length + 1;
                var html = "<tr class='cours_planning ajouter' id='module_planning_" + cours.idmodule + "' value='" + cours.idmodule + "' data-cours='" + idCours + "' data-ordre='" + ordre + "'>";
                html += "<td class='text-center'><label>" + debut_cours.format('L') + "</label></td>";
                html += "<td class='text-center'><label>" + fin_cours.format('L') + "</label></td>";
                html += "<td class='text-center'><label>ENI (" + cours.lieu + ")<br>" + cours.duree + " heures</label></td>";
                html += "<td class='text-center'>" + cours.libellemodule + "<i class='close fa fa-close'></i>&nbsp;<i class='close fa fa-edit'></i></td>";
                html += "</tr>";
                html += getDatePlanningOnDrop(cours, convertDate2(cours.start['date']), convertDate2(cours.end['date']));
                $("#module_" + cours.idmodule).prop('disabled', true);
                $('#table-planning tbody').append(html);
                if ($("#table-planning tbody tr.cours_planning").length > 2) {
                    sortPlanning();
                }
                $("#table-total").text(parseInt($("#table-total").text()) + cours.duree);
                $("#overlay-table").addClass("hidden");
                setBtGenerationEnabled();
            }
        });
        setTimeout(resize, 500);
    }
}

function setBtGenerationEnabled() {
    $("#generation-planning").prop("disabled", $('#table-planning tbody tr').length < 2);
}

function sortPlanning() {
    $('#table-planning tbody tr:not(.start)').each(function () {
        var $this = $(this),
                t = this.cells[0].textContent.split('/');
        $this.data('_ts', new Date(t[2], t[1] - 1, t[0]).getTime());
    }).sort(function (a, b) {
        return $(a).data('_ts') > $(b).data('_ts');
    }).appendTo('#table-planning tbody ');
    recalcDateEntreprise();
    recalcOrdreCours();
}

function recalcDateEntreprise() {
    $('#table-planning tbody tr.for').each(function () {
        var tr_prev = $(this).prev("tr").find('td:eq(1)').text();
        var tr_next = $(this).next("tr").find('td:eq(0)').text();
        var date_debut = convertDate2(tr_prev, "FR", "US").add(3, "days");
        var date_fin = convertDate2(tr_next, "FR", "US").subtract(3, "days");

        if (date_debut.isAfter(date_fin)) {
            $(this).remove();
        } else {
            $(this).find('td:eq(0)').text(date_debut.format("L"));
            if (tr_next != '') {
                $(this).find('td:eq(1)').text(date_fin.format("L"));
            } else {
                $(this).find('td:eq(1)').text("Fin de contrat");
            }
        }

    })
}

function recalcOrdreCours() {
    $.each($("#table-planning tbody tr.cours_planning"), function (index) {
        if ($(this).attr("data-ordre") != index + 1 && !$(this).hasClass("ajouter") && !$(this).hasClass("modifier") && !$(this).hasClass("supprimer")) {
            $(this).addClass("modifier");
        }
        $(this).attr("data-ordre", index + 1);
    });
}

function getDatePlanningOnDrop(cours, debut, fin) {
    var html = "";
    html += "<tr for='module_planning_" + cours.idmodule + "' class='for'>";
    if ($('#table-planning tbody tr').length == 1 && $('#table-planning tbody tr:first').hasClass('start')) {
        var debut_contrat = convertDate2($("#date_debut_contrat").text(), "FR", "US");
        if (!debut_contrat.isAfter(debut)) {
            debut.subtract(3, "days").isSameOrBefore(debut_contrat) ? $('#table-planning tbody tr:first').remove() : $('#table-planning tbody tr:first').find("td:eq(1).date-fin").text(debut.format("L"));
            html += "<td class='date-debut text-center'>" + fin.add(3, "days").format("L") + "</td>";
        }
    } else if ($('#table-planning tbody tr.cours_planning').length >= 1) {
        var id_last = $('#table-planning tbody tr.cours_planning:last').attr("value");
        var last_date_fin = convertDate2($('#table-planning tbody tr.cours_planning:last').find("td:eq(1)").text(), "FR", "US");
        debut.subtract(3, "days").isSame(last_date_fin) ? $("tr[for='module_planning_" + id_last + "']").remove() : $("tr[for='module_planning_" + id_last + "']").find('td:eq(1)').text(debut.format("L"))
        html += "<td class='date-debut text-center'>" + fin.add(3, "days").format("L") + "</td>";
    }
    html += "<td class='date-fin text-center'>Fin de contrat</td>";
    html += "<td class='text-center' colspan='2'><label>Entreprise</label></td>";
    html += "<td class='hidden'></td>";
    html += "</tr>";
    return html;
}

function checkDateOnDrop(debut, fin) {
    var is_valid = false;
    var cours_planning = $("#table-planning tbody tr.cours_planning");
    if (cours_planning.length >= 1) {
        var last_debut = convertDate2(cours_planning.last().find('td:eq(0)').text(), "FR", "US");
        var last_fin = convertDate2(cours_planning.last().find('td:eq(1)').text(), "FR", "US");
        is_valid = !debut.isBetween(last_debut, last_fin) && (!debut.isSameOrBefore(last_debut) && !fin.isSameOrBefore(last_fin));
        if (!is_valid) {
            $.each(cours_planning, function () {
                var date_debut = $(this).find('td:eq(1)').text();
                var date_fin = $(this).next("tr").hasClass("cours_planning") ? $(this).next("tr").find('td:eq(0)').text() : $(this).next("tr").next("tr").find('td:eq(0)').text();
                console.log(date_debut);
                console.log(date_fin);
                if (date_debut != '' && date_fin != '') {
                    var prev_debut = convertDate2(date_debut, "FR", "US");
                    var last_fin = convertDate2(date_fin, "FR", "US");
                    is_valid = debut.isSameOrAfter(prev_debut) && fin.isSameOrBefore(last_fin);
                    if (is_valid) {
                        return false;
                    }
                }
            });
        }
    } else {
        is_valid = true;
    }
    return is_valid;

//    A faire si reponse favorable a la question : Les cours peuvent-ils commencer avant la date de contrat ?
//    var debut_contrat = moment($("#date_debut_contrat").text(), "YYYY-MM-DD");
//    if ($('#table-planning tbody tr').length == 1 && $('#table-planning tbody tr:first').has('first')) {
//        var jours_feries = getJoursFeries(debut.year());
//        if (debut_contrat.isAfter(debut)) {
//            
//        }
//    }
}

function convertDate(date, fr) {
    if (fr) {
        var date = new Date(date).toLocaleDateString();
    } else {
        var new_date = date.split("/");
        new_date = new_date[1] + "/" + new_date[0] + "/" + new_date[2];
        date = new Date(new_date);
    }
    return date;
}

function convertDate2(date, from, to) {
    var new_date = null;
    var date_split = (from == "FR" || from == "EN") ? date.split("/") : date.split("-");
    if (from == "FR" && to == "US") {
        var new_date_string = date_split[2] + "-" + date_split[1] + "-" + date_split[0];
    } else if (from == "EN" && to == "US") {
        var new_date_string = date_split[2] + "-" + date_split[0] + "-" + date_split[1];
    } else {
        var new_date_string = date;
    }
    new_date = moment(new_date_string);
    return new_date;
}

function setClassHiddenEvent(idmodule, hidden) {
    $('.overlay').removeClass('hidden');
    $.each($("#calendar").fullCalendar('clientEvents'), function (event) {
        if ($(this)[0].taskId == idmodule) {
            if (hidden) {
                $(this)[0].className += " hidden";
            } else {
                $(this)[0].className -= " hidden";
            }
            $('#calendar').fullCalendar('updateEvent', $(this)[0]);
        }
    });
    $('.overlay').addClass('hidden');
}

function btAddModuleClick() {
    $.ajax({
        type: "POST",
        url: "/module/frameSearch",
        data: {data: "a"},
        dataType: "html",
        success: function (response) {
            $("body").append(response);
            $("#modal_module_search").modal({
                keyboard: false,
                backdrop: 'static'
            }).on("hide.bs.modal", function () {
                $(this).remove();
                getCours();
            });
            initFrameModuleSearch();

        }
    });
}

function initFrameModuleSearch() {

    $("#modal_module_search .select2").each(function () {
        $(this).select2({
            placeholder: {
                id: '', // the value of the option
                text: $(this).attr('placeholder')
            },
            language: "fr",
            allowClear: true
        });
    });
    $("#table-modules-search").dataTable({
        dom: 'rt<"clear">',
        filtering: false,
        ordering: false,
        scrollY: "350px",
        scrollCollapse: false,
        "pageLength": 500
    });

    $("#bt-search").on('click', function () {
        var data = {
            modules: getModulesChecked(false),
            formation: $("#formation-search").val(),
            libelle: $("#libelle-search").val()
        };
        $.ajax({
            type: "POST",
            url: "/module/listeSearch",
            data: {data: data},
            dataType: "json",
            success: function (response) {
                var liste = response.modules;
                var html = "";
                for (var i = 0; i < liste.length; i++) {
                    html += "<tr>";
                    html += "<td><input class='formation' value='" + liste[i].codeformation + "' type='hidden'><label>" + liste[i].libelleformation + "</label></td>";
                    html += "<td><label>" + liste[i].libelle + "</label></td>";
                    html += "<td class='text-center'><label>" + liste[i].duree + " heures</label></td>";
                    html += "<td class='text-center'><button type='button' onclick='btModuleSearchClick(this)' class='btn btn-sm btn-primary' value='" + liste[i].id + "'><i class='fa fa-plus-circle'></i></button></td>";
                    html += "</tr>";
                }
                $("#table-modules-search tbody").html(html);
                setTimeout(resize, 10);
            }
        });
    });
}

function btModuleSearchClick(module) {
    var idModule = $(module).val();
    var parent = $(module).parents("tr");
    var formation = parent.find('td:first').find('input').val();
    formation = formation.replace(/ |{|}/gi, '_').substring(0, 6);
    var libelleFormation = parent.find('td:first').text();
    var libelleModule = parent.find('td:eq(1)').text();
    var html = "";
    var conteneur = "";
    if ($("#table-modules tbody #formation_" + formation).length > 0) {
        conteneur = $("#table-modules tbody tr[data-formation='formation_" + formation + "']:last");
    } else {
        conteneur = $("#table-modules tbody");
        html += '<tr class="group" id="formation_' + formation + '">';
        html += '<td colspan="2"><label>' + libelleFormation + '</td>';
        html += '<td class="hidden"></td>';
        html += "</tr>";
    }
    html += "<tr data-formation='formation_" + formation + "'>";
    html += '<td><input type="checkbox" value="' + idModule + '" checked id="' + idModule + '" onchange="onModulesChecked()"/></td>';
    html += '<td><label style="font-weight :400!important" for="module_' + idModule + '">' + libelleModule + '</label></td>';
    html += "</tr>";

    if ($("#table-modules tbody #formation_" + formation).length > 0) {
        $(html).insertAfter(conteneur);
    } else {
        conteneur.append(html);
    }
    parent.remove();
}

function btAddModuleIndependantClick() {
    $.ajax({
        type: "POST",
        url: "/moduleInde/editFrame",
        data: {data: "data"},
        dataType: "html",
        success: function (response) {
            $("body").append(response);
            $("#modal_module_inde_edit").modal({
                keyboard: false,
                backdrop: 'static'
            }).on("hide.bs.modal", function () {
                $(this).remove();
            });
            initFrameModuleIndeEdit();

        }
    }
    );
}
function initFrameModuleIndeEdit() {
    $("#form-edit-module-inde").on("submit", function (e) {
        e.preventDefault();
    });

    $("#dureeheures").change(function () {
        var value = parseInt($(this).val());
        var semaine = Math.round(value / 35) * 1;
        $("#dureesemaines").val(semaine);
    })

    $("#dureesemaines").change(function () {
        var value = parseInt($(this).val());
        var heures = Math.round(value * 35) * 1;
        $("#dureeheures").val(heures);
    })
}

function onBtFramePlanningClick() {
    var id = $("#id_planning").val();
    getFramePlanning(id);
}
function onBtGenerationClick() {
    btSaveClick(true);
}

function btSaveClick(generation) {
    var id = $("#id_planning").val();
    $.ajax({
        type: "POST",
        url: id == 0 ? "/planning/ajouter" : "/planning/modifier",
        data: {
            id: id,
            nom: $("#nom_planning").val(),
            stagiaire: $("#stagiaire").val(),
            entreprise: $("#entreprise").val(),
            stagiaire_entreprise: $("#stagiaire_entreprise").val(),
            formation: $("#formation").val(),
            max_heure: $("#max_heure").val(),
            max_semaine: $("#max_semaine").val(),
            date_debut: $("#date_debut_contrat").text(),
            date_fin: $("#date_fin_contrat").text(),
            createur: $("#createur").val(),
            cours: getCoursPlanning()
        },
        dataType: "json",
        success: function (response) {
            if (response.status == "ok") {
                alert(response.planning_id);
                $("#id_planning").val(response.planning_id);
                toastr.success("Le planning a été sauvegardé");
                if (generation) {
                    open("/planning/pdf/" + response.planning_id);
//                    $.ajax({type: 'GET',
//                        url: "/planning/pdf/" + response.planning_id,
//                        dataType: 'text',
//                        contentType: 'application/pdf',
//                        success : function(){
//                            open("./"+$("#nom_planning").val()+".pdf");
//                        }
//                    });
                }
                $("#table-planning tbody tr.cours_planning").removeClass("ajouter").removeClass("modifier");
                $("#table-planning tbody tr.cours_planning .supprimer").remove();
            } else {
                toastr.error("Erreur a l'enregistrement du planning");
            }
        }
    })
}

function btAnnulerClick() {
    $("#form-planning").submit();
}

function getCoursPlanning() {
    var data = [];
    var ajouter = [];
    var modifier = [];
    var supprimer = [];
    $("#table-planning tbody tr.cours_planning").each(function () {
        var cours = {
            id: $(this).attr('data-cours') != undefined && $(this).attr('data-cours') != false ? $(this).attr('data-cours') : $(this).attr('data-cours-inde'),
            inde: $(this).attr('data-cours') == undefined && $(this).attr('data-cours') == false ? true : "",
            ordre: $(this).attr('data-ordre'),
            split: $(this).hasClass('split'),
            date_debut_split: $(this).hasClass('split') ? $(this).attr('debut_split') : "",
            date_fin_split: $(this).hasClass('split') ? $(this).attr('fin_split') : "",
        };
        if ($(this).hasClass("ajouter")) {
            ajouter.push(cours);
        } else if ($(this).hasClass("modifier")) {
            modifier.push(cours);
        } else if ($(this).hasClass("supprimer")) {
            supprimer.push(cours);
        }
    });
    data = {
        ajouter: ajouter,
        modifier: modifier,
        supprimer: supprimer
    };
    return data;
}

