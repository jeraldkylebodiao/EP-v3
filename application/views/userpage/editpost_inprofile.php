<!DOCTYPE html>  
 <html>  
	 <head>  
	      	<title>EXPLORE PINAS</title>  
	      	<link rel="stylesheet" 
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<style>
				#posts{
					background-color: white;
					margin-bottom: 40px;
					padding: 20px;
					border-radius: 2px;
					width: 80%;
				}
				#crt{
					background-color: white;
					border-radius: 2px;

				}
				#title{
					text-align: center;
				}
			</style>
	</head>
	<body>
	<br/>
	<hr/>
	<br/>

<div class="container">
<div id="button_back"  style="text-align: center">
	<h1>Edit Post</h1><br/>
	<?php echo form_open_multipart('dashboard/updatepost_inprofile');?>
	
		<br/><br/>
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
				<!--<input type="text" value="<?php echo $post->body; ?>" name="txt_body" class="form-control" required> -->
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center"><strong>Upload Image</strong></label>
			<input type="file" name="userfile" size="20" required>
		</div>
		<div class="form-group row">
			<label class="col-md-2 text-center"></label>
			<div class="col-md-12">
				<input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Update">
				<a href="<?php echo base_url('dashboard/user'); ?>" class="btn btn-danger btn-lg">Cancel</a>
			</div>
		</div>

	</form>
	</div>
</div>
</body>
</html>