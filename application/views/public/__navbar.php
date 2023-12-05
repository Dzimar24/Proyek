<!-- Navbar Start -->
<div class="container-fluid p-0">
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
		<a href="index.html" class="navbar-brand d-block d-lg-none">
			<h1 class="m-0 display-4 text-uppercase text-primary"><?= $config->judul_website ?></h1>
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
			<div class="navbar-nav mr-auto py-0">
				<a href="<?= site_url('Home') ?>" class="nav-item nav-link">Home</a>
				<a href="<?= site_url('Home/gallery') ?>" class="nav-item nav-link">Gallery</a>
				<div class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Option</a>
					<div class="dropdown-menu rounded-0 m-0">
						<a href="<?= site_url('Home/contact') ?>" class="dropdown-item">Contact</a>
						<a class="dropdown-item" href="<?= site_url('Auth') ?>">Login</a>
					</div>
				</div>
			</div>
			<!-- Search -->
			<form action="<?= site_url('Home') ?>" method="post">
				<div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
					<input type="text" class="form-control border-0" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
					<div class="input-group-append">
						<!-- <input type="submit" value="" name="submit" class="btn btn-warning"> -->
						<button type="submit" class="input-group-text bg-primary text-dark border-0 px-3" name="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</nav>
</div>
<!-- Navbar End -->
