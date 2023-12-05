<div class="col-lg-4">
	<!-- Social Follow Start -->
	<div class="mb-3">
		<div class="section-title mb-0">
			<h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
		</div>
		<div class="bg-white border border-top-0 p-3">
			<a href="<?= $config->facebook ?>" class="d-block w-100 text-white text-decoration-none mb-3"
				style="background: #39569E;">
				<i class="fab fa-facebook-f text-center py-4 mr-3"
					style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
				<span class="font-weight-medium">999,999 Fans</span>
			</a>
			<a href="<?= $config->instagram ?>" class="d-block w-100 text-white text-decoration-none mb-3"
				style="background: #C8359D;">
				<i class="fab fa-instagram text-center py-4 mr-3"
					style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
				<span class="font-weight-medium">999,999 Followers</span>
			</a>
			<a href="<?= $config->twitter ?>" class="d-block w-100 text-white text-decoration-none mb-3"
				style="background: #52AAF4;">
				<i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
				<span class="font-weight-medium">999,999 Followers</span>
			</a>
		</div>
	</div>
	<!-- Social Follow End -->

	<!-- Popular News Start -->
	<div class="mb-3">
		<div class="section-title mb-0">
			<h4 class="m-0 text-uppercase font-weight-bold">Breaking News</h4>
		</div>
		<div class="bg-white border border-top-0 p-3">
			<?php foreach($recept as $cept) : ?>
				<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
					<img class="img-fluid w-50" src="<?= base_url('/asep/upload/content/'.$cept['foto']) ?>" alt="">
					<div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
						<div class="mb-2">
							<a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="<?= site_url('Home/Category/'.$cept['id_kategori']) ?>"><?= $cept['nama_kategori'] ?></a>
							<span class=""><?= date("l, d F Y",strtotime($cept['tanggal'])) ?></span>
						</div>
						<a class="h5 m-0 text-secondary text-uppercase font-weight-bold" href="<?= site_url('Home/article/'.$cept['slug']) ?>"><?= $cept['judul'] ?></a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<!-- Popular News End -->

	<!-- Tags Start -->
	<div class="mb-3">
		<div class="section-title mb-0">
			<h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
		</div>
		<div class="bg-white border border-top-0 p-3">
			<div class="d-flex flex-wrap m-n1">
				<?php foreach($category as $cate) {?>
				<a href="<?= site_url('Home/Category/'.$cate['id_kategori']) ?>"
					class="btn btn-sm btn-outline-secondary m-1">
					<?= $cate['nama_kategori'] ?>
				</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- Tags End -->
</div>
