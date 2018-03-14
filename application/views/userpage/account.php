<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE PINAS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		body{
			background-color: black;
			font-family: century gothic; 
		}
		#containers{
			background-color: white;
			border-radius: 10px;
			padding: 20px;
		
		}
		.containers{
			padding:50px;
		}
		h1{
			color: white;
			padding: 50px;
			margin-top: 50px;
		}
		label{
			font-size: 20px;
		}

	</style>
</head>
<body>
	<a href="<?php echo base_url('dashboard/viewprofile'); ?>" class="btn btn-danger btn-lg">Back</a>
	<div class="container">
		
	    <center><h1><strong>ACCOUNT</strong></h1></center> <br/>
           <?php
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
                  <div class="alert alert-success">
                   <?php echo $this->session->flashdata('error_msg'); ?>
                  </div>
                <?php   
                  }
                 ?>	
	 	 <?php 
				if($data){
					foreach($data as $post){

			?>
			<?php if($post->username==$this->session->userdata('post_name')):?>
				<div class="container" id="containers">
					<div class="group row">
						<label class="col-md-6 text-right" ><strong>Full Name:</strong></label>
						<?php echo '<label class="col-md-6" >'.$post->full_name.'</label>'; ?>
					</div>
					
					<div class="group row">
						<label class="col-md-6 text-right" ><strong>Username:</strong></label>
						<?php echo '<label class="col-md-6" >'.$post->username.'</label>'; ?>
					</div >
					
					

				</div>
				<div style="text-align:right;">
					<a href="<?php echo base_url('dashboard/editaccount/'.$post->username); ?>" class="btn btn-primary">Edit Account</a>
                    
				</div>
			<?php endif;?>	
			<?php
				}
			}
		?>

	</div>

</body>
</html>