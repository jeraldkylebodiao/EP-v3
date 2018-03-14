<!DOCTYPE html>
<html>
<head>
  <title>ADD PLACES</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    
        #posts{
          background-color: white;
          margin-bottom: 40px;
          padding: 20px;
          border-radius: 2px;
          text-align: center;
        }
  </style>
</head>
<body>



<div class="container" style=" width: 40%"><hr/>
    <h1 style="text-align: center">EDIT REGION</h1><hr/>
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
    
    <?php echo form_open('origin/updateReg');?>
         <input type="hidden" name="regionID" value="<?php echo $region->id; ?>">

    <div class="form-group row">
      <label for="title" class="col-md-2 text-center">Region</label>
      <div class="col-md-10">
        <input type="text" value="<?php echo $region->region; ?>" name="region" class="form-control" required>
      </div>
    </div>
    <div class="form-group row"> 
                     
                    <div class="col-md-12 text-right">
                    <input type="submit" name="insert" value="Update Region" class="btn btn-primary btn-md" />
                    <a href="<?php echo base_url('trips/Region'); ?>" class="btn btn-danger btn-md">Cancel</a> </div>
    </div>  

</body>
</html>