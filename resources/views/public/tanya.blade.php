@extends('public/master_p')

@section('html_title')
<title>Ajukan Pertanyaan | HJRHKY</title>
@endsection

@section('styling')
<link href="{{ secure_asset('/assets_2/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('main')
<section class="mt-5">
    <div class="container mt-4">
        <h1 class="text-center"> Ajukan Pertanyaan </h1>

        <div class="row">
            <div class="col-md-8 mx-auto">

                @if($message = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/submit-pertanyaan') }}">

                            {{csrf_field()}}

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input id="name_form" type="text" name="name" class="form-control" placeholder="" value="">
                                    <input id="anonymous_check" class="mt-2" type="checkbox">
                                    <label class="form-check-label" for="invalidCheck2">
                                        <small class="text-muted">Klik untuk bertanya secara anonymous</small>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" placeholder="" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pertanyaan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="question" rows="3" placeholder="Masukan pertanyaanmu disini" required></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary float-right px-4" type="submit">Submit</button>
                        </form>
                    </div>
                </div>

                <small class="mt-2">
                    <em> * Catatan:
                        <br> 1. Email dan nama yang tercantum di email akan kami rahasiakan.
                        <br> 2. Pertanyaan yang tidak sempat kami jawab pada sesi,
                        insyaAllah jawabannya akan kami kirimkan ke email Anda.</em>
                </small>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ secure_asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ secure_asset('/assets_2/js/bootstrap.js') }}"></script>
<script src="{{ secure_asset('/assets_2/js/bootstrap.min.js') }}"></script>

<script>
document.getElementById('anonymous_check').onchange = function() {
    document.getElementById('name_form').disabled = this.checked;
    document.getElementById('name_form').value = "Anonymous";
};
</script>
@endsection