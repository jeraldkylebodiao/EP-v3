<!DOCTYPE html>
<html>
<head>
  <title>TRIPS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

      <div class="container-fluid" style="text-align: right">
        <a href="<?php echo base_url().'trips/viewtrips'; ?>" class="btn btn-primary btn-lg" ">Back</a>
      </div>
     
     <div class="container-fluid" style="text-align: center">
     
          
            <div class="container" id="posts">
              <?php echo '<h1 >'.$post->name.'</h1>'; ?>
               <?php echo '<label style="font-size:20px;">'.$post->destination.'</label>'; ?><br/>
              <?php 
                if($tourist){
                  foreach($tourist as $img){

              ?>
                  <?php if($post->destination==$img->tourist_name):?>
                    <img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$img->ts_image;?>">
                    <?php echo '<label style="font-size:15px;"> Address: '.$img->address.'</label>'; ?><br/>
                    <?php echo '<label style="font-size:15px;"> Estimated Expenses: '.$img->price.'</label>'; ?><br/>
                  <?php endif;?>
                
                <?php
                  }
                }
              ?>
        <?php echo '<label style="font-size:15px;"> Origin: '.$post->origin.'</label>'; ?><br/>
              <?php echo '<label style="font-size:15px;"> Date: '.$post->date.'</label>'; ?><br/>
        <?php echo '<label style="font-size:15px;"> Trip Leader: '.$post->leader.'</label>'; ?><br/>

            </div>
    
         
    </div>
   
</body>
</html>