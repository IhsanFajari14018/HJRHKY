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

            <div class="col-md-6 col-12 mx-auto">
              <?php if ($detail->responcode != "00"){ ?>

                <div class="card">
                  <div class="card-header">
                    <p class="h4 mb-0">Error - <?php echo $detail->responcode ?></p>
                  </div>
                  <div class="card-body">
                    <p class="h5 text-center"><?php echo $detail->messagedesc ?> </p>
                  </div>
                </div>

              <?php }else{ ?>

                <div class="card">
                  <div class="card-header">
                    <p class="h4 mb-0">PLN Postpaid</p>
                  </div>
                  <div class="card-body">

                    <!-- IDPEL -->
                    <div class="row">
                      <div class="col-6">
                        <p>IDPEL</p>
                      </div>
                      <div class="col-6">
                        <p>: <?php echo $detail->subid ?></p>
                      </div>
                    </div>

                    <!-- Nama Peserta -->
                    <div class="row">
                      <div class="col-6">
                        <p>Nama Pelanggan</p>
                      </div>
                      <div class="col-6">
                        <p>: <?php echo $detail->subname ?></p>
                      </div>
                    </div>

                    <!-- Tarif/Daya -->
                    <div class="row">
                      <div class="col-6">
                        <p>Tarif/Daya</p>
                      </div>
                      <div class="col-6">
                        <p>: <?php echo $detail->tarifdaya ?></p>
                      </div>
                    </div>

                    <!-- BL/TH -->
                    <div class="row">
                      <div class="col-6">
                        <p>BL/TH</p>
                      </div>
                      <div class="col-6">
                        <p class="">: <?php echo $detail->billperiode ?></p>
                      </div>
                    </div>

                    <!-- Stand Meter -->
                    <div class="row">
                      <div class="col-6">
                        <p>Stand Meter</p>
                      </div>
                      <div class="col-6">
                        <p class="">: <?php echo $detail->Stand ?></p>
                      </div>
                    </div>

                    <hr>

                    <!-- RP Tag PLN -->
                    <div class="row">
                      <div class="col-6">
                        <p>RP Tag PLN</p>
                      </div>
                      <div class="col-6">
                        <p class="text-right"><?php echo rupiah($detail->rptagpln) ?></p>
                      </div>
                    </div>

                    <!-- Admin Bank -->
                    <div class="row">
                      <div class="col-6">
                        <p>Admin Bank</p>
                      </div>
                      <div class="col-6">
                        <p class="text-right"><?php echo rupiah($detail->admin) ?></p>
                      </div>
                    </div>

                    <hr>

                    <!-- Total Tagihan -->
                    <div class="row">
                      <div class="col-6">
                        <p>Total Tagihan</p>
                      </div>
                      <div class="col-6">
                        <p class="text-right"><strong><?php echo rupiah($detail->totalbayar) ?></strong></p>
                      </div>
                    </div>

                    <!-- Add to Cart pembayaran -->
                    <a href="<?php echo site_url('cart/add_to_cart') ?>">
                      <button class="btn btn-success btn-block">Masukan Pembayaran</button>
                    </a>
                  </div>
                </div>

              <?php } ?>
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
