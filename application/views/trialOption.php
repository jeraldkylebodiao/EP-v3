<!DOCTYPE html>
<html>
<head>
	<title>wew</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form>
	<div class="container" style="padding: 50px; width: 50%">
		<div class="form-group">
		    <center><label for="exampleFormControlSelect1">Tourist Spot</label></center>
		    <select class="form-control" id="exampleFormControlSelect1">
		    	<?php 
		    		if($spots){
		    			foreach ($spots as $post) { ?>
		    				<option><?php echo $post->tourist_name.' located at ' .$post->address ?></option>

		    	<?php		}
		    		}

		    	?>
		      	
		    </select>
		  </div>
	 </div>
	<div class="container-fluid">
		<div  id="controls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<img class="d-block w-100" style="height: 500px;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
			    </div>

		    	<?php 
					if($spots){
						foreach($spots as $spot){

				?>
			    <div class="carousel-item">
			    	<img class="d-block w-100" style="height: 500px;"; src="<?php echo base_url().'assets/upload/'.$spot->ts_image;?>">
		     		<div class="carousel-caption d-none d-md-block">
					    <h1 style="color: yellow"><?php echo $spot->tourist_name?></h5>
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
	<hr/>
 
</form>
</div>
</body>
</html>