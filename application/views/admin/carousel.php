<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-1">
			<div class="col-sm-12">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>"><?= $judul_halaman; ?></a></li>
					<!-- <li class="breadcrumb-item active">Dashboard v2</li> -->
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Input Carousel -->

<!-- form start -->
<button type="button" class="btn btn-outline-primary m-3" data-toggle="modal" data-target="#modal-default">
	+ Caraousel
</button>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Plus Carousel</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open_multipart('admin/Carousel/add')?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Title </label>
					<input type="text" name="judul" class="form-control" id="exampleInputEmail1"
						placeholder="Enter Title" require>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Select Photo Size (16 : 9)</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="exampleInputFile" name="foto"accept="image/png, image/jpg, image/jpeg" require>
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<?= form_close()?>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Message -->
<div id="hilang">
	<?php $this->view('message'); ?>
</div>

<!-- Carousel -->
<div class="card card-default rounded col-12">
	<!-- Carousel wrapper -->
	<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
		<!-- Inner -->
		<div class="carousel-inner py-4">
			<!-- Single item -->
			<div class="carousel-item active">
				<div class="container">
					<div class="row">
						<?php foreach ($caraousel as $oil) : ?>
						<div class="col-lg-4">
							<div class="card" style="border-radius: 10px; border: solid; box-shadow: 5px 10px #888888;">
								<img src="<?= base_url('/asep/upload/carousel/'.$oil['foto']) ?>"
									class="card-img-top" />
								<div class="card-body">
									<h5 class="m-2">Title : <?= $oil['judul'] ?></h5>
									<?= form_open('admin/Carousel/del') ?>
									<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-lg<?= $oil['id_caraousel'] ?>">Update</button>
									<input type="hidden" name="foto" value="<?= $oil['foto']?>">
									<button onClick="return confirm('Apakah Anda Yakin ? ')"
										class="btn btn-danger mt-2">Deleted</button>
									<?= form_close() ?>
								</div>
							</div>
						</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Inner -->
	</div>
	<!-- Carousel wrapper -->
</div>

<?php foreach ($caraousel as $sel) :?>
<!-- Modal Update -->
	<div class="modal fade" id="modal-lg<?= $sel['id_caraousel'] ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Carousel</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?= form_open_multipart('admin/Carousel/update')?>
					<input type="hidden" name="namePhoto" value="<?= $sel['foto']; ?>">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Title </label>
							<input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" value="<?= $sel['judul'] ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Select Photo Size (16 : 9)</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" name="foto" class="custom-file-input" id="exampleInputFile" accept="image/png, image/jpg, image/jpeg" require>
									<label class="custom-file-label" for="exampleInputFile">Choose file</label>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				<?= form_close()?>
			</div>
		<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php endforeach ?>
