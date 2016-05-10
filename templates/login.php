<?php 

// $password = password_hash("@Password!01", PASSWORD_BCRYPT);
// var_dump($password);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<script type="text/javascript" src="management/src/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="management/src/js/bootstrap.js"></script>

	<link rel="stylesheet" href="management/src/css/bootstrap.css">
	<link rel="stylesheet" href="management/src/css/style.css">
</head>
<body>
	<div class="container container-login">
		<div class="panel panel-custom panel-login">
			<div class="panel-body">
				<form action="management/functions/checklogin.php" method="POST">
					<div class="form-group form-custom">
						<label for="username">Benutzer</label>
						<input class="form-control" id="username" type="text" name="username" required></input>
					</div>
					<div class="form-group form-custom">
						<label for="password">Passwort</label>
						<input class="form-control" id="password" type="password" name="password" required></input>
					</div>
					<button class="btn btn-custom btn-right" type="submit">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
<script>
	$('input').focus(function(){
		$(this).parent().addClass('labelcolor');
	})
	$('input').on('focusout',function(){
		$(this).parent().removeClass('labelcolor');
	})	
	


</script>

</html>