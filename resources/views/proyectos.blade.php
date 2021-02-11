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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-check-square-o"></i> Agregar nuevas marcas</h3>
                            Agregar marcass de equipos (PC, Laptop, Radio, Tablet, Celular, etc.)
                        </div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="tipo_idEquipo" class="col-sm-2 col-form-label">Tipo Equipo</label>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-sm" name="tipo_idEquipo" id="tipo_idEquipo">
                                            @foreach ($tipoEquipos as $item)
                                            <option value="{{$item->tipo_idEquipo}}">{{$item->tipo_nombreEquipo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marc_nombre" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="marc_nombre" name="marc_nombre" placeholder="Lenovo" >
                                        <div class="invalid-feedback">
                                            Ingrese un nombre valido
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end card body-->
                            <div class="card-footer">
                                <button class="btn btn-primary pull-right" name="btnGuardarMarca" id="btnGuardarMarca" type="button">Guardar</button>
                            </div>
                        </div><!-- end card-->
                    </div>

            </div>
            <!-- END Row-->


        </div>
        <!-- END container-fluid -->

</div>
<!-- END content -->


@endsection('seccion')
