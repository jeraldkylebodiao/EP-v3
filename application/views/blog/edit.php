<div class="container">
<div id="button_back"  style="text-align: center">
	<h1>Edit Tourist Spot</h1><br/>
	
	<form action="<?php echo base_url('blog/update') ?>" method="post" class="form-horizontal">
		<br/><br/>
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
				<input type="text" value="<?php echo $blog->desc_name; ?>" name="txt_desc_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Region</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->reg_name; ?>" name="txt_reg_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">Province</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->prov_name; ?>" name="txt_prov_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="title" class="col-md-2 text-center">City</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->city_name; ?>" name="txt_city_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 text-center"></label>
			<div class="col-md-12">
				<input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Update">
				<a href="<?php echo base_url('blog/index'); ?>" class="btn btn-danger btn-lg">Back</a>
			</div>
		</div>
	</form>
	</div>
</div>