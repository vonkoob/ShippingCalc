<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
	content="Shipping Calculator built in PHP, using MySQLi, AJAX, and jQuery">
<meta name="author" content="Matt Koob">

<title>Too Calculated</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
<!-- Custom styles for this template -->
<link href="stylesheet.css" rel="stylesheet">

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"
	type="text/javascript"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"
	type="text/javascript"></script>
<script
	src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"
	type="text/javascript"></script>
<script type='text/javascript' src='script.js'></script>

</head>

<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
					<li role="presentation"><a href="index.html">Home</a></li>
					<li role="presentation"><a href="about.html">About</a></li>
					<li role="presentation" class="active"><a href="data.php">Data</a></li>
					<li role="presentation"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<h3 class="text-muted">Too Calculated - Data</h3>
		</div>
		
		<div class="jumbotron" id="jumbo1">
			<!-- <h1 id="jumbotronhead">Please Create the Database</h1>
			<p class="lead">Press below to create and populate the database
				with the information.</p> -->
			<h2 id="jumbotronhead">The database values are as below:</h2>
			
			<div class="datatable">
			<?php include 'datatable.php'; ?>
			</div>
			
			<!-- <p class="lead">Press the button below if there are no values in the table above.</p>
			<p class="btn btn-sm btn-success" id="dbcreation" role="button">CREATE</p> -->
		</div>
		<footer class="footer"></footer>
	</div>
</body>
</html>