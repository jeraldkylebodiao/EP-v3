<!DOCTYPE html>
<html>
<head>
  <title>Make Trip</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
      body{
        text-align: center;
        font-family: century gothic
      }
      label{
        font-weight: bold;
        text-align: center;
      }
    </style>
</head>
<body>
<hr/><br/>
  <div class="container">
   
      
   
        <?php
          foreach ($act as $key) {
            $var=$key->tourist_name;
          }

        ?>
  <div class="row">
    <div class="col-md-6">
      <?php echo form_open('trips/addActivity/'.$var.'/'.$tripIdNumber);?>
    <input type="hidden" name="tripIdNumber" value="<?php echo $tripIdNumber;?>">
    <h1>Add Activity for you Trip</h1>
    <hr/>
         <select class="custom-select"  name="activity">
        <?php foreach($act as $activity):?>
          <?php foreach($touract as $acti):?>
                <?php if($activity->tsId == $acti->tsId):?>
                      
                          <option ><?php echo $acti->activity?></option>
                     
                        

                <?php endif;?>
          <?php endforeach;?>
        <?php endforeach;?>
        </select><hr/>
        <div class="row">
            <hr/>
            <label>Start Date</label>
            <input style="width: 100%" type="date" name="startActDate" required/>
            <hr/>
          
        </div>
         <div class="row">
          <div class="col-md-5">
            <hr/>
            <label>End Date</label>
            <input style="width: 100%" type="date" name="endActDate" required/>
            <hr/>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5">
            <hr/>
            <label> End Time</label>
             <input style="width: 100%" type="time" name="endActTime" required/>
             <hr/>
          </div>
        </div>
        
       <hr/>
        <input type="submit" name="insert" value="Add Activity" class="btn btn-primary btn-sm" />
        <a href="<?php echo base_url('Trips/maketour'); ?>" class="btn btn-success btn-sm">Done</a>
 <br/><br/><br/><br/><br/>

           </form>
           <hr/>
    </div>
    <div class="col-md-6">
      <h1>Included Activities</h1><hr/>
      
     <?php foreach ($current as $curr): ?>
          <label><?php echo $curr->activity?></label><hr/>
    <?php endforeach;?>
      
    </div>
  </div>
     
           <br/><br/><br/><br/><br/>



  </div>

</body>
</html>



     
        