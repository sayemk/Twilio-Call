

	  	<h1>You can change description only</h1>
	  	<div class="col-md-6">
			<?php 
				echo @$error;
				echo form_open('voice/update'); 
			?>
			
		  

		  <div class="form-group">
		    <label for="description">Select a voice file</label>
		    <textarea class="form-control"  rows="5" name="description" id="description">
		    	<?php echo trim($description); ?>
		    </textarea>
		    <p class="help-block">Description of this selected file</p>
		  </div>
		  <input type="hidden" name="id" value="<?php echo $id; ?>">
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <?php echo form_close(); ?>
		</div>

  </div> <!--End of col-md-4-->
 
</div> <!-- End of row -->

</body>
</html>