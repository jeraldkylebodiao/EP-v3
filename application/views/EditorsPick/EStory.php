<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE PINAS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
	#posts{
		background-color: white;
		margin-bottom: 40px;
		padding: 20px;
		border-radius: 2px;
	}
	body{
		background-color: black;
	}
	#btn{
		text-align: right;
	}

</style>
<body>

	<div class="container" id="btn">
		<a href="<?php echo base_url().'gomenasai/bakana'; ?>" class="btn btn-danger btn-lg" ">BACK</a>
	</div><br/>
	<div class="container" style="text-align: center">
		<h1 style="color: white">EDITORS PICK</h1>
	</div>

	<div class="container-fluid">
		<div class="group row">
			<?php foreach ($item as $post): ?>
				<div class="col-md-4">
					<div class="container" id="posts">
						<a href="" style="font-size: 20px"><?php echo '@'.$post->post_name;?></a><hr/>
						<?php echo '<h2 >'.$post->title.'</h2>'; ?>
						<?php echo '<label style="font-size:15px;">'.$post->body.'</label>'; ?>

						<?php if(!$post->post_image):?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						<?php else:?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
						<?php endif?>

						<br/>
						<hr/>
						<a href="<?php echo base_url('editors_pick/rmvEP/' .$post->id) ?>" class="btn btn-danger">Remove from Editors Pick</a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</body>
</html>