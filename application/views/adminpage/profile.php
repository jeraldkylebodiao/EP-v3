<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE PINAS</title>
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
			
			</style>
</head>
<body>
		<div class="container" style="width: 40%; padding-top: 30px" >
			<center><a href="<?php echo base_url().'admin/adminpost'; ?>" class="btn btn-success btn-block">Back</a></center>
		</div>
		<div class="container">
			<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">LATEST POSTS</label></center><br/>
		</div>
	
				
					<?php foreach ($item as $post): ?>
						<div class="container" id="posts">
							<a href="" style="font-size: 20px"><?php echo '@'.$post->post_name;?></a><hr/>
							<?php echo '<h2 >'.$post->title.'</h2>'; ?>
							<?php echo '<label style="font-size:15px;">'.$post->body.'</label>'; ?>
							<?php if(pathinfo($post->post_image)['extension']!='mp4'):?>
								<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>"><br/>
							<?php endif;?>
							<hr/>

							<a href="<?php echo base_url('editors_pick/addEP/' .$post->id)?>" class="btn btn-primary">Add to Editors Pick</a>
							<a href="<?php echo base_url('admin/deletepost/' .$post->id) ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
						</div>
				
					<?php endforeach;?>
				




</body>
</html>