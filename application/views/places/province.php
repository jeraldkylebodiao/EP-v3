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
    <h1 style="text-align: center">ADD PROVINCE</h1><hr/>
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
    <?php echo form_open('trips/addProvince');?>
         <div class="container" >
              <div class="form-group row">  
                   <label class="col-md-3 text-left">Add Province</label>  
                   <div class="col-md-9">
                       <input type="text" name="province" class="form-control" placeholder="province"  required/> 
                   </div>          
              </div>
              <hr/>
              <div class="form-group row"> 
                     
                    <div class="col-md-12 text-right">
                    <input type="submit" name="insert" value="Add Province" class="btn btn-primary btn-lg" />
                    <a href="<?php echo base_url('origin/addOP'); ?>" class="btn btn-danger btn-lg">Back</a> </div>
                </div>  
              </div> 
           </form>
      </div>
      <div class="container-fluid" style="background-color: black">
          <center><label style=" font-size: 60px; color: white">PROVINCES</label></center>
      <br/>
      <div class="group row" >
        <?php 
          if($province){
            foreach($province as $prov){

        ?>
        <div class="col-md-3">
          <div class="container"  id="posts">
            <?php echo '<h3>'.$prov->province.'</h3>'; ?>
            <a href="<?php echo base_url('origin/editprov/'.$prov->id); ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?php echo base_url('origin/deleteprov/'.$prov->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?');">Delete</a>
          </div>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </div>
    </div>


</body>
</html>