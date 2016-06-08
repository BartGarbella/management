<?php


require('config.php');


session_start();
unset($_GET);

$loginObject = new Query();

// $password = password_hash("HellFire123", PASSWORD_BCRYPT);

$data = $loginObject->select("users",$_POST);

if($data == true){
	$_SESSION['user'] = $_POST['username'];
	$_SESSION['loggedin'] = true;
	$_SESSION['login_time'] = time();
	header('Location:/backend/index.php');
}elseif($data == false) {
	header('Location:/index.php?loginfailed');

}