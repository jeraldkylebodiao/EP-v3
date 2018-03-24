<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EXPLOREPINAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo base_url(); ?>assets/css/tour.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/color/default.css" rel="stylesheet">
  <!--include bootstrap social -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-social.css">
<style>
      #posts{
          background-color: #e6f4f4;
          margin-bottom: 20px;
          padding: 10px;
          border-radius: 2px;
          width: 90%;        
        }
        
        </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
    
            <div class="navbar-header page-scroll ">
      
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
          <li><a><font font size="5">EXPLOREPINAS</font></a></li>
        </ul>
        </div>
          
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'dashboard/user'; ?>">Admin</a></li>
    <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log Out</a></li>
        
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br><br><br><br><br><br><br><br>
	<div class="container"  style="text-align: center;">
		<a href="<?php echo base_url().'gomenasai/bakana'; ?>" class="btn btn-danger btn-lg">Back</a>
		<a href="<?php echo base_url('gomenasai/add'); ?>" class="btn btn-primary btn-lg">Add New Tourist Spot</a>
	</div>
	
	
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

<div class="container-fluid" style="text-align: center; font-family: century gothic; ">
			<br/>
			<div class="group row">
								<?php 
					if($blogs){
						foreach($blogs as $blog){

				?>
				<div class="col-md-6">
					<div class="container" id="posts">
						<?php echo '<h2 >'.$blog->tourist_name.'</h2>'; ?>
						<hr/>
					
							<img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$blog->ts_image;?>">
					
							
						<?php echo '<label style="font-size:15px;">'.$blog->desc_name.'</label>'; ?><br/><br/>
						<?php echo '<label style="font-size:15px;">'.$blog->address.'</label>'; ?>
							<hr/>

						<?php if($activity):?>
							<label style="font-weight: bold">Activities</label><br/>
							<?php foreach($activity as $act):?>
								<?php if($act->tsId == $blog->tsId):?>
									
									<label><?php echo $act->activity?></label><br/>
								<?php endif;?>
							<?php endforeach;?>
						<?php endif;?>
						<hr/>
						<a href="<?php echo base_url('gomenasai/addactivity/'.$blog->tsId); ?>" class="btn btn-primary btn-sm">Manage Activities</a>
						<a href="<?php echo base_url('gomenasai/edit/'.$blog->id); ?>" class="btn btn-success btn-sm">Edit</a>
						<a href="<?php echo base_url('gomenasai/delete/'.$blog->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?');">Delete</a>
					</div>
				</div>
				<?php
						}
					}
				?>
			</div>
</div>

</div>
 <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>  
</body>
</html>