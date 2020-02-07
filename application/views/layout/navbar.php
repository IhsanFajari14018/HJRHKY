<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
	<div class="container">
		<a href="<?php echo site_url() ?>" class="navbar-brand">
			<!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
			<span class="brand-text font-weight-light">Arindo PPOB</span>
		</a>

		<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse order-3" id="navbarCollapse">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?php echo site_url('cart/') ?>" class="nav-link" disabled>Tagihan</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
					<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
						<li><a href="#" class="dropdown-item">Some action </a></li>
						<li><a href="#" class="dropdown-item">Some other action</a></li>
					</ul>
				</li> -->
			</ul>

		</div>

		<!-- Right navbar links -->
		<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

			<!-- Login or Account Menu -->
			<li class="nav-item dropdown">
				<?php if (isset($this->session->user)){ ?>
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-user"></i> IHSAN FAJARI
						<!-- <span class="badge badge-warning navbar-badge">15</span> -->
					</a>
					<div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="width:50px">
						<span class="dropdown-header">Saldo Anda<br><?php echo "Rp ".$this->session->saldo->saldobalance.",00"; ?></span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-cog mr-2"></i> Settings
							<!-- <span class="float-right text-muted text-sm">3 mins</span> -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="<?php echo site_url('payment/log') ?>" class="dropdown-item">
							<i class="fas fa-history mr-2"></i> History
							<!-- <span class="float-right text-muted text-sm">12 hours</span> -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">Logout</a>
					</div>
				<?php }else{ ?>
					<a class="nav-link" href="<?php echo site_url('login') ?>">
						<i class="far fa-user"></i> LOGIN
					</a>
				<?php } ?>

			</li>
			<!-- <li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
			<i class="fas fa-th-large"></i>
		</a>
	</li> -->
</ul>
</div>
</nav>
<!-- /.navbar -->
