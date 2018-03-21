<!DOCTYPE html>
<html>
<head>
	<title>Verify Account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			
		<style >
			body{
				font-family: century gothic;
				text-align: center;
			}
		
			label{
				
			
				font-size: 20px;
			}

		</style>
</head>
<body> <br /><hr/>
	<div class="container">
			<h1>VERIFY ACCOUNT</h1>
			<p class="text-muted" style="font-size: 15px; margin: 0px; padding: 0px;">
				Fill up all fields and click submit.  
			</p>
			<br/>
	</div>
	<div class="container" style="width: 70%">
		<?php echo form_open('account/submit');?>
					   <input type="hidden" name="username" value="<?php echo $this->session->userdata('post_name');?>">
					   <input type="hidden" name="status" value="not verified">
		               <div class="form-group row">  
		                    
		                     <div class="col-md-5">
		                         <input type="text" name="first_name" class="form-control" placeholder="First Name" required/>
		                     </div> 
		                      <div class="col-md-5">
		                         <input type="text" name="last_name" class="form-control" placeholder="Last Name" required/>
		                     </div>    
		                     <div class="col-md-2">
		                         <input type="text" name="middle_initial" class="form-control" placeholder="Middle Initial" required/>
		                     </div>     
		                              
		                </div> 
		                <div class="form-group row">  
		                    
		                     <div class="col-md-12">
		                         <input type="text" name="address" class="form-control" placeholder="Full Address" required/> 
		                     </div> 

		                </div>   
		                <div class="form-group row">  
		                    
		                     <div class="col-md-6">
		                        <input type="text" name="cnumber" class="form-control" placeholder="Contact Number" required/></div>
		                     <div class="col-md-6">
		                        <input type="email" name="emailadd" class="form-control" placeholder="Email Address" required/></div>
		                </div>  
		                
		                    
		             
		                 <div class="form-group row">  
		                     <label class="col-md-2 text-right">Date of Birth</label>  
		                     <div class="col-md-10">
		                        <input type="date" name="birthdate" class="form-control" required/></div>
		                </div>  
		             

		                <div class="form-group row "> 
		                	<div class="col-md-12 text-right">
		                     <input type="submit" name="insert" value="Submit" class="btn btn-primary " />
		                  	 <a href="<?php echo base_url('dashboard/account/'.$this->session->userdata('post_name')); ?>" class="btn btn-danger ">Cancel</a> 
		                  	</div>

		                </div>  
		               
		</form>
	</div>  
</body>
</html>