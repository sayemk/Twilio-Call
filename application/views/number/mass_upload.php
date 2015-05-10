

	  	<h1>Create A New Contacts</h1>
	  	<div class="col-md-6">
			<?php 
				echo @$errors['error'];
				echo validation_errors();
				echo form_open_multipart('number/upload', array('class'=>'form-horizontal')); 
			?>
		  <div class="form-group">
		   <label for="group">Select a Group </label>
		    <select name="group" class="form-control">
			  <option></option>
			  <?php 
			  		foreach ($groups->result() as $group) {
			   ?>
			  		<option value="<?php echo $group->id ?>"><?php echo $group->name; ?></option>
			  <?php } ?>
			</select>
		    
		  </div>
			
		  <div class="form-group">
		    <label for="name">Contacts File</label>
		    
		      <input name="userfile" value="<?php echo set_value('name'); ?>" type="file" class="form-control" id="userfile" placeholder="Excel file">
		   
		  </div>

		  <div class="form-group">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary">Create</button>
		    </div>
		  </div>
		  <?php echo form_close(); ?>
		</div>

  </div> <!--End of col-md-4-->
 
</div> <!-- End of row -->

</body>
</html>