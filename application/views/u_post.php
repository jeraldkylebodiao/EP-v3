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
				body{
					background-color: black;
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


		<div class="container-fluid" style="width: 100%; text-align: right; padding-top: 10px" >
			<a href="<?php echo base_url().'main/admin'; ?>" class="btn btn-danger btn-lg">Back</a>
			<a href="<?php echo base_url().'main/logout'; ?>" class="btn btn-success btn-lg" ">Log Out</a>
		</div>
		
      		<label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">LATEST POSTS</label><br/>
			<?php 
				if($posts){
					foreach($posts as $post){

			?>
				<div class="container" id="posts">
					
					<a href="" style="font-size: 20px"><?php echo '@'.$post->post_name;?></a><hr/>
					<?php echo '<h2 >'.$post->title.'</h2>'; ?><br/>
					<?php if(pathinfo($post->post_image)['extension']=='mp4'):?>
						<video width="100%" controls>
							<source src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>" type="video/mp4">
						</video>
						<br/>
					<?php endif;?>
					<?php if(pathinfo($post->post_image)['extension']!='mp4'):?>
						<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>"><br/>
					<?php endif;?>
					<?php echo '<label style="font-size:15px;">'.$post->body.'</label>'; ?><hr/>
					<a href="<?php echo base_url('main/deletepost/' .$post->id) ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
				</div>
				
			<?php
				}
			}
		?>

		</div>
 </body>  
 </html>  