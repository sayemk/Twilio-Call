<h1>Voice File List</h1>

	<?php echo anchor('voice/create', 'Add New', array('class'=>'btn btn-info btn-lg pull-right'));; ?>


<table class="table table-bordered">
 <thead>
 	<tr>
 		<th>Name</th>
	 	<th>Location</th>
	 	<th>Description</th>
	 	<th>Action</th>
 	</tr>
 </thead>
 <tbody>
 	<?php 
 		foreach ($files->result() as  $file) {
 			?>
 			<tr>
 				<td><?php echo $file->name ?></td>
 				<td><?php echo $file->location ?></td>
 				<td><?php echo $file->description ?></td>
 				<td>
 					<?php echo anchor('voice/edit/'.$file->id, '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'); ?>
 					&nbsp;
 					<?php echo anchor('voice/delete/'.$file->id, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'); ?>
 				</td>
 				
 			</tr>

 			<?php
 		}
 	 ?>
 </tbody>
</table>

 </div> <!--End of col-md-4-->
 
</div> <!-- End of container -->

</body>
</html>