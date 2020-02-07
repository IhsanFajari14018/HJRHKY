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

            <!-- Daftar Tagihan -->
            <div class="col-md-8 col-12 mx-auto mb-5">
              <?php if(isset($this->session->cart) && empty(!$this->session->cart)){ ?>

                <div class="card">
                  <div class="card-header">
                    <p class="h4 mb-0">Daftar Tagihan</p>
                  </div>
                  <div class="card-body">

                    <?php $total = 0; ?>
                    <?php foreach ($data_tagihan as $tagihan): ?>

                      <div class="row">
                        <div class="col-6">
                          <?php echo $tagihan->productcode ?>
                        </div>
                        <div class="col-6">
                          <p class="text-right mb-0">
                            <strong><?php echo rupiah($tagihan->jmltotalbayar) ?></strong>
                          </p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-6">
                          <?php echo $tagihan->subid ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-6">
                          <?php echo $tagihan->subname ?>
                        </div>
                        <a href="<?php echo site_url('cart/drop/'.$tagihan->subid) ?>" type="button" class="btn btn-sm btn-secondary ml-auto py-0">
                          <i class="fas fa-ban mr-1"></i>
                          Cancel
                        </a>
                      </div>

                      <hr>

                      <?php $total = $total + $tagihan->jmltotalbayar ?>
                    <?php endforeach; ?>

                    <div class="row">
                      <div class="col-md-9 col-6">
                        <p class="text-right">Total Tagihan</p>
                      </div>
                      <div class="col-md-3 col-6">
                        <p class="text-right text-danger"><strong><?php echo rupiah($total) ?></strong></p>
                      </div>
                    </div>

                    <!-- Add to Cart pembayaran -->
                    <!-- <a href="<?php //echo site_url('payment/add_to_cart') ?>" class="btn btn-success btn-block">Bayar</a> -->
                  </div>
                </div>
              <?php }else{ ?>
                <p class="h4 display-3 text-center mt-5">Daftar tagihan kosong.</p>
                <p class="h5 text-center text-muted">
                  Silahkan masukan tagihan melalui menu di
                  <a href="<?php echo site_url() ?>">
                    halaman utama.
                  </a>
                </p>
              <?php } ?>
            </div>



            <?php if(isset($this->session->cart) && empty(!$this->session->cart)){ ?>
              <!-- Menu Pembayaran -->
              <div class="col-md-8 col-12 mx-auto mb-5">

                <!-- /.row -->
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h4>
                      <i class="fas fa-money-bill-wave text-olive mr-1"></i>
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
                          <!-- Saldo -->
                          <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                            <dd>
                              Saldo: <strong class="text-success ml-3">Rp <?php echo $this->session->saldo->saldobalance; ?></strong>
                            </dd>
                            <dd>
                              Metode pembayaran ini akan mengurangi nilai saldo yang Anda miliki.
                              Silahkan tekan kotak kecil disamping tulisan <strong>'Konfirmasi'</strong> untuk menyetujui
                              penggunaan metode pembayaran ini.
                            </dd>

                            <?php
                            //check wether the saldo is sufficient
                            $saldo = str_replace(".", "", $this->session->saldo->saldobalance);
                            ?>
                            <?php if ($saldo > $total){ ?>
                              <div class="custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="" onchange="document.getElementById('btnConfirmSaldo').disabled = !this.checked;">
                                <label for="customCheckbox1" class="custom-control-label">Konfirmasi</label>
                              </div>
                              <form action="<?php echo site_url('payment/saldo') ?>" method="post">
                                <button id="btnConfirmSaldo" type="submit" class="btn btn-success btn-block" disabled> Bayar </button>
                              </form>
                            <?php }else{ ?>
                              <p class="h3 font-italic text-danger text-center mt-4"> Saldo tidak mencukupi! </p>
                              <small class="text-muted"> Silahkan untuk melakukan <i>top-up</i> saldo atau mengurangi daftar tagihan yang akan dibayar.</small>
                            <?php } ?>

                          </div>
                          <!-- BRI - Virtual Account -->
                          <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            <?php } ?>

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
