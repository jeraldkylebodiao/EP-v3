<!DOCTYPE html>  
 <html>  
	 <head>  
	      	<title>Accounts</title>  
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

<div class="container" style="width: 50%">
<div  style="text-align: center">
	<h1>Edit Password</h1><br/>
	
	<?php echo form_open('dashboard/updatePassword');?>
		<?php echo '<label id="msg" class="text-danger">'.$this->session->flashdata("error").'</label>'; ?> 
		<input type="hidden" name="id_hidden" value="<?php echo $data->id; ?>">
		<input type="hidden" name="username_hidden" value="<?php echo $data->username; ?>">
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center"><strong>Old Password</strong></label>
			<div class="col-md-10">
				<input type="password" value="" name="oldpassword" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center"><strong>New Password</strong></label>
			<div class="col-md-10">
				<input type="password" value="" name="newpassword" class="form-control" minlength="8" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center"><strong>Confirm Password</strong></label>
			<div class="col-md-10">
				<input type="password" value="" name="confirmpassword" class="form-control" minlength="8" required>
			</div>
		</div>
		

		<div class="form-group row">
			<label class="col-md-2 text-center"></label>
			<div class="col-md-12">
				<input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Save">
				<a href="<?php echo base_url('dashboard/account/' .$data->username); ?>" class="btn btn-danger btn-lg">Cancel</a>
			</div>
		</div>

	</form>
	</div>
</div>
</body>
</html>