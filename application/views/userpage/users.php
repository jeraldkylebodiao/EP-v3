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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</style>

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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'dashboard/user'; ?>">Home</a></li>
       
       
     
        <li class="dropdown">
          <a href="#" class="dropdown" data-toggle="dropdown">Places <b class="caret"></b></a>
          <ul class="dropdown-menu">
         
            <li><a href="<?php echo base_url().'dashboard/tourist_spot'; ?>">Tourist Spot</a></li>

            <li><a href="<?php echo base_url().'dashboard/editorspick'; ?>">Editor's Choice</a></li>

          </ul>
        </li>
  
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url().'dashboard/viewprofile'; ?>">View Profile</a></li>
  			
     
            <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log Out</a></li>          
          </ul>
        </li>
      </ul>
  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/img/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item ">
        <img src="<?php echo base_url();?>assets/img/2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item ">
        <img src="<?php echo base_url();?>assets/img/3.jpg" alt="New york" style="width:100%;">
      </div>
	  </div>
    
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  

	
    </section>

	
	 <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Trips</h2>
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
            <div class="col-md-4 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
				 <a href="<?php echo base_url().'trips/maketrip'; ?>">	<div class="service-icon"><img src="<?php echo base_url();?>assets/img/icons/makee.png" alt=""  height="120" width="120"/>
				</div>
					<div class="service-desc">
						<h5 >Make Tour</h5></a>
					
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
				<a href="<?php echo base_url().'trips/viewtrips';?>">	<div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/find.png" alt="" height="120" width="120" />
					</div>
					<div class="service-desc">
						<h5>Join Trip</h5></a>
						
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-4 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
						<a href="<?php echo base_url().'dashboard/viewtrips'; ?>"><div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/map.png" alt="" height="120" width="120" />
					</div>
					<div class="service-desc">
				<h5>My Tours</h5></a>
						
					</div>
                </div>
				</div>
            </div>
            <div class="row">
            <div class="col-md-4 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
				 <a href="<?php echo base_url().'tours/maketour/'.$this->session->userdata('post_name'); ?>">	<div class="service-icon"><img src="<?php echo base_url();?>assets/img/icons/makee.png" alt=""  height="120" width="120"/>
				</div>
					<div class="service-desc">
						<h5 >Directions</h5></a>
					
					</div>
                </div>
				</div>
            </div>
		
	</section>
	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Tours & Travels</h2>
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
	<?php $var=0?>
		
		<div class="row">
        <?php foreach($spots as $post):?>
			<?php if($var<6):?>
		<div class="col-xs-6 col-sm-3 col-md-6">
			<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                    	<hr/><br/>
						<h5><?php echo $post->tourist_name?></h5>
                        <p class="subtitle"><?php echo $post->desc_name?></p>
                        <p class="subtitle"><?php echo $post->address?></p>
						<div class="content">
						<div class="content-overlay"></div>
                       <div class="content-image">
						
						<center>
                        <div class="polaroid">  
						 <img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$post->ts_image;?>">
						<div class="content-details fadeIn-top">
												
						</div>
						</div>
						</div>
						</center>
						</div>
						</div>
				
                </div>
			</div>
		</div>
		<?php $var++?>
		<?php endif;?>
	<?php endforeach;?>
	</div>

	</section>
	<!-- /Section: about -->

	
	
	
	<!-- Section: services -->
  
	<!-- /Section: services -->
	
	
    
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
							<h4 style="color:black; font-size:20px;">Top Tours</h4>
				<ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">

               
				</div>
					<div class="col-md-4">
						<p>fafa</p>
				<p>&copy;Copyright 2018 - EXPLOREPINAS. All rights reserved.</p>
					</div>
					<div class="col-md-4">
						<h4 style="color:black;">Contact Us</h4>
				<ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">

                <a href="#" style="color:black;">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#" style="color:black;">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="color:black;">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
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

