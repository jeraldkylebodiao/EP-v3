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
					<label><?php echo $post->full_name?></label><br/>
					<label><?php echo $post->username?></label><br/>
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