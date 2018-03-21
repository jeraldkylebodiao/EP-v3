<!DOCTYPE html>
<html>
<head>
	<title>Make Trip</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
      body{
        font-family: century gothic;
        background-color: black;
      }
      #posts{
          background-color: white;
          margin-bottom: 40px;
          padding: 20px;
          border-radius: 2px;
          width: 90%;
        
        }
  </style>
</head>
<body>

      <div class="container-fluid" style="text-align: right">
        <a href="<?php echo base_url().'dashboard/viewprofile'; ?>" class="btn btn-primary btn-lg" ">Back</a>
      </div>
      <div class="container-fluid" style="color: white; padding: 20px; text-align: center;">
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










       <div class="container-fluid" style="color: white; padding: 20px; text-align: center;">
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





















       <div class="container-fluid" style="color: white; padding: 20px; text-align: center;">
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
    
</body>
</html>