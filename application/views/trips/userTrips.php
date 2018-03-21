<!DOCTYPE html>
<html>
<head>
	<title>TRIPS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
      body{
        background-color: black;
        font-family: century gothic;
      }
      #posts{
          background-color: white;
          margin-bottom: 40px;
          padding: 20px;
          border-radius: 2px;
          width: 90%;
          text-align: center;
        
        }
  </style>
</head>
<body>

      <div class="container-fluid" style="text-align: right; ">
        <a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-primary btn-lg" ">Back</a>
      </div>
      <div class="container-fluid" style="color: black; padding: 20px; text-align: center; color: white">
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
                                                                            <?php echo '<label style="font-size:15px;"> Address: '.$img->address.'</label>'; ?><br/>
                                                                            
                                                                          <?php endif;?>
                                                                        
                                                                        <?php
                                                                          }
                                                                        }
                                                                      ?>
                                                                      <?php echo '<label style="font-size:15px;"> Origin: '.$post->origin.'</label>'; ?><br/>
                                                                            <?php echo '<label style="font-size:15px;"> Date: '.$post->tourdate.'</label>'; ?><br/>
                                                                      <?php echo '<label style="font-size:15px;"> Trip Leader: '.$post->user.'</label>'; ?><br/>

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
</body>
</html>