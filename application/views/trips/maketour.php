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
        <li><a href="#about">Trips</a></li>
       
     
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places <b class="caret"></b></a>
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
<br><br><br><br><br><br>

  <div class="container" style=" width: 50%">
    <h1 style="text-align: center">MAKE TOUR</h1><hr/>
      
    <div class="container" >
        <center><?php
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
        </div>
    <?php echo form_open('trips/addTrip');?>
    <input type="hidden" name="restriction" value="leader">
    <input type="hidden" name="tourStatus" value="not approved">
    <input type="hidden" name="tripIdNumber" value="<?php echo(rand());?>">
    <input type="hidden" name="leader" value="<?php echo $this->session->userdata('post_name')?>">
         <div class="container" >
        <div class="form-group row">
            <label class="col-md-2 text-left" >Destination</label>
            <div class="col-md-8">
            <select class="form-control" name="destination">
              <?php 
                if($spots){
                  foreach ($spots as $post) { ?>
                    <option><?php echo $post->tourist_name?></option>

              <?php   }
                }

              ?>
                
            </select>
            </div>
          </div>
                  <div class="form-group row">
                    <label class="col-md-2 text-left" >Origin</label>
                    <div class="col-md-8">
                    <select class="form-control" name="origin">
                        <?php 
                            if($origin){
                                foreach ($origin as $post) { ?>
                                    <option><?php echo $post->exact_place?></option>

                        <?php       }
                            }

                        ?>
                        
                    </select>
                    </div>
                  </div>
       </div>
     

       <div class="container" >
        <input type="hidden" name="user" value="<?php echo $this->session->userdata('post_name');?>">
               <div class="form-group row">  
                     <label class="col-md-2 text-left">Name Trip</label>  
                     <div class="col-md-8">
                         <input type="text" name="tourname" class="form-control" placeholder="Name of your Tour" minlength="5" required/> 
                     </div>          
                </div> 
                <div class="form-group row">  
                     <label class="col-md-2 text-left">Date</label>  
                      <div class="col-md-8">
                         <input type="date" name="tourdate" class="form-control" required/> 
                     </div>          
                </div>
                 <div class="form-group row">  
                     <label class="col-md-2 text-left">Duration of Tour</label>  
                      <div class="col-md-8">
                         <input type="number" name="tourduration" placeholder="Days" class="form-control" required/> 
                     </div>          
                </div>
                <div class="form-group row">  
                     <label class="col-md-2 text-left">Slots</label>  
                     <div class="col-md-8">
                         <input type="number" name="tourparticipant" class="form-control"  required/> 
                     </div>          
                </div>  
                <div class="form-group row">  
                     <label class="col-md-2 text-left">Join Fee</label>  
                      <div class="col-md-8">
                         <input type="number" name="tourfee" class="form-control" placeholder="PHP" required/> 
                     </div>          
                </div>  
                 
                </div>     

                <hr/>

                <div class="form-group row"> 
                     
                    <div class="col-md-12 text-left">
                          <a class="btn btn-primary" data-toggle="collapse" href="#verifybutton" role="button" aria-expanded="false" aria-controls="verifybutton">Make Tour</a>
                           <a href="<?php echo base_url('dashboard/user'); ?>" class="btn btn-danger">Back</a> 
          
        
                        <div class="collapse" id="verifybutton" >
                          <div class="card card-body">
                           <label>Choose way of Payment</label>
                          
                                   <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Credit Card" >
                                      <label class="form-check-label" for="exampleRadios1">
                                        Credit Card
                                      </label>
                                    </div>
                                  
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Online Bank Transfer">
                                      <label class="form-check-label" for="exampleRadios2">
                                       Online Bank Transfer
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Bank Transfer" >
                                      <label class="form-check-label" for="exampleRadios1">
                                        Bank Transfer
                                      </label>
                                    </div>
                                  
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Paypal">
                                      <label class="form-check-label" for="exampleRadios2">
                                        Paypal
                                      </label>
                                    </div>
                         

                            <div class="group row">
                                <div class="col-md-12 text-right">
                                    <input type="submit" name="insert" value="Submit Trip" class="btn btn-primary" />
                                </div>
                            </div>
                          </div>
                        </div>
                        
                       
                    </div>
                </div>  
              </div> 
           </form>
           <br/><br/><br/><br/><br/><hr/>



  </div>
   

   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                        
                <h4 style="color:black; font-size:20px;"></h4>
                <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">

                <a href="#" style="color:black;">
                 
                </a>
                </div>
                    <div class="col-md-4">
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

    <!-- Core JavaScript Files -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>