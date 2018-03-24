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

<style>
        #posts{
          background-color: white;
          margin-bottom: 40px;
          padding: 20px;
          border-radius: 2px;
          width: 80%;
        }
        #crt{
          background-color: white;
          border-radius: 2px;

        }
        #title{
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
        <li><a href="#about">Trips</a></li>
       
     
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
            <li><a href="<?php echo base_url().'dashboard/viewprofile'; ?>">View Profile</a></li>
  			
      <li><a href="<?php echo base_url().'dashboard/account';?>">Edit Account</a></li>
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
	<div class="container">
    <div id="button_back"  style="text-align: center">
      <h1>Edit Post</h1><br/>

      <?php if(!$post->post_image):?>
        <?php echo form_open_multipart('dashboard/updatepost_inprofile');?>
        
          <br/><br/>
          <input type="hidden" name="id_hidden" value="<?php echo $post->id; ?>">
          <div class="form-group row">
            <label for="title" class="col-md-2 text-center"><strong>TITLE</strong></label>
            <div class="col-md-10">
              <input type="text" value="<?php echo $post->title; ?>" name="txt_title" class="form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="title" class="col-md-2 text-center"><strong>BODY</strong></label>
            <div class="col-md-10">
              <textarea type="text" name="txt_body" class="form-control" required rows="5"><?php echo $post->body; ?></textarea>
            </div>
          </div>
          <?php if($post->post_image):?>
                <div class="form-group row">
                  <label for="title" class="col-md-2 text-center"><strong>Image</strong></label>
                  <div class="col-md-10 text-left">
                    <a href="<?php echo base_url('dashboard/updatePostImage/'.$post->post_image); ?>" class="btn btn-warning btn-sm">Update Photo</a>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2 text-center"><strong>Current Image</strong></label>
                  <div class="col-md-10 text-left">
                    <img style="width: 50%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
                  </div>
                </div>
              <?php else:?>
                <div class="form-group row">
                <label for="title" class="col-md-2 text-center"><strong>Add Image</strong></label>
                <div class="col-md-10 text-left">
                  <input type="file" name="userfile" size="20" required>
                </div>
              </div>
              <?php endif?>
          <div class="form-group row">
            <label class="col-md-2 text-center"></label>
            <div class="col-md-12">
              <input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Update">
              <a href="<?php echo base_url('dashboard/user'); ?>" class="btn btn-danger btn-lg">Cancel</a>
            </div>
          </div>
        </form>
      <?php else:?>
        <?php echo form_open_multipart('dashboard/updateposts_inprofile');?>
        
          <br/><br/>
          <input type="hidden" name="id_hidden" value="<?php echo $post->id; ?>">
          <div class="form-group row">
            <label for="title" class="col-md-2 text-center"><strong>TITLE</strong></label>
            <div class="col-md-10">
              <input type="text" value="<?php echo $post->title; ?>" name="txt_title" class="form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="title" class="col-md-2 text-center"><strong>BODY</strong></label>
            <div class="col-md-10">
              <textarea type="text" name="txt_body" class="form-control" required><?php echo $post->body; ?></textarea>
            </div>
          </div>
          <?php if($post->post_image):?>
                <div class="form-group row">
                  <label for="title" class="col-md-2 text-center"><strong>Image</strong></label>
                  <div class="col-md-10 text-left">
                    <a href="<?php echo base_url('dashboard/updatePostImage/'.$post->post_image); ?>" class="btn btn-warning btn-sm">Update Photo</a>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2 text-center"><strong>Current Image</strong></label>
                  <div class="col-md-10 text-left">
                    <img style="width: 50%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
                  </div>
                </div>
              <?php else:?>
                <div class="form-group row">
                <label for="title" class="col-md-2 text-center"><strong>Add Image</strong></label>
                <div class="col-md-10 text-left">
                  <input type="file" name="userfile" size="20" required>
                </div>
              </div>
              <?php endif?>
          <div class="form-group row">
            <label class="col-md-2 text-center"></label>
            <div class="col-md-12">
              <input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Update">
              <a href="<?php echo base_url('dashboard/user'); ?>" class="btn btn-danger btn-lg">Cancel</a>
            </div>
          </div>
        </form>
      <?php endif?>
    </div>
  </div>
   
<br><br><br><br>
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