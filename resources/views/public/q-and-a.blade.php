@extends('public/master_p')

@section('html_title')
<title>Q&A | HJRHKY</title>
@endsection

@section('styling')
<link href="{{ asset('/assets_2/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('main')
<section class="mt-5">
    <div class="container mt-4">
        <h1 class="text-center"> Q&A </h1>
        <p class="text-center lead mb-5"> Question And Answer </p>


        @foreach($question as $q)
        <div class="row">
            <div class="col-12">
                <h6 class="mb-0">{{ $q->name }}</h6>
                <div class="mb-3">
                    <small>{{ date_format($q->created_at, 'g:ia \o\n l jS F Y') }}</small>
                </div>
            </div>
            <div class="col-md-12 text-muted">
                <!-- Question  -->
                <p class="mb-3">{{ $q->question }}</p>

                <!-- Answer -->
                <div class="text-right">
                    <?php echo $q->answers->answer ?>
                    <small>&mdash; Admin HJRHKY</small>
                </div>
            </div>
        </div>

        <hr class='my-5'>

        @endforeach
    </div>
</section>
@endsection

@section('script')
<script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/assets_2/js/bootstrap.js') }}"></script>
<script src="{{ asset('/assets_2/js/bootstrap.min.js') }}"></script>
@endsection