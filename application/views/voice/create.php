

	  	<h1>Choose a voice file to Upload</h1>
	  	<div class="col-md-6">
			<?php 
				echo @$error;
				echo form_open_multipart('voice/upload'); 
			?>
			
		  <div class="form-group">
		    <label for="userfile">Select a voice file</label>
		    <input class="form-control" name="userfile" type="file" id="userfile">
		    <p class="help-block"> Select a mp3 file to send with call</p>
		  </div>

		  <div class="form-group">
		    <label for="description">Voice file Description</label>
		    <textarea class="form-control" rows="5" name="description" id="description"></textarea>
		    <p class="help-block">Description of this selected file</p>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <?php echo form_close(); ?>
		</div>

  </div> <!--End of col-md-4-->
 
</div> <!-- End of row -->

</body>
</html>