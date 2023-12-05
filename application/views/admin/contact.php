<div id="hilang">
	<?php $this->view('message'); ?>
</div>

<!-- Table -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Table Contact</h3>
			</div>
			<!-- ./card-header -->
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>User</th>
							<th>Date</th>
							<th>Email</th>
							<?php if ($this->session->userdata('level') == 'Admin') { ?>
								<th>Delete</th>
							<?php } ?>
						</tr>
					</thead>
					<form action="<?= site_url('admin/Contact/delete') ?>" method="post">
					
			<?php 
			if (isset($contact)) {
				$no = 1;
				foreach($contact as $con) { ?>
					<tbody>
						<tr data-widget="expandable-table" aria-expanded="false">
							<td><?= $no++ ?></td>
							<td><?= $con['name'] ?></td>
							<td><?php echo date("l, d F Y",strtotime($con['tanggal']))?></td>
							<td><?= $con['email'] ?></td>
							<?php if ($this->session->userdata('level') == 'Admin') { ?>
								<td>
									<input type="checkbox" name="opo[]" id="" class="checkboxes" value="<?= $con['id_saran'] ?>">
								</td>
							<?php } ?>
						</tr>
						<tr class="expandable-body">
							<td colspan="5">
								<p>
									<?= $con['isi_saran'] ?>
								</p>
							</td>
						</tr>
					</tbody>
					<?php }
					} else { ?>
						<td>Approved</td>
					<?php } ?>
					<tfoot>
					<?php if ($this->session->userdata('level') == 'Admin') : ?>
							<th colspan="4" class="m-4">
								Delete:
							</th>
							<th>
									<input type="checkbox" name="chck[]" id="" onchange="checkAll(this)">
									<button type="submit" class="btn btn-danger ml-3" onClick="return confirm('Apakah Anda Yakin ? ')">Delete</button>
								</th>
								<?php endif ?>
							</tfoot>
						</table>
					</form>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>
<!-- /.row -->

<script type="text/javascript">
	function checkAll(ele) {
		var checkboxes = document.getElementsByClassName('checkboxes');
		if (ele.checked) {
			for (var i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i]) {
					checkboxes[i].checked = true;
				}
			}
		} else {
			for (var i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i]) {
					checkboxes[i].checked = false;
				}
			}
		}
	}
</script>
