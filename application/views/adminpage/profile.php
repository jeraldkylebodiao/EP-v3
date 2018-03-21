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
				}
			
			</style>
</head>
<body>
	
		<div class="container" style="width: 40%; padding-top: 30px" >
			<center><a href="<?php echo base_url().'gomenasai/adminpost'; ?>" class="btn btn-success btn-lg">Back</a></center>
		</div>
			
		<br/>
		<div class="container" style="width: 50%">
		<?php if($verify):?>
		<h5 class="alert alert-danger" style="text-align: center;">REQUESTING VERIFICATION</h5>
		<p style="text-align: center">
		  <a class="btn btn-primary" data-toggle="collapse" href="#verifybutton" role="button" aria-expanded="false" aria-controls="verifybutton">View Request</a>
		  
		</p>
		<div class="collapse" id="verifybutton">
		  <div class="card card-body">
		  	<?php foreach($verify as $info):?>
		  		<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Username:</label>
		    	<label class="col-md-6"><?php echo $info->username?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">First Name:</label>
		    	<label class="col-md-6"><?php echo $info->first_name?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Last Name:</label>
		    	<label class="col-md-6"><?php echo $info->last_name?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Middle Initial:</label>
		    	<label class="col-md-6"><?php echo $info->middle_initial?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Address:</label>
		    	<label class="col-md-6"><?php echo $info->full_address?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">ContactNumber:</label>
		    	<label class="col-md-6"><?php echo $info->contact_number?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Email Address:</label>
		    	<label class="col-md-6"><?php echo $info->email_address?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Birthdate:</label>
		    	<label class="col-md-6"><?php echo $info->birthdate?></label></div>
			<?php endforeach;?>
			<div class="group row">
				<div class="col-md-12 text-center">
					<a href="<?php echo base_url().'account/accept/'. $info->username; ?>" class="btn btn-success ">Approve Request</a>
					<a href="<?php echo base_url().'account/decline/'. $info->username; ?>" class="btn btn-danger ">Dissapprove Request</a>
				</div>
			</div>
		  </div>
		</div>
		

		<?php endif;?>
	</div>

		<div class="container" style="width: 50%">
		<?php if($verifyTour):?>
		<h5 class="alert alert-danger" style="text-align: center;">REQUESTED TRIPS</h5>
		<p style="text-align: center">
		  <a class="btn btn-primary" data-toggle="collapse" href="#verifytourbutton" role="button" aria-expanded="false" aria-controls="verifytourbutton">View Tour Request</a>
		  
		</p>
		<div class="collapse" id="verifytourbutton">
		  <div class="card card-body">
		  	<?php foreach($verifyTour as $info):?>
		  		<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Destination:</label>
		    	<label class="col-md-6"><?php echo $info->destination?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Origin:</label>
		    	<label class="col-md-6"><?php echo $info->origin?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Tour Name:</label>
		    	<label class="col-md-6"><?php echo $info->tourname?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Date:</label>
		    	<label class="col-md-6"><?php echo $info->tourdate?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Slots:</label>
		    	<label class="col-md-6"><?php echo $info->tourparticipant?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Registration Fee:</label>
		    	<label class="col-md-6"><?php echo $info->tourfee?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Itineraries:</label>
		    	<label class="col-md-6"><?php echo $info->touritinerary?></label></div>
		    	<div class="group row">
		  		<label class="col-md-6 text-right" style="font-weight: bold">Payment:</label>
		    	<label class="col-md-6"><?php echo $info->payment?></label></div>
		    	<div class="group row">
					<div class="col-md-12 text-center">
						<a href="<?php echo base_url().'tours/acceptTour/'. $info->user .'/'.$info->tripIdNumber; ?>" class="btn btn-success ">Approve Tour</a>
						<a href="<?php echo base_url().'tours/declineTour/'. $info->user. '/'. $info->id; ?>" class="btn btn-danger ">Dissapprove Tour</a>
					</div>
				</div>
				<hr/>
			<?php endforeach;?>
			
		  </div>
		</div>
		

		<?php endif;?>
	</div>
		<?php if(!$item):?>
			<div class="container">
				<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">No Posts Yet</label></center><br/>
			</div>
		
		<?php else:?>
			<div class="container">
				<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">Latest Post</label></center><br/>
			</div>
			<div class="container">
				 <center> <?php
		                if($this->session->flashdata('success_msg')){
		          ?>
		           	<div class="alert alert-success">
		                      <?php echo $this->session->flashdata('success_msg'); ?>
		                    </div>
		                <?php   
		                  }
		                ?>
		                <?php
		                    if($this->session->flashdata('error_msg')){
		                ?>
		                  <div class="alert alert-danger">
		                   <?php echo $this->session->flashdata('error_msg'); ?>
		                  </div>
		                <?php   
		                  }
		                 ?>
		         </center>
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
								<?php if($post->editors==1):?>
									<a href="<?php echo base_url('editors_pick/addEP/' .$post->id)?>" class="btn btn-primary">Add to Editors Pick</a>
								<?php endif?>
								<a href="<?php echo base_url('gomenasai/deletepost/' .$post->id) ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		<?php endif?>	
		<?php if(!$trips):?>
			<div class="container">
				<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">No Planned Trips Yet</label></center><br/>
			</div>
		
		<?php else:?>

		<div class="container">
				<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">Planned Tours</label></center><br/>
		</div>
		<?php $var=0;?>
		 <div class="container-fluid" style="text-align: center">
          <div class="group row">
          <?php 
            if($trips){
              foreach($trips as $post){

          ?>
          <?php if($post->tourStatus=='approved'):?>
			          <div class="col-md-6">
			         
			            <div class="container" id="posts">
			              <?php echo '<h2 >'.$post->tourname.'</h2>'; ?>
			               <?php echo '<label style="font-size:15px;"> Destination: '.$post->destination.'</label>'; ?><br/>
			              <?php 
			                if($tourist){
			                  foreach($tourist as $img){

			              ?>
			                  <?php if($post->destination==$img->tourist_name):?>
			                    <img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$img->ts_image;?>">
			                    <?php echo '<label style="font-size:15px;"> Address: '.$img->address.'</label>'; ?><br/>
			                  <?php endif;?>
			                
			                <?php
			                  }
			                }
			              ?>

			             
			              <?php echo '<label style="font-size:15px;"> Origin: '.$post->origin.'</label>'; ?><br/>
			              <?php echo '<label style="font-size:15px;"> Date: '.$post->tourdate.'</label>'; ?><hr/>

			            </div>
			         
			          </div> 
				<?php $var++;?>
			<?php endif;?>
          <?php
            }
          }
        ?>
        </div>
    </div>
    <div class="container">
    	<?php if($var==0):?>
    	<h2 style="text-align: center; color: white;">No registered trip yet!</h2>
    	<?php endif;?>
    </div>
    
<?php endif?>	
<hr/>
<hr/>
<hr/>
<hr/>





</body>
</html>