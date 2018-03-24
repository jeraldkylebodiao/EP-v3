
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
    <link href="<?php echo base_url();?>assets/css/adm.css" rel="stylesheet">
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
               <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                    <li><a><font font size="5">EXPLOREPINAS</font></a></li>
                </ul>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'origin/addOP'; ?>">Admin</a></li>
        <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log Out </a></li>
       
      </ul>
  </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Admin Page</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
				
			</div>
			</div>
		</div>
		<div class="container">
		
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
		
	
            <div class="col-xs-6 col-sm-3 col-md-3">
				
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
					<div class="inner">
						           <a href="<?php echo base_url().'gomenasai/tourist_spot'; ?>"> <h4>Tourist Spots</h4>
                    
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/icons/tour.png" alt="" class="img-responsive img-circle" /></a> </div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-greyy">
                    <div class="inner">
						  <a href="<?php echo base_url().'gomenasai/adminpost'; ?>"><h4>Manage Users</h4>
                      
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/icons/12.png" alt="" class="img-responsive img-circle" /></a></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-greya">
                    <div class="inner">
					  <a href="<?php echo base_url().'editors_pick/EditorsPick'; ?>">	<h4>Editors Pick</h4>
                        
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/icons/cam.jpg" alt="" class="img-responsive img-circle" /></a></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-greys">
                    <div class="inner">
					  <a href=	"<?php echo base_url().'origin/addOP'; ?>"><h4>Add Places</h4>
                        <p class="subtitle"> </p>
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/icons/add.png" alt="" class="img-responsive img-circle" /></a></div>

                    </div>
                </div>
				</div>
            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: about -->

	
	
	
	<!-- Section: services -->
  
	<!-- /Section: services -->
	
	
    
	<!-- /Section: contact -->
<br><br><br>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2018 - EXPLOREPINAS. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>

     <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>

</html>

