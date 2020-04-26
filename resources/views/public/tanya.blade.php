<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('/assets/images/HJRHKY_icon_2.png') }}">
    <!-- Page Title -->
    <title>Ajukan Pertanyaan | HJRHKY</title>

    <!-- Custom CSS -->
    <link href="{{ secure_asset('/assets_2/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">HJRHKY</a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Q&A</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Program
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div> -->
            </div>
        </nav>
    </header>

    <body>

        <!-- ## MAIN -->
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
                                <form method="POST" action="/submit-pertanyaan">

                                    {{csrf_field()}}

                                    <!-- <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="" value="">
                                            <input class="mt-2" type="checkbox">
                                            <label class="form-check-label" for="invalidCheck2">
                                                <small class="text-muted">Klik untuk bertanya secara anonymous</small>
                                            </label>
                                        </div>
                                    </div> -->
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

        <!-- <footer class="bg-dark mt-auto mb-0 py-2">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer> -->

        <!-- <div class="fixed-bottom bg-light pt-2 pb-3">
            <div class="container">
                <div class="text-muted text-center">
                    <p class="mb-0">HJRHKY {{ date('Y')}}</p>
                    <small>
                        Ingin ikut berkontribusi mengembangkan website ini?
                        <a href="https://github.com/IhsanFajari14018/HJRHKY" target="_blank">
                            gabung disini
                        </a>
                    </small>
                </div>
            </div>
        </div> -->

        <!-- <div class="d-flex justify-content-center mt-auto">
            <div class="d-flex justify-content-between col-md-8 col-md-offset-2 mb-3 mt-5">
                <div class="align-left">

                    <a class="font-weight-bold small kf-blue kf-links" href="#">Link1</a> |

                    <a class="font-weight-bold small kf-blue kf-links" href="/">Link2</a> |
                    <a class="font-weight-bold small kf-blue kf-links" href="/">Link3</a>
                </div>
                <div class="align-right small">
                    Crafted with Love by <a class="font-weight-bold kf-blue kf-links" href="#" target="_blank">Me</a>
                </div>
            </div>
        </div> -->

        <script src="{{ secure_asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ secure_asset('/assets_2/js/bootstrap.js') }}"></script>
        <script src="{{ secure_asset('/assets_2/js/bootstrap.min.js') }}"></script>
    </body>

</body>

</html>