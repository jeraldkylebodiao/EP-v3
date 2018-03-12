<!DOCTYPE html>  
 <html>  
	 <head>  
	      	<title>Accounts</title>  
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

<div class="container" style="width: 50%">
<div  style="text-align: center">
	<h1>Edit Account</h1><br/>
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
	<?php echo form_open('dashboard/updateaccount');?>
		<?php echo '<label id="msg" class="text-danger">'.$this->session->flashdata("error").'</label>'; ?> 
		<input type="hidden" name="id_hidden" value="<?php echo $data->id; ?>">
		<input type="hidden" name="username_hidden" value="<?php echo $data->username; ?>">
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center"><strong>Full Name</strong></label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $data->full_name; ?>" name="txt_fname" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center"><strong>Username</strong></label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $data->username; ?>" name="txt_username" class="form-control" required>
			</div>
		</div>
		

		<div class="form-group row">
			<label class="col-md-2 text-center"></label>
			<div class="col-md-12">
				<a href="<?php echo base_url('dashboard/editpassword/'.$data->username); ?>" class="btn btn-warning btn-md">Edit Password</a>
				<input type="submit" name="btnUpdate" class="btn btn-success btn-md" value="Save">
				<a href="<?php echo base_url('dashboard/account'); ?>" class="btn btn-danger btn-md">Cancel</a>
			</div>
		</div>

	</form>
	</div>
</div>
</body>
</html>