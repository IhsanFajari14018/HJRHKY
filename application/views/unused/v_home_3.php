<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Situs Pembayaran PPOB Terlengkap & Mudah | Arindo</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Load Support: CSS -->
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/select2/css/select2.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') ?>">

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

						<!-- SPLIT 2 Contents -->
						<div class="col-12">
							<div class="row">
								<!-- LEFT SIDE -->
								<div class="col-md-7 col-12">

									<!-- TELKOMSEL -->
									<div class="col-12 col-sm-6 col-lg-12">
										<p class="h3">TELKOMSEL</p>
										<div class="card card-danger card-tabs">
											<!-- Tab Navigation -->
											<div class="card-header p-0 pt-1">
												<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Pulsa</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Pascabayar</a>
													</li>
												</ul>
											</div>
											<!-- Tab Content -->
											<div class="card-body">
												<div class="tab-content" id="custom-tabs-one-tabContent">
													<!-- Pulsa -->
													<div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
														<div class="row">
															<div class="col-md-2 col-4 text-center my-auto">
																<img src="<?php echo base_url('lib/img/assets/telkomsel-logo.png') ?>" class="img-fluid"> </img>
															</div>
															<div class="col-8">
																<div class="row">
																	<div class="col-md-6 col-12 mb-2">
																		<label>Nomor Telepon</label>
																		<input type="text" name="phone" class="form-control" placeholder="08123456789">
																	</div>
																	<div class="col-md-6 col-12">
																		<div class="form-group">
																			<label>Nominal</label>
																			<select class="form-control select2" style="width: 100%;">
																				<option selected="selected">- Silahkan Pilih -</option>
																				<option>10.000</option>
																				<option>20.000</option>
																				<option>50.000</option>
																				<option>100.000</option>
																				<option>200.000</option>
																				<option>500.000</option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-2 col-12">
																<br class="hide-in-mobile">
																<button type="submit" class="btn btn-block bg-maroon mt-2">Beli</button>
															</div>
														</div>
													</div>
													<!-- Pascabayar -->
													<div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
														<div class="row">
															<div class="col-md-2 col-4 my-auto">
																<img src="<?php echo base_url('lib/img/assets/telkomsel-logo.png') ?>" class="img-fluid"> </img>
															</div>
															<div class="col-md-8 col-8">
																<label>Nomor Telepon</label>
																<input type="text" name="phone" class="form-control" placeholder="08123456789">
															</div>
															<div class="col-md-2 col-12">
																<br class="hide-in-mobile">
																<button type="submit" class="btn btn-block bg-maroon mt-2">Beli</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- BPJS -->
									<div class="col-12 col-sm-6 col-lg-12">
										<p class="h3">BPJS</p>
										<div class="card card-teal card-tabs">
											<div class="card-header p-0 pt-1">
												<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" id="bpjs-kesehatan-tab" data-toggle="pill" href="#bpjs-kesehatan" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Kesehatan</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="bpjs-ketenagakerjaan-tab" data-toggle="pill" href="#bpjs-ketenagakerjaan" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Ketenagakerjaan</a>
													</li>
												</ul>
											</div>
											<div class="card-body">
												<div class="tab-content" id="custom-tabs-one-tabContent">
													<!-- BPJS Kesehatan -->
													<div class="tab-pane fade show active" id="bpjs-kesehatan" role="tabpanel" aria-labelledby="bpjs-kesehatan-tab">
														<div class="row">
															<div class="col-md-2 col-4 my-auto">
																<img src="<?php echo base_url('lib/img/assets/bpjs-kesehatan-logo.png') ?>" class="img-fluid"> </img>
															</div>
															<div class="col-8 mb-2">
																<div class="row">
																	<div class="col-md-6 col-12">
																		<label>No. Virtual Account</label>
																		<input type="text" name="subid" class="form-control" placeholder="3210077495">
																	</div>
																	<div class="col-md-6 col-12">
																		<label>Jumlah Bulan</label>
																		<input type="number" name="phone" class="form-control" placeholder="">
																	</div>
																</div>
															</div>
															<div class="col-md-2 col-12">
																<br class="hide-in-mobile">
																<button type="submit" class="btn btn-block bg-teal mt-2">Beli</button>
															</div>
														</div>
													</div>
													<!-- BPJS Ketenagakerjaan -->
													<div class="tab-pane fade" id="bpjs-ketenagakerjaan" role="tabpanel" aria-labelledby="bpjs-ketenagakerjaan-tab">
														<p class="text-center h5 my-4"><i>Coming Soon!</i></p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- PLN -->
									<div class="col-12 col-sm-6 col-lg-12">
										<p class="h3">PLN</p>
										<div class="card card-primary card-tabs">
											<div class="card-header p-0 pt-1">
												<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" id="pln-prepaid-tab" data-toggle="pill" href="#pln-prepaid" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Postpaid</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="pln-postpaid-tab" data-toggle="pill" href="#pln-postpaid" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Prepaid</a>
													</li>
												</ul>
											</div>
											<div class="card-body">
												<div class="tab-content" id="custom-tabs-one-tabContent">
													<div class="tab-pane fade show active" id="pln-prepaid" role="tabpanel" aria-labelledby="pln-prepaid-tab">
														<div class="row">
															<div class="col-md-2 col-4 my-auto">
																<img src="<?php echo base_url('lib/img/assets/pln-logo.jpg') ?>" class="img-fluid"> </img>
															</div>
															<div class="col-md-8 col-8">
																<label>No. Meter</label>
																<input type="number" name="phone" class="form-control" placeholder="8800213386752">
															</div>
															<div class="col-md-2 col-12">
																<br class="hide-in-mobile">
																<button type="submit" class="btn btn-primary btn-block mt-2">Beli</button>
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="pln-postpaid" role="tabpanel" aria-labelledby="pln-postpaid-tab">
														<div class="row">
															<div class="col-md-2 col-4 my-auto">
																<img src="<?php echo base_url('lib/img/assets/pln-logo.jpg') ?>" class="img-fluid"> </img>
															</div>
															<div class="col-md-8 col-8">
																<label>No. Meter</label>
																<input type="number" name="phone" class="form-control" placeholder="8800213386752">
															</div>
															<div class="col-md-2 col-12">
																<br class="hide-in-mobile">
																<button type="submit" class="btn btn-primary btn-block mt-2">Beli</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /.card -->
										</div>
									</div>

								</div>
								<!-- RIGHT SIDE -->
								<div class="col-md-4 offset-1 col-12">
									<div class="card position-fixed mt-1">
										<div class="card-body">
											<p class="h4"><i class="far fa-money-bill-alt text-success mr-1"></i> Ringkasan Pembayaran</p>
											<hr>
											<p>Jumlah Pembayaran: xxyyzz</p>

											<hr>
											<div class="row">
												<div class="col">
													<p class="">Total Harga</p>
												</div>
												<div class="col">
													<p><strong>Rp. 258.000,00</strong></p>
												</div>
											</div>
											<a href="#">
												<button class="btn btn-success btn-block">Bayar</button>
											</a>
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

	<!-- Control Sidebar -->
	<?php $this->load->view('layout/sidebar-control') ?>
	<!-- /.control-sidebar -->

	<!-- Script -->
	<?php $this->load->view('partials/js') ?>
	<!-- Select2 -->
	<script src="<?php echo base_url('lib/plugins/select2/js/select2.full.min.js') ?>"></script>
	<!-- Bootstrap4 Duallistbox -->
	<script src="<?php echo base_url('lib/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') ?>"></script>
	<!-- InputMask -->
	<script src="<?php echo base_url('lib/plugins/moment/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/inputmask/min/jquery.inputmask.bundle.min.js') ?>"></script>

	<script>
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})

		//Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
		//Datemask2 mm/dd/yyyy
		$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
		//Money Euro
		$('[data-mask]').inputmask()

		//Date range picker
		$('#reservation').daterangepicker()
		//Date range picker with time picker
		$('#reservationtime').daterangepicker({
			timePicker: true,
			timePickerIncrement: 30,
			locale: {
				format: 'MM/DD/YYYY hh:mm A'
			}
		})
		//Date range as a button
		$('#daterange-btn').daterangepicker(
			{
				ranges   : {
					'Today'       : [moment(), moment()],
					'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month'  : [moment().startOf('month'), moment().endOf('month')],
					'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				startDate: moment().subtract(29, 'days'),
				endDate  : moment()
			},
			function (start, end) {
				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
			}
		)

		//Timepicker
		$('#timepicker').datetimepicker({
			format: 'LT'
		})

		//Bootstrap Duallistbox
		$('.duallistbox').bootstrapDualListbox()

		//Colorpicker
		//$('.my-colorpicker1').colorpicker()
		//color picker with addon
		//$('.my-colorpicker2').colorpicker()

		//$('.my-colorpicker2').on('colorpickerChange', function(event) {
		//$('.my-colorpicker2 .fa-square').css('color', event.color.toString());
		//});

		$("input[data-bootstrap-switch]").each(function(){
			$(this).bootstrapSwitch('state', $(this).prop('checked'));
		});

	})
	</script>
	<!-- End of Script -->

</body>

</html>
