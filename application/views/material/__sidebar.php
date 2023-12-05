<!-- Side Bar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a class="brand-link">
		<img src="<?= base_url('/asep/AdminLTE-3.2.0/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<marquee>
			<?php if ($this->session->userdata('level') == 'Admin') : ?>
			<span class="brand-text font-weight-light">Admin Page</span>
			<?php endif ?>
			<?php if ($this->session->userdata('level') == 'konstuktor') : ?>
			<span class="brand-text font-weight-light">Contributor Page</span>
			<?php endif ?>
		</marquee>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('/asep/AdminLTE-3.2.0/') ?>dist/img/user2-160x160.jpg"
					class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('nama'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<?php
			$menu = $this->uri->segment(2);
		?>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-header">Dashboard</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/Home') ?>" class="nav-link <?php if($menu=='Home'){ echo 'active';} ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-header">Website Settings</li>
				<?php if ($this->session->userdata('level') == 'Admin') : ?>
				<li class="nav-item">
					<a href="<?= site_url('admin/Carousel') ?>" class="nav-link <?php if($menu=='Carousel'){ echo 'active';} ?>">
						<i class="nav-icon far fa-clone"></i>
						<p>
							Caraousel
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/Category') ?>" class="nav-link <?php if($menu=='Category'){ echo 'active';} ?>">
						<i class="nav-icon fas fa-list-alt"></i>
						<p>
							Category Content
						</p>
					</a>
				</li>
				<?php endif ?>
				<li class="nav-item">
					<a href="<?= site_url('admin/Content') ?>" class="nav-link <?php if($menu=='Content'){ echo 'active';} ?>">
						<i class="nav-icon fa fa-newspaper"></i>
						<p>
							Content
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/Contact') ?>" class="nav-link <?php if($menu=='Contact'){ echo 'active';} ?>">
						<i class="nav-icon fa fa-phone"></i>
						<p>
							Contact
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/Gallery') ?>" class="nav-link <?php if($menu=='Gallery'){ echo 'active';} ?>">
						<i class="nav-icon far fa-image"></i>
						<p>
							Gallery
						</p>
					</a>
				</li>
				<?php if ($this->session->userdata('level') == 'Admin') { ?>
					<li class="nav-item">
						<a href="<?= site_url('admin/Configuration') ?>" class="nav-link <?php if($menu=='Configuration'){ echo 'active';} ?>">
							<i class="nav-icon fas fa-cog"></i>
							<p>
								Configuration
							</p>
						</a>
					</li>
					<li class="nav-header">User Setting</li>
					<li class="nav-item">
						<a href="<?= site_url('admin/User') ?>" class="nav-link <?php if($menu=='User'){ echo 'active';} ?>">
							<i class=" nav-icon fa fa-user"> </i>
							<p>User</p>
						</a>
					</li>
				<?php } ?>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
