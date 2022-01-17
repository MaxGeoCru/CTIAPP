@extends('plantilla')

@section('seccion')

    <!-- Start content -->
<div class="content">

        <div class="container-fluid">

            <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title">{{ $menu->menu_descripcion }}</h1>

                    <ol class="breadcrumb float-right">

                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
            </div>
            <!-- end row -->

            <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-check-square-o"></i> Datos personales</h3>
                                Informacion personal
                            </div>

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="ingr_email" class="col-sm-4 col-form-label">Email Personal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_email" name="ingr_email" placeholder="juan@gmail.com" >
                                        <div class="invalid-feedback">
                                            Ingrese un nombre valido
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="ingr_nombre" class="col-sm-4 col-form-label">Nombre</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_nombre" name="ingr_nombre" placeholder="Juan" >
                                        <div class="invalid-feedback">
                                            Ingrese un nombre valido
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="ingr_segundonombre" class="col-sm-4 col-form-label">Segundo Nombre</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_segundonombre" name="ingr_segundonombre" placeholder="Pedro" >
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="ingr_apepat" class="col-sm-4 col-form-label">Apellido Paterno</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_apepat" name="ingr_apepat" placeholder="Perez" >
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="ingr_apemat" class="col-sm-4 col-form-label">Apellido Materno</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_apemat" name="ingr_apemat" placeholder="Quispe" >
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ingr_dni" class="col-sm-4 col-form-label">DNI</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_dni" name="ingr_dni" placeholder="Nro. Documento" >
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end card body-->                           
                        </div><!-- end card-->
                    </div><!-- end div col-lg-->

                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-check-square-o"></i> Datos de Ingreso</h3>
                                Informacion de registro
                            </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="tipo_idEquipo" class="col-sm-4 col-form-label">Compañia</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" name="ingr_compania" id="ingr_compania">                                            
                                            <option value="">-- SELECCIONE -- </option>
                                            <option value="GEODRILL SAC">GEODRILL SAC</option>
                                            <option value="CRUBHER SRL">CRUBHER SRL</option>
                                            <option value="CRUBHER INC">CRUBHER INC</option>
                                            <option value="GEODRILL SA de CV">GEODRILL SA de CV</option>
                                            <option value="ECUADRILL">ECUADRILL</option>
                                            <option value="GEODRILL SONDAJES">GEODRILL SONDAJES</option>
                                            <option value="JR CONSULTORES">JR CONSULTORES</option>
                                            <option value="GEODRILL SA">GEODRILL SA</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row" id="GRPingr_fecha">
                                    <label for="ingr_fecha" class="col-sm-4 col-form-label">Fec. Ingreso</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="ingr_fecha" id="ingr_fecha" />
                                        </div>
                                </div>
                                
                                <div class="form-group row" id="GRPingr_area">
                                    <label for="ingr_area" class="col-sm-4 col-form-label">Area</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_area" name="ingr_area" placeholder="Contabilidad" >
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row"  id="GRPingr_puesto">
                                    <label for="ingr_puesto" class="col-sm-4 col-form-label">Puesto</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_puesto" name="ingr_puesto" placeholder="Asistente de caja" >
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end card body-->                           
                        </div><!-- end card-->
                    </div><!-- end div col-lg-->

            </div>
            <!-- END Row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-check-square-o"></i> Accesos Generales</h3>
                                Permisos generales a recursos corporativos
                            </div>

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="ingr_ccorporativo" class="col-sm-4 col-form-label">Correo Corporativo</label>
                                    <div class="col-sm-8">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_ccorporativo" id="ingr_ccorporativo">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="ingr_anexo" class="col-sm-4 col-form-label">Anexo Telefonico</label>
                                    <div class="col-sm-8">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_anexo" id="ingr_anexo">                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="ingr_carpetas" class="col-sm-4 col-form-label">Carpetas Restringidas</label>
                                    <div class="col-sm-8">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_carpetas" id="ingr_carpetas">                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row" id="GRPingr_remplazo">
                                    <label for="ingr_remplazo" class="col-sm-4 col-form-label">Remplazo de </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="ingr_remplazo" name="ingr_remplazo" placeholder="Maria Fernandez" >
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="ingr_heredar" class="col-sm-4 col-form-label">¿Heredar permisos?</label>
                                    <div class="col-sm-8">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_heredar" id="ingr_heredar">                                        
                                    </div>
                                </div>

                            </div><!-- end card body-->                           
                        </div><!-- end card-->
                    </div><!-- end div col-lg-->
                </div>
                <!-- END Row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-check-square-o"></i> Accesos a Sistemas de Informacion</h3>
                                Permisos generales a sistemas y aplicativos corporativos
                            </div>

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="ingr_dynamics" class="col-sm-4 col-form-label">Microsoft Dynamics</label>
                                    <div class="col-sm-8">
                                    <select class="form-control select2" id="ingr_dynamics" name="" multiple="ingr_dynamics">    
                                        <option value="Geodrill">Geodrill</option>
                                        <option value="Crubher">Crubher</option>
                                        <option value="Geodrillsondajes">Geodrillsondajes</option>
                                        <option value="Crubher INC">Crubher INC</option>
                                        <option value="Geodrill SA de CV">Geodrill SA de CV</option>
                                        <option value="Ecuadrill">Ecuadrill</option>
                                        <option value="JR Consultores">JR Consultores</option>
                                        <option value="Geodrill SA Bolivia">Geodrill SA Bolivia</option>
								    </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ingr_adryan" class="col-sm-4 col-form-label">Adryan (RRHH)</label>
                                    <div class="col-sm-8">
                                    <select class="form-control select2" id="ingr_adryan" name="" multiple="ingr_adryan">    
                                        <option value="Geodrill">Geodrill</option>
                                        <option value="Crubher">Crubher</option>
                                        <option value="Geodrillsondajes">Geodrillsondajes</option>
                                        <option value="Crubher INC">Crubher INC</option>
                                        <option value="Geodrill SA de CV">Geodrill SA de CV</option>
                                        <option value="Ecuadrill">Ecuadrill</option>
                                        <option value="JR Consultores">JR Consultores</option>
                                        <option value="Geodrill SA Bolivia">Geodrill SA Bolivia</option>
								    </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="ingr_mviaticos" class="col-form-label">Modulo Viaticos</label>                                
                                    </div>
                                    <div class="col-3">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_mviaticos" id="ingr_mviaticos">                              
                                    </div>
                                    <div class="col-3">
                                        <label for="ingr_mcapacitacion" class="col-form-label">Modulo Capacitacion</label>                                
                                    </div>
                                    <div class="col-3">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_mcapacitacion" id="ingr_mcapacitacion"> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="ingr_mevaluacion" class="col-form-label">Modulo Evaluacion</label>                                
                                    </div>
                                    <div class="col-3">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_mevaluacion" id="ingr_mevaluacion">                              
                                    </div>
                                    <div class="col-3">
                                        <label for="ingr_mconformidades" class="col-form-label">Modulo NC</label>                                
                                    </div>
                                    <div class="col-3">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_mconformidades" id="ingr_mconformidades"> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="proy_nombre" class="col-form-label">RPTS</label>                                
                                    </div>
                                    <div class="col-3">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_rpts" id="ingr_rpts">                              
                                    </div>
                                    <div class="col-3">
                                        <label for="proy_nombre" class=" col-form-label">Compradora</label>                                
                                    </div>
                                    <div class="col-3">
                                        <input type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-onstyle="success" data-offstyle="danger" data-size="sm" name="ingr_compradora" id="ingr_compradora"> 
                                    </div>
                                </div>

                                <div class="form-group row" id="GRPingr_remplazo">
                                    <label for="ingr_remplazo" class="col-sm-4 col-form-label">Observaciones / Comentarios </label>
                                    <div class="col-sm-8">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <div class="invalid-feedback">
                                            Ingrese un dato valido
                                        </div>
                                    </div>
                                </div>
                                
                               

                            </div><!-- end card body-->
                            <div class="card-footer">
                                <button class="btn btn-primary pull-right" name="btnRegistrarIngreso" id="btnRegistrarIngreso" type="button">Registrar Ingreso</button>
                            </div>                           
                        </div><!-- end card-->
                    </div><!-- end div col-lg-->
                </div>
                <!-- END Row-->


            


        </div>
        <!-- END container-fluid -->

</div>
<!-- END content -->

 <!-- Datepicker script funcionaly -->
    <script>
        $(function() {
            $('.select2').select2(); // SOLO PARA FORMATO SELECT2

            $('input[name="ingr_fecha"]').daterangepicker({
                singleDatePicker: true,                
                showDropdowns: true,                
            });
        });
        
    </script>


@endsection('seccion')
