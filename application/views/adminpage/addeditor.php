<!DOCTYPE html>  
 <html>  
	 <head>  
	      	<title>EXPLORE PINAS</title>  
	      	<link rel="stylesheet" 
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<style>
				label{
					font-size: 18px;
				}
				#title{
					font-size: 50px;
				}
				#title2	{
					font-size: 30px;
					font-weight: bold;
				}
				#buttons{
					text-align: right;
				}
				#posted{
					font-size: 13px;
				}
				
			</style>
	</head>
	<body>



<div class="container">
<div >
	<strong><label id="title">REVIEW POST</label></strong><br/>
	<?php echo form_open_multipart('editors_pick/addEditors');?>
		<input type="hidden" name="id_hidden" value="<?php echo $post->id; ?>">
		<input type="hidden" name="username_hidden" value="<?php echo $post->post_name; ?>">
		<input type="hidden" name="editors" value="2">
		<div id="buttons">
			<input type="submit" name="btnUpdate" class="btn btn-success btn-md" value="Add to Editors Pick">
			<a href="<?php echo base_url('gomenasai/view/' .$post->post_name); ?>" class="btn btn-danger btn-md">Cancel</a>
		</div>
		<label class="text-muted" id="posted">Posted by: <a href="" style="font-size: 20px"><?php echo '@'.$post->post_name;?></a></label>
		<div>
			<label class="text-muted" id="posted">Title: </label> 
			<label style="margin-top: 10px" id="title2"><?php echo $post->title; ?></label>
		</div>
		<div>
			<label class="text-muted" id="posted">Body: </label> 
			<label style="margin-top: 10px"><?php echo $post->body; ?></label>
		</div>
		
		<div>

			<?php if(!$post->post_image):?>
				<img style="width: 50%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
			<?php else:?>
				<img style="width: 50%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
			<?php endif?>
			<br/>
			
		</div>
		<br/>
		

	</form>
	</div>
</div>
</body>
</html>