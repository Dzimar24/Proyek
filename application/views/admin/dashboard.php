<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>"><?= $judul_halaman; ?></a></li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Start Content -->
<hr>
<center><h2><b>Data</b></h2></center>
<hr>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<p>Total <strong>Content</strong></p>
						<h3><?= $content ?></h3>
					</div>
					<div class="icon">
						<i class="fa fa-newspaper"></i>
					</div>
					<a href="<?= site_url('admin/Content') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<p>Total <strong>Contact</strong></p>
						<h3><?= $ook ?></h3>
					</div>
					<div class="icon">
						<i class="nav-icon fa fa-phone"></i>
					</div>
					<a href="<?= site_url('admin/Contact') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<p>Total <strong>Category</strong></p>
						<h3><?= $w ?></h3>
					</div>
					<div class="icon">
						<i class="ion fa fa-list-alt"></i>
					</div>
					<a href="<?= site_url('admin/Category') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<p>Total <strong>Gallery</strong></p>
						<h3><?= $s ?></h3>
					</div>
					<div class="icon">
						<i class="ion fa fa-image"> </i>
					</div>
					<a href="<?= site_url('admin/Gallery') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->
		<!-- Main row -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<hr>
