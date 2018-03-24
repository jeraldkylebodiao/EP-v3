 
    
    
    
  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXPLOREPINAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <!--include bootstrap social -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-social.css">

<style>
 .team boxed-grey{
   margin-bottom: 10px;
 }
.content {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: auto;
  overflow: hidden;
}

.content .content-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 99%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}

.content-image{
  width: 100%;
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-bottom{
  top: 80%;
}

.fadeIn-top{
  top: 20%;
}



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
                <a class="navbar-brand" href="index.html">
                    <h1>EXPLORE PINAS</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
    <li><a href="#login">Log in</a></li>
        <li><a href="#about">About</a></li>
    <li><a href="#service">Services</a></li>
    <li><a href="<?php echo base_url().'aishiteru/signup'; ?>">Sign Up</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <!-- Section: intro -->
    <section id="intro" class="intro">
  
    <div class="slogan">
      <h2>WELCOME TO EXPLORE PINAS<span class="text_color"></span> </h2>
      <h4>ITS MORE FUN IN THE PHILIPPINES</h4>
    </div>
    <div class="page-scroll">
      <a href="#service" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
    </section>
  <!-- /Section: intro -->

    

  <!-- Section: login -->
    <section id="login" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
          <div class="section-heading">
          <h2>Log in</h2>
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
      <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="boxed-grey">
              <?php echo form_open('aishiteru/login_val')?>
                <form id="contact-form" action="<?php echo base_url('main/login_val');?>">
                <div class="row">
                   <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" name="username" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
              <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required="required" />
                        </div>
            <br>
             
            <div class=" col-md-13">
            <a href="#" target="_blank">Forgot your password?</a> 
              <button type="submit" class="btn btn-skin btn-primary btn-lg pull-right ">Log In!</button>
            </div>
            </div>
          
          
        </div>
            

            
                </form>
            </div>
    </div>
    
    </div>  
      <div class="col-md-3"></div>
    
</div>
  
  </section>
  <!-- /Section: login -->
  
  
  
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
    
    <div class="row">
    <?php foreach($trips as $post):?>
    <div class="col-xs-6 col-sm-3 col-md-6">
      <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
            <h5><?php echo $post->tourname?></h5>
                        <p class="subtitle">Destination: <?php echo $post->destination?></p>
            <div class="content">
            <div class="content-overlay"></div>
                       <div class="content-image">
            
            <center>
                        <div class="polaroid">  
          <?php foreach($blogs as $value):?>
            <?php if($post->destination == $value->tourist_name):?>
            <img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$value->ts_image;?>">
          <?php endif;?>
          <?php endforeach;?>
            <div class="content-details fadeIn-top">
            <h3>Visit this tour</h3>
            
            </div>
            </div>
            </div>
            </center>
            </div>
            </div>
        
                </div>
      </div>
    </div>
  
            
    <?php endforeach;?>
  </div>
  </section>
  <!-- /Section: about -->

  
  
  
  <!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
    
    <div class="heading-about">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
          <div class="section-heading">
          <h2>Our Services</h2>
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
            <div class="col-sm-3 col-md-3">
        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
          <div class="service-icon">
            <img src="img/icons/service-icon-1.png" alt="" />
          </div>
          <div class="service-desc">
            <h5>Print</h5>
            <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
          </div>
                </div>
        </div>
            </div>
      <div class="col-sm-3 col-md-3">
        <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
          <div class="service-icon">
            <img src="img/icons/service-icon-2.png" alt="" />
          </div>
          <div class="service-desc">
            <h5>Web Design</h5>
            <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
          </div>
                </div>
        </div>
            </div>
      <div class="col-sm-3 col-md-3">
        <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
          <div class="service-icon">
            <img src="img/icons/service-icon-3.png" alt="" />
          </div>
          <div class="service-desc">
            <h5>Photography</h5>
            <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
          </div>
                </div>
        </div>
            </div>
      <div class="col-sm-3 col-md-3">
        <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
          <div class="service-icon">
            <img src="img/icons/service-icon-4.png" alt="" />
          </div>
          <div class="service-desc">
            <h5>Cloud System</h5>
            <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
          </div>
                </div>
        </div>
            </div>
        </div>    
    </div>
  </section>
  <!-- /Section: services -->
  
  
    
  <!-- /Section: contact -->

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

    <!-- Core JavaScript Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/custom.js"></script>

</body>

</html>

