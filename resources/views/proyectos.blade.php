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
                            <h3><i class="fa fa-check-square-o"></i> Agregar nuevos proyectos</h3>
                             Mantenimiento de proyectos  (activar, desactivar)
                        </div>

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="proy_nombre" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="proy_nombre" name="proy_nombre" placeholder="Montonero" >
                                        <div class="invalid-feedback">
                                            Ingrese un nombre valido
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="proy_estado" class="col-sm-3 col-form-label">Estado</label>
                                    <div class="col-sm-3">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="proy_estado"  value="ACTIVO" checked>Activo
                                            </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="proy_estado" value="INACTIVO">Inactivo
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="equi_comentarios" class="col-sm-2 col-form-label">Comentarios</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" id="proy_comentarios" name="proy_comentarios" rows="3"></textarea>
                                    </div>
                                </div>

                            </div><!-- end card body-->
                            <div class="card-footer">
                                <button class="btn btn-primary pull-right" name="btnGuardarProyecto" id="btnGuardarProyecto" type="button">Guardar</button>
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
