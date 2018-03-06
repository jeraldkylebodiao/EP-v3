<div class="container">
<div id="button_back"  style="text-align: center">
	<h1>Edit Tourist Spot</h1><br/>
	<?php echo form_open_multipart('admin/update');?>
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
				<textarea name="txt_desc_name" class="form-control" required><?php echo $blog->desc_name; ?></textarea>
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
			<label for="title" class="col-md-2 text-center">Tourist Spot Image</label>
			<input type="file" name="userfile" required>
			
		</div>
		<div class="form-group row">
			<label class="col-md-2 text-center">Current Image</label>
			<div class="col-md-10 text-left">
				<label><img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$blog->ts_image;?>"></label>
			</div>
		</div>
		
		
		<div class="form-group row">
			<label class="col-md-2 text-center"></label>
			<div class="col-md-12">
				<input type="submit" name="btnUpdate" class="btn btn-success btn-lg" value="Update">
				<a href="<?php echo base_url('admin/index'); ?>" class="btn btn-danger btn-lg">Cancel</a>
			</div>
		</div>

	</form>
	</div>
</div>