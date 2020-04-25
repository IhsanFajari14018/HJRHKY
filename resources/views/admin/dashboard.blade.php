@extends('admin/master_a')

@section('html_title')
<title>Dashboard | Admin HJRHKY</title>
@endsection

@section('page_title')
<h4 class="page-title">Dashboard</h4>
@endsection

@section('styling')
<link href="{{ secure_asset('/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
<link href="{{ secure_asset('/dist/css/style.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
<!-- none -->
@endsection

@section('main_content')
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                <h6 class="text-white">11 Hastags</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline ml-2"></i></h1>
                <h6 class="text-white">33 Pertanyaan Masuk</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                <h6 class="text-white">32 Widgets</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                <h6 class="text-white">Tables</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                <h6 class="text-white">Full Width</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                <h6 class="text-white">Forms</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                <h6 class="text-white">Buttons</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                <h6 class="text-white">Elements</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                <h6 class="text-white">Calnedar</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                <h6 class="text-white">Errors</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->
<div class="row">

    <!-- LEFT SIDE -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Latest Question</h4>
            </div>
            <div class="comment-widgets scrollable">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2"><img src="{{ secure_asset('assets/images/users/1.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h6 class="font-medium">Jajang Konelo</h6>
                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                        <div class="comment-footer">
                            <span class="text-muted float-right">April 14, 2020</span>
                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><img src="{{ secure_asset('assets/images/users/4.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text active w-100">
                        <h6 class="font-medium">Ade Korek</h6>
                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                        <div class="comment-footer">
                            <span class="text-muted float-right">May 10, 2020</span>
                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><img src="{{ secure_asset('assets/images/users/5.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h6 class="font-medium">Asep Panci</h6>
                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                        <div class="comment-footer">
                            <span class="text-muted float-right">August 1, 2020</span>
                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@section('queries')
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ secure_asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ secure_asset('/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ secure_asset('/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ secure_asset('/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ secure_asset('/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ secure_asset('/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ secure_asset('/dist/js/custom.min.js') }}"></script>
<!--This page JavaScript -->
<script src="{{ secure_asset('/dist/js/pages/dashboards/dashboard1.js') }}"></script>
@endsection