<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Load CSS -->
	<?php $this->load->view('partials/css'); ?>
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<!-- <img src="<?php //echo base_url('lib/img/icon/arindo_logo_ori.png')?>" height="120"/> -->
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-header">
				<a href="<?php echo site_url() ?>" class="nav-link text-dark">
					<i class="fas fa-arrow-left mr-2"></i> LOGIN
				</a>
			</div>
			<div class="card-body login-card-body">

				<div class="text-center">
					<img src="<?php echo base_url('lib/img/icon/arindopay.jpg')?>" height="70px"/>
				</div>

				<p class="login-box-msg">Please login to start your session</p>

				<!-- NOTIFY -->
				<?php if ($this->session->flashdata('failure')): ?>
					<div class="form-group row">
						<div class="col-sm-12">
							<div class="alert alert-danger mb-0" role="alert">
								<?php echo $this->session->flashdata('failure'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<form method="post" action="<?php echo site_url('authentication/do_login') ?>">
					<div class="input-group mb-3">
						<input type="email" name="email" class="form-control" placeholder="Email" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</div>
					</div>
				</form>
				<!-- /.social-auth-links -->
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- Script -->
	<?php $this->load->view('partials/js') ?>
	<!-- End of Script -->
</body>

</html>
