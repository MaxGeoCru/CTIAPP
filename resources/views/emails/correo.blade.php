<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<style type="text/css">

   .table tbody>tr>td.rowbot.rowbot {
     border-bottom: 2px solid;
   }
   .table tbody>tr>td.rowtop.rowtop {
     border-top: 2px solid;
   }
   .table tbody>tr>td.rowleft.rowleft {
     border-left: 2px solid;
   }
   .table tbody>tr>td.rowright.rowright{
     border-right: 2px solid;
   }

   table.table-bordered > tbody > tr > td{
    border:0.5px solid #CECBCA;
}

</style>


</head>
<body>

<div class="container-fluid">
   <div class="table-responsive-md">
   <table class="table-bordered table table-hover" >
      <tbody>
         <tr class="col-md-12 ">
            <td colspan="2" class="col-md-6 rowright rowleft  rowtop text-center table-primary" >DATOS PERSONALES</td>
            <td colspan="2" class="bd-right rowtop rowright text-center table-primary" >DATOS DE INGRESO</td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">EMAIL PROFESIONAL</td>
            <td class="col-md-3 rowright">{{$datos['ingr_email']}}</td>
            <td class="col-md-3 ">COMPAÑIA</td>
            <td class="col-md-3 rowright"></td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">PRIMER NOMBRE</td>
            <td class="col-md-3 rowright"></td>
            <td class="col-md-3">FECHA INGRESO</td>
            <td class="col-md-3 rowright"></td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">SEGUNDO NOMBRE</td>
            <td class="col-md-3 rowright"></td>
            <td class="col-md-3">AREA</td>
            <td class="col-md-3 rowright"> </td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">APELLIDO PATERNO</td>
            <td class="col-md-3 rowright"></td>
            <td class="col-md-3">PUESTO</td> 
            <td class="col-md-3 rowright"></td>
         </tr>
         <tr class="col-md-12 ">
            <td class="col-md-3 rowleft">APELLIDO MATERNO</td>
            <td class="col-md-3 rowright" ></td>
            <td class="col-md-3">REMPLAZO DE </td>
            <td class="col-md-3 rowright "></td>
         </tr>
         <tr class="col-md-12 ">
            <td class="col-md-3 rowleft rowbot">DNI</td>
            <td class="col-md-3 rowright rowbot"></td>
            <td colspan="2"  class="col-md-6 rowright rowbot"></td>
         </tr>
         <tr  class="col-md-12 rowtop">
            <td  colspan="4" CLASS="text-center rowright rowleft  table-primary">ACCESOS GERENCIALES </td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">CORREO CORPORATIVO</td>
            <td class="col-md-3"></td>
            <td colspan="2" class="col-md-6 rowright"></td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">ANEXO TELEFONICO</td>
            <td class="col-md-3"></td>
            <td colspan="2" class="col-md-6 rowright"></td>
         </tr>
         <tr class="col-md-12 ">
            <td class="col-md-3 rowleft rowbot">CARPETAS RESTRINGIDAS</td>
            <td class="col-md-3 rowbot"></td>
            <td colspan="2"  class="col-md-6 rowbot rowright"></td>
         </tr>
         <tr class="col-md-12 rowtop">
            <td  colspan="4" CLASS="text-center rowright rowleft table-primary" >ACCESOS A SISTEMAS DE INFORMACION </td>
         </tr>
         <tr class="col-md-12">
            <td  class="col-md-3 rowleft">DYNAMICS</td>
            <td colspan="3" class="col-md-9 rowright"></td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">ADRIAN</td>
            <td colspan="3" class="col-md-9 rowright"></td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">M.VIATICOS</td>
            <td class="col-md-3"></td>
            <td class="col-md-3">M. CAPACITACION</td>
            <td class="col-md-3 rowright"></td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">M.EVALUACION</td>
            <td class="col-md-3"></td>
            <td class="col-md-3">M. NO CONFORMIDAD</td>
            <td class="col-md-3 rowright"></td>
         </tr>
         <tr class="col-md-12">
            <td class="col-md-3 rowleft">RPTS</td>
            <td class="col-md-3"></td>
            <td class="col-md-3">COMPRADOR(A)</td>
            <td class="col-md-3 rowright"></td>
         </tr>
         <tr  class="col-md-12">
              <td  colspan="4" CLASS="text-center rowleft rowright col-md-12" >OBSERVACIONES/NOTAS GENERALES </td>
         </tr>
         <tr class="col-md-12 rowbot">
              <td colspan="4" rowspan="3"  class="col-md-12 rowleft rowbot rowright"><br><br><br></td>
         </tr>      
      </tbody>
   </table>
   </div>
</div>
</body>
</html>