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
<hr/><br/>
	<div class="container" style=" width: 50%">
		<h1 style="text-align: center">EDIT PLACES</h1><hr/>
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
    
		<?php echo form_open('origin/update');?>
        <input type="hidden" name="placeID" value="<?php echo $places->id; ?>">
		     <div class="container">
				<div class="form-group row">
				    <label class="col-md-2 text-left" >Region</label>
				    <div class="col-md-10">
				    <select class="form-control" name="region" value="<?php echo $places->region; ?>">
                <?php 
                if($region){
                  foreach ($region as $reg) { ?>
                    <option><?php echo $reg->region?></option>

                <?php   }
                  }

                ?>
				    
				    </select>
				    </div>
				  </div>
		
                <div class="form-group row">
                    <label class="col-md-2 text-left" >Province</label>
                    <div class="col-md-10">
                    <select class="form-control" name="province" value="<?php echo $places->province; ?>">
                        <?php 
                          if($province){
                            foreach ($province as $prov) { ?>
                              <option><?php echo $prov->province?></option>

                        <?php   }
                          }

                        ?>
                    </select>
                    </div>
                  </div>
           
                <div class="form-group row">
                    <label class="col-md-2 text-left" >City</label>
                    <div class="col-md-10">
                    <select class="form-control" name="city" value="<?php echo $places->city; ?>">
                       <?php 
                          if($city){
                            foreach ($city as $ct) { ?>
                              <option><?php echo $ct->city?></option>

                        <?php   }
                          }

                        ?>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">  
                     <label class="col-md-2 text-left">Landmark</label>  
                     <div class="col-md-10">
                         <input type="text" name="landmark" class="form-control" value="<?php echo $places->exact_place; ?>"  required/> 
                     </div>          
                </div>
            
               

                <div class="form-group row"> 
                     
                    <div class="col-md-12 text-right">
                    <input type="submit" name="insert" value="Edit Place" class="btn btn-primary btn-lg" />
                    <a href="<?php echo base_url('origin/addOP'); ?>" class="btn btn-danger btn-lg">Back</a> </div>
                </div>  
              </div> 
           </form>



	</div>
  
</body>
</html>