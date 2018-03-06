<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
<?php		
		}
	?>
	<div
	<div class="container";
	style="width: 100%; text-align: center; padding: 80px"
	<table id="user_data" class="table table-bordered table-responsive">
			<div
				a href="<?php echo base_url().'main/admin'; ?>" class="btn btn-danger btn-lg">Back</a>
			</div>
	</div>
		<thead>
			<tr>
				
				<th style="width:50%">UserID</th>
				<th style="width:50%">Username</th>
				<th style="width:50%">Email</th>
			</tr>
		</thead>
		<tbody>
	
		</tbody>
	</table>
	<
</div>