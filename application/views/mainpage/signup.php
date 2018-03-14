  <div class="container" style="width: 50%">  
            <br /><br /><br /> 
           <h1><strong>SIGN UP</strong></h1> <br/>
           <?php echo '<label id="msg" class="text-danger">'.$this->session->flashdata("error").'</label>'; ?> 
           <?php echo form_open('aishiteru/submit');?>
         
                <input type="hidden" name="user_role_id" value="2">
               <div class="form-group row">  
                     <label class="col-md-2 text-right">Name</label>  
                     <div class="col-md-10">
                         <input type="text" name="full_name" class="form-control" placeholder="Full Name" minlength="5" required/> 
                     </div>          
                </div> 
                <div class="form-group row">  
                     <label class="col-md-2 text-right">Username</label>  
                     <div class="col-md-10">
                         <input type="text" name="username" class="form-control" placeholder="Username" minlength="5" required/> 
                     </div>          
                </div>   
                <div class="form-group row">  
                     <label class="col-md-2 text-right">Password</label>  
                     <div class="col-md-10">
                        <input type="password" name="password" class="form-control" placeholder="Password" minlength="8" required/>  
                    </div>
                </div>  

                <div class="form-group row"> 
                     
                    <div class="col-md-2">
                    <input type="submit" name="insert" value="Sign up" class="btn btn-primary btn-lg" /></div>
                     <div class="col-md-2">
                    <a href="<?php echo base_url(); ?>" class="btn btn-danger btn-lg">Cancel</a> </div>
                </div>  
               
           </form>  
      </div>  