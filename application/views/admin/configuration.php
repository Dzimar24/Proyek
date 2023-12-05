<!-- Message -->
<div id="hilang">
	<?php $this->view('message'); ?>
</div>

<div class="card">
	<h2 class="card-title mx-auto mt-3"><strong>Configuration</strong></h2>
		<?= form_open('admin/configuration/update'); ?>
			<div class="card-body">
				<div class="modal-body center">
					<div class="form-group">
						<label>Name Website :</label>
						<input type="text" name="judul_website" class="form-control" placeholder="Name Website" value="<?= $config->judul_website; ?>">
					</div>
					<div class="form-group">
						<label>Profile :</label>
						<textarea class="form-control" name="profil_website" id="" cols="10" rows="2"><?= $config->profil_website; ?></textarea>
					</div>
					<div class="form-group">
						<label>Facebook Account :</label>
						<input type="text" class="form-control" name="facebook" id="" placeholder="Facebook Account" value="<?= $config->facebook; ?>">
					</div>
					<div class="form-group">
						<label>Instagram Account :</label>
						<input type="text" class="form-control" name="instagram" id="" placeholder="Instagram Account" value="<?= $config->instagram; ?>">
					</div>
					<div class="form-group">
						<label>Twitter Account :</label>
						<input type="text" class="form-control" name="twitter" id="" placeholder="Twitter Account" value="<?= $config->twitter; ?>">
					</div>
					<div class="form-group">
						<label>Email :</label>
						<input type="email" class="form-control" name="email" id="" placeholder="Email" value="<?= $config->email; ?>">
					</div>
					<div class="form-group">
						<label>Address :</label>
						<input type="text" class="form-control" name="alamat" id="" placeholder="Address" value="<?= $config->alamat; ?>">
					</div>
					<div class="form-group">
						<label>No. Whatsapp :</label>
						<input type="text" class="form-control" name="no_wa" data-inputmask="'mask': ['999-999-9999 [99999]', '+99 99 99 9999[9]-9999']" data-mask="" inputmode="text" placeholder="___-___ " value="<?= $config->no_wa; ?>">
					</div>
					<div class="float-sm-right mr-0">
						<button type="submit" class="btn btn-outline-primary">Save</button>
					</div>
				</div>
			</div>
		<?php form_close()?>
</div>
