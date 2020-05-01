@extends('admin/master_a')

@section('html_title')
<title>Jawab Pertanyaan | Admin HJRHKY</title>
@endsection

@section('page_title')
<h4 class="page-title">Jawab Pertanyaan</h4>
@endsection

@section('styling')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link href="{{ asset('/dist/css/style.min.css') }}" rel="stylesheet">
<link href="{{ asset('/dist/css/style.css') }}" rel="stylesheet">
<!-- Textarea Editor : Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Jawab</li>
@endsection

@section('main_content')
<div class="row">
    <div class="col-12">
        <!-- card new -->

        <div class="card">
            <div class="card-body">
                <h4 class="card-title m-b-0">Pertanyaan</h4>
            </div>
            <ul class="list-style-none">

                <li class="d-flex no-block card-body">
                    <div>
                        <h5 class="m-b-0 font-medium p-0">{{ $question->name }}</h5>
                        <small>{{ $question->email }}</small>

                        <p class="mt-3">{{ $question->question}}</p>
                    </div>
                    <div class="ml-auto">
                        <div class="text-right">
                            <h6 class="text-muted m-b-0">{{ date_format($question->created_at, 'g:ia \o\n l jS F Y') }}</h6>
                            <!-- <span class="text-muted font-16">Jan</span> -->
                        </div>
                    </div>
                </li>

                <hr>

                <div class="container">
                    <h4 class="mb-3">Jawaban</h4>
                    <form action="/submit-jawaban/{{ $question->id }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <!-- <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label> -->
                            <div class="col-12">
                                <textarea id="summernote" name="editordata" class="form-control" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-8 offset-md-10 col-md-2 col-4">
                                <button class="btn btn-info btn-block" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>

            </ul>
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
<!-- Textarea Editor : Summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Tulis jawaban disini',
        tabsize: 2,
        height: 100
    });
</script>
@endsection