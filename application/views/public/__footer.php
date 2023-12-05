<!-- Footer Start -->
<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
	<div class="row py-4">
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
				<a href="https://www.google.com/maps/search/?q=<?php echo $config->alamat ?>"><i class="fa fa-map-marker-alt mr-2"></i><?php echo $config->alamat ?></a>
				<p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i><?php echo $config->no_wa ?></p>
				<a href="mailto:<?php echo $config->email ?>"><i class="fa fa-envelope mr-2"></i><?php echo $config->email ?></a>
			<h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
			<div class="d-flex justify-content-start">
				<a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="<?= $config->twitter ?>"><i class="fab fa-twitter"></i></a>
				<a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="<?= $config->facebook ?>"><i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="<?= $config->instagram ?>"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="mb-4 text-white text-uppercase font-weight-bold">Recent Post</h5>
			<?php foreach($recept as $cept) : ?>
			<div class="mb-3">
				<div class="mb-2">
					<a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="<?= site_url('Home/Category/'.$cept['id_kategori']) ?>"><?= $cept['nama_kategori'] ?></a>
					<small><?= date("l, d F Y",strtotime($cept['tanggal'])) ?></small>
				</div>
				<a class="small text-body text-uppercase font-weight-medium" href="<?= site_url('Home/article/'.$cept['slug']) ?>"><?= $cept['judul'] ?></a>
			</div>
			<?php endforeach ?>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories Content</h5>
			<div class="m-n1">
				<?php foreach($category as $cate) {?>
				<a href="<?= site_url('Home/Category/'.$cate['id_kategori']) ?>" class="btn btn-sm btn-secondary m-1">
					<?= $cate['nama_kategori'] ?>
				</a>
				<?php } ?>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<div class="row">
				<h5 class="text-white text-uppercase font-weight-bold">Gallery</h5>
			</div>
			<div class="row">
				<?php foreach($gallery as $lery) :?>
					<div class="col-4 mb-3">
						<a href=""><img class="w-100" src="<?= base_url('/asep/upload/gallery/'.$lery['photo']) ?>"></a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
	<p class="m-0 text-center">&copy; <a class="text-warning"><?= $config->judul_website ?></a>. All Rights Reserved.

		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		Design by <a href="https://htmlcodex.com">HTML Codex</a></p>
</div>
<!-- Footer End -->


