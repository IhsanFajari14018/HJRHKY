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

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('lib/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('lib/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">

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
        <div class="container pt-4">

          <p class="h1 text-center mb-3">History Pembayaran</p>

          <div class="row">
            <div class="col-md-8 col-12 mx-auto">
              <!-- /.card -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                      <tr>
                        <th>Kode Transaksi</th>
                        <th>Sub ID</th>
                        <th>Produk</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Invoice</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data_transaksi as $dt) : ?>
                        <tr>
                          <td><?php echo $dt->kode.$dt->id_transaksi ?></td>
                          <td><?php echo $dt->subid ?></td>
                          <td><?php echo $dt->fk_produk ?></td>
                          <td><?php echo $dt->created_on ?></td>
                          <td class="text-center"><?php echo status_meaning($dt->status) ?></td>
                          <td>
                            <div style="word-wrap: break-word; white-space:pre-wrap;"><?php echo $dt->deskripsi ?></div>
                          </td>
                          <td class="text-center">
                            <?php if ($dt->status == "1") { ?>
                              <a href="<?php echo site_url('invoice/download/'.$dt->kode."/".$dt->id_transaksi."/".$dt->fk_produk) ?>" target="_blank">
                                <button class="btn btn-info">Download</button>
                              </a>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
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

  <!-- DataTables -->
  <script src="<?php echo base_url('lib/plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('lib/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
  <script src="<?php echo base_url('lib/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?php echo base_url('lib/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
  <!-- End of Script -->
  <script>
  $(document).ready(function() {
    $('#example1').DataTable({
      "order": []
    });
    $('dataTables_length').addClass('bs-select');
  });

  $(function() {
    // $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
  </script>

</body>

</html>


<?php
function status_meaning($code){
  if ($code == '1') {
    return "<span class='text-success mr-1'><i class='fas fa-check-circle'></i> Sukses</span>";
  }else{
    return "<span class='text-indigo mr-1'><i class='fas fa-times-circle'></i> Gagal</span>";
  }
}
?>
