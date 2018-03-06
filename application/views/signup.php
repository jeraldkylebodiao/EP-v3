  <div class="container">  
            <br /><br /><br /> 
           <h1><strong>SIGN UP</strong></h1> <br/>
           <?php echo '<label id="msg" class="text-danger">'.$this->session->flashdata("error").'</label>'; ?> 
           <form method="post" action="<?php echo base_url('main/submit2') ?>"> 

                <input type="hidden" name="user_role_id" value="2">
                <div class="form-group row">  
                     <label class="col-md-2 text-right">Username</label>  
                     <div class="col-md-10">
                         <input type="text" name="username" class="form-control" placeholder="Username" required/> 
                     </div>          
                </div> 
                <div class="form-group row">  
                     <label class="col-md-2 text-right">Email</label>  
                     <div class="col-md-10">
                        <input type="email" name="email" class="form-control" placeholder="example@example.com" required/>  
                    </div>
                                    
                </div>  
                <div class="form-group row">  
                     <label class="col-md-2 text-right">Password</label>  
                     <div class="col-md-10">
                        <input type="password" name="password" class="form-control" placeholder="Password" required/>  
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