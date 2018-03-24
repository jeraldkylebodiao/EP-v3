
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
  <title>EXPLORE PINAS</title>  
      

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
        <li class="active"><a href="<?php echo base_url().'dashboard/user'; ?>">Home</a></li>
    <li><a href="#login">Trips</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places<b class="caret"></b></a>
          <ul class="dropdown-menu">
          
            <li><a href="<?php echo base_url().'dashboard/tourist_spot'; ?>">Tourist Spot</a></li>
      <li><a href="<?php echo base_url().'dashboard/editorspick'; ?>">Editors Pick</a></li>
          </ul>
        </li>
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
          <ul class="dropdown-menu">
            
            <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log out</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br><br><br><br><br>
      <div class="container-fluid" style="text-align: right">
        <a href="<?php echo base_url().'dashboard/viewprofile'; ?>" class="btn btn-primary btn-lg" ">Back</a>
      </div>
      <div class="container-fluid" style="color: black; padding: 20px; text-align: center;">
          <label style="font-size: 50px; font-weight: bold; ">MY TOURS</label>
      </div>
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
      <div class="container-fluid" style="text-align: center">
          <div class="group row">
          <?php 
            if($trips){
              foreach($trips as $post){

          ?>
          <?php if($post->user==$this->session->userdata('post_name') && $post->tourStatus=='approved'):?>
          <div class="col-md-6">

            <div class="container" id="posts">
              <?php echo '<h2 >'.$post->tourname.'</h2>'; ?>
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
              <?php echo '<label style="font-size:15px;"> Date: '.$post->tourdate.'</label>'; ?><hr/>
              <a href="<?php echo base_url('trips/displaytrip/'.$this->session->userdata('post_name'). '/'.$post->tripIdNumber); ?>" class="btn btn-primary btn-sm">View Trip</a>
              <a href="<?php echo base_url('dashboard/cancelTrip/' .$post->tripIdNumber) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to cancel this trip?');">Cancel Trip</a>

            </div>
             </div>  
          <?php endif;?>
         
          <?php
            }
          }
        ?>
        </div>
    </div>










       <div class="container-fluid" style="color: black; padding: 20px; text-align: center;">
          <label style="font-size: 50px; font-weight: bold; ">Joined Tours</label>
       </div>
       
        <div class="container-fluid" style="text-align: center">
           <div class="group row">
            <?php if($joined):?>
              <?php foreach($joined as $join):?>
                  <?php if($trips):?>
                    <?php foreach($trips as $trip):?>
                      <?php if($join->tripIdNumber == $trip->tripIdNumber):?>
                             <div class="col-md-6">

                                    <div class="container" id="posts">
                                      <?php echo '<h2 >'.$trip->tourname.'</h2>'; ?>
                                       <?php echo '<label style="font-size:15px;"> Destination: '.$trip->destination.'</label>'; ?><br/>
                                      <?php 
                                        if($tourist){
                                          foreach($tourist as $img){

                                      ?>
                                          <?php if($trip->destination==$img->tourist_name):?>
                                            <img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$img->ts_image;?>">
                                            <?php echo '<label style="font-size:15px;"> Address: '.$img->address.'</label>'; ?><br/>
                                            
                                          <?php endif;?>
                                        
                                        <?php
                                          }
                                        }
                                      ?>
                                      <?php $var=$trip->tourfee;?>
                                      <?php $var2=$trip->tourparticipant;?>
                                      <?php $var3=$var/$var2;?>
                                      <?php echo '<label style="font-size:15px;"> Origin: '.$trip->origin.'</label>'; ?><br/>
                                      <?php echo '<label style="font-size:15px;"> Date: '.$trip->tourdate.'</label>'; ?><br/>
                                      <?php echo '<label style="font-size:15px;"> Reservation Fee: '.$var3.'</label>'; ?><hr/>
                                      <a href="<?php echo base_url('trips/displaymember/'.$this->session->userdata('post_name'). '/'.$join->tripIdNumber.'/'.$trip->leader); ?>" class="btn btn-primary btn-sm">View Trip</a>
                                      
                                    </div>
                          </div> 
                          
                       <?php endif;?> 

                  <?php endforeach;?>
                <?php endif;?>
              <?php endforeach;?>
            <?php endif;?>
        </div>
      </div>





















       <div class="container-fluid" style="color: black; padding: 20px; text-align: center;">
          <label style="font-size: 50px; font-weight: bold; ">Unapproved Tours</label>
      </div>
      <div class="container-fluid" style="text-align: center">
          <div class="group row">
          <?php 
            if($trips){
              foreach($trips as $post){

          ?>
          <?php if($post->user==$this->session->userdata('post_name') && $post->tourStatus=='not approved'):?>
          <div class="col-md-6">

            <div class="container" id="posts">
              <?php echo '<h2 >'.$post->tourname.'</h2>'; ?>
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
              <?php echo '<label style="font-size:15px;"> Date: '.$post->tourdate.'</label>'; ?><hr/>
             

            </div>
             </div>  
          <?php endif;?>
         
          <?php
            }
          }
        ?>
        </div>
    </div>
    
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            
        <h4 style="color:black; font-size:20px;"></h4>
        <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">

               
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

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>