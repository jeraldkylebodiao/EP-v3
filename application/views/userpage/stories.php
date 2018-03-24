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
    <link href="<?php echo base_url();?>assets/css/prof.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/color/default.css" rel="stylesheet">
<style>
    
           #post{
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
        <li><a href="#">Trips</a></li>
     
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Must Visit</a></li>
            <li><a href="<?php echo base_url().'dashboard/tourist_spot'; ?>">Tourist Spot</a></li>
            <li><a href="<?php echo base_url().'dashboard/editorspick'; ?>">Editor's Choice</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url().'dashboard/viewprofile';?>">View Profile</a></li>
            <li><a href="<?php echo base_url().'dashboard/account';?>">Edit Account</a></li>
            <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log Out</a></li>
           
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br><br><br><br><br><br>
 <a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-danger btn-lg" ">Back</a>
    
  
    <div class="container text-center" id="crt">
            <h1><strong>SHARE YOUR STORY</strong></h1> <br/>  
          
            <?php echo form_open_multipart('dashboard/create_post');?>
                <input type="hidden" name="post_name" value="<?php echo $this->session->userdata('post_name');?>">
                <input type="hidden" name="editors" value="1">
                <div class="form-group">  
                    <input type="text" name="title" class="form-control" placeholder="Title" required /> 
                </div> 
                <div class="form-group">  
                    <textarea class="form-control" name="body" placeholder="Add Body" required rows="6"></textarea>
                </div>  
                <div class="form-group">
                    <input  type="file" name="userfile" >
                </div>
                <div class="form-group row" style=" padding:15px;" > 
                    <input type="submit" name="insert" value="SHARE STORY" class="btn btn-primary btn-lg" />
                </div>
            </form> 
             
        </div>  
        <hr/><br/><br/>

        
        <div class="container-fluid">
            <center><label style="color: white; font-size: 60px;">Stories</label></center>
            <br/>
            <div class="group row">
                <?php 
                    if($posts){
                        foreach($posts as $post){

                ?>
                <div class="col-md-4">
                    <div class="container-fluid" id="posts">
                        <a href="" style="font-size: 15px"><?php echo '@'.$post->post_name;?></a><hr/>
                        <?php if(!$post->post_image):?>
                            <img style="width: 100%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
                        <?php else:?>
                            <img style="width: 100%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
                        <?php endif?>
                        <?php echo '<h3 >'.$post->title.'</h3>'; ?>
                        <?php echo '<label style="font-size:15px;">'.$post->body.'</label>'; ?><hr/>
                        <?php if($post->post_name==$this->session->userdata('post_name')):?>
                            <a href="<?php echo base_url('dashboard/editpost/'.$post->id); ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="<?php echo base_url('dashboard/deletepost/' .$post->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?');">Delete</a> 
                        <?php endif;?>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
        <br/><br/>
    </section>
    <!-- /Section: contact -->

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
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>

</html>