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
	<link href="<?= base_url('asep/free-news-website-template/') ?>lib/owlcarousel/assets/owl.carousel.min.css"
		rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('asep/free-news-website-template/') ?>css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Top Bar -->
	<?php require_once('public/__topBar.php') ?>
	<a href="#"></a>


	<!-- Navbar -->
	<?php require_once('public/__navbar.php') ?>

	

	<!-- Contact Start -->
	<div class="container-fluid mt-5 pt-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div id="hilang"><?php echo $this->session->flashdata('success') ?></div>
					<div class="section-title mb-0">
						<h4 class="m-0 text-uppercase font-weight-bold">Contact Us For Any Queries</h4>
					</div>
					<div class="bg-white border border-top-0 p-4 mb-3">
						<div class="mb-4">
							<h6 class="text-uppercase font-weight-bold">Profile</h6>
							<p class="mb-2">
								<?= $config->profil_website ?>
							</p>
							<div class="mb-3">
								<div class="d-flex align-items-center mb-2">
									<i class="fa fa-map-marker-alt text-primary mr-2"></i>
									<h6 class="font-weight-bold mb-0">Our Office</h6>
								</div>
								<p class="m-0"><a href="https://www.google.com/maps/search/?q=<?= $config->alamat ?>"><?= $config->alamat ?></a></p>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center mb-2">
									<i class="fa fa-envelope-open text-primary mr-2"></i>
									<h6 class="font-weight-bold mb-0">Email Us</h6>
								</div>
								<a href="mailto:<?= $config->email ?>"><?= $config->email ?></a>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center mb-2">
									<i class="fa fa-phone-alt text-primary mr-2"></i>
									<h6 class="font-weight-bold mb-0">Call Us</h6>
								</div>
								<p class="m-0"><?= $config->no_wa ?></p>
							</div>
						</div>
						<h6 class="text-uppercase font-weight-bold mb-3">Contact Us</h6>
						<?= form_open('Home/contact_add') ?>
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-group">
										<input name="name" type="text" class="form-control p-4" placeholder="Your Name" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input name="email" type="email" class="form-control p-4" placeholder="Your Email" required="required" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="isi_saran" class="form-control" rows="4" placeholder="Message" required="required"></textarea>
							</div>
							<div>
								<button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit">Send Message</button>
							</div>
						<?= form_close() ?>
					</div>
				</div>
				<!-- Side -->
				<?php require_once('public/__sidebar.php') ?>
			</div>
		</div>
	</div>
	<!-- Contact End -->

	<!-- Footer -->
	<?php require_once('public/__footer.php') ?>

	<!-- Back to Top -->
	<!-- <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a> -->
	<a href="#" class="btn btn-primary btn-square back-to-top" style="display: inline;"><i
			class="fa fa-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('/asep/free-news-website-template/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('/asep/free-news-website-template/') ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('/asep/free-news-website-template/') ?>js/main.js"></script>

	<!-- jQuery -->
	<script src="<?= base_url('/asep/AdminLTE-3.2.0/') ?>plugins/jquery/jquery.min.js"></script>

	<script>
		$('#hilang').delay('slow').slideDown('slow').delay(4000).slideUp(600);</script>

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

	<script>
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
