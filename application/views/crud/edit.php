<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXPLOREPINAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo base_url();?>assets/css/sty.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>EXPLORE PINAS</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(). 'gomenasai/bakana';?>">Admin</a></li>
        <li><a href="<?php echo base_url(). 'aishiteru/logout'; ?>">Logout</a></li>
		
       
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="section-heading">
					
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
	<div id="button_back"  style="text-align: center">
	<h1>Edit Tourist Spot</h1><br/>
	<?php echo form_open_multipart('gomenasai/update');?>
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
		<input type="hidden" name="txt_hidden" value="<?php echo $blog->id; ?>">
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Tourist Spot</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->tourist_name; ?>" name="txt_tourist_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Description</label>
			<div class="col-md-10">
				<textarea name="txt_desc_name" class="form-control" required rows="5"><?php echo $blog->desc_name; ?></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Address</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->address; ?>" name="txt_address" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Tourist Spot Image</label>
			<div class="col-md-10 text-left">
				<a href="<?php echo base_url('gomenasai/updateImage/' .$blog->ts_image); ?>" class="btn btn-warning btn-md">Update Photo</a>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Current Image</label>
			<div class="col-md-10 text-left">
				<img style="width: 50%;"; src="<?php echo base_url().'assets/upload/'.$blog->ts_image;?>">
			</div>
		</div>
		
		
		<div class="form-group row">
			<label class="col-md-2 text-center"></label>
			<div class="col-md-12">
				<input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Update">
				<a href="<?php echo base_url('gomenasai/tourist_spot'); ?>" class="btn btn-danger btn-lg">Cancel</a>
			</div>
		</div>

	</form>
	</div>
</div>

	</section>
<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				

				</div>
					<div class="col-md-4">
						<p>fafa</p>
				<p>&copy;Copyright 2018 - EXPLOREPINAS. All rights reserved.</p>
					</div>
					<div class="col-md-4">
				
					</div>
			</div>	
		</div>
	</footer>

  
    <!-- Core JavaScript Files -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>	
	<script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>

</html>
