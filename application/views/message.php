<?php if($this->session->has_userdata('success')) { ?>
<div class="alert alert-default-primary col-sm-3">
	<div class="alert-body">
		<button class="close" data-dismiss="alert">
			<span>×</span>
		</button>
		<i class="fa fa-check" aria-hidden="true"></i> <?php echo $this->session->flashdata('success');?>
	</div>
</div>

<?php } ?>


