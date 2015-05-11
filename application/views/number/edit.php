

	  	<h1>Update This Contact</h1>
	  	<div class="col-md-6">
			<?php 
				echo validation_errors();
				echo form_open('number/update', array('class'=>'form-horizontal')); 

			foreach ($number->result() as $num) {
			?>
		  <div class="form-group">
		   <label for="group">Select a Group </label>
		    <select name="group" class="form-control">
			  <option></option>
			  <?php 
			  		foreach ($groups->result() as $group) {
			   ?>
			  		<option <?php if($num->group_id==$group->id) echo "selected" ?> value="<?php echo $group->id ?>"><?php echo $group->name; ?></option>
			  <?php } ?>
			</select>
		    
		  </div>
			
		  <div class="form-group">
		    <label for="name">Contact Name</label>
		    
		      <input name="name" value="<?php echo $num->name; ?>" type="text" class="form-control" id="name" placeholder="Full Name">
		   
		  </div>

		  <div class="form-group">
		    <label for="phone">Phone Number</label>
		    
		      <input required value="<?php echo $num->phone; ?>" name="phone" type="text" class="form-control" id="phone" placeholder="Phone number">
		    
		  </div>
		  <div class="form-group">
		    <label for="email">Contact Email</label>
		    
		      <input name="email" value="<?php echo $num->email; ?>"type="email" class="form-control" id="email" placeholder="Email address">
		    
		  </div>
			  
		  
		  <div class="form-group">
		    <div class="col-sm-10">
		      <input type="hidden" name="phone_id" value="<?php echo $num->id ?>">
		      <input type="hidden" name="pg_id" value="<?php echo $num->pg_id ?>">
		      <button type="submit" class="btn btn-primary">Update</button>
		    </div>
		  </div>
		  <?php
		  	} //End of foreach loop

		  	echo form_close(); ?>
		</div>

  </div> <!--End of col-md-4-->
 
</div> <!-- End of row -->

</body>
</html>