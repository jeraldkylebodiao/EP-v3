<!DOCTYPE html>
<html>
<head>
  <title>ADD CITY</title>
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
<hr/><br/>
 
  <div class="container" style=" width: 50%">
    <h1 style="text-align: center">ADD CITY</h1><hr/>
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
    <?php echo form_open('trips/addCity');?>
         <div class="container" >
              <div class="form-group row">  
                   <label class="col-md-3 text-left">Add City</label>  
                   <div class="col-md-9">
                       <input type="text" name="city" class="form-control" placeholder="city"  required/> 
                   </div>          
              </div>
              <hr/>
              <div class="form-group row"> 
                     
                    <div class="col-md-12 text-right">
                    <input type="submit" name="insert" value="Add City" class="btn btn-primary btn-lg" />
                    <a href="<?php echo base_url('origin/addOP'); ?>" class="btn btn-danger btn-lg">Back</a> </div>
                </div>  
              </div> 
           </form>
          </div>


<div class="container-fluid" style="background-color: black">
          <center><label style=" font-size: 60px; color: white">CITIES</label></center>
      <br/>
     <div class="group row" >
        <?php 
          if($city){
            foreach($city as $ct){

        ?>
        <div class="col-md-3">
          <div class="container"  id="posts">
            <?php echo '<h3>'.$ct->city.'</h3>'; ?>
            <a href="<?php echo base_url('origin/editcity/'.$ct->id); ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?php echo base_url('origin/deletecity/'.$ct->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?');">Delete</a>
          </div>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </div>

</body>
</html>