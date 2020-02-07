<aside class="main-sidebar sidebar-dark-primary bg-navy elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?php echo base_url('lib/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Indofood HR</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?php echo site_url('Main') ?>" class="nav-link">
						<i class="nav-icon fas fa-home"></i>
						<p>Home</p>
					</a>
				</li>

				<!-- <li class="nav-item">
					<a href="pages/widgets.html" class="nav-link">
						<i class="nav-icon fas fa-money-bill-alt"></i>
						<p>Saldo Plafond</p>
					</a>
				</li> -->

				<!-- Plafond -->
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fa fa-heartbeat"></i>
						<p>
							Plafond
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo site_url('saldo/rawat_inap') ?>" class="nav-link">
							<i class="nav-icon fas fa-money-bill-alt"></i>
								<p>Saldo Rawat Inap</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('saldo/rawat_jalan') ?>" class="nav-link">
								<i class="nav-icon fas fa-money-bill-alt"></i>
								<p>Saldo Rawat Jalan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('plafond/plafond_list') ?>" class="nav-link">
								<i class="nav-icon fa fa-folder"></i>
								<p>Data Plafond</p>
							</a>
						</li>
					</ul>
				</li>

				<!-- Reimburse -->
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-file-alt"></i>
						<p>
							Reimburse
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo site_url('karyawan/request_reimburse_rawat_inap') ?>" class="nav-link">
							<i class="nav-icon fas fa-procedures"></i>
								<p>Reimburse Rawat Inap</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo site_url('karyawan/request_reimburse_rawat_jalan') ?>" class="nav-link">
							<i class="nav-icon fas fa-user-md"></i>
								<p>Reimburse Rawat Jalan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('karyawan/list_reimburse') ?>" class="nav-link">
								<i class="nav-icon fas fa-history"></i>
								<p>Reimburse History</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-header">Admin</li>
				<li class="nav-item">
					<a href="<?php echo site_url('admin/list_karyawan') ?>" class="nav-link">
						<i class="nav-icon fas fa-users-cog"></i>
						<p>User Management</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('admin/list_plafond') ?>" class="nav-link">
					<i class="nav-icon fas fa-file-signature"></i>
						<p>Review Plafond</p>
					</a>
				</li>
				<!-- <li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>
							Review Reimburse
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/widgets.html" class="nav-link">
								<i class="nav-icon fas fa-file-signature"></i>
								<p>
									Validate
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/widgets.html" class="nav-link">
								<i class="nav-icon fas fa-history"></i>
								<p>
									History
								</p>
							</a>
						</li>
					</ul>
				</li> -->
			</ul>
		</nav>		<!-- /.sidebar-menu -->
	</div>	<!-- /.sidebar -->
</aside>
