<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="<?= site_url('admin/home') ?>" class="nav-link">Home</a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Navbar Search -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" data-target="#who" readonly>
				<div class="mr-3">
					<?= $this->session->userdata('nama'); ?>
					<i class="far fa-comments ml-2"></i>
				</div>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="who">
				<div class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="<?= base_url('/asep/AdminLTE-3.2.0/') ?>dist/img/user2-160x160.jpg" alt="User Avatar"
							class="img-size-50 mr-3 img-circle">
						<div class="media-body">
							<h3 class="dropdown-item-title mt-2">
								<?= $this->session->userdata('nama'); ?>
							</h3>
							<p class="text-sm mt-2"><?= $this->session->userdata('level'); ?></p>
						</div>
					</div>
					<!-- Message End -->
				</div>
				<div class="dropdown-divider"></div>
				<a href="<?= site_url('Auth/logout') ?>" class="btn btn-outline-danger dropdown-item dropdown-footer">Log Out</a>
			</div>
		</li>
		<!-- Messages Dropdown Menu -->

		<!-- Notifications Dropdown Menu -->
	</ul>
</nav>
<!-- /.navbar -->
