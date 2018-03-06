	<div class="container">

	<h1 style="text-align: center ">Tourist Spots List</h1><br/>
	<div class="container" style="width: 50%">
		<a href="<?php echo base_url('blog/add'); ?>" class="btn btn-primary btn-block">Add New Tourist Spot</a><hr/>
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
				<td style="width:5%">ID</td>
				<th style="width:10%">Tourist Spot</th>
				<th style="width:30%">Description</th>
				<th style="width:10%">Region</th>
				<th style="width:10%">Province</th>
				<th style="width:10%">City</th>
				<th style="width:10%">Created at</th>
				<th style="width:15%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			if($blogs){
				foreach($blogs as $blog){
		?>
			<tr>
				<td><?php echo $blog->id; ?></td>
				<td><?php echo $blog->tourist_name; ?></td>
				<td><?php echo $blog->desc_name; ?></td>
				<td><?php echo $blog->reg_name; ?></td>
				<td><?php echo $blog->prov_name; ?></td>
				<td><?php echo $blog->city_name; ?></td>
				<td><?php echo $blog->created_at; ?></td>
				<td>
					<a href="<?php echo base_url('blog/edit/'.$blog->id); ?>" class="btn btn-success">Edit</a>
					<a href="<?php echo base_url('blog/delete/'.$blog->id); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</tbody>
	</table>
</div>
