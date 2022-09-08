
@extends('plantilla')

@section('seccion')


  <!-- Start content -->
  <div class="content">

    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb-holder">
            <h1 class="main-title ">Bienvenido</h1>

            <ol class="breadcrumb float-right">

            </ol>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Plataforma de gestión CTI APP</h4>
        <p>Gestión general de tecnologías de información</p>
        <div class="button-list">
            <a role="button" href="{{route('ingresos')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Solcitud de nuevo ingreso</a>
        </div>
      </div>





    </div>
    <!-- END container-fluid -->

  </div>
  <!-- END content -->

@endsection('seccion')
