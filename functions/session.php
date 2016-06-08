<?php
if(isset($_SESSION['loggedin'])) {
	if(!isset($_SESSION['login_time']) || time() - $_SESSION['login_time'] > 1440) {
		session_unset();
		session_destroy();
		header("location:/");
	}
} else {
	session_unset();
	session_destroy();
	header("location:/");
}