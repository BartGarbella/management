<?php
$error = "<p></p>"; 
if (isset($_GET['loginfailed'])) {
 $error = '<p class="loginfailed">Username or Password not found</p>';
}
// $password = password_hash("@Password!01", PASSWORD_BCRYPT);
// var_dump($password);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	
</head>
<body>
	<div class="container container-login">
		<div class="panel panel-custom panel-login">
			<div class="panel-body">
				<form action="management/functions/checklogin.php" method="POST">
					<div>
						<?= $error ?>
					</div>
					<div class="form-group form-custom">
						<label for="username">Username</label>
						<input class="form-control" id="username" type="text" name="username" tabindex="1" required></input>
						<hr class="login-line">
					</div>
					<div class="form-group form-custom">
						<label for="password">Password</label>
						<input class="form-control" id="password" type="password" name="password" tabindex="2" required></input>
						<hr class="login-line">
					</div>
					<button class="btn btn-custom btn-right" type="submit" tabindex="3">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="management/src/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="management/src/js/bootstrap.js"></script>

	<link rel="stylesheet" href="management/src/css/bootstrap.css">
	<link rel="stylesheet" href="management/src/css/style.css">

<script src="management/src/js/stylefunc.js" type="text/javascript"></script>


</html>