

	  	<h1>Create A New Contact</h1>
	  	<div class="col-md-6">
			<?php 
				echo validation_errors();
				echo form_open('number/save', array('class'=>'form-horizontal')); 
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
		    <label for="name">Contact Name</label>
		    
		      <input name="name" value="<?php echo set_value('name'); ?>" type="text" class="form-control" id="name" placeholder="Full Name">
		   
		  </div>

		  <div class="form-group">
		    <label for="phone">Phone Number</label>
		    
		      <input required value="<?php echo set_value('phone'); ?>" name="phone" type="text" class="form-control" id="phone" placeholder="Phone number">
		    
		  </div>
		  <div class="form-group">
		    <label for="email">Contact Email</label>
		    
		      <input name="email" value="<?php echo set_value('email'); ?>"type="email" class="form-control" id="email" placeholder="Email address">
		    
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