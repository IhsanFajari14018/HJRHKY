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
              <?php if ($detail->responcode == "99"){ ?>

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
                    <p class="h4 mb-0">BPJS Kesehatan</p>
                  </div>
                  <div class="card-body">

                    <!-- No. VA -->
                    <div class="row">
                      <div class="col-6">
                        <p>No. VA</p>
                      </div>
                      <div class="col-6">
                        <p>: <?php echo $detail->subid ?></p>
                      </div>
                    </div>

                    <!-- Nama Peserta -->
                    <div class="row">
                      <div class="col-6">
                        <p>Nama Peserta</p>
                      </div>
                      <div class="col-6">
                        <p>: <?php echo $detail->subname ?></p>
                      </div>
                    </div>

                    <!-- Jumlah Peserta -->
                    <div class="row">
                      <div class="col-6">
                        <p>Jumlah Peserta</p>
                      </div>
                      <div class="col-6">
                        <p>: <?php echo $detail->jumlahpeserta ?></p>
                      </div>
                    </div>

                    <!-- Jumlah Bulan -->
                    <div class="row">
                      <div class="col-6">
                        <p>Jumlah Bulan</p>
                      </div>
                      <div class="col-6">
                        <p>: <?php echo $detail->jumlahbulan ?></p>
                      </div>
                    </div>

                    <!-- Sisa Sebelumnya -->
                    <div class="row">
                      <div class="col-6">
                        <p>Sisa Sebelumnya</p>
                      </div>
                      <div class="col-6">
                        <p class="text-right"><?php echo rupiah($detail->sisasebelumnya) ?></p>
                      </div>
                    </div>

                    <hr>

                    <!-- Biaya Admin -->
                    <div class="row">
                      <div class="col-6">
                        <p>Biaya Admin</p>
                      </div>
                      <div class="col-6">
                        <p class="text-right"><?php echo rupiah($detail->adminbank) ?></p>
                      </div>
                    </div>

                    <!-- Jumlah Tagihan Admin -->
                    <div class="row">
                      <div class="col-6">
                        <p>Jumlah Tagihan</p>
                      </div>
                      <div class="col-6">
                        <p class="text-right"><?php echo rupiah($detail->jmltagih) ?></p>
                      </div>
                    </div>

                    <hr>

                    <!-- Jumlah Total Bayar -->
                    <div class="row">
                      <div class="col-6">
                        <p>Jumlah Total Bayar</p>
                      </div>
                      <div class="col-6">
                        <p class="text-right"><strong><?php echo rupiah($detail->jmltotalbayar) ?></strong></p>
                      </div>
                    </div>

                    <!-- Add to Cart pembayaran -->
                    <a href="<?php echo site_url('cart/add_to_cart') ?>" class="btn btn-success btn-block">Masukan Pembayaran</a>
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
