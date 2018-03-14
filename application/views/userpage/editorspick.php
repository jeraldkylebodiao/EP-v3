<!DOCTYPE html>
<html>
<head>
	<title>Editors Pick</title>
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
		<center><label style="color: white; font-size: 60px;">Editors Pick</label></center>
		<br/>
		<div class="group row">
			<?php 
				if($editors){
					foreach($editors as $editor){
			?>
			<div class="col-md-4">
				<div class="container" id="posts">
					<a href="" style="font-size: 20px"><?php echo '@'.$editor->post_name;?></a><hr/>
					<?php if(!$editor->post_image):?>
						<img style="width: 100%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
					<?php else:?>
						<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$editor->post_image;?>">
					<?php endif?>
					<?php echo '<h3 >'.$editor->title.'</h3>'; ?>
					<?php echo '<label style="font-size:15px;">'.$editor->body.'</label>'; ?>
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