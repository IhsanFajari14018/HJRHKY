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
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('queries')
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
@endsection