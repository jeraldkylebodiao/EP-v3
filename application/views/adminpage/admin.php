
<div class="container-fluid" style="width: 100%; text-align: right;" >
	<a href="<?php echo base_url().'aishiteru/logout'; ?>" class="btn btn-primary btn-lg" ">Log Out</a>
	<a href="<?php echo base_url().'origin/addOP'; ?>" class="btn btn-danger btn-lg" ">Add Places</a>
	
	
</div>
<hr/>
<div class="container-fluid ">
	<div class="group row">
		<div class="col-md-3" style="background-color: black; color: white">
			<label style="font-size: 50px; font-weight: bold">Tourist Spots</label><br/>
			<label class="text-muted" style="font-size: 13px">Tourist Destinations in the Philippines</label>
			<hr/>
			<label>Create Tourist Spot</label><br/><br/>
			<label>Update Tourist Spot</label><br/><br/>
			<label>Delete Tourist Spot</label><br/><hr/>
			<center><a href="<?php echo base_url().'gomenasai/tourist_spot'; ?>" class="btn btn-success btn-lg" ">Manage Tourist Spots</a></center>
		</div>
		<div class="col-md-9">
			<div class="container-fluid">
				<div  id="controls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/default_photo/1.jpg';?>">
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


<div class="container-fluid">
	<div class="group row">
		<div class="col-md-3" style="background-color: black; color: white">
			<label style="font-size: 50px; font-weight: bold">Users</label><br/>
			<label class="text-muted" style="font-size: 13px">User stories and trips.</label>
			<hr/>
			<label>View User Stories</label><br/>
			<label>Delete User Story</label><br/>
			<label>Add User Story to Editors Pick</label><br/>
			<label>View User's Trips</label><hr/>
			<center><a href="<?php echo base_url().'gomenasai/adminpost'; ?>" class="btn btn-danger btn-lg"  style="margin-bottom: 10px" >Manage Users</a></center>
		</div>
		<div class="col-md-9">
			<div class="container-fluid">
				<div  id="controls2" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/default_photo/2.jpg';?>">
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


<div class="container-fluid">
	<div class="group row">
		<div class="col-md-3" style="background-color: black; color: white">
			<label style="font-size: 50px; font-weight: bold">Editors Pick</label><br/>
			<label class="text-muted" style="font-size: 13px">User stories picked by admins.</label>
			<hr/><br/>
			<label>View Editors Pick</label><br/><br/>
			<label>Remove Story From Editors Pick</label><br/><br/><hr/>
			<center><a href="<?php echo base_url().'editors_pick/EditorsPick'; ?>" class="btn btn-dark btn-lg" ">Manage Editors Pick</a></center>
		</div>
		<div class="col-md-9">
			<div class="container-fluid">
				<div  id="controls3" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" style="height: 400px;"; src="<?php echo base_url().'assets/default_photo/3.jpg';?>">
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
	

