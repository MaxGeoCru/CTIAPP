/************************************************************************************
* Cargar carpetas por Area
*
*************************************************************************************/
$('#area_id').change(function () {

    var Area_Id = $('#area_id').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '/carpetaPorArea/' + Area_Id,
        dataType: 'html',
        data: {},
        contentType: false,
        processData: false,
    }).done(function (resp) {
        //alert(resp);
        //console.log(resp.carp_nombre);
        var html = '';
        $("#divListaCarpetas").empty();
        $.each(JSON.parse(resp), function (i, post) {
            //html+= '<td>'+post.carp_nombre +'</td>';
            console.log(post.carp_nombre)
            html += '<div class="form-group row">';
            html += '<label for="inputEmail3" class="col-sm-6 col-form-label">' + post.carp_nombre + '</label>';
            html += '<div class="col-sm-6">';
            html += "<input type='checkbox' unchecked data-toggle='toggle' data-onstyle='success' data-offstyle='danger' data-on='SI' data-off='NO' data-size='sm'></input>";
            html += '</div>';
            html += '</div>';
        });

        $("#divListaCarpetas").append(html);
        $("[data-toggle='toggle']").bootstrapToggle('destroy')
        $("[data-toggle='toggle']").bootstrapToggle();
    });
});

/************************************************************************************
* Guardar AS
*************************************************************************************/
$("#btnGuardarReserva").click(function () {

    var ArrayInputs = [
        '#cita_fecha',
        '#cita_automodelo',
        '#cita_autocolor',
        '#cita_autoplaca',
    ];


    var datestring = $('#cita_fecha').val();
    fecha =  new Date(datestring);

    //PARA VALIDAR HORAS PASADAS A LA ACTUAL
    var fechaSola  = $('#cita_fecha').val();
    var hora = $("#turn_id option:selected").text();
    var FechaConHora = fechaSola+ " " + hora;
    var FechaReservar = new Date(FechaConHora);
    var FechaActual = new Date();


    var weekdays = ["0", "1", "2", "3", "4", "5", "6"];

    var weekday = weekdays[fecha.getDay()];


    var ResultadoValidacion = ValidarVista(ArrayInputs);

    //alert(weekday);
    if (weekday == 0 || weekday == 6 || fecha.valueOf() == "1608872400000" || fecha.valueOf() == "1609477200000"){
        swal("Warning!", "Our hours of operation are from Monday to Friday from 8:00 a.m. to 3:30 p.m.  and not attend holidays");
        ResultadoValidacionFecha = false;
    }
    else{
         //VALIADAR HORAS PASADAS A LA ACTUAL
         if (parseInt(FechaReservar.valueOf()) < parseInt(FechaActual.valueOf())){
            swal("Warning!", "Unfortunately, you are not able to register since the schedule is full. Please try again and register with an available time slot.");
            ResultadoValidacionFecha = false;
        }
        else{
            //alert("PASE AQUI");
            ResultadoValidacionFecha = true;
        }
    }


    var ResultadoValidacion = ValidarVista(ArrayInputs);

    if (ResultadoValidacion != false && ResultadoValidacion == true && ResultadoValidacionFecha == true) {


    var paci_id = 1;
    var cita_fecha = $('#cita_fecha').val()
    var tipo_idprueba = $("#tipo_idprueba option:selected").val();
    var cita_pruebanombre = $("#tipo_idprueba option:selected").text();
    var turn_id = $("#turn_id option:selected").val();
    var cita_turno = $("#turn_id option:selected").text();
    var moti_id = $("#moti_id option:selected").val();
    var cita_motivo =  $("#moti_id option:selected").text();
    var cita_automodelo = $('#cita_automodelo').val();
    var cita_autocolor = $('#cita_autocolor').val();
    var cita_autoplaca = $('#cita_autoplaca').val();
    var site_id = $("#site_id option:selected").val();
    var usua_id = 1;

    //Datos de pago
    var cardholder   = $('#cardholder').val();
    var avs_street  = $('#avs_street').val();
    var avs_zip = $('#avs_zip').val();
    var number = $('#number').val();
    var expiration = $('#expiration').val();
    var cvc = $('#cvc').val();
    var amount = $('#amount').val();
    //console.log(cita_fecha);
        //alert(cardholder);

        swal({
            title: "Are you sure?",
            text: "The appointment will be reserved",
            icon: "info",
            buttons: true,
            dangerMode: false,
          })
          .then((willConfirm) => {
            if (willConfirm) {
                $correo = willConfirm;
                //console.log($correo);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/RegistrarCita',
                    data: {
                        'paci_id': paci_id,
                        'cita_fecha': cita_fecha,
                        'tipo_idprueba': tipo_idprueba,
                        'cita_pruebanombre': cita_pruebanombre,
                        'turn_id': turn_id,
                        'cita_turno': cita_turno,
                        'moti_id': moti_id,
                        'cita_motivo': cita_motivo,
                        'cita_automodelo': cita_automodelo,
                        'cita_autocolor': cita_autocolor,
                        'cita_autoplaca': cita_autoplaca,
                        'site_id':site_id,
                        'usua_id': usua_id,
                        'cardholder':cardholder,
                        'avs_street':avs_street,
                        'avs_zip':avs_zip,
                        'number':number,
                        'expiration':expiration,
                        'cvc':cvc,
                        'amount':amount
                    },

                    success: function (data) {
                        //alert("success");
                        if (data == "NOCUPO"){
                            swal("Warning!", "Unfortunately, you are not able to register since the schedule is full. Please try again and register with an available time slot.");
                        }else{
                        //alert(obj.result_code);
                        var obj = JSON.parse(data);

                            if (obj.result_code == "A"){
                                swal("Ready! Your appointment has been booked", {
                                    icon: "success",

                                }).then(function() {
                                    //alert(data);
                                    // Redirect the user
                                    //window.location.href = "https://secure.usaepay.com/pay/1nkt6jxyc3zprr7y8/CRsH01Bt";
                                    window.location.href = "/inicio";
                                    //window.open("https://secure.usaepay.com/pay/1nkt6jxyc3zprr7y8/CRsH01Bt");
                                    });
                            }else{
                                swal("Oops!", obj.error, "error");
                            }
                        }


                    },
                    error: function (data) {

                        swal("Oops!", "I think something went wrong, try again", "error");
                    },
                });
            } else {
                swal("Oops", "You seem not ready", "error");
            }
          });
    }

});
/************************************************************************************
* Guardar Cita con CASH
*************************************************************************************/
$("#btnGuardarReservaCash").click(function () {

    var ArrayInputs = [
        '#cita_fechaCash',
        '#cita_automodeloCash',
        '#cita_autocolorCash',
        '#cita_autoplacaCash',
    ];

    //var from = $('#cita_fechaCash').val().split("/");
    var datestring = $('#cita_fechaCash').val();
   //var navidad =new Date("2020-12-25");
   fecha =  new Date(datestring);


    //PARA VALIDAR HORAS PASADAS A LA ACTUAL
    var fechaSola  = $('#cita_fechaCash').val();
    var hora = $("#turn_idCash option:selected").text();
    var FechaConHora = fechaSola+ " " + hora;
    var FechaReservar = new Date(FechaConHora);
    var FechaActual = new Date();


    //alert(hora);
    //alert(from[1]);
    // if (fecha.valueOf() == "1608872400000"){
    //     alert ("SON IGUALES");
    // }
    //alert(fecha.valueOf());//1608872400000 NAVIDAD
    //alert(fecha.valueOf());//1609477200000 AÑO NUEVO
    //alert(navidad.valueOf());//1608854400000

    //var f = new Date(from[2], from[1], from[0])
    //var date = new date();
    var weekdays = ["0", "1", "2", "3", "4", "5", "6"];

    var weekday = weekdays[fecha.getDay()];


    var ResultadoValidacion = ValidarVista(ArrayInputs);


     //VALIADAR HORAS PASADAS
     //alert(FechaReservar.valueOf());
     //alert(FechaActual.valueOf());



    //VALIADAR QUE NO SE SELECCIONE SABADOS NI DOMINGOS NI NAVIDAD NI AÑO NUEVO
    if (weekday == 0 || weekday == 6 || fecha.valueOf() == "1608872400000" || fecha.valueOf() == "1609477200000"){
        swal("Warning!", "Our hours of operation are from Monday to Friday from 8:00 a.m. to 3:30 p.m.  and not attend holidays");
        ResultadoValidacionFecha = false;
    }
    else{
         //VALIADAR HORAS PASADAS A LA ACTUAL
        if (parseInt(FechaReservar.valueOf()) < parseInt(FechaActual.valueOf())){
            swal("Warning!", "Unfortunately, you are not able to register since the schedule is full. Please try again and register with an available time slot.");
            ResultadoValidacionFecha = false;
        }
        else{
            //alert("PASE AQUI");
            ResultadoValidacionFecha = true;
        }
    }




    if (ResultadoValidacion != false && ResultadoValidacion == true && ResultadoValidacionFecha == true) {


    var paci_id = 1;
    var cita_fecha = $('#cita_fechaCash').val()
    var tipo_idprueba = $("#tipo_idpruebaCash option:selected").val();
    var cita_pruebanombre = $("#tipo_idpruebaCash option:selected").text();
    var turn_id = $("#turn_idCash option:selected").val();
    var cita_turno = $("#turn_idCash option:selected").text();
    var moti_id = $("#moti_idCash option:selected").val();
    var cita_motivo =  $("#moti_idCash option:selected").text();
    var cita_automodelo = $('#cita_automodeloCash').val();
    var cita_autocolor = $('#cita_autocolorCash').val();
    var cita_autoplaca = $('#cita_autoplacaCash').val();
    var cita_tipopago= "cash";
    var site_id = $("#site_idCash option:selected").val();
    var usua_id = 1;

        swal({
            title: "Are you sure?",
            text: "The appointment will be reserved",
            icon: "info",
            buttons: true,
            dangerMode: false,
          })
          .then((willConfirm) => {
            if (willConfirm) {
                $correo = willConfirm;
                //console.log($correo);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/RegistrarCitaCash',
                    data: {
                        'paci_id': paci_id,
                        'cita_fecha': cita_fecha,
                        'tipo_idprueba': tipo_idprueba,
                        'cita_pruebanombre': cita_pruebanombre,
                        'turn_id': turn_id,
                        'cita_turno': cita_turno,
                        'moti_id': moti_id,
                        'cita_motivo': cita_motivo,
                        'cita_automodelo': cita_automodelo,
                        'cita_autocolor': cita_autocolor,
                        'cita_autoplaca': cita_autoplaca,
                        'cita_tipopago':cita_tipopago,
                        'site_id':site_id,
                        'usua_id': usua_id
                    },

                    success: function (data) {
                        //alert(data);
                        //var obj = JSON.parse(data);
                        //alert(obj.result_code);
                        if (data == "NOCUPO"){
                            swal("Warning!", "Unfortunately, you are not able to register since the schedule is full. Please try again and register with an available time slot.");
                        }else{

                            if (data == "A"){
                                swal("Success! Don't forget to confirm your appointment calling (704) 333-0465", {
                                    icon: "success",

                                  }).then(function() {
                                    //alert(data);
                                    window.location.href = "/inicio";
                                    });
                            }else{
                                swal("Oops!", "Try again!", "error");
                            }
                        }


                    },
                    error: function (data) {

                        swal("Oops!", "I think something went wrong, try again", "error");
                    },
                });
            } else {
                swal("Oops", "You seem not ready", "error");
            }
          });
    }

});

/************************************************************************************
* GuardarSolicitud
*
*************************************************************************************/
$("#btnGuardarSolicitud").click(function () {

    var ArrayInputs = [
        '#soli_primernombre',
        '#soli_segundonombre',
        '#soli_primerapellido',
        '#soli_segundoapellido',
        '#soli_puesto',
        '#soli_remplazo',
        '#soli_fechaingreso',
        '#area_id',
        '#soli_DNI'
    ];

    if ($('#soli_email').is(":checked")) { $soli_email = "SI"; } else { $soli_email = "NO"; }
    if ($('#soli_anexo').is(":checked")) { $soli_anexo = "SI"; } else { $soli_anexo = "NO"; }
    if ($('#soli_clavetelefonica').is(":checked")) { $soli_clavetelefonica = "SI"; } else { $soli_clavetelefonica = "NO"; }
    if ($('#soli_dynamics7').is(":checked")) { $soli_dynamics7 = "SI"; } else { $soli_dynamics7 = "NO"; }
    if ($('#soli_dynamics2015').is(":checked")) { $soli_dynamics2015 = "SI"; } else { $soli_dynamics2015 = "NO"; }
    if ($('#soli_adryan').is(":checked")) { $soli_adryan = "SI"; } else { $soli_adryan = "NO"; }
    if ($('#soli_mviaticos').is(":checked")) { $soli_mviaticos = "SI"; } else { $soli_mviaticos = "NO"; }
    if ($('#soli_mevaluacion').is(":checked")) { $soli_mevaluacion = "SI"; } else { $soli_mevaluacion = "NO"; }
    if ($('#soli_mcapacitacion').is(":checked")) { $soli_mcapacitacion = "SI"; } else { $soli_mcapacitacion = "NO"; }
    if ($('#soli_mnoconformidades	').is(":checked")) { $soli_mnoconformidades = "SI"; } else { $soli_mnoconformidades = "NO"; }

    var ResultadoValidacion = ValidarVista(ArrayInputs);

    if (ResultadoValidacion != false && ResultadoValidacion == true) {

        swal({
            title: "Estamos Listos!!!",
            text: "Dejanos tu correo para enviarte una copia de la notificación",
            icon: "info",
            content: "input",
            buttons: true,
            dangerMode: false,
          })
          .then((willConfirm) => {
            if (willConfirm) {
                $correo = willConfirm;
                //console.log($correo);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "post",
                    url: "/RegistrarSolicitud",
                    data: {
                        'empr_id': $('#empr_id').val(),
                        'soli_primernombre': $('#soli_primernombre').val(),
                        'soli_segundonombre': $('#soli_segundonombre').val(),
                        'soli_primerapellido': $('#soli_primerapellido').val(),
                        'soli_segundoapellido': $('#soli_segundoapellido').val(),
                        'soli_puesto': $('#soli_puesto').val(),
                        'soli_remplazo': $('#soli_remplazo').val(),
                        'soli_fechaingreso': $('#soli_fechaingreso').val(),
                        'area_id': $('#area_id').val(),
                        'soli_DNI': $('#soli_DNI').val(),
                        'soli_email': $soli_email,
                        'soli_anexo': $soli_anexo,
                        'soli_clavetelefonica': $soli_clavetelefonica,
                        'soli_dynamics7': $soli_dynamics7,
                        'soli_dynamics2015': $soli_dynamics2015,
                        'soli_adryan': $soli_adryan,
                        'soli_mviaticos': $soli_mviaticos,
                        'soli_mevaluacion': $soli_mevaluacion,
                        'soli_mcapacitacion': $soli_mcapacitacion,
                        'soli_mnoconformidades': $soli_mnoconformidades
                    },
                    success: function (data) {
                        //alert("success");
                        swal("Listo! Revise su bandeja de correo", {
                            icon: "success",
                          });
                    },
                    error: function (data) {

                        swal("Uy!", "Creo que algo salio mal, vuelve a intentar", "error");
                    },
                });
            } else {
                swal("Oops", "Parece que no estas listo", "error");
            }
          });
    }

});

/************************************************************************************
* Guardar Marca --> marcas.blade.php
*************************************************************************************/
$("#btnGuardarMarca").click(function () {

    var ArrayInputs = [
        '#marc_nombre',
    ];

    var ResultadoValidacion = ValidarVista(ArrayInputs);

    if (ResultadoValidacion != false && ResultadoValidacion == true) {

        var marc_nombre = $('#marc_nombre').val()
        var tipo_idEquipo = $("#tipo_idEquipo option:selected").val();
        var marc_equipoNombre = $("#tipo_idEquipo option:selected").text();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/RegistrarMarca',
                data: {

                    'tipo_idEquipo': tipo_idEquipo,
                    'marc_equipoNombre': marc_equipoNombre,
                    'marc_nombre': marc_nombre,
                },

                success: function (data) {

                    if (data == true){
                        swal("Registrado con exito", {
                            icon: "success",

                          }).then(function() {
                            //alert(data);
                            window.location.href = "/inicio";
                            });
                    }else{
                        swal("Oops!", "Ocurrio un problema", "error");
                    }
                },
                error: function (data) {
                    alert(data);
                    //swal("Uy!", "Creo que algo salio mal, vuelve a intentar", "error");
                },
            });
    }

});

/************************************************************************************
* Guardar Equipo --> equipos.blade.php
*************************************************************************************/
$("#btnGuardarEquipo").click(function () {

    var ArrayInputs = [
        '#equi_serie',
        '#equi_modelo',
        '#equi_color',
    ];

    var ResultadoValidacion = ValidarVista(ArrayInputs);

    if (ResultadoValidacion != false && ResultadoValidacion == true) {

        var tipo_idEquipo = $('#tipo_idEquipo').val()
        var equi_nombreTipoEquipo = $("#tipo_idEquipo option:selected").text();
        var equi_serie = $('#equi_serie').val()
        var marc_id = $('#marc_id').val()
        var equi_marcaNombre = $("#marc_id option:selected").text();
        var equi_modelo = $('#equi_modelo').val()
        var equi_color = $('#equi_color').val()
        var equi_estado = $("input[name='gridRadios']:checked").val()
        var equi_comentarios = $('#equi_comentarios').val()


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/RegistrarEquipo',
                data: {

                    'tipo_idEquipo': tipo_idEquipo,
                    'equi_nombreTipoEquipo': equi_nombreTipoEquipo,
                    'equi_serie': equi_serie,
                    'marc_id': marc_id,
                    'equi_marcaNombre': equi_marcaNombre,
                    'equi_modelo': equi_modelo,
                    'equi_color': equi_color,
                    'equi_estado': equi_estado,
                    'equi_comentarios': equi_comentarios,
                },

                success: function (data) {

                    if (data == true){
                        swal("Registrado con exito", {
                            icon: "success",

                          }).then(function() {
                            //alert(data);
                            window.location.href = "/inicio";
                            });
                    }else{
                        swal("Oops!", "Ocurrio un problema", "error");
                    }
                },
                error: function (data) {
                    alert(data);
                    //swal("Uy!", "Creo que algo salio mal, vuelve a intentar", "error");
                },
            });
    }

});

/************************************************************************************
* Guardar Area --> areas.blade.php
*************************************************************************************/
$("#btnGuardarArea").click(function () {

    var ArrayInputs = [
        '#area_nombre',
    ];

    var ResultadoValidacion = ValidarVista(ArrayInputs);

    if (ResultadoValidacion != false && ResultadoValidacion == true) {


    }

});

/************************************************************************************
* Guardar Proyecto --> proyectos.blade.php
*************************************************************************************/
$("#btnGuardarProyecto").click(function () {

    var ArrayInputs = [
        '#proy_nombre',
    ];

    var ResultadoValidacion = ValidarVista(ArrayInputs);

    if (ResultadoValidacion != false && ResultadoValidacion == true) {


    }

});



/************************************************************************************
* Funcion para validar campos vacios en alguna vista
* Recibe un array de inputs
*************************************************************************************/
function ValidarVista(parametro) {

    var validacion = true;
    for (i = 0; i < parametro.length; i++) {
        //alert(parametro[i]);

        if ($(parametro[i]).val() == "") {
            $(parametro[i]).addClass("is-invalid");
            validacion = false;
        }
        else { $(parametro[i]).removeClass("is-invalid"); };
    }
    //alert(parametro);
    return validacion;
}
