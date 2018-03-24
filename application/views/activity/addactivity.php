<!DOCTYPE html>
<html>
<head>
	<title>Activities</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style>
    
        body{
          background-color: white;
          font-family: century gothic;
          font-weight: bold;
          text-align: center;
        }
       
      
</style>
</head>
<body>	


	
		<a href="<?php echo base_url().'gomenasai/tourist_spot'; ?>" class="btn btn-danger btn-lg">Back</a>
		<hr/><br/>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-4">
			<div class="container" style="text-align: center">
				<?php if($tourist):?>
						<?php foreach($tourist as $tour):?>
							<label>Tourist Spot: <?php echo $tour->tourist_name?></label><hr/>
							<label>Tourist Spot Description: <?php echo $tour->desc_name?></label><hr/>
							<label>Tourist Spot Address: <?php echo $tour->address?></label><hr/>
							<div class="container">
								<img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$tour->ts_image;?>">
							</div>

						<?php endforeach;?>
				<?php endif;?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="container" style="text-align: center">
				<h2 >Add Activity</h2><br/>
				<?php
                if($this->session->flashdata('success_msg')){
                ?>
                    <div class="alert alert-success">
                      <?php echo $this->session->flashdata('success_msg'); ?>
                    </div>
                <?php   
                  }
                ?>
               
				<?php echo form_open_multipart('gomenasai/submitActivity');?>
					<?php foreach($tourist as $tour):?>
				 		<input type="hidden" name="tsId" value="<?php echo $tour->tsId?>">
				 	<?php endforeach;?>
					<textarea name="activity"  style="width: 100%"  required rows="5" placeholder="Add Activity"></textarea>
					<input type="submit" name="btnSave" class="btn btn-success btn-sm" value="Add Activity">
				</form>
			</div>
		</div>
		<?php $count=0?>
		<div class="col-md-4">
			<div class="container" style="text-align: center">
				<h2 >Activities</h2><br/>
				<?php if($activity):?>
					<?php foreach($activity as $act):?>
						<div class="row">
							<div class="col-md-10">
								<label style="font-size: 20px;"><?php echo $act->activity?></label>
							</div>
							<div class="col-md-2">
								<a href="<?php echo base_url().'gomenasai/deleteactivity/'.$act->id .'/'.$act->tsId; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this Activity?');">Delete</a>
							</div>

							
						</div>
						<hr/>
						<?php $count++?>
					<?php endforeach;?>
				<?php endif;?>
				<?php if($count==0):?>
					<label style="font-size: 20px">No Registered Activity!</label>
				<?php endif;?>

				</form>
			</div>
		</div>
		
	</div>
	</div>
	
	
	
	
	


</body>
</html>