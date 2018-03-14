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
				}
				body{
					background-color: black; 
				}
			
			</style>
</head>
<body>
		<div class="container" style="width: 40%; padding-top: 30px" >
			<center><a href="<?php echo base_url().'gomenasai/adminpost'; ?>" class="btn btn-success btn-block">Back</a></center>
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
				<center><label style="font-size: 50px; font-family: century gothic; font-weight: bold; color: white; margin: 20px;">Planned Trips</label></center><br/>
		</div>

		 <div class="container-fluid" style="text-align: center">
          <div class="group row">
          <?php 
            if($trips){
              foreach($trips as $post){

          ?>
          <div class="col-md-6">
         
            <div class="container" id="posts">
              <?php echo '<h2 >'.$post->name.'</h2>'; ?>
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
              <?php echo '<label style="font-size:15px;"> Date: '.$post->date.'</label>'; ?><hr/>

            </div>
         
          </div>  
          <?php
            }
          }
        ?>
        </div>
    </div>
<?php endif?>	





</body>
</html>