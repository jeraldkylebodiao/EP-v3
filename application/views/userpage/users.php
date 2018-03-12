<!DOCTYPE html>  
 <html>  
	 <head>  
	      	<title>EXPLORE PINAS</title>  
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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


		<div class="container-fluid" style="width: 100%; text-align: right; padding-top: 10px" >
			<a href="<?php echo base_url().'aishiteru/logout'; ?>" class="btn btn-success btn-lg" ">Log Out</a>
			<a href="<?php echo base_url().'dashboard/viewprofile'; ?>" class="btn btn-warning btn-lg" ">View Profile</a>
	
		</div>
	


	
		<?php echo '<h1 style="color: white; margin: 50px">WELCOME, '.$this->session->userdata('post_name'). '</h1>'?>
	
	<hr/>
<div class="container-fluid" style="text-align: center;">
	<div class="group row">
		<div class="col-md-3" style="background-color: white">
			<label style="padding-top:80px; font-size: 50px; font-weight: bold;">Tourist Spots</label><br/>
			<label class="text-muted" style="font-size: 13px; ">Tourist Destinations in the Philippines</label>
			<hr/>
			<center><a href="<?php echo base_url().'dashboard/tourist_spot'; ?>" class="btn btn-success btn-lg" ">View Tourist Spots</a></center>
		</div>
		<div class="col-md-9">
			<div class="container-fluid">
				<div  id="controls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						    </div>

					    	<?php 
								if($spots){
									foreach($spots as $spot){

							?>
						    <div class="carousel-item">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/upload/'.$spot->ts_image;?>">
					     		<div class="carousel-caption d-none d-md-block">
								    <h1 style="color: yellow"><?php echo $spot->tourist_name?></h1>
								    <p><?php echo $spot->address?></p>
								</div>
							</div>
						    <?php
									}
								}
							?>
						    
						  <a class="carousel-control-prev" href="#controls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#controls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr/>
<hr/>

<div class="container-fluid" style="text-align: center;">
	<div class="group row">
		<div class="col-md-3" style="background-color: white">
			<label style="padding-top:80px;font-size: 50px; font-weight: bold">Stories</label><br/>
			<label class="text-muted" style="font-size: 13px">Stories posted by users.</label>
			<hr/><br/>
			
			<center><a href="<?php echo base_url().'dashboard/stories'; ?>" class="btn btn-danger btn-lg" ">View Stories</a></center>
		</div>
		<div class="col-md-9">
			<div class="container-fluid">
				<div  id="controls2" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						    </div>

					    	<?php 
								if($posts){
									foreach($posts as $post){

							?>
						    <div class="carousel-item">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
					     		<div class="carousel-caption d-none d-md-block">
								    <h3 style="color: yellow"><?php echo $post->title?></h3>
								    <label style="font-size: 15px; color: white"><?php echo $post->body?></label>
								    <label style="font-size: 15px; color: red; "> - <?php echo $post->post_name?></label>
								</div>
							</div>
						    <?php
									}
								}
							?>
						    
						  <a class="carousel-control-prev" href="#controls2" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#controls2" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr/>
<hr/>

<div class="container-fluid" style="text-align: center;">
	<div class="group row">
		<div class="col-md-3" style="background-color: white;">
			<label style="padding-top:80px;font-size: 50px; font-weight: bold">Editors Pick</label><br/>
			<label class="text-muted" style="font-size: 13px">Stories picked stands the most.</label>
			<hr/><br/>
			
			<center><a href="<?php echo base_url().'dashboard/editorspick'; ?>" class="btn btn-dark btn-lg" ">View Editors Pick</a></center>
		</div>
		<div class="col-md-9">
			<div class="container-fluid">
				<div  id="controls3" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						    </div>

					    	<?php 
								if($editors){
									foreach($editors as $editor){

							?>
						    <div class="carousel-item">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/uploadposts/'.$editor->post_image;?>">
					     		<div class="carousel-caption d-none d-md-block">
								    <h3 style="color: yellow"><?php echo $post->title?></h3>
								    <label style="font-size: 15px; color: white"><?php echo $editor->body?></label>
								    <label style="font-size: 15px; color: red; "> - <?php echo $editor->post_name?></label>
								</div>
							</div>
						    <?php
									}
								}
							?>
						    
						  <a class="carousel-control-prev" href="#controls3" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#controls3" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr/>

		
 </body>  
 </html>  