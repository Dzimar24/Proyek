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

<!-- Message -->
<div id="hilang">
	<?php $this->view('message'); ?>
</div>

<!-- Start Content -->
<div class="card">
	<h2 class="card-title mx-auto mt-3"><b>Content Table</b></h2>


	<!-- Button Modal -->
	<div class="">
		<button type="button" class="btn btn-outline-primary float-sm-right mr-4" data-toggle="modal"
			data-target="#modal-lg">
			+ Content
		</button>
	</div>


	<!-- /.card-header -->
	<div class="card-body">
		<table class="table table-bordered" id="example1">
			<thead>
				<tr class=" text-center">
					<th style="width: 10px">No</th>
					<th>Title Content</th>
					<th>Category Content</th>
					<th>Date</th>
					<th>Creator</th>
					<th>Photo</th>
					<th class=" col-2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				if (isset($konten)) {
					foreach ($konten as $wq) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $wq['judul'] ?></td>
					<td><?= $wq['nama_kategori'] ?></td>
					<td><?= $wq['tanggal'] ?></td>
					<td><?= $wq['nama'] ?></td>
					<td>
						<a href="<?= base_url('/asep/upload/content/'.$wq['foto']) ?>" target="_blank">
							<i class="fa fa-file-image" aria-hidden="true"></i> See Photo
						</a>
					</td>
					<td>
						<form action="<?= site_url('admin/content/del') ?>" method="post">
							<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit_content<?= $wq['id_konten']; ?>">
								Update
							</button>
							<input type="hidden" name="foto" value="<?= $wq['foto']?>">
							<button onClick="return confirm('Apakah Anda Yakin ? ')" class="btn btn-outline-danger">
								Delete
							</button>
						</form>
						<!-- Modal Update -->
						<div class="modal fade" id="edit_content<?= $wq['id_konten']; ?>">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Update Content</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<?php echo form_open_multipart('admin/content/update') ?>
										<input type="hidden" name="namePhoto" value="<?= $wq['foto']; ?>">
										<div class="modal-body center">
											<div class="form-group">
												<label for="nama">Title Content :</label>
												<input type="text" value="<?= $wq['judul'] ?>" name="judul" class="form-control" placeholder="Title" require>
											</div>
											<div class="form-group">
												<label for="nama">Category :</label>
												<select class="form-control" name="id_kategori" id="">
													<option value="">Select Category</option>
													<?php foreach ($kategori as $ko) { ?>
													<option
													<?php if($ko['id_kategori'] == $wq['id_kategori']){ echo"selected"; } ?> value="<?= $ko['id_kategori'] ?>"><?= $ko['nama_kategori'] ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label>Information :</label>
												<pre><textarea name="keterangan" id="" cols="10" rows="2"><?php echo htmlentities($wq['keterangan']); ?></textarea></pre>
											</div>
											<div class="form-group">
												<label for="nama">Source Content :</label>
												<input type="text" value="<?= $wq['sumber'] ?>" name="sumber" class="form-control" placeholder="Source" require>
											</div>
											<div class="form-group">
												<label>Photo  (Size 3 : 2):</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" name="foto" class="form-control" id="exampleInputFile" accept="image/png, image/jpg, image/jpeg">
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default"
												data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									<?php form_close() ?></form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal-dialog -->
					<!-- /.modal -->
					</td>
				</tr>
					<?php } 
					} else { ?>
						<tr>
							<td colspan='6' class="text-center text-danger">Tidak ada Data</td>
						</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<!-- Modal add -->
<div class="modal fade" id="modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">+ Content</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php echo form_open_multipart('admin/content/add') ?>
				<div class="modal-body center">
					<div class="form-group">
						<label for="nama">Title Content :</label>
						<input type="text" name="judul" class="form-control" placeholder="Title" required>
					</div>
					<div class="form-group">
						<label for="nama">Category :</label>
						<select class="form-control" name="id_kategori" id="" required>
							<option value="">Select Category</option>
							<?php foreach ($kategori as $wq) { ?>
							<option value="<?= $wq['id_kategori'] ?>"><?= $wq['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="nama">Information :</label>
						<textarea class="form-control" name="keterangan" id="" cols="10" rows="2"></textarea>
					</div>
					<div class="form-group">
						<label for="nama">Source Content :</label>
						<input type="text" name="sumber" class="form-control" placeholder="Source Content" required>
					</div>
					<div class="form-group">
						<label for="foto">Photo (Size 3 : 2):</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" name="foto" class="form-control" id="exampleInputFile" accept="image/png, image/jpg, image/jpeg" required>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			<?php form_close() ?>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
