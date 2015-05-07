<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<title>ColgShirt</title>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse">
		 <div class="container-fluid">
		 	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav">
			    	 <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Voice File <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><?php echo anchor('voice/create', 'Add New', null); ?></li>
			            
			            <li class="divider"></li>
			            <li><?php echo anchor('voice/', 'View All', null); ?></li>
			            
			          </ul>
			        </li>
			        <li><a href="#">Call Groups</a></li>
			        <li><a href="#">Phone Numbers</a></li>
			        <li><a href="#">Make Call</a></li>
			    </ul>
			 </div>
		 </div>  
	</nav>
  <div class="col-md-1"></div>
  <div class="col-md-10">