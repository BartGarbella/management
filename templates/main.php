<?php 




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<script type="text/javascript" src="/management/src/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="/management/src/js/bootstrap.js"></script>

	<link rel="stylesheet" href="/management/src/css/bootstrap.css">
	<link rel="stylesheet" href="/management/src/css/style.css">
</head>
<body>
	<div class="container container-login">
		<div class="panel panel-custom panel-login">
			<div class="panel-body">
				
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