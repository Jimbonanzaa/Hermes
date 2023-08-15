<!DOCTYPE html>
<html>
<head>
	<title>Hermes| Chat and Messenger App</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/registerStyle.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<div class="signup-form">
		<h1><center><span class="glyphicon glyphicon-user"></span> Sign Up</center></h1>
		
		<form method="POST" action="register.php">
		<input type="text" name="name" class="txtb" placeholder="Enter your Full Name" required>

		<input type="text" name="username" class="txtb" placeholder="Create a Username" required>

		<input type="password" name="password" class="txtb" placeholder="Create a Password" required>

		<button type="submit" class="signup-btn"><span class="glyphicon glyphicon-save"></span> Sign Up</button> <a href="index.php"> Back to Login</a>
		</form>

		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>
