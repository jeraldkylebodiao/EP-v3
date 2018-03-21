<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE PINAS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style>
		body{
			background-color: black;
			font-family: century gothic; 
		}
		#containers{
			background-color: white;
			border-radius: 10px;
			padding: 20px;
		
		}
		.containers{
			padding:50px;
		}
		h1{
			color: white;
			padding: 30px;
			margin-top: 20px;
		}
		label{
			font-size: 20px;
		}

	</style>
</head>
<body>
	<a href="<?php echo base_url('dashboard/viewprofile'); ?>" class="btn btn-danger btn-lg">Back</a>
	<div class="container">
		
	    <center><h1><strong>ACCOUNT</strong></h1></center> <br/>
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
                  <div class="alert alert-danger">
                   <?php echo $this->session->flashdata('error_msg'); ?>
                  </div>
                <?php   
                  }
                 ?>	
	 		<?php 
				if($data){
					foreach($data as $post){

			?>
			<?php if($post->username==$this->session->userdata('post_name')):?>
				<div class="container" id="containers">
					<div class="group row">
						<label class="col-md-6 text-right" ><strong>Account Status:</strong></label>
						<?php echo '<label class="col-md-6" >'.$post->verification.'</label>'; ?>
					</div>
					<hr/>
					<?php if($post->verification!='verified'):?>
					<div class="group row">
						<label class="col-md-6 text-right" ><strong>Full Name:</strong></label>
						<?php echo '<label class="col-md-6" >'.$post->full_name.'</label>'; ?>
					</div>
					
					<div class="group row">
						<label class="col-md-6 text-right" ><strong>Username:</strong></label>
						<?php echo '<label class="col-md-6" >'.$post->username.'</label>'; ?>
					</div >
					<?php elseif($post->verification=='verified'):?>
						<?php foreach($latest as $info):?>
						  		<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">Username:</label>
						    	<label class="col-md-6"><?php echo $info->username?></label></div>
						    	<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">First Name:</label>
						    	<label class="col-md-6"><?php echo $info->first_name?></label></div>
						    	<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">Last Name:</label>
						    	<label class="col-md-6"><?php echo $info->last_name?></label></div>
						    	<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">Middle Initial:</label>
						    	<label class="col-md-6"><?php echo $info->middle_initial?></label></div>
						    	<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">Address:</label>
						    	<label class="col-md-6"><?php echo $info->full_address?></label></div>
						    	<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">ContactNumber:</label>
						    	<label class="col-md-6"><?php echo $info->contact_number?></label></div>
						    	<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">Email Address:</label>
						    	<label class="col-md-6"><?php echo $info->email_address?></label></div>
						    	<div class="group row">
						  		<label class="col-md-6 text-right" style="font-weight: bold">Birthdate:</label>
						    	<label class="col-md-6"><?php echo $info->birthdate?></label></div>
							<?php endforeach;?>

					<?php endif;?>
					

				</div>
				<div >
					<?php if($latest):?>
							<?php foreach($latest as $verif):?>

			
								<?php if($verif->status=='not verified' && $post->verification=='not verified'):?>
									<a class="btn btn-success" data-toggle="collapse" href="#verifyaccount" role="button" aria-expanded="false" aria-controls="verifyaccount">Verify Account</a>
								<?php elseif($verif->status=='declined' && $post->verification=='declined'):?>
									<a class="btn btn-success" data-toggle="collapse" href="#requestverifyaccount" role="button" aria-expanded="false" aria-controls="requestverifyaccount">Verify Account</a>
								<?php endif;?>
					
							<?php endforeach;?>
					<?php elseif(!$latest):?>
							<?php if($verify):?>
								<?php foreach($verify as $verif):?>
										<?php if($verif->status=='not verified' && $post->verification=='not verified'):?>
											<a class="btn btn-success" data-toggle="collapse" href="#verifyaccount" role="button" aria-expanded="false" aria-controls="verifyaccount">Verify Account</a>
										<?php elseif($verif->status=='declined' && $post->verification=='declined'):?>
											<a class="btn btn-success" data-toggle="collapse" href="#requestverifyaccount" role="button" aria-expanded="false" aria-controls="requestverifyaccount">Verify Account</a>
										<?php endif;?>
								<?php endforeach;?>
							<?php elseif(!$verify):?>
								<a class="btn btn-success" data-toggle="collapse" href="#verifyaccount" role="button" aria-expanded="false" aria-controls="verifyaccount">Verify Account</a>
							<?php endif;?>
					<?php endif;?>
					
					<a class="btn btn-danger" data-toggle="collapse" href="#editaccount" role="button" aria-expanded="false" aria-controls="editaccount">Edit Account</a>
					<?php 
						if($verify){
							foreach($verify as $verif){

					?>
					<?php if($verif->username==$this->session->userdata('post_name') && $verif->status=="not verified"):?>
	             	<div class="collapse" id="verifyaccount">
					  <div class="card card-body" style="width: 30%" >
					    You've sent a verification request. Wait until the admin approves it.
					    
					  </div>
					</div>
					<?php endif;?>
					<?php
							}
						}
					?>
					<?php 
						if(!$verify){
							

					?>
					<div class="collapse" id="verifyaccount">
					  <div class="card card-body" style="width: 30%" >
					    Verify account in order to create tours that'll be visible to users and viewers of the website.
					    <a href="<?php echo base_url('account/verifyaccount/'.$post->username); ?>" class="btn btn-primary btn-sm">Verify Account</a>
					  </div>
					</div>
					<?php
							
						}
					?>
					<div class="collapse" id="requestverifyaccount">
					  <div class="card card-body" style="width: 30%" >
					    	Your request has been declined by the admin.
					    <a href="<?php echo base_url('account/verifyaccount/'.$post->username); ?>" class="btn btn-primary btn-sm">Request another account verification</a>
					  </div>
					</div>

					<div class="collapse" id="editaccount">
					  <div class="card card-body" style="width: 20%" >
					   <a href="<?php echo base_url('dashboard/editaccount/'.$post->username); ?>" class="btn btn-primary">Edit Account</a>
						<a href="<?php echo base_url('dashboard/editpassword/'.$post->username); ?>" class="btn btn-warning btn-md">Edit Password</a>
					  </div>
					</div>
		  


				</div>
			<?php endif;?>	
			<?php
				}
			}
		?>

	</div>
	<hr/>
	<hr/>
	<hr/>

</body>
</html>