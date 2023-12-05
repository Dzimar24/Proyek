<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Icon Website -->
	<link href="<?= base_url('/asep/free-news-website-template/img/3ea0c75c06f14a5783b3c4ac2b90362b-modified.png') ?>" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('/asep/free-news-website-template/') ?>lib/owlcarousel/assets/owl.carousel.min.css"
		rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('/asep/free-news-website-template/') ?>css/style.css" rel="stylesheet">

	<!-- Style -->
	<style>
		.pagination {
			list-style: none;
			display: inline-block;
			padding: 0;
			margin-top: 10px;
		}
		.pagination li {
			display: inline;
			text-align: center;
		}
		.pagination a {
			float: left;
			display: block;
			font-size: 14px;
			text-decoration: none;
			padding: 5px 12px;
			color: #fff;
			margin-left: -1px;
			border: 1px solid transparent;
			line-height: 1.5;
		}
		.pagination a.active {
			cursor: default;
		}
		.pagination a:active {
			outline: none;
		}

		.modal-1 li:first-child a {
			-moz-border-radius: 6px 0 0 6px;
			-webkit-border-radius: 6px;
			border-radius: 6px 0 0 6px;
		}
		.modal-1 li:last-child a {
			-moz-border-radius: 0 6px 6px 0;
			-webkit-border-radius: 0;
			border-radius: 0 6px 6px 0;
		}
		.modal-1 a {
			border-color: #ddd;
			color: #4285F4;
			background: #fff;
		}
		.modal-1 a:hover {
			background: #eee;
		}
		.modal-1 a.active, .modal-1 a:active {
			border-color: #4285F4;
			background: #4285F4;
			color: #fff;
		}

		.modal-2 li:first-child a {
			-moz-border-radius: 50px 0 0 50px;
			-webkit-border-radius: 50px;
			border-radius: 50px 0 0 50px;
		}
		.modal-2 li:last-child a {
			-moz-border-radius: 0 50px 50px 0;
			-webkit-border-radius: 0;
			border-radius: 0 50px 50px 0;
		}
		.modal-2 a {
			border-color: #ddd;
			color: #999;
			background: #fff;
		}
		.modal-2 a:hover {
			color: #E34E48;
			background-color: #eee;
		}
		.modal-2 a.active, .modal-2 a:active {
		border-color: #E34E48;
		background: #E34E48;
		color: #fff;
		}

	</style>
</head>

<body>
	<!-- Top Bar -->
	<?php require_once('public/__topBar.php') ?>


	<!-- Navbar -->
	<?php require_once('public/__navbar.php') ?>


	<!-- Main News Slider Start -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 px-0">
				<div class="owl-carousel main-carousel position-relative">
					<?php foreach($caraousel as $cara) {?>
					<div class="position-relative overflow-hidden" style="height: 500px;">
						<img class="img-fluid h-100" src="<?= base_url('/asep/upload/carousel/'.$cara['foto']) ?>" style="object-fit: cover;">
						<div class="overlay">
							<div class="mb-2">
							</div>
							<h3 class="h2 m-0 text-white text-uppercase font-weight-bold" value=""><?php echo $cara['judul'] ?></h3>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-5 px-0">
				<div class="row mx-0">
					<?php foreach($recept as $cept) : ?>
					<div class="col-md-6 px-0">
						<div class="position-relative overflow-hidden" style="height: 250px;">
							<img class="img-fluid w-100 h-100" src="<?= base_url('/asep/upload/content/'.$cept['foto']) ?>" style="object-fit: cover;">
							<div class="overlay">
								<div class="mb-2">
									<a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="<?= site_url('Home/Category/'.$cept['id_kategori']) ?>"><?= $cept['nama_kategori'] ?></a>
									<small><?= date("l, d F Y",strtotime($cept['tanggal'])) ?></small>
								</div>
								<a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="<?= site_url('Home/article/'.$cept['slug']) ?>"><?= $cept['judul'] ?></a>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Main News Slider End -->


	<!-- Breaking News Start -->
	<div class="container-fluid bg-dark py-3 mb-3">
		<div class="container">
			<div class="row align-items-center bg-dark">
				<div class="col-12">
					<div class="d-flex justify-content-between">
						<div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">
							Breaking News
						</div>
						<div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 170px); padding-right: 90px;">
							<?php foreach($title as $con) :?>
								<div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="<?= site_url('Home/article/'.$con['slug']) ?>"><?= $con['judul'] ?></a></div>
							<?php endforeach ?>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breaking News End -->

	<!-- News With Sidebar Start -->
	<div class="container-fluid mt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-12">
							<div class="section-title">
								<h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
							</div>
						</div>
						<?php foreach($content as $con) {?>
							<div class="col-lg-6">
								<div class="position-relative mb-3">
									<img class="img-fluid w-100" src="<?= base_url('/asep/upload/content/'.$con['foto']) ?>" style="object-fit: cover;">
									<div class="bg-white border border-top-0 p-4">
										<div class="mb-2">
											<a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="<?= site_url('Home/Category/'.$con['id_kategori']) ?>"><?= $con['nama_kategori'] ?></a>
											<small><?php echo date("l, d F Y",strtotime($con['tanggal'])) ?></small>
										</div>
										<a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="<?= site_url('Home/article/'.$con['slug']) ?>"><?= $con['judul'] ?></a>
									</div>
									<div class="d-flex justify-content-between bg-white border border-top-0 p-4">
										<div class="d-flex align-items-center">
											<img class="rounded-circle mr-2" src="<?= base_url('') ?>/asep/free-news-website-template/img/setya.jpg" width="25" height="25" alt="">
											<small><?= $con['nama'] ?></small>
										</div>
										<!-- <div class="d-flex align-items-center">
											<small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
											<small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
										</div> -->
									</div>
								</div>
							</div>
						<?php } ?>
						<?php echo $this->pagination->create_links();?>
					</div>
				</div>

				<!-- Side -->
				<?php require_once('public/__sidebar.php') ?>

			</div>
		</div>
	</div>
	<!-- News With Sidebar End -->


	<!-- Footer -->
	<?php require_once('public/__footer.php') ?>


	<!-- Back to Top -->
	<a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('/asep/free-news-website-template/') ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('/asep/free-news-website-template/') ?>lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('/asep/free-news-website-template/') ?>js/main.js"></script>

	<!-- Javascript -->
	<script>
		var tw = new Date();
		if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
		else (a=tw.getTime());
		tw.setTime(a);
		var tahun= tw.getFullYear ();
		var hari= tw.getDay ();
		var bulan= tw.getMonth ();
		var tanggal= tw.getDate ();
		var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
		var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
	</script>

	<SCript>
		function showTime() {
				var a_p = "";
				var today = new Date();
				var curr_hour = today.getHours();
				var curr_minute = today.getMinutes();
				var curr_second = today.getSeconds();
				if (curr_hour < 12) {
					a_p = "AM";
				} else {
					a_p = "PM";
				}
				if (curr_hour == 0) {
					curr_hour = 12;
				}
				if (curr_hour > 12) {
					curr_hour = curr_hour - 12;
				}
				curr_hour = checkTime(curr_hour);
				curr_minute = checkTime(curr_minute);
				curr_second = checkTime(curr_second);
			document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		}

		function checkTime(i) {
			if (i < 10) {
				i = "0" + i;
			}
			return i;
		}
		setInterval(showTime, 500);
	</SCript>
</body>

</html>
