
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
        <h4 class="alert-heading">Reservation platform CENTRO MÉDICO LATINO</h4>
        <p>On this platform you can book your medical appointments</p>
        <div class="button-list">

            <a role="button" href="#" class="btn btn-primary btn-block"><i class="fa fa-credit-card-alt m-r-5"></i> New reservation - Credit card Payment</a>
            <a role="button" href="#" class="btn btn-primary btn-block"><i class="fa fa-dollar m-r-5"></i> New reservation - Credit card Payment</a>
        </div>
      </div>





    </div>
    <!-- END container-fluid -->

  </div>
  <!-- END content -->

@endsection('seccion')
