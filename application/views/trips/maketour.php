<!DOCTYPE html>
<html>
<head>
	<title>Make Trip</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<hr/><br/>
	<div class="container" style=" width: 50%">
		<h1 style="text-align: center">MAKE TOUR</h1><hr/>
      
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
		<?php echo form_open('trips/addTrip');?>
    <input type="hidden" name="restriction" value="leader">
    <input type="hidden" name="tourStatus" value="not approved">
    <input type="hidden" name="tripIdNumber" value="<?php echo(rand());?>">
    <input type="hidden" name="leader" value="<?php echo $this->session->userdata('post_name')?>">
		     <div class="container" >
				<div class="form-group row">
				    <label class="col-md-2 text-left" >Destination</label>
				    <div class="col-md-10">
				    <select class="form-control" name="destination">
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
                    <select class="form-control" name="origin">
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
			 	<input type="hidden" name="user" value="<?php echo $this->session->userdata('post_name');?>">
               <div class="form-group row">  
                     <label class="col-md-2 text-left">Name Trip</label>  
                     <div class="col-md-10">
                         <input type="text" name="tourname" class="form-control" placeholder="Name of your Tour" minlength="5" required/> 
                     </div>          
                </div> 
                <div class="form-group row">  
                     <label class="col-md-2 text-left">Date</label>  
                     <div class="col-md-10">
                         <input type="date" name="tourdate" class="form-control" required/> 
                     </div>          
                </div>
                <div class="form-group row">  
                     <label class="col-md-2 text-left">Slots</label>  
                     <div class="col-md-10">
                         <input type="number" name="tourparticipant" class="form-control"  required/> 
                     </div>          
                </div>  
                <div class="form-group row">  
                     <label class="col-md-2 text-left">Join Fee</label>  
                     <div class="col-md-10">
                         <input type="number" name="tourfee" class="form-control" placeholder="PHP" required/> 
                     </div>          
                </div>  
                   <div class="form-group row">  
                     <label class="col-md-2 text-left">Itinerary</label>  
                     <div class="col-md-10">
                        <textarea name="touritinerary" class="form-control" required rows="5"></textarea>
                </div>          
                </div>     

                <hr/>

                <div class="form-group row"> 
                     
                    <div class="col-md-12 text-left">
                          <a class="btn btn-primary" data-toggle="collapse" href="#verifybutton" role="button" aria-expanded="false" aria-controls="verifybutton">Make Trip</a>
                           <a href="<?php echo base_url('dashboard/user'); ?>" class="btn btn-danger">Back</a> 
          
        
                        <div class="collapse" id="verifybutton" >
                          <div class="card card-body">
                           <label>Choose way of Payment</label>
                          
                                   <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Credit Card" >
                                      <label class="form-check-label" for="exampleRadios1">
                                        Credit Card
                                      </label>
                                    </div>
                                  
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Online Bank Transfer">
                                      <label class="form-check-label" for="exampleRadios2">
                                       Online Bank Transfer
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Bank Transfer" >
                                      <label class="form-check-label" for="exampleRadios1">
                                        Bank Transfer
                                      </label>
                                    </div>
                                  
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Paypal">
                                      <label class="form-check-label" for="exampleRadios2">
                                        Paypal
                                      </label>
                                    </div>
                         

                            <div class="group row">
                                <div class="col-md-12 text-right">
                                    <input type="submit" name="insert" value="Submit Trip" class="btn btn-primary" />
                                </div>
                            </div>
                          </div>
                        </div>
                        
                       
                    </div>
                </div>  
              </div> 
           </form>
           <br/><br/><br/><br/><br/><hr/>



	</div>

</body>
</html>



     
        