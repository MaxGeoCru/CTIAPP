@component('mail::message')
@component('mail::table')
# Introduction
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>

<style type="text/css">
   .table tbody>tr>td.rowbot.rowbot {
     border-bottom: 3px solid;
   }
   .table tbody>tr>td.rowtop.rowtop {
     border-top: 3px solid;
   }
   .table tbody>tr>td.rowleft.rowleft {
     border-left: 3px solid;
   }
   .table tbody>tr>td.rowright.rowright{
     border-right: 3px solid;
   }

   .tableEmail table {
      border: 0.5px solid black;
   }
   .tableEmail td {
      border: 0.5px solid black;
   }
   .tableEmail th {
      border: 0.5px solid black;
   }
   .tableEmail tbody {
      border: 0.5px solid black;
   }


   .tableEmail {
      border-collapse: collapse;
   }


}
</style>
</head>
<body>

<div class="container-fluid">
<div class="table-responsive">

   <table class="table table-bordered tableEmail">
      <tbody>
         <tr class="col-md-12 " style="text-align: center;">
            <td colspan="2" class="col-md-6 rowright rowleft  rowtop text-center table-primary" style="background-color: #b8daff;" ><b>DATOS PERSONALES</b></td>
            <td colspan="2" class="col-md-6 rowtop rowleft rowright text-center table-primary" style="background-color: #b8daff;"><b>DATOS DE INGRESO</b></td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>EMAIL PERSONAL</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_email']}}</td>
            <td class="col-md-3 "><b>COMPAÑIA<</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_compania']}}</td>
         </tr>
         <tr class="col-md-12" style="text-align: center;"> 
            <td class="col-md-3 rowleft"><b>PRIMER NOMBRE</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_nombre']}}</td>
            <td class="col-md-3"><b>FECHA INGRESO</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_fecha']}}</td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>SEGUNDO NOMBRE</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_segundonombre']}}</td>
            <td class="col-md-3"><b>AREA<</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_area']}} </td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>APELLIDO PATERNO</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_apepat']}}</td>
            <td class="col-md-3"><b>PUESTO</b></td> 
            <td class="col-md-3 rowright">{{$datos['ingr_puesto']}}</td>
         </tr>
         <tr class="col-md-12 "  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>APELLIDO MATERNO</b></td>
            <td class="col-md-3 rowright" >{{$datos['ingr_apemat']}}</td>
            <td class="col-md-3"><b>REMPLAZO DE </b></td>
            <td class="col-md-3 rowright ">{{$datos['ingr_remplazo']}}</td>
         </tr>
         <tr class="col-md-12 "  style="text-align: center;">
            <td class="col-md-3 rowleft rowbot"><b>DNI<</b></td>
            <td class="col-md-3 rowright rowbot">{{$datos['ingr_dni']}}</td>
            <td colspan="2"  class="col-md-6 rowright rowbot"></td>
         </tr>
         <tr  class="col-md-12 rowtop" style="text-align: center;">
            <td  colspan="4" CLASS="col-md-12 text-center rowright rowleft  table-primary" style="background-color: #b8daff;"><b>ACCESOS GERENCIALES </b></td>
         </tr>
         <tr class="col-md-12" style="text-align: center;">
            <td class="col-md-3 rowleft"><b>CORREO CORPORATIVO</b></td>
            <td class="col-md-3">{{$datos['ingr_ccorporativo']}}</td>
            <td colspan="2" class="col-md-6 rowright"></td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>ANEXO TELEFONICO</b></td>
            <td class="col-md-3">{{$datos['ingr_anexo']}}</td>
            <td colspan="2" class="col-md-6 rowright"></td>
         </tr>
         <tr class="col-md-12 "  style="text-align: center;">
            <td class="col-md-3 rowleft rowbot"><b>CARPETAS RESTRINGIDAS</b></td>
            <td class="col-md-3 rowbot">{{$datos['ingr_carpetas']}}</td>
            <td colspan="2"  class="col-md-6 rowbot rowright"></td>
         </tr>
         <tr class="col-md-12 rowtop" style="text-align: center;">
            <td  colspan="4" CLASS="col-md-12 text-center rowright rowleft table-primary" style="background-color: #b8daff;"><b>ACCESOS A SISTEMAS DE INFORMACION </b></td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td  class="col-md-3 rowleft"><b>DYNAMICS</b></td>
            <td colspan="3" class="col-md-9 rowright">{{$datos['ingr_dynamics']}}</td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>ADRIAN</b></td>
            <td colspan="3" class="col-md-9 rowright">{{$datos['ingr_adryan']}}</td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>M.VIATICOS</b></td>
            <td class="col-md-3">{{$datos['ingr_mviaticos']}}</td>
            <td class="col-md-3"><b>M. CAPACITACION</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_mcapacitacion']}}</td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>M.EVALUACION</b></td>
            <td class="col-md-3">{{$datos['ingr_mevaluacion']}}</td>
            <td class="col-md-3"><b>M. NO CONFORMIDAD</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_mconformidades']}}</td>
         </tr>
         <tr class="col-md-12"  style="text-align: center;">
            <td class="col-md-3 rowleft"><b>RPTS</b></td>
            <td class="col-md-3">{{$datos['ingr_rpts']}}</td>
            <td class="col-md-3"><b>COMPRADOR(A)</b></td>
            <td class="col-md-3 rowright">{{$datos['ingr_compradora']}}</td>
         </tr>
         <tr  class="col-md-12"  style="text-align: center;">
              <td  colspan="4" CLASS="col-md-12 text-center rowleft rowright" ><b>OBSERVACIONES/NOTAS GENERALES</b> </td>
         </tr>
         <tr class="col-md-12 rowbot"  style="text-align: center;">
              <td colspan="4" rowspan="3"  class="col-md-12 rowleft rowbot rowright">{{$datos['equi_comentarios']}}<br><br><br></td>
         </tr>      
      </tbody>
   </table>
</div>
</div>
</body>
</html>
@endcomponent
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
