	<div class="container-fluid" >

	<center><div class="container-fluid" >
		<a href="<?php echo base_url().'admin/admin'; ?>" class="btn btn-danger btn-lg">Back</a>
		<a href="<?php echo base_url('admin/add'); ?>" class="btn btn-primary btn-lg">Add New Tourist Spot</a>
		<hr/>
		
	</div></center>
	
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
	<table id="user_data" class="table table-bordered table-responsive ">
		<thead>
			<tr>
				<th style="width:30%">Image</th>
				<th style="width:10%">Tourist Spot</th>
				<th style="width:20%">Description</th>
				<th style="width:10%">Region</th>
				<th style="width:10%">Province</th>
				<th style="width:10%">City</th>
				<th style="width:10%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			if($blogs){
				foreach($blogs as $blog){

		?>
			<tr>
				<td><img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$blog->ts_image;?>"></td>
				<td><?php echo $blog->tourist_name; ?></td>
				<td><?php echo $blog->desc_name; ?></td>
				<td><?php echo $blog->reg_name; ?></td>
				<td><?php echo $blog->prov_name; ?></td>
				<td><?php echo $blog->city_name; ?></td>
				<td>
					<a href="<?php echo base_url('admin/edit/'.$blog->id); ?>" class="btn btn-success">Edit</a>
					<a href="<?php echo base_url('admin/delete/'.$blog->id); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</tbody>
	</table>
</div>
