<!-- SELECT2 EXAMPLE -->
<div class="card card-default rounded col-12">
	<div class="card-header">
		<h3 class="card-title"><b>Plus Gallery</b></h3>
	</div>
	<!-- /.card-header -->
	<?= form_open_multipart('admin/Gallery/plus') ?>
		<div class="card-body">
			<div class="col-md-12">
				<div class="form-group">
					<label>Title </label>
					<div class="input-group">
						<div class="custom-file">
							<input class="form-control" type="text" name="title" id="" placeholder="Title">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="exampleInputFile">Photo Size 3 : 2</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer justify-content-between">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	<?= form_close() ?>
	<!-- /.card-body -->
</div>
<!-- /.card -->

<!-- Message -->
<div id="hilang">
	<?php $this->view('message'); ?>
</div>

<!-- Gallery -->
<div class="card card-default rounded col-12">
	<!-- Carousel wrapper -->
	<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
		<!-- Inner -->
		<div class="carousel-inner py-4">
			<!-- Single item -->
			<div class="carousel-item active">
				<div class="container">
					<div class="row">
						<?php foreach($gallery as $lery) :?>
						<div class="col-lg-4 mt-4">
							<div class="card" style="border-radius: 12px; border: solid; box-shadow: 5px 10px #888888;">
								<img src="<?= base_url('/asep/upload/gallery/'.$lery['photo']) ?>" class="card-img-top" style="border-radius: 10px;" />
								<div class="card-body">
									<h5 class="m-2"><?= $lery['title'] ?></h5>
									<?= form_open('admin/Gallery/del') ?>
										<input type="hidden" name="photo" value="<?= $lery['photo']?>">
										<button onClick="return confirm('Apakah Anda Yakin ? ')" class="btn btn-danger mt-2">Deleted</button>
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
