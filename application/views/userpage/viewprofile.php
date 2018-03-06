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
			<a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-success btn-lg" ">Home</a>

		</div>
		<br/><br/>
		<?php echo '<h1 style="color: white; margin: 50px">WELCOME, '.$this->session->userdata('post_name'). '</h1>'?>
		<div class="container" id="crt">
			
           <h1><strong>CREATE POST</strong></h1> <br/>
          
          
		<?php echo form_open_multipart('dashboard/create_post_in_profile');?>

                <input type="hidden" name="post_name" value="<?php echo $this->session->userdata('post_name');?>">
                <div class="form-group row">  
                     <label class="col-md-2 text-right"><strong>Title</strong></label>  
                     <div class="col-md-10">
                         <input type="text" name="title" class="form-control" placeholder="Title" required /> 
                     </div>          
                </div> 
                <div class="form-group row">  
                     <label class="col-md-2 text-right"><strong>Body</strong></label>  
                     <div class="col-md-10">
                     	<textarea class="form-control" name="body" placeholder="Add Body" required></textarea>
                    </div>
                                    
                </div>  
                <div class="form-group row">
					<label class="col-md-2 text-right"><strong>Upload Image</strong></label>
					<input class="col-md-10" type="file" name="userfile" required>
			</div>
				<div class="form-group row" style="margin-left:100px; padding:20px;" > 
                    <input type="submit" name="insert" value="Create Post" class="btn btn-primary btn-lg" /></div>
          	 </form>  
      	</div>  
      	<hr/><br/><br/>
		<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">My Posts</label></center><br/>
			<?php 
				if($posts){
					foreach($posts as $post){

			?>
			<?php if($post->post_name==$this->session->userdata('post_name')):?>
				<div class="container" id="posts">
					<a href="" style="font-size: 20px"><?php echo '@'.$post->post_name;?></a><hr/>
					<?php echo '<h2 >'.$post->title.'</h2>'; ?><br/>
					<!--<?php if(pathinfo($post->post_image)['extension']=='mp4'):?>
						<video width="100%" controls>
							<source src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>" type="video/mp4">
						</video>
						<br/>
					<?php endif;?>
					<?php if(pathinfo($post->post_image)['extension']!='mp4'):?>-->
						<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>"><br/>
					<!--<?php endif;?> -->
					<?php echo '<label style="font-size:20px;">'.$post->body.'</label>'; ?><hr/>
					<a href="<?php echo base_url('dashboard/editpost_inprofile/'.$post->id); ?>" class="btn btn-success">Edit</a>
					<a href="<?php echo base_url('dashboard/deletepost_inprofile/' .$post->id) ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>

				</div>
			<?php endif;?>	
			<?php
				}
			}
		?>

	</body>
</html>