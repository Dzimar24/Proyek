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

	<h2 class="card-title mx-auto mt-3"><b>Bordered Table</b></h2>

	<!-- Button Modal -->
	<div class="col-sm-12 col-md-6">
		<button type="button" class="btn btn-outline-primary mt-1" data-toggle="modal" data-target="#modal-default"
			onclick="add()">
			+ User
		</button>
	</div>


	<!-- /.card-header -->
	<div class="card-body">
		<table class="table table-bordered" id="example1">
			<thead>
				<tr class=" text-center">
					<th style="width: 10px">No</th>
					<th>Username</th>
					<th>Name</th>
					<th class=" col-3">Level</th>
					<th class=" col-2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				foreach ($row->result() as $key => $data) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $data->username ?></td>
					<td><?= $data->nama ?></td>
					<td><?= $data->level ?></td>
					<td>
						<form action="<?= site_url('admin/user/del') ?>" method="post" class=" text-center">
							<button type="button" class="btn btn-outline-primary" data-toggle="modal"
								data-target="#edit<?= $data->id_user ?>" onclick="add()">
								Update
							</button>
							<input type="hidden" name="id_user" value="<?=$data->id_user?>">
							<button onClick="return confirm('Apakah Anda Yakin ? ')" class="btn btn-outline-danger">
								Delete
							</button>
						</form>
						<!-- Modal Update -->
						<div class="modal fade" id="edit<?= $data->id_user ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Update User</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= site_url('admin/User/update') ?>" method="post" id="formData">
										<div class="modal-body center">
											<input type="hidden" name="id_user" value="<?= $data->id_user ?>">
											<div class=" form-group">
												<label for="username">Username :</label>
												<input type="text" name="username" class="form-control"
													placeholder="Username" id="username" value="<?= $data->username ?>">
											</div>
											<div class="form-group">
												<label for="name">Name :</label>
												<input type="text" name="nama" class=" form-control" placeholder="Name"
													id="name" value="<?= $data->nama ?>">
											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default"
												data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
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
				<h4 class="modal-title">+ User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= site_url('admin/user/add') ?>" method="post" id="formData">
				<div class="modal-body center">
					<div class=" form-group">
						<label for="username">Username :</label>
						<input type="text" name="username" class="form-control" placeholder="Username" id="username" required>
					</div>
					<div class="form-group">
						<label for="name">Name :</label>
						<input type="text" name="nama" class=" form-control" placeholder="Name" id="name" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class=" form-control" placeholder="Your Password"
							id="password" required>
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<select name="level" class="form-control" id="level" required>
							<option value="">--- Level ---</option>
							<option value="admin">Admin</option>
							<option value="konstuktor">Constructor</option>
						</select>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
	// var modal = $('#modalData');
	var formData = $('#formData');

	function add() {
		formData[0].reset();
	}

	$('.swalDefaultSuccess').click(function () {
		Toast.fire({
			icon: 'success',
			title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
		})
	});

</script>
