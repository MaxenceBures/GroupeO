/**
 * Created by Maxence on 18/06/2017.
 */
$(function() {

    var lieux = new Object();
    var selected_module = -1;
    var modal_module = -1;
    var exit_module = -1;
    var exit_date = -1;

    startup();
    loadFormation();
    loadSelectLieu();
    initDate();
    initActions();
    loadModule();
    loadIndicateur();

    function startup(){
        closeModal();

        $('#btn_close_1').click(function(){
            closeModal();
        });

        $('#btn_close_2').click(function(){
            closeModal();
        });
    }

    function initActions(){
        $('#save_datas_modules_ajouter').click(function(){
            if(confirm("Inserer ?") === true){
                insertModule();
            }

        });

        $('#save_indicateur').click(function(){
            if(confirm("Modifier ?") === true){
                modifierIndicateur();
            }

        });


        $('#save_datas').click(function(){

            var deb_val = $('#date_deb').val();
            var fin_val = $('#date_fin').val();
            var description = $('#input_description').val();
            var select_lieu = $("#select_lieu option:selected" ).val();

            if(checkDates(deb_val,fin_val)){
                if(select_lieu != '-1') {
                    var ajouter = {'deb': deb_val, 'fin': fin_val, 'description': description, 'lieu': select_lieu};

                    $.ajax({
                        type: "POST",
                        url: "/parametrage/lieu/ajouter_verif",
                        data: {
                            datas: ajouter
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == "ok") {
                                if(confirm("Inserer ?") === true){
                                    insertFermeture();
                                }
                            }else if(response.status == "ko"){
                                if(confirm("Des cours sont programmés à la date de fermeture prevue. Êtes-vous sûr d'inserer la fermeture  ?") === true){
                                    insertFermeture();
                                }
                            }
                        }, error: function () {
                            toastr.error("Erreur lors de la recuperation");
                        }
                    });
                }else{
                    toastr.warning("Veuillez selectionner un centre.");
                }
            }
        });

        $('#save_datas_modules_modifier').click(function(){
            if(confirm("Modifier ?") === true) {
                modifierModule();
            }
        })

        $('#btn_save_plannfication').click(function(){
            if(confirm("Inserer ?") === true) {
                if (exit_module === -1) {
                    insertPlannification();
                } else {
                    insertPlannificationCustom();
                }
            }
        })

    }

    function initTable(){
        $('#liste_fermeture').DataTable({searching:false,pageLength:5,bLengthChange: false});
    }

    function destroyTable(){
        $('#liste_fermeture').DataTable().destroy();
    }

    function showInputsModal(){
        $('#row_duree').show();
    }

    function hideInputsModal(){
        $('#row_duree').hide();
    }

    function initFermeture(){
        $('[id^="btn_fermeture_supprimer_"]').click(function() {
            fermeture = $(this).attr('id').replace('btn_fermeture_supprimer_','');
            if(confirm("Supprimer ?") === true){
                supprimerFermeture(fermeture);
            }
        });
    }

    function initModule(){
        $('[id^="btn_module_supprimer_"]').click(function() {
            var module = $(this).attr('id').replace('btn_module_supprimer_','');
            if(confirm("Supprimer ?") === true){
                supprimerModule(module);
            }
        });

        $('[id^="btn_module_planning_"]').click(function() {
            var module = $(this).attr('id').replace('btn_module_planning_','');
            modal_module = module;
            $('#liste_plannification_cours_ligne').html();
            loadCours();
            $('#modal_modules').show();
            hideInputsModal();
            /*if(confirm("Supprimer ?") === true){
                supprimerModule(module);
            }*/
        });

        $('[id^="btn_module_editer_"]').click(function() {
            var module = $(this).attr('id').replace('btn_module_editer_','');
            loadModuleFromTable(module);
        });
    }

    function initCours(){
        $('[id^="btn_suppression_cours_"]').click(function() {
            var cours = $(this).attr('id').replace('btn_suppression_cours_','');
            //loadModuleFromTable(module);
            if(confirm("Supprimer ?") === true){
                supprimerCours(cours);
             }

        });
    }

    function initDate(){
        $('#date_deb').datepicker({
            autoclose: true
        });

        $('#date_fin').datepicker({
            autoclose: true
        });

        $('#date_plannification_deb').datepicker({
            autoclose: true
        });

        $('#date_plannification_fin').datepicker({
            autoclose: true
        });
    }

    function loadSelectLieu(){
        $('#select_lieu').append('<option value="-1">Selectionner un lieu</option>');
        $('#select_lieu').append('<option value="99">Tous les lieux</option>');

        $('#select_planning_lieu').append('<option value="-1">Selectionner un lieu</option>');

        lieux[99] = "Tous les lieux";


        $.ajax({
            type: "POST",
            url: "/parametrage/lieu",
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    var temp = response.datas;

                    $.each($.parseJSON(temp), function(index,value){
                        $('#select_lieu').append('<option value="'+value.id+'">'+value.libelle+'</option>');
                        $('#select_planning_lieu').append('<option value="'+value.id+'">'+value.libelle+'</option>');
                        lieux[value.id] = value.libelle;
                    });

                    $('#select_lieu').select2({
                        placeholder: "Selectionner un lieu",
                        allowClear: true
                    });

                    loadFermeture();
                    resizeSelect();
                }else{
                    toastr.error("Erreur lors de la recuperation");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function loadModuleFromTable(module){
        selected_module = module;
        var libelles = $('#td_module_libelle_'+module).html();

        var tmp = libelles.split('[');

        $('#input_libelle_long').val(tmp[0]);
        $('#input_libelle_court').val(tmp[1].substring(0,tmp[1].length - 1));
    }

    function closeModal(){
        $('#modal_modules').hide();
    }

    function resizeSelect(){
        //$('#select_lieu').css();
        //$('#select_planning_lieu').css();
    }

    function checkDates(deb,fin){

        var return_val = false;

        var parsed_deb = deb.substr(6,4)+deb.substr(3,2)+deb.substr(0,2);
        var parsed_fin = fin.substr(6,4)+fin.substr(3,2)+fin.substr(0,2);

        if(parsed_deb <= parsed_fin){
            return_val = true;
        }else{
            toastr.warning("Veuillez selectionner des dates valides");
        }

        return return_val;
    }

    function verifFermeture(){
/*
        var deb_val = $('#date_deb').val();
        var fin_val = $('#date_fin').val();
        var description = $('#input_description').val();
        var select_lieu = $("#select_lieu option:selected" ).val();

        var re = false;

        if(checkDates(deb_val,fin_val)){
            if(select_lieu != '-1') {
                var ajouter = {'deb': deb_val, 'fin': fin_val, 'description': description, 'lieu': select_lieu};

                $.ajax({
                    type: "POST",
                    url: "/parametrage/lieu/ajouter_verif",
                    data: {
                        datas: ajouter
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.status == "ok") {
                            re = true;
                        }else if(response.status == "ko"){
                            toastr.warning("Des cours sont programmés à la date de fermeture prevue");
                            exit_date = 0;
                            re = true;
                        }
                    }, error: function () {
                        toastr.error("Erreur lors de la recuperation");
                    }
                });
            }else{
                toastr.warning("Veuillez selectionner un centre.");
            }
        }

        return re;*/
    }

    function modifierIndicateur(){
        var nb = $("#input_indicateur" ).val();

        if(nb > 0){

            var modifier = {'indicateur': nb};

            $.ajax({
                type: "POST",
                url: "/parametrage/indicateur/modifier",
                data: {
                    datas: modifier
                },
                dataType: "json",
                success: function (response) {
                    if (response.status == "ok") {

                        console.log(response);

                    } else {
                        toastr.error("Erreur lors de la recuperation2");
                    }
                }, error: function () {
                    toastr.error("Erreur lors de la recuperation");
                }
            });
        }else{
            toastr.warning("Veuillez mettre une valeur superieur à 0.");
        }
    }

    function loadIndicateur(){

            $.ajax({
                type: "POST",
                url: "/parametrage/indicateur/load",
                dataType: "json",
                success: function (response) {
                    if (response.status == "ok") {

                        $("#input_indicateur" ).val(response.indicateur);

                    } else {
                        toastr.error("Erreur lors de la recuperation2");
                    }
                }, error: function () {
                    toastr.error("Erreur lors de la recuperation");
                }
            });
    }

    function insertFermeture(){
        var deb_val = $('#date_deb').val();
        var fin_val = $('#date_fin').val();
        var description = $('#input_description').val();
        var select_lieu = $("#select_lieu option:selected" ).val();

        if(checkDates(deb_val,fin_val)){
            if(select_lieu != '-1') {
                var ajouter = {'deb': deb_val, 'fin': fin_val, 'description': description, 'lieu': select_lieu};

                $.ajax({
                    type: "POST",
                    url: "/parametrage/lieu/ajouter",
                    data: {
                        datas: ajouter
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.status == "ok") {

                            destroyTable()

                            var html = '<tr id="tr_fermeture_'+response.fermeture_id+'">' +
                                '<td>' + description + '</td>' +
                                '<td>' +deb_val+ '</td>' +
                                '<td>' +fin_val+'</td>' +
                                '<td>' + lieux[select_lieu] + '</td>';

                            html += '<td><button id="btn_fermeture_supprimer_' + response.fermeture_id + '">Supprimer</button></td></tr>';

                            $('#liste_fermeture_ligne').append(html);
                            initFermeture();

                            initTable();

                        } else {
                            toastr.error("Erreur lors de la recuperation2");
                        }
                    }, error: function () {
                        toastr.error("Erreur lors de la recuperation");
                    }
                });
            }else{
                toastr.warning("Veuillez selectionner un centre.");
            }
        }
    }

    function loadFermeture(){

        $.ajax({
            type: "POST",
            url: "/parametrage/lieu/fermeture",
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    var temp = response.datas;

                    $.each($.parseJSON(temp), function(index,value){

                        var html = '<tr id="tr_fermeture_'+value.id+'">' +
                            '<td>'+value.description+'</td>' +
                            '<td>'+value.deb.date.substr(8,2)+'-'+value.deb.date.substr(5,2)+'-'+value.deb.date.substr(0,4)+'</td>' +
                            '<td>'+value.fin.date.substr(8,2)+'-'+value.fin.date.substr(5,2)+'-'+value.fin.date.substr(0,4)+'</td>' +
                            '<td>'+lieux[value.lieu]+'</td>';


                        html += '<td><button id="btn_fermeture_supprimer_'+value.id+'">Supprimer</button></td></tr>';

                        $('#liste_fermeture_ligne').append(html);

                    });

                    initFermeture();
                    initTable()
                }else{
                    toastr.error("Erreur lors de la recuperation");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function supprimerFermeture(fermeture){
        var supprimer = {'id': fermeture};

        $.ajax({
            type: "POST",
            url: "/parametrage/lieu/supprimer",
            data: {
                datas: supprimer
            },
            dataType: "json",
            success: function (response) {
                if (response.status == "ok") {
                    destroyTable();
                    $('#tr_fermeture_'+fermeture).remove();
                    initTable();

                } else {
                    toastr.error("Erreur lors de la recuperation2");
                }
            }, error: function () {
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function loadModule(){

        $.ajax({
            type: "POST",
            url: "/parametrage/module/liste",
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    var temp = response.datas;

                    $.each($.parseJSON(temp), function(index,value){

                        var html = '<tr id="tr_module_'+value.id+'">' +
                            '<td id="td_module_libelle_'+value.id+'">'+value.long+'['+value.cours+']'+'</td>' +
                            '<td>'+value.reelle+'</td>' +
                            '<td>'+value.prevue+'</td>';

                        html += '<td><button id="btn_module_planning_' + value.id + '">Plannifier</button><button id="btn_module_editer_' + value.id + '">Editer</button><button id="btn_module_supprimer_' + value.id + '">Supprimer</button></td></tr>';

                        $('#liste_module_ligne').append(html);

                    });

                    initModule();
                }else{
                    toastr.error("Erreur lors de la recuperation");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function modifierModule(){
        var long = $('#input_libelle_long').val();
        var court = $('#input_libelle_court').val();

        if((long !== '') && (court !== '')){
            var ajouter = {'id': selected_module,'long': long, 'court': court};

            $.ajax({
                type: "POST",
                url: "/parametrage/module/modifier",
                data: {
                    datas: ajouter
                },
                dataType: "json",
                success: function (response) {
                    if (response.status == "ok") {
                        $('#td_module_libelle_'+selected_module).html(long+'['+court+']');

                        toastr.success("Modification effectuée");
                    } else {
                        toastr.error("Erreur lors de la recuperation2");
                    }
                }, error: function () {
                    toastr.error("Erreur lors de la recuperation");
                }
            });
        }else{
            toastr.warning("Veuillez saisir le nom du module");
        }
    }

    function supprimerModule(module){
        var supprimer = {'id': module};

        $.ajax({
            type: "POST",
            url: "/parametrage/module/supprimer",
            data: {
                datas: supprimer
            },
            dataType: "json",
            success: function (response) {
                if (response.status == "ok") {
                    $('#tr_module_'+module).remove();

                } else if(response.status == "ko"){
                    toastr.error("Impossible de supprimer le module car il possede des cours associés. Veuillez supprimer les cours avant de supprimer le module.");
                }
                else {
                    toastr.error("Erreur lors de la recuperation2");
                }
            }, error: function () {
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function insertModule(){
        var long = $('#input_libelle_long').val();
        var court = $('#input_libelle_court').val();

        if((long !== '') && (court !== '')){
            var ajouter = {'long': long, 'court': court};

            $.ajax({
                type: "POST",
                url: "/parametrage/module/ajouter",
                data: {
                    datas: ajouter
                },
                dataType: "json",
                success: function (response) {
                    if (response.status == "ok") {
                        var html = '<tr id="tr_module_'+response.module_id+'">' +
                            '<td id="td_module_libelle_'+response.module_id+'">'+long+'['+court+']'+'</td>' +
                            '<td>Non Defini</td>' +
                            '<td>Non Defini</td>';

                        html += '<td><button id="btn_module_planning_' + response.module_id + '">Plannifier</button><button id="btn_module_editer_' + response.module_id + '">Editer</button><button id="btn_module_supprimer_' + response.module_id + '">Supprimer</button></td></tr>';

                        $('#liste_module_ligne').append(html);
                        initModule();

                    } else {
                        toastr.error("Erreur lors de la recuperation2");
                    }
                }, error: function () {
                    toastr.error("Erreur lors de la recuperation");
                }
            });
        }else{
            toastr.warning("Veuillez saisir le nom du module");
        }
    }

    function insertPlannification(){
        var deb_val = $('#date_plannification_deb').val();
        var fin_val = $('#date_plannification_fin').val();
        var select_lieu = $("#select_planning_lieu option:selected" ).val();

        var duree_prevue = $('#input_heure_prevue').val();
        var duree_reelle = $('#input_heure_reelle').val();

        if(checkDates(deb_val,fin_val)){
            if(select_lieu !== -1){
                if((parseInt(duree_prevue) >= 0) && (parseInt(duree_reelle) >= 0)){

                var ajouter = {'module': modal_module, 'deb': deb_val, 'fin': fin_val,'lieu': select_lieu,'duree_prevue': duree_prevue, 'duree_reelle': duree_reelle};

                $.ajax({
                    type: "POST",
                    url: "/parametrage/cours/ajouter",
                    data: {
                        datas: ajouter
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.status == "ok") {


                            var html = '<tr id="tr_plannification_cours_'+response.cours_id+'">' +
                                '<td>'+deb_val+' Au '+fin_val+'</td>'+
                                '<td>'+lieux[select_lieu]+'</td>';

                            html += '<td><button id="btn_suppression_cours_' + response.cours_id + '">Suppression</button></td></tr>';

                            $('#liste_cours_ligne').append(html);
                            initCours();

                        } else {
                            toastr.error("Erreur lors de la recuperation2");
                        }
                    }, error: function () {
                        toastr.error("Erreur lors de la recuperation");
                    }
                });
                }else{
                    toastr.warning("Veuillez saisir des durées valides");
                }
            }else{
                toastr.warning("Veuillez selectionner un centre");
            }
        }else{
            toastr.warning("Veuillez saisir des dates valides");
        }
    }

    function insertPlannificationCustom(){
        var deb_val = $('#date_plannification_deb').val();
        var fin_val = $('#date_plannification_fin').val();
        var select_lieu = $("#select_planning_lieu option:selected" ).val();

        if(checkDates(deb_val,fin_val)){
            if(select_lieu !== -1){
                    var ajouter = {'module': modal_module, 'deb': deb_val, 'fin': fin_val,'lieu': select_lieu};

                    $.ajax({
                        type: "POST",
                        url: "/parametrage/cours/ajouterCustom",
                        data: {
                            datas: ajouter
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == "ok") {


                                var html = '<tr id="tr_plannification_cours_'+response.cours_id+'">' +
                                    '<td>'+deb_val+' Au '+fin_val+'</td>'+
                                    '<td>'+lieux[select_lieu]+'</td>';

                                html += '<td><button id="btn_suppression_cours_' + response.cours_id + '">Suppression</button></td></tr>';

                                $('#liste_cours_ligne').append(html);
                                initCours();

                            } else {
                                toastr.error("Erreur lors de la recuperation2");
                            }
                        }, error: function () {
                            toastr.error("Erreur lors de la recuperation");
                        }
                    });
                }else{
                    toastr.warning("Veuillez saisir des durées valides");
                }
            }else{
                toastr.warning("Veuillez selectionner un centre");
            }
    }

    function loadCours(){

        var param = {'id': modal_module};

        $.ajax({
            type: "POST",
            url: "/parametrage/cours/liste",
            data: {
                datas: param
            },
            dataType: "json",
            success: function(response) {
                if(response.status == "ok"){
                    var temp = response.datas;

                    if(temp === "[]"){
                        showInputsModal();
                        exit_module = -1;
                    }else{
                        exit_module = 1;
                        $.each($.parseJSON(temp), function(index,value){

                            var html = '<tr id="tr_cours_'+response.cours_id+'">' +
                                '<td>'+value.deb.date.substr(8,2)+'-'+value.deb.date.substr(5,2)+'-'+value.deb.date.substr(0,4)+' Au '+value.fin.date.substr(8,2)+'-'+value.fin.date.substr(5,2)+'-'+value.fin.date.substr(0,4)+'</td>'+
                                '<td>'+lieux[value.lieu]+'</td>';

                            html += '<td><button id="btn_suppression_cours_' + value.id + '">Suppression</button></td></tr>';

                            $('#liste_cours_ligne').append(html);
                            initCours();

                        });
                    }

                    initModule();
                }else{
                    toastr.error("Erreur lors de la recuperation");
                }
            },error: function(){
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

    function supprimerCours(cours){
        var supprimer = {'id': cours};

        $.ajax({
            type: "POST",
            url: "/parametrage/cours/supprimer",
            data: {
                datas: supprimer
            },
            dataType: "json",
            success: function (response) {
                if (response.status == "ok") {
                    $('#tr_plannification_cours_'+cours).remove();

                } else if(response.status == "ko"){
                    toastr.error("Impossible de supprimer le cours car il est associé à des plannings. Veuillez modifier les plannings avant de supprimer le cours.");
                }
                else {
                    toastr.error("Erreur lors de la recuperation2");
                }
            }, error: function () {
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }

function loadFormation() {
        $.ajax({
            type: "POST",
            url: "/formation/liste",
            dataType: "json",
            success: function (response) {
                if (response.status == "ok") {
                    var temp = response.formations;
                    $.each($.parseJSON(temp), function (index, value) {
                        $('#select-formation-module').append('<option value="' + value.id + '">' + value.long + ' (' + value.court + ')</option>');
                    });

                    $('#select-formation-module').select2({
                        placeholder: "Selectionner une formation",
                        allowClear: true
                    }).on("change", function () {
                        if ($(this).val() != "") {
                            var data = {
                                modules: null,
                                formation: $("#select-formation-module").val(),
                                libelle: null
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
                                        html += "<td><label>" + liste[i].libelle + "</label></td>";
                                        html += "<td class='text-center'><button type='button' class='btn btn-sm btn-primary' value='" + liste[i].id + "'><i class='fa fa-edit'></i></button></td>";
                                        html += "</tr>";
                                    }
                                    $("#table-modules tbody").html(html);
                                    setTimeout(resize, 10);
                                }
                            });
                        } else {
                            $("#table-modules tbody").html("");
                        }
                    });

                } else {
                    toastr.error("Erreur lors de la recuperation");
                }
            }, error: function () {
                toastr.error("Erreur lors de la recuperation");
            }
        });
    }



});