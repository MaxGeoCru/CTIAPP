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
                            <h3><i class="fa fa-check-square-o"></i> Equipos</h3>
                             Agregar o dar de baja a equipos
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
                                        <label for="equi_serie" class="col-sm-2 col-form-label">Serie</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="equi_serie" name="equi_serie" placeholder="ABC123456">
                                            <div class="invalid-feedback">
										        Ingrese un numero de serie valido
									        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="marc_id" class="col-sm-2 col-form-label">Marca</label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm" name="marc_id" id="marc_id">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="equi_modelo" class="col-sm-2 col-form-label">Modelo</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="equi_modelo" name="equi_modelo" placeholder="L575" >
                                            <div class="invalid-feedback">
										        Ingrese modelo de equipo
									        </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="equi_color" class="col-sm-2 col-form-label">Color</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" id="equi_color" name="equi_color" placeholder="Negro" >
                                            <div class="invalid-feedback">
										        Ingrese color equipo
									        </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Estado</label>
                                        <div class="col-sm-3">
                                            <label class="form-check-label">
											    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>Activo
										     </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="form-check-label">
											    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>Inactivo
										    </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="equi_comentarios" class="col-sm-2 col-form-label">Comentarios</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" id="equi_comentarios" name="equi_comentarios" rows="3"></textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary pull-right" name="btnGuardarEquipo" id="btnGuardarEquipo" type="button">Guardar</button>
                            </div>
                        </div><!-- end card-->
                    </div>

            </div>
            <!-- END Row-->


        </div>
        <!-- END container-fluid -->

</div>
<!-- END content -->

<script>
$( "select[name='tipo_idEquipo']" ).change(function () {


    var tipo_idEquipo = $('#tipo_idEquipo').val();

    if(tipo_idEquipo) {

        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            url: '/ObtenerMarcaId/' + tipo_idEquipo,
            dataType: 'html',
            data: {},
            contentType: false,
            processData: false,
            success: function(resp) {
                //alert(resp);
                $('select[name="marc_id"]').empty();
                    $.each(JSON.parse(resp), function (i, post) {
                        //alert(post.marc_nombre);
                    $('select[name="marc_id"]').append('<option value="'+ post.marc_id +'">'+ post.marc_nombre +'</option>');
                });
            }
        });


    }else{
        $('select[name="city"]').empty();
    }
});
</script>

@endsection('seccion')
