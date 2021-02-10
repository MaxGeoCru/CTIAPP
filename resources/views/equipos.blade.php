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
                            <h3><i class="fa fa-check-square-o"></i> Horizontal form</h3>
                            Create horizontal forms with the grid by adding the <i>.row</i> class to form groups and using the <i>.col-*-*</i> classes to specify the width of your labels and controls.
                        </div>

                            <div class="card-body">


                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="email" class="form-control form-control-sm" id="inputEmail3" placeholder="Email" required>
                                            <div class="invalid-feedback">
										        Please provide a valid city.
									        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control form-control-sm" id="inputPassword3" placeholder="Password" autocomplete="off">
                                        </div>
                                    </div>


                            </div>
                            <div class="card-footer">
                                <a role="button" class="btn btn-primary pull-right" href="#">Primary</a>
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
