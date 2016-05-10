<?php

require('config.php');


session_start();


$loginObject = new Query();

// $password = password_hash("HellFire123", PASSWORD_BCRYPT);

$data = $loginObject->select("user",$_POST);

if($data){
	$_SESSION['user'] = $_POST['username'];
	$_SESSION['loggedin'] = true;
	header('Location:/backend/index.php');
}