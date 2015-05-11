<h3>Your file was successfully submitted!</h3>
<?php 
	if($error) {
		echo "<h4>But this number was not save. Please try manualy!</h4><p>";
		foreach ($error as $number) {
			echo $number.' ,';
		}
	}
?>
</p>
<p><?php  echo anchor('number/mass_create', 'Upload Another!'); ?></p>