<!DOCTYPE html>
<html>
<head>
	<title>Tourist Spot</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style>
    #title_top{
      		text-align: center;
      		width: 100%;
      		padding: 30px;
      		background-color: black;
          color: white;
      		font-weight: bolder;
      		font-size: 50px;
          font-family: century gothic;
      	}
        body{
          background-color: white;
          font-family: century gothic;
          font-weight: bold;
          text-align: center;
        }
      
</style>
</head>
<body>

	<div id="title_top">
		<label>Philippine's Tourist Spots</label>
	</div>


<div class="container">
<div id="button_back"  style="text-align: center">
	<h1>Edit Tourist Spot</h1><br/>
	<?php echo form_open_multipart('gomenasai/update');?>
		 <?php
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
                  <div class="alert alert-success">
                   <?php echo $this->session->flashdata('error_msg'); ?>
                  </div>
                <?php   
                  }
                 ?>
		<input type="hidden" name="txt_hidden" value="<?php echo $blog->id; ?>">
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Tourist Spot</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->tourist_name; ?>" name="txt_tourist_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Description</label>
			<div class="col-md-10">
				<textarea name="txt_desc_name" class="form-control" required rows="5"><?php echo $blog->desc_name; ?></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Address</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->address; ?>" name="txt_address" class="form-control" required>
			</div>
		</div>
	
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Tourist Spot Image</label>
			<div class="col-md-10 text-left">
				<a href="<?php echo base_url('gomenasai/updateImage/' .$blog->ts_image); ?>" class="btn btn-warning btn-md">Update Photo</a>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Current Image</label>
			<div class="col-md-10 text-left">
				<img style="width: 50%;"; src="<?php echo base_url().'assets/upload/'.$blog->ts_image;?>">
			</div>
		</div>
		
		
		<div class="form-group row">
			<label class="col-md-2 text-center"></label>
			<div class="col-md-12">
				<input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Update">
				<a href="<?php echo base_url('gomenasai/tourist_spot'); ?>" class="btn btn-danger btn-lg">Cancel</a>
			</div>
		</div>

	</form>
	</div>
</div>


</body>
</html>