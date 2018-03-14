<!DOCTYPE html>  
 <html>  
	 <head>  
	      	<title>Accounts</title>  
	      	<link rel="stylesheet" 
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	</head>
	<body>
	<hr/>
	

	<div class="container" style="width: 50%">
		<div>
			<h1 style="text-align: center">Update Photo</h1><br/>
			
			<?php echo form_open_multipart('dashboard/changeImage');?>
				<?php echo '<label  class="text-danger">'.$this->session->flashdata("error").'</label>'; ?> 
				<input type="hidden" name="id_hidden" value="<?php echo $data->id; ?>">
				<div>
					<center><label><strong>Current Image</strong></label></center>
				</div>
				<div class="container">
					<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$data->post_image;?>">
				</div>
				<br/>
				<div class="form-group row">
					<label for="title" class="col-md-3 text-center"><strong>Change Image</strong></label>
					<div class="col-md-9">
						<input type="file" name="userfile"  required>
					</div>
				</div>
				

				<div class="form-group row">
					<div class="col-md-12">
						<input type="submit" name="btnUpdate" class="btn btn-success btn-md" value="Save">
						<a href="<?php echo base_url('dashboard/editpost_inprofile/' .$data->id); ?>" class="btn btn-danger btn-md">Cancel</a>
					</div>
				</div>

			</form>
			</div>
		</div>
</body>
</html>