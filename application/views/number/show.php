<h1>Contact List</h1>

	
<div class=" pull-right">
<?php echo form_open('number/index',array('class'=>'form-inline','method'=>'GET')); ?>
  <div class="form-group">
   <label for="group">Select a Group </label>
    <select name="group" class="form-control">
	  <option></option>
	  <?php 
	  		foreach ($groups->result() as $group) {
	   ?>
	  		<option <?php if($selected_group==$group->id) echo "selected"; ?> value="<?php echo $group->id ?>"><?php echo $group->name; ?></option>
	  <?php } ?>
	</select>
    
  </div>
  <button type="submit" class="btn btn-primary">Filter</button>
</form>
<br >
</div>
<table class="table table-bordered">
 <thead>
 	<tr>
 		<th>ID</th>
 		<th>Name</th>
	 	<th>Phone Number</th>
	 	<th>Email</th>
	 	<th>Action</th>
 	</tr>
 </thead>
 <tbody>
 	<?php 
 		foreach ($numbers->result() as  $number) {
 			?>
 			<tr>
 				<td><?php echo $number->id ?></td>
 				<td><?php echo $number->name ?></td>
 				<td><?php echo $number->phone ?></td>
 				<td><?php echo $number->email ?></td>
 				<td>
 					<?php echo anchor('voice/edit/'.$number->id, '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'); ?>
 					&nbsp;
 					<?php echo anchor('voice/delete/'.$number->id, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'); ?>
 				</td>
 				
 			</tr>

 			<?php
 		}
 	 ?>
 </tbody>
</table>
<?php echo $this->pagination->create_links(); ?>
 </div> <!--End of col-md-4-->
 
</div> <!-- End of container -->

</body>
</html>

