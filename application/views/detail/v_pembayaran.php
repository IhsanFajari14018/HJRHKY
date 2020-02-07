<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Situs Pembayaran PPOB Terlengkap & Mudah | Arindo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Load Main: CSS -->
  <?php $this->load->view('partials/css'); ?>

</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view('layout/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Content: FOR REAL -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container pt-5">
          <div class="row">

            <div class="col-md-8 col-12 mx-auto">

              <!-- /.row -->
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h4>
                    <i class="fas fa-money-bill-wave text-success mr-1"></i>
                    Silahkan Pilih Metode Pembayaran
                  </h4>
                </div>
                <div class="card-body">

                  <!-- <h4>Left Sided</h4> -->
                  <div class="row">
                    <div class="col-5 col-sm-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Saldo</a>
                        <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">BRI - VA</a>
                      </div>
                    </div>
                    <div class="col-7 col-sm-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                          Metode pembayaran ini akan mengurangi nilai saldo yang Anda miliki.
                          Jika saldo yang Anda miliki tidak mencukupi, maka pembayaran akan gagal.
                          <br>
                          <br>
                          <button> Konfirmasi </button>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                          Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
          <!-- /.row -->

        </div>
      </section>
    </div>
    <!-- End of Main Content -->

  </div>

  <!-- Footer -->
  <?php $this->load->view('layout/footer') ?>
  <!-- /. End of Footer -->

  <!-- Script -->
  <?php $this->load->view('partials/js') ?>

</body>

</html>

<?php
function rupiah($angka){
  $hasil_rupiah = "Rp ".number_format($angka,2,',','.');
  return $hasil_rupiah;
}
?>
