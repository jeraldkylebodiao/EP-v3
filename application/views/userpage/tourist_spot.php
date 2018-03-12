<!DOCTYPE html>
<html>
<head>
	<title>Tourist Spots</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
				#posts{
					background-color: white;
					margin-bottom: 40px;
					padding: 20px;
					border-radius: 2px;
				}
				body{
					background-color: black;
					font-family: century gothic;
				}
				#crt{
					background-color: white;
					border-radius: 2px;
					width: 50%;


				}
				#title{
					text-align: center;
				}
				
			</style>
</head>
<body>
	<a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-danger btn-lg" ">Back</a>
	<div class="container-fluid">
			<center><label style="color: white; font-size: 60px;">Tourist Spots</label></center>
			<br/>
			<div class="group row">
				<?php 
					if($spots){
						foreach($spots as $spot){

				?>
				<div class="col-md-3">
					<div class="container" id="posts">
						<?php echo '<h2 >'.$spot->tourist_name.'</h2>'; ?>
						<hr/>
						<?php if(!$spot->ts_image):?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						<?php else:?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$spot->ts_image;?>">
						<?php endif?>
						<hr/>
						<?php echo '<label style="font-size:15px;">'.$spot->address.'</label>'; ?>
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