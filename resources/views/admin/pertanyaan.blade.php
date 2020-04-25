@extends('admin/master_a')

@section('html_title')
<title>Daftar Pertanyaan | Admin HJRHKY</title>
@endsection

@section('page_title')
<h4 class="page-title">Daftar Pertanyaan</h4>
@endsection

@section('styling')
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ secure_asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link href="{{ secure_asset('/dist/css/style.min.css') }}" rel="stylesheet">
<link href="{{ secure_asset('/dist/css/style.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Pertanyaan</li>
@endsection

@section('main_content')
<div class="row">
    <div class="col-12">
        <!-- DATATABLE -->
        <div class="card">
            <div class="card-body">
                <!-- <h5 class="card-title">Basic Datatable</h5> -->
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <!-- <th>Nama</th> -->
                                <th>Tanggal</th>
                                <th>Pertanyaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questioner as $q)
                            <tr>
                                <td>{{ $q->id }}</td>
                                <!-- <td>{{ $q->name }}</td> -->
                                <td>{{ $q->created_at }}</td>
                                <td>{{ $q->question }}</td>
                                <td>
                                    <a class="btn btn-info" href="#"> Jawab </a>
                                    <a class="btn btn-danger" href="/remove-question/{{ $q->id }}"> Hapus </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('queries')
<script src="{{ secure_asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ secure_asset('/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ secure_asset('/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ secure_asset('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ secure_asset('/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ secure_asset('/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ secure_asset('/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ secure_asset('/dist/js/custom.min.js') }}"></script>
<!-- this page js -->
<script src="{{ secure_asset('/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ secure_asset('/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ secure_asset('/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
    /*******************************************
     * Basic Table - with disabled auto order  *
     *******************************************/
    $('#zero_config').DataTable({
        "order": [[ 0, "desc"]]
    });
</script>
@endsection