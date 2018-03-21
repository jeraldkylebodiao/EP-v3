

	<div class="container"  style="text-align: center; background-color: black">
		<a href="<?php echo base_url().'gomenasai/bakana'; ?>" class="btn btn-danger btn-lg">Back</a>
		<a href="<?php echo base_url('gomenasai/add'); ?>" class="btn btn-primary btn-lg">Add New Tourist Spot</a>
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

<div class="container-fluid" style="text-align: center; font-family: century gothic; background-color: black">
			<br/>
			<div class="group row">
				<?php 
					if($blogs){
						foreach($blogs as $blog){

				?>
				<div class="col-md-3">
					<div class="container" id="posts">
						<?php echo '<h2 >'.$blog->tourist_name.'</h2>'; ?>
						<hr/>
						<?php if(!$blog->ts_image):?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						<?php else:?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$blog->ts_image;?>">
						<?php endif?>
							<hr/>
						<?php echo '<label style="font-size:15px;">'.$blog->desc_name.'</label>'; ?><br/>
						<?php echo '<label style="font-size:15px;">'.$blog->address.'</label>'; ?>
							<hr/>
						<a href="<?php echo base_url('gomenasai/edit/'.$blog->id); ?>" class="btn btn-success btn-sm">Edit</a>
						<a href="<?php echo base_url('gomenasai/delete/'.$blog->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?');">Delete</a>
					</div>
				</div>
				<?php
						}
					}
				?>
			</div>
</div>
