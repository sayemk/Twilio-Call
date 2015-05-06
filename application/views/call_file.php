<!DOCTYPE html>
<html>
<head>
	<title>ColgShirt</title>
</head>
<body>
<h1>Choose a voice file to call</h1>
<?php 
	echo @$error;
	print_r(@$data);
 
	echo form_open_multipart('twilio_call/makeCall'); 
	echo form_upload(['name'=>'userfile','required'=>'required']);
	echo "<br><br>";
	echo form_submit(['name'=>'submit', 'value'=>'Submit']);
	echo form_close();

?>
</body>
</html>