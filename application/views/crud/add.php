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
  		<h1 >Add Tourist Spot</h1><br/>
		
	<?php echo form_open_multipart('gomenasai/submit');?>
			<div class="form-group row">
				<br/><br/>
				<label for="title" class="col-md-2 text-center">Tourist Spot</label>
				<div class="col-md-10">
					<input type="text" name="txt_tourist_name" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="desc_name" class="col-md-2 text-center">Description</label>
				<div class="col-md-10">
					<textarea  name="txt_desc_name" class="form-control" required rows="5"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="city_name" class="col-md-2 text-center">Address</label>
				<div class="col-md-10">
					<input type="text" name="txt_address" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="city_name" class="col-md-2 text-center">Estimated Expenses</label>
				<div class="col-md-10">
					<input type="number" name="txt_price" class="form-control" placeholder="Php" min="100" max="500000" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-2 text-center">Upload Image</label>
				<div class="col-md-10 text-left">
					<input type="file" name="userfile"  required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 text-center"></label>
				<div class="col-md-12">
					<input type="submit" name="btnSave" class="btn btn-success btn-lg" value="Save">
					<a href="<?php echo base_url('gomenasai/tourist_spot'); ?>" class="btn btn-danger btn-lg">Back</a>
				</div>
			</div>
		</form>
	
	</div>
</div>


</body>
</html>