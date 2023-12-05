<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
	<div class="row align-items-center bg-dark px-lg-5">
		<div class="col-lg-9">
			<nav class="navbar navbar-expand-sm bg-dark p-0">
				<ul class="navbar-nav ml-n2">
					<li class="nav-item border-right border-secondary">
						<a class="nav-link text-body small" href="#" id="clock"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-body small" href="#" id="tanggalwaktu"></a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="col-lg-3 text-right d-none d-md-block">
			<nav class="navbar navbar-expand-sm bg-dark p-0">
				<ul class="navbar-nav ml-auto mr-n2">
					<li class="nav-item">
						<a class="nav-link text-body" href="<?= $config->twitter ?>"><small class="fab fa-twitter"></small></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-body" href="<?= $config->facebook ?>"><small class="fab fa-facebook-f"></small></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-body" href="<?= $config->instagram ?>"><small class="fab fa-instagram"></small></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="row align-items-center bg-white py-3 px-lg-5">
		<div class="col-lg-4">
			<a href="<?= site_url('Home') ?>" class="navbar-brand p-0 d-none d-lg-block">
				<h1 class="m-0 display-4 text-uppercase text-primary"><?= $config->judul_website ?></h1>
			</a>
		</div>
	</div>
</div>
<!-- Topbar End -->
