  <div class="container">  
            <br /><br /><br /> 
           <h1>Add Admin</h1> <hr/>
          
           <form method="post" action="<?php echo base_url('main/submit2') ?>">  
                <input type="hidden" name="user_role_id" value="1">
                <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Username" required/>  
                               
                </div> 
                <div class="form-group">  
                     <label>Enter Email</label>  
                     <input type="email" name="email" class="form-control" placeholder="example@...... .com" required/>  
                                    
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" placeholder="Password" required />  
          
                </div>  

                <div class="form-group">  
                    <input type="submit" name="insert" value="Sign up" class="btn btn-primary btn-lg" />  
                    <?php  
                      echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                    ?>  
                    <a href="<?php echo base_url(); ?>" class="btn btn-success btn-lg">Back</a> 
                </div>  
               
           </form>  
      </div>  