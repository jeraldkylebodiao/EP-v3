	<div class="container-fluid" >

	<div class="container-fluid" style="width: 40% ; padding: 80px">
		
	</div>
	<div  class="container" style="width: 150%; text-align: center; padding: 80px" >
		<a href="<?php echo base_url('main/add'); ?>" class="btn btn-primary btn-lg">Add New Tourist Spot</a>
		<a href="<?php echo base_url().'main/admin'; ?>" class="btn btn-danger btn-lg">Back</a>
		<hr/>
	</div>
	<?php
		if($this->session->flashdata('success_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
	<?php		
		}
	?>


	<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
	<?php		
		}
	?>
	<table id="user_data" class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th style="width:30%">Username</th>
				<th style="width:60%">Email</th>
				<th style="width:10%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			if($blogs){
				foreach($blogs as $blog){

		?>
			<tr>
				<td><?php echo $blog->tourist_name; ?></td>
				<td><?php echo $blog->desc_name; ?></td>
				<td><?php echo $blog->reg_name; ?></td>
				<td><?php echo $blog->prov_name; ?></td>
				<td><?php echo $blog->city_name; ?></td>
				<td>
					<a href="<?php echo base_url('main/edit/'.$blog->id); ?>" class="btn btn-success">Edit</a>
					<a href="<?php echo base_url('main/delete/'.$blog->id); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</tbody>
	</table>
</div>
