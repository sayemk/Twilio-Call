

	  	<h1>Create A New Group</h1>
	  	<div class="col-md-6">
			<?php 
				echo @$error;
				echo form_open('group/save'); 
			?>
			
		  <div class="form-group">
		    <label for="name">Group Name</label>
		    <input required class="form-control" name="name" type="text" id="name" placeholder="Define a name">
		    
		  </div>

		  <div class="form-group">
		    <label for="description">Group Description</label>
		    <textarea class="form-control" rows="5" name="description" placeholder="Specify the group usage" id="description"></textarea>
		    
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <?php echo form_close(); ?>
		</div>

  </div> <!--End of col-md-4-->
 
</div> <!-- End of row -->

</body>
</html>