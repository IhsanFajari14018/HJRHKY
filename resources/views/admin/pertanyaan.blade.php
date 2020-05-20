@extends('admin/master_a')

@section('html_title')
<title>Daftar Pertanyaan | Admin HJRHKY</title>
@endsection

@section('page_title')
<h4 class="page-title">Daftar Pertanyaan</h4>
@endsection

@section('styling')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link href="{{ asset('/dist/css/style.min.css') }}" rel="stylesheet">
<link href="{{ asset('/dist/css/style.css') }}" rel="stylesheet">
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
                                <th>Penanya</th>
                                <th>Tanggal</th>
                                <th>Hashtags</th>
                                <th>Pertanyaan</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questioner as $q)
                            <tr>
                                <td>{{ $q->id }}</td>
                                <td class="text-center">
                                    {{ $q->email }}
                                    <br>|<br>
                                    {{ $q->name }}
                                </td>
                                <td>{{ $q->created_at }}</td>
                                <td>
                                    @foreach($q->hashtags as $t)
                                    <div class="badge badge-pill badge-primary">
                                        {{$t->tag}}
                                    </div>
                                    @endforeach
                                </td>
                                <td>{{ $q->question }}</td>
                                <td>
                                    <a class="btn btn-info" href="/answer/{{ $q->id }}"> Jawab </a>
                                    <a class="btn btn-danger" href="/remove-question/{{ $q->id }}"> Hapus </a>
                                </td>
                                @if (isset($q->answers->answer))
                                <td>
                                    <div class="badge badge-pill badge-success">Answered</div>
                                </td>
                                @else
                                <td>
                                </td>
                                @endif
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
<script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('/dist/js/custom.min.js') }}"></script>
<!-- this page js -->
<script src="{{ asset('/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
    /*******************************************
     * Basic Table - with disabled auto order  *
     *******************************************/
    $('#zero_config').DataTable({
        "order": [
            [0, "desc"]
        ]
    });
</script>
@endsection