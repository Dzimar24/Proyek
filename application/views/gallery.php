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
</head>

<body>
	<!-- Top Bar -->
	<?php require_once('public/__topBar.php') ?>


	<!-- Navbar -->
	<?php require_once('public/__navbar.php') ?>

	<!-- Gallery -->
	<div class="rounded col-12 mt-3">
		<div class="container">
			<div class="row">
				<?php foreach($gallery as $lery) :?>
				<div class="col-lg-4 mt-4">
					<div class="card" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px; border-radius: 17px;">
						<img src="<?= base_url('/asep/upload/gallery/'.$lery['photo']) ?>" class="card-img-top" style="border-radius: 15px;"/>
						<div class="card-body">
							<h5 class="m-2"><?= $lery['title'] ?></h5>
							<span class="m-2">Date : <?php echo date("l, d F Y",strtotime($lery['date'])) ?></span>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>


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
		if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
		else(a = tw.getTime());
		tw.setTime(a);
		var tahun = tw.getFullYear();
		var hari = tw.getDay();
		var bulan = tw.getMonth();
		var tanggal = tw.getDate();
		var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
		var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
			"Oktober", "November", "Desember");
		document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " +
			tahun;

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
			document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
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
