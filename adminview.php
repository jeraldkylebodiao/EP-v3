<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE PINAS</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

			<style>
				
				body{
					
					background-color: black;
					color: white;
					font-family: century gothic;
				}
				th{
					font-weight: bold;
					font-size: 20px;
				}
				#user_data{
					background-color: white;
					color: black;
					font-size: 20px;
				}
				#posts{
					background-color: white;
					color: black;
					margin-bottom: 40px;
					padding: 20px;
					border-radius: 2px;
					text-align: center;
				}
				
			</style>
<body>
	 
	<div class="container-fluid" style="padding: 20px; background-color: black;  text-align: right">
		<a href="<?php echo base_url().'gomenasai/bakana'; ?>" class="btn btn-danger btn-lg">Back</a>
	</div>
	

	<div class="container-fluid">
		<div class="group row">
			<?php 
					if($posts){
						foreach($posts as $post){

			?>
			<div class="col-md-3">
				<div class="container-fluid" id="posts">
					<img style="width: 70%;"; src="<?php echo base_url().'assets/default_photo/default.png';?>"><br/>
					<?php if($post->verification!='verified'):?>
					<label><?php echo $post->full_name?></label><br/>
					<label><?php echo $post->username?></label><hr/>
					<?php elseif($post->verification=='verified'):?>
							<?php foreach($verify as $info):?>
								<?php if($post->username==$info->username && $info->status=='verified'):?>
							  		<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">Username:</label>
							    	<label class="col-md-9"><?php echo $info->username?></label></div>
							    	<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">First Name:</label>
							    	<label class="col-md-9"><?php echo $info->first_name?></label></div>
							    	<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">Last Name:</label>
							    	<label class="col-md-9"><?php echo $info->last_name?></label></div>
							    	<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">Middle Initial:</label>
							    	<label class="col-md-9"><?php echo $info->middle_initial?></label></div>
							    	<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">Address:</label>
							    	<label class="col-md-9"><?php echo $info->full_address?></label></div>
							    	<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">Contact:</label>
							    	<label class="col-md-9"><?php echo $info->contact_number?></label></div>
							    	<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">Email Address:</label>
							    	<label class="col-md-9"><?php echo $info->email_address?></label></div>
							    	<div class="group row">
							  		<label class="col-md-3 text-right" style="font-weight: bold">Birthdate:</label>
							    	<label class="col-md-9"><?php echo $info->birthdate?></label></div>
							    <?php endif;?>
						<?php endforeach;?>
						<hr/>
					<?php endif;?>		
					<label>Account Status: <?php echo $post->verification?></label><br/>
					<?php 
						if($verify){
							foreach($verify as $verif){

					?>
					<?php if($verif->username==$post->username && $verif->status=="not verified"):?>
						<hr/>
	             		<label class="text-danger">Requesting Verification</label><br/>
	             	
					<?php endif;?>
					<?php
							}
						}
					?>
					<?php $count = 0?>
					<?php if($verifyTour):?>
						<?php foreach($verifyTour as $vTour):?>
							<?php if($vTour->user==$post->username && $vTour->tourStatus=='not approved'):?>
									<?php $count++;?>
							<?php endif;?>
						<?php endforeach;?>
					<?php endif;?>
					
					<?php if($count!='0' ):?>
						<hr/>
	             		<label class="text-danger">Requested Trips: <?php print_r($count);?></label><br/>
					<?php endif;?>
					<a href="<?php echo base_url('gomenasai/view/'.$post->username); ?>" class="btn btn-success">View Profile</a>
					
				</div>
				
			</div>
			<?php
						}
					}
				?>
			
		</div>
		
	</div>
</body>
</html>