<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Load CSS -->
	<?php //$this->load->view('partials/css'); ?>
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/daterangepicker/daterangepicker.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">

	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/select2/css/select2.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="<?php echo base_url('lib/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') ?>">

	<link rel="stylesheet" href="<?php echo base_url('lib/dist/css/adminlte.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view('layout/navbar'); ?>
		<!-- /.navbar -->

		<!-- Main Content -->
		<div class="content-wrapper pt-5">
			<section class="content container">

				<div class="card card-default">
					<div class="card-header">
						<h3 class="card-title">Select2 (Default Theme)</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
							<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Minimal</label>
									<select class="form-control select2" style="width: 100%;">
										<option selected="selected">Alabama</option>
										<option>Alaska</option>
										<option>California</option>
										<option>Delaware</option>
										<option>Tennessee</option>
										<option>Texas</option>
										<option>Washington</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
		</div>
		<!-- END OF MAIN CONTENT -->

	</div>

	<!-- Footer -->
	<?php $this->load->view('layout/footer') ?>
	<!-- /. End of Footer -->

	<!-- Control Sidebar -->
	<?php $this->load->view('layout/sidebar-control') ?>
	<!-- /.control-sidebar -->

	<!-- Script -->
	<?php //$this->load->view('partials/js') ?>
	<script src="<?php echo base_url('lib/plugins/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/select2/js/select2.full.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/inputmask/min/jquery.inputmask.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/daterangepicker/daterangepicker.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/dist/js/adminlte.min.js') ?>"></script>
	<script src="<?php echo base_url('lib/dist/js/demo.js') ?>"></script>

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

		$("input[data-bootstrap-switch]").each(function(){
			$(this).bootstrapSwitch('state', $(this).prop('checked'));
		});

	})
</script>
<!-- End of Script -->

</body>

</html>
