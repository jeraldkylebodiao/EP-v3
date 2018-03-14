<!DOCTYPE html>
<html>
<head>
	<title>Make Trip</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<hr/><br/>
	<div class="container" style=" width: 50%">
		<h1 style="text-align: center">EDIT TRIp</h1><hr/>
      
   
		<?php echo form_open('trips/updateTrip');?>
     <input type="hidden" name="uptrip" value="<?php echo $trips->id; ?>">
    <input type="hidden" name="user" value="<?php echo $this->session->userdata('post_name');?>">
		     <div class="container" >
				<div class="form-group row">
				    <label class="col-md-2 text-left" >Destination</label>
				    <div class="col-md-10">
				    <select class="form-control" name="destination" value="<?php echo $trips->destination; ?>">
				    	<?php 
				    		if($spots){
				    			foreach ($spots as $post) { ?>
				    				<option><?php echo $post->tourist_name?></option>

				    	<?php		}
				    		}

				    	?>
				      	
				    </select>
				    </div>
				  </div>
                  <div class="form-group row">
                    <label class="col-md-2 text-left" >Origin</label>
                    <div class="col-md-10">
                    <select class="form-control" name="origin" value="<?php echo $trips->origin; ?>" >
                        <?php 
                            if($origin){
                                foreach ($origin as $post) { ?>
                                    <option><?php echo $post->exact_place?></option>

                        <?php       }
                            }

                        ?>
                        
                    </select>
                    </div>
                  </div>
			 </div>

			 <div class="container" >
			 	
               <div class="form-group row">  
                     <label class="col-md-2 text-left">Name Trip</label>  
                     <div class="col-md-10">
                         <input type="text" name="tripname" class="form-control" value="<?php echo $trips->name; ?>" minlength="5" required/> 
                     </div>          
                </div> 
                <div class="form-group row">  
                     <label class="col-md-2 text-left">Date</label>  
                     <div class="col-md-10">
                         <input type="date" name="tripdate" class="form-control" value="<?php echo $trips->date; ?>" required/> 
                     </div>          
                </div>   

                <hr/>

                <div class="form-group row"> 
                     
                    <div class="col-md-12 text-right">
                        <input type="submit" name="insert" value="Update Trip" class="btn btn-primary btn-lg" />
                        <a href="<?php echo base_url('dashboard/viewtrips'); ?>" class="btn btn-danger btn-lg">Cancel</a> 
                    </div>
                </div>  
              </div> 
           </form>



	</div>