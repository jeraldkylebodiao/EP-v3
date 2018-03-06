<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page before login</title>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="assets/css/homepage.min.css" rel="stylesheet">
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Explore Pinas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Events</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>

<header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="text-center" style="color: black"><strong>LOG IN</strong></h1>
          </div>
         
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto center">
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
                
           <form method="post" action="<?php echo base_url(); ?>main/login_val">
                
                <div class="form-group">   
                     <input type="text" name="username" class="form-control" placeholder="Username" / required>  
                                  
                </div>  
                <div class="form-group">   
                     <input type="password" name="password" class="form-control" placeholder="Password" required />  
              </div> 
              
                <div class="form-group">  
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?> 
                     <br/>
                     <input type="submit" name="insert" value="Login" class="btn btn-primary btn-lg" />  
                     <a href="<?php echo base_url('main/signup'); ?>" class="btn btn-success btn-lg">Sign Up</a>
                </div>  
            </form>
            


            

          </div>
        </div>
      </div>
    </header>


    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-pin m-auto text-primary"></i>
              </div>
              <h3>Make Trip</h3>
              <p class="lead mb-0">Create your own Trip and your</p>
              <a href="#" class="btn btn-info" role="button"> Make</a>     
       
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-location-pin m-auto text-primary"></i>
              </div>
              <h3>Map</h3>
              <p class="lead mb-0">Locate all the nearby places on your way to your Trip</p>
        <a href="#" class="btn btn-info" role="button"> View</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-directions m-auto text-primary"></i>
              </div>
              <h3>Find Trip</h3>
              <p class="lead mb-0">Look for other Trips which you can also Experience</p>
        <a href="#" class="btn btn-info" role="button">Find</a>
            </div>
      
          </div>
        </div>
      </div>
    </section>

    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/event.jpg'); "></div>
          <div class="col-lg-6 order-lg-1  showcase-text">
            <h2>EVENTS</h2>
            <p class="lead mb-0">Know the Upcoming Events every city has to offer and has to celebratebnjsnbjsanbjnsajbjs</p>
      <a href="#" class="btn btn-info" role="button">View</a>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-1 text-white showcase-img" style="background-image: url('assets/img/most.jpg');"></div>
          <div class="col-lg-6 order-lg-2  showcase-text">
            <h2>Tourist Spots</h2>
            <p class="lead mb-0">The top places in the Philippines anjangjansjgnjaNGJSANBJANBJASUJNIANSIBNSNJNJNBHB</p>
      <a href="#" class="btn btn-info" role="button">View</a>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/iti.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Itinerary</h2>
            <p class="lead mb-0">vabvbabvjabvjabjvbajvbjabvjbajvbajbvjabjva</p>
         <a href="#" class="btn btn-info" role="button">Create</a>
     </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">User Story</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="assets/img/1.png" alt="">
              <h5>User 1</h5>
              <p class="font-weight-light mb-0">"Travel let me Live the life I always wanted to have"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="assets/img/1.png" alt="">
              <h5>User 2</h5>
              <p class="font-weight-light mb-0">"Live with no Excuses ad travel without regrets"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="assets/img/1.png" alt="">
              <h5>User 3</h5>
              <p class="font-weight-light mb-0">"Your wings already Exist, All you have to do is to Fly"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
