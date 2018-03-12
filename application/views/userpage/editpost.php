<!DOCTYPE html>  
 <html>  
	 <head>  
	      	<title>EXPLORE PINAS</title>  
	      	<link rel="stylesheet" 
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<style>
				
				#title{
					text-align: center;
				}
			</style>
	</head>
	<body>
	<br/>
	<hr/>
	<br/>

<div class="container" style="width: 70%">
	<div  style="text-align: center">
		<h1>Edit Post</h1><br/>

		<?php if(!$post->post_image):?>

			<?php echo form_open_multipart('dashboard/updatepost');?>
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
				<input type="hidden" name="id_hidden" value="<?php echo $post->id; ?>">
				<div class="form-group row">
					<label for="title" class="col-md-2 text-center"><strong>TITLE</strong></label>
					<div class="col-md-10">
						<input type="text" value="<?php echo $post->title; ?>" name="txt_title" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="title" class="col-md-2 text-center"><strong>BODY</strong></label>
					<div class="col-md-10">
						<textarea type="text" name="txt_body" class="form-control" rows="5" required ><?php echo $post->body; ?></textarea>
					</div>
				</div>
				<?php if($post->post_image):?>
					<div class="form-group row">
						<label for="title" class="col-md-2 text-center"><strong>Image</strong></label>
						<div class="col-md-10 text-left">
							<a href="<?php echo base_url('dashboard/updatePostImage/'.$post->post_image); ?>" class="btn btn-warning btn-sm">Update Photo</a>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 text-center"><strong>Current Image</strong></label>
						<div class="col-md-10 text-left">
							<img style="width: 50%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
						</div>
					</div>
				<?php else:?>
					<div class="form-group row">
					<label for="title" class="col-md-2 text-center"><strong>Add Image</strong></label>
					<div class="col-md-10 text-left">
						<input type="file" name="userfile" size="20" required>
					</div>
				</div>
				<?php endif?>
				<div class="form-group row">
					<div class="col-md-12">
						<input type="submit" name="btnUpdate" class="btn btn-success btn-md" value="Update">
						<a href="<?php echo base_url('dashboard/user'); ?>" class="btn btn-danger btn-md">Cancel</a>
					</div>
				</div>

			</form>
		<?php else:?>
			<?php echo form_open_multipart('dashboard/updateposts');?>
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
				<input type="hidden" name="id_hidden" value="<?php echo $post->id; ?>">
				<div class="form-group row">
					<label for="title" class="col-md-2 text-center"><strong>TITLE</strong></label>
					<div class="col-md-10">
						<input type="text" value="<?php echo $post->title; ?>" name="txt_title" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="title" class="col-md-2 text-center"><strong>BODY</strong></label>
					<div class="col-md-10">
						<textarea type="text" name="txt_body" class="form-control" required><?php echo $post->body; ?></textarea>
					</div>
				</div>
				<?php if($post->post_image):?>
					<div class="form-group row">
						<label for="title" class="col-md-2 text-center"><strong>Image</strong></label>
						<div class="col-md-10 text-left">
							<a href="<?php echo base_url('dashboard/updatePostImage/'.$post->post_image); ?>" class="btn btn-warning btn-sm">Update Photo</a>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 text-center"><strong>Current Image</strong></label>
						<div class="col-md-10 text-left">
							<img style="width: 50%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
						</div>
					</div>
				<?php else:?>
					<div class="form-group row">
					<label for="title" class="col-md-2 text-center"><strong>Add Image</strong></label>
					<div class="col-md-10 text-left">
						<input type="file" name="userfile" size="20" required>
					</div>
				</div>
				<?php endif?>
				<div class="form-group row">
					<div class="col-md-12">
						<input type="submit" name="btnUpdate" class="btn btn-success btn-md" value="Update">
						<a href="<?php echo base_url('dashboard/user'); ?>" class="btn btn-danger btn-md">Cancel</a>
					</div>
				</div>

			</form>
		<?php endif?>
		</div>
	</div>
</body>
</html>