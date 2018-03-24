
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
  <div class="container">
    <div class="text-right">
                        <a href="<?php echo base_url('trips/Region'); ?>" class="btn btn-primary btn-md">Add Region</a> 
                        <a href="<?php echo base_url('trips/Province'); ?>" class="btn btn-success btn-md">Add Province</a> 
                        <a href="<?php echo base_url('trips/City'); ?>" class="btn btn-danger btn-md">Add City</a> 
    </div>
  </div>
	<div class="container" style=" width: 50%">
		<h1 style="text-align: center">ADD PLACES</h1><hr/>
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
		<?php echo form_open('origin/addPlace');?>
		     <div class="container" >
				<div class="form-group row">
				    <label class="col-md-2 text-left" >Region</label>
				    <div class="col-md-10">
				    <select class="form-control" name="region">
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
                    <select class="form-control" name="province">
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
                    <select class="form-control" name="city">
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
                         <input type="text" name="landmark" class="form-control" placeholder="Landmark"  required/> 
                     </div>          
                </div>
            
               

                <div class="form-group row"> 
                     
                    <div class="col-md-12 text-right">
                    <input type="submit" name="insert" value="Add Places" class="btn btn-primary btn-lg" />
                    <a href="<?php echo base_url('gomenasai/bakana'); ?>" class="btn btn-danger btn-lg">Back</a> </div>
                </div>  
              </div> 
           </form>



	</div>
  <div class="container-fluid" style="background-color: black;">
      <center><label style=" font-size: 60px; color: white">Places</label></center>
      <br/>
      <div class="group row" >
        <?php 
          if($places){
            foreach($places as $place){

        ?>
        <div class="col-md-4">
          <div class="container" id="posts">
            <?php echo '<h3>'.$place->exact_place.'</h3>'; ?>
            <?php echo '<label style="font-size:15px;">Region '.$place->region.'</label>'; ?><br/>
            <?php echo '<label style="font-size:15px;">Province of '.$place->province.'</label>'; ?><br/>
            <?php echo '<label style="font-size:15px;">City of '.$place->city.'</label>'; ?><br/>
            <a href="<?php echo base_url('origin/edit/'.$place->id); ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?php echo base_url('origin/deleteplace/'.$place->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?');">Delete</a>
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