<!DOCTYPE html>
<html>
<head>
	<title>Stories</title>
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
	<div class="container" id="crt">
			<h1><strong>SHARE YOUR STORY</strong></h1> <br/>
           
          
			<?php echo form_open_multipart('dashboard/create_post');?>
				<input type="hidden" name="post_name" value="<?php echo $this->session->userdata('post_name');?>">
                <input type="hidden" name="editors" value="1">
				<div class="form-group">  
                	<input type="text" name="title" class="form-control" placeholder="Title" required /> 
	            </div> 
                <div class="form-group">  
                    <textarea class="form-control" name="body" placeholder="Add Body" required rows="6"></textarea>
                </div>  
                <div class="form-group">
					<input  type="file" name="userfile" >
				</div>
				<div class="form-group row" style=" padding:15px;" > 
                    <input type="submit" name="insert" value="SHARE STORY" class="btn btn-primary btn-lg" />
                </div>
          	</form> 
          	 
      	</div>  
      	<hr/><br/><br/>

		
		<div class="container-fluid">
			<center><label style="color: white; font-size: 60px;">Stories</label></center>
			<br/>
			<div class="group row">
				<?php 
					if($posts){
						foreach($posts as $post){

				?>
		      	<div class="col-md-4">
		      		<div class="container-fluid" id="posts">
						<a href="" style="font-size: 15px"><?php echo '@'.$post->post_name;?></a><hr/>
						<?php if(!$post->post_image):?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						<?php else:?>
							<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
						<?php endif?>
						<?php echo '<h3 >'.$post->title.'</h3>'; ?>
						<?php echo '<label style="font-size:15px;">'.$post->body.'</label>'; ?><hr/>
						<?php if($post->post_name==$this->session->userdata('post_name')):?>
							<a href="<?php echo base_url('dashboard/editpost/'.$post->id); ?>" class="btn btn-success btn-sm">Edit</a>
							<a href="<?php echo base_url('dashboard/deletepost/' .$post->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?');">Delete</a> 
						<?php endif;?>
					</div>
				</div>
				<?php
						}
					}
				?>
			</div>
		</div>
		<br/><br/>

</body>
</html>