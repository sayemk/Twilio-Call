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

			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Phone Groups <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><?php echo anchor('group/create', 'Add New', null); ?></li>
			            
			            <li class="divider"></li>
			            <li><?php echo anchor('group/', 'View All', null); ?></li>
			            
			          </ul>
			        </li>
			      
			      	<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contacts <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><?php echo anchor('number/create', 'Add New', null); ?></li>
			            <li><?php echo anchor('number/create_mass', 'Upload Contacts', null); ?></li>
			            
			            <li class="divider"></li>
			            <li><?php echo anchor('number/', 'View All', null); ?></li>
			            
			          </ul>
			        </li>
			       
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contacts <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><?php echo anchor('calls/single', 'Single Call', null); ?></li>
			            <li><?php echo anchor('calls/index', 'Group Call', null); ?></li>
			            
			            <!--li class="divider"></li>
			            <li><?php echo anchor('calls/', 'View All', null); ?></li-->
			            
			          </ul>
			        </li>
			    </ul>
			 </div>
		 </div>  
	</nav>
  <div class="col-md-1"></div>
  <div class="col-md-10">