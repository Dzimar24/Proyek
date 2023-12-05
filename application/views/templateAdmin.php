<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $judul_halaman ?></title>

	<!-- //? CSS -->
	<?php require_once('material/__css.php')?>
</head>

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<?= require_once('material/__navbar.php') ?>

		<!-- Main Sidebar Container -->
		<?= require_once('material/__sidebar.php') ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">

					<!-- Main row -->
						<?= $contents; ?>
					<!-- /.row -->
				</div>
				<!--/. container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!--//? Main Footer -->
		<?php require_once('material/__footer.php')?>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<?php require_once('material/__js.php')?>
</body>

</html>
