<h1>Group List</h1>

	<?php echo anchor('group/create', 'Add New', array('class'=>'btn btn-info btn-lg pull-right'));; ?>


<table class="table table-bordered">
 <thead>
 	<tr>
 		<th>ID</th>
 		<th>Name</th>
	 	<th>Description</th>
	 	<th>Action</th>
 	</tr>
 </thead>
 <tbody>
 	<?php 
 		foreach ($groups->result() as  $group) {
 			?>
 			<tr>
 				<td><?php echo $group->id ?></td>
 				<td><?php echo $group->name ?></td>
 				<td><?php echo $group->description ?></td>
 				<td>
 					<?php echo anchor('group/edit/'.$group->id, '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'); ?>
 					&nbsp;
 					<?php echo anchor('group/delete/'.$group->id, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'); ?>
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