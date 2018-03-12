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
					width: 90%;
				
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
		<div class="container-fluid" style="width: 100%; text-align: right; padding-top: 10px" >
			<a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-success btn-lg" ">Home</a>
			<a href="<?php echo base_url().'dashboard/account'; ?>" class="btn btn-primary btn-lg" ">Account</a>

		</div>
		<br/><br/>
		<?php echo '<h1 style="color: white; margin: 50px">WELCOME, '.$this->session->userdata('post_name'). '</h1>'?>
		<div class="container" id="crt">
			
           <h1><strong>SHARE YOUR STORY</strong></h1> <br/>
          
          
		<?php echo form_open_multipart('dashboard/create_post_in_profile');?>

                <input type="hidden" name='editors' value="1">
                <input type="hidden" name="post_name" value="<?php echo $this->session->userdata('post_name');?>">
                <div style="padding: 10px">  
                         <input type="text" name="title" class="form-control" placeholder="Title" required /> 
				</div> 
                <div style="padding: 10px">  
                    	<textarea class="form-control" name="body" placeholder="Add Body" required rows="5"></textarea>
                 </div>  
                <div style="padding: 10px">
					
					<input  type="file" name="userfile" >
			</div>
				<div style="padding:10px;padding-bottom:20px; " > 
                    <input type="submit" name="insert" value="Create Post" class="btn btn-primary btn-lg" /></div>
          	 </form>  
      	</div>  
      	<hr/><br/><br/>
		<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; padding: 20px;">My Posts</label></center><br/>
		<div class="group row">
			<?php 
				if($posts){
					foreach($posts as $post){

			?>
			<div class="col-md-6">
			<?php if($post->post_name==$this->session->userdata('post_name')):?>
				<div class="container" id="posts">
					<a href="" style="font-size: 20px"><?php echo '@'.$post->post_name;?></a><hr/>
					<?php echo '<h2 >'.$post->title.'</h2>'; ?><br/>
					<?php if(!$post->post_image):?>
						<img style="width: 100%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
					<?php else:?>
						<img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
					<?php endif?>
					<?php echo '<label style="font-size:20px;">'.$post->body.'</label>'; ?><hr/>
					<a href="<?php echo base_url('dashboard/editpost_inprofile/'.$post->id); ?>" class="btn btn-success">Edit</a>
					<a href="<?php echo base_url('dashboard/deletepost_inprofile/' .$post->id) ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>

				</div>
			<?php endif;?>
			</div>	
			<?php
				}
			}
		?>
		</div>
	</body>
</html>