<!DOCTYPE html>
<html>
<head>
	<title>Hermes| Chat and Messenger App</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/loginStyle.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="container">
	<div class="loginbox">
		<img src="upload/logo.png" class="avatar" onclick="location.href='\project\home\home.php';">
		<br> <h1>Welcome To Hermes!</h1>
		<br> <h3>Login Here!</h3>

		<form method="POST" action="login.php">

		<input type="text" name="username" id="userName" placeholder="Enter Username" class="form-control" required>

		<input type="password" name="password" id="pasword" placeholder="Enter Password" class="form-control" required>

	<br>	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
	<input type="button" onclick="location.href='signup.php';" value="Sign up">
		</form>


		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>
