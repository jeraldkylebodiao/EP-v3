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
          background-color:#d5eaea;
          margin-bottom: 40px;
          padding: 20px;
          border-radius: 2px;
          width: 90%;
          text-align: center;
        
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
        <li class="active"><a href="#intro">Home</a></li>
    <li><a href="<?php echo base_url('trips/viewtrips');?>">Trips</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!--<li><a href="#">Must visit</a></li>-->
            <li><a href="<?php echo base_url().'dashboard/tourist_spot'; ?>">Tourist Spot</a></li>
      <li><a href="<?php echo base_url().'dashboard/editorspick'; ?>">Editors Pick</a></li>
          </ul>
        </li>
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('dashboard/account/'.$this->session->userdata('post_name'));?>">Settings</a></li>
            <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log out</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  
<br><br><br><br><br><br>

      <div class="container-fluid">
        <a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-primary btn-lg" ">Back</a>
      </div>
      <div class="container-fluid" style="color: black; padding: 20px; text-align: center; color:black">
          <label style="font-size: 50px; font-weight: bold; ">TRIPS</h1>
      </div>
     <?php $newestArray= array();?>
      
  
      <?php foreach($tours as $get){
                  $return=0;
                  foreach($members as $treat){
                    if($get->tripIdNumber==$treat->tripIdNumber){
                        $return++;
                    }
                  }
                  if($return==0){
                    $newestArray[]=$get->tripIdNumber;
                  }

      }
     // print_r($newestArray);exit();
      ?>
      <?php $var=0?>
          <div class="group row">
          <?php foreach($newestArray as $key){
                      foreach($tours as $post){
                          if($key==$post->tripIdNumber){ ?>
                              
          <?php if($post->user!=$this->session->userdata('post_name') && $post->tourStatus=='approved'):?>

              <div class="col-md-6">
                      
                  <div class="container" id="posts">
                      <?php echo '<h2 >'.$post->tourname.'</h2>'; ?>
                      <?php echo '<label style="font-size:20px;">'.$post->destination.'</label>'; ?><br/>
                      <?php 
                        if($tourist){
                          foreach($tourist as $img){

                      ?>
                          <?php if($post->destination==$img->tourist_name):?>
                            <img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$img->ts_image;?>">
                            <?php echo '<label style="font-size:15px;"> Address: '.$img->address.'</label>'; ?><br/><hr/>
                            
                          <?php endif;?>
                        
                        <?php
                          }
                        }
                      ?>
                      <?php $count=0?>
                      <?php  foreach ($gmembers as $key) {
                            if ($post->tripIdNumber == $key->tripIdNumber) {
                              $count++;
                            }
                      }
                      $slot=$post->tourparticipant-$count;

                      ?>
                     
                      
                      <div class="row">
                        <div class="col-md-5">
                          <?php echo '<label style="font-size:15px;"> Origin: '.$post->origin.'</label>'; ?><br/>
                          <?php echo '<label style="font-size:15px;"> Date: '.$post->tourdate.'</label>'; ?><br/>
                          <?php echo '<label style="font-size:15px;"> Duration of trip: '.$post->tourduration.' Day/s</label>'; ?><br/>
                          <?php echo '<label style="font-size:15px;"> Remaining Slot/s: '.$slot.'</label>'; ?><br/>
                          <?php echo '<label style="font-size:15px;"> Reservation Fee: '.$post->tourfee.'</label>'; ?><br/>

                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                          <label style="font-weight: bold; font-size: 15px;">About the Organizer</label>
                          <br/>
                          <?php foreach($profile as $prof):?>
                            <?php if($prof->username == $post->user):?>
                                 <?php echo '<label style="font-size:15px;"> '.$prof->first_name.  $prof->middle_initial .$prof->last_name.'</label>'; ?><br/>
                                  <?php echo '<label style="font-size:15px;"> '.$prof->full_address.'</label>'; ?><br/>
                                  <?php echo '<label style="font-size:15px;"> '.$prof->contact_number.'</label>'; ?><br/>
                                  <?php echo '<label style="font-size:15px;"> '.$prof->email_address.'</label>'; ?><br/>

                            <?php endif;?>
                          <?php endforeach;?>
                        </div>
                        
                      </div>
                      
                      <?php if($request):?>
                            <?php foreach($request as $requ):?>
                                <?php if($requ->tripIdNumber==$post->tripIdNumber ):?>
                                    <a href="" class="btn btn-danger btn-sm" ">Requested</a><hr/>
                                   <?php elseif($requ->tripIdNumber!=$post->tripIdNumber ):?>
                                <?php endif;?>
                         <?php endforeach;?>
                      <?php endif;?>
                      <?php $checker=0;?>
                      <?php foreach ($request as $arr):?>
                          <?php if($arr->tripIdNumber==$post->tripIdNumber ):?>
                              <?php $checker++;?>
                          <?php endif;?>
                      <?php endforeach;?>
                     <?php if($checker==0):?>
                              <a href="<?php echo base_url().'tours/requestjoin/'.$this->session->userdata('post_name'). '/'.$post->tripIdNumber; ?>" class="btn btn-success btn-sm" ">Join Tour</a><hr/>
                      <?php endif;?>
                </div>
                          
              </div>  
              <?php $var++?>
             
              <?php endif;?>  
      
        <?php
                          }
                      }

          }

          ?>
             </div>
       
    
     <?php if($var==0):?>
    <div class="container-fluid">
        <h2 style="text-align: center">No Registered Trips Yet!</h2>
    </div>
    <?php endif;?>
    <br><br><br><br><br><br><br><br><br><br><br><br>
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

</html>

