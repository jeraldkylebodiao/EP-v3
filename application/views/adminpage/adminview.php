<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE PINAS</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<style>
				
				body{
					margin: 50px;
					background-color: black;
					color: white;
					font-family: century gothic;
				}
				th{
					font-weight: bold;
					font-size: 20px;
				}
				#user_data{
					background-color: white;
					color: black;
					font-size: 20px;
				}
				
				
			</style>
<body>
	 
	<center><div class="container" style="margin: 20px; background-color: black; width: 40%">
		<a href="<?php echo base_url().'admin/admin'; ?>" class="btn btn-danger btn-block">Back</a>
	
	</div></center>
	<div class=container>
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
                 ?></center>
		<table id="user_data" class="table table-bordered table-responsive " style="text-align: center;">
			<thead>
				<thead>
					<tr>
						<th style="width:40%">Username</th>
						<th style="width:40%">Email</th>
						<th style="width:10%">Action</th>						
					</tr>
			</thead>
			<tbody>
				<?php 
					if($posts){
						foreach($posts as $post){

				?>
					<tr>
						<td><?php echo $post->username; ?></td>
						<td><?php echo $post->email; ?></td>
						<td>
							<!--<a href="" class="btn btn-danger">View Profile</a>-->
							<a href="<?php echo base_url('admin/view/'.$post->username); ?>" class="btn btn-success">View Profile</a>
							
						</td>
					</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>