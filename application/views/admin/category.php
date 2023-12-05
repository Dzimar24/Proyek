<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
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

	<h2 class="card-title mx-auto mt-3"><strong>Category Content Table</strong></h2>

	<!-- Button Modal -->
	<div class="">
		<button type="button" class="btn btn-outline-primary float-sm-right mr-4" data-toggle="modal" data-target="#modal-default">
			+ Category
		</button>
	</div>


	<!-- /.card-header -->
	<div class="card-body">
		<table class="table table-bordered" id="example1">
			<thead>
				<tr class=" text-center">
					<th style="width: 10px">No</th>
					<th>Name Category Content</th>
					<th class=" col-2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				if (isset($kategori)) {
					foreach ($kategori as $wq) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= isset($wq['nama_kategori']) ? $wq['nama_kategori'] : 'Data tidak tersedia'; ?></td>
							<td>
								<form action="<?= site_url('admin/category/del') ?>" method="post" class=" text-center">
									<button type="button" class="btn btn-outline-primary" data-toggle="modal"
										data-target="#edit<?= $wq['id_kategori'] ?>">
										Update
									</button>
									<input type="hidden" name="id_kategori" value="<?= $wq['id_kategori']?>">
									<button onClick="return confirm('Apakah Anda Yakin ? ')" class="btn btn-outline-danger">
										Delete
									</button>
								</form>
								<!-- Modal Update -->
								<div class="modal fade" id="edit<?= $wq['id_kategori'] ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Update Category</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="<?= site_url('admin/Category/update') ?>" method="post" id="formData">
												<div class="modal-body center">
													<input type="hidden" name="id_kategori" value="<?= $wq['id_kategori'] ?>">
													<div class=" form-group">
														<label for="username">Name Category Content :</label>
														<input type="text" name="nama_kategori" class="form-control"
															placeholder="Name Category" id="nama_kategori"
															value="<?= $wq['nama_kategori'] ?>">
													</div>
												</div>
												<div class="modal-footer justify-content-between">
													<button type="button" class="btn btn-default"
														data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Update</button>
												</div>
											</form>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
							</td>
						</tr>
					<?php 
					} 
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
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">+ Category</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= site_url('admin/category/add') ?>" method="post">
				<div class="modal-body center">
					<div class="form-group">
						<label for="nama">Name Category :</label>
						<input type="text" name="nama_kategori" class="form-control" placeholder="Name Category" required>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save Data</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
