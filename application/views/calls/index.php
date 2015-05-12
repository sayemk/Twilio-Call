

	  	<h1>Make Group Calls</h1>
	  	<div class="col-md-6">
			<?php 
				echo validation_errors();
				echo form_open('calls/makeCall', array('class'=>'form-horizontal')); 
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
		   <label for="file"> Select a Voice File </label>
		    <select name="file" class="form-control">
			  <option></option>
			  <?php 
			  		foreach ($files->result() as $file) {
			   ?>
			  		<option value="<?php echo $file->id ?>"><?php echo $file->name; ?></option>
			  <?php } ?>
			</select>
		    
		  </div>
			
		  
			  
		  
		  <div class="form-group">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary">Make Call</button>
		    </div>
		  </div>
		  <?php echo form_close(); ?>
		</div>

  </div> <!--End of col-md-4-->
 
</div> <!-- End of row -->

</body>
</html>