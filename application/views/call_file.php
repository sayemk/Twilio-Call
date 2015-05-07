

	  	<h1>Choose a voice file to Upload</h1>
		<?php 
			
			echo form_open_multipart('voice/upload'); 
		?>
		
	  <div class="form-group">
	    <label for="file">Select a voice file</label>
	    <input name="file" type="file" id="file">
	    <p class="help-block"><?php echo @$error; ?></p>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	  <?php echo form_close(); ?>

  </div> <!--End of col-md-4-->
 
</div> <!-- End of row -->

</body>
</html>