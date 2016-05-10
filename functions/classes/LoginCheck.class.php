<?php

class LoginCheck {

	public function __construct() {
		var_dump(func_get_args());
	}

	public function validate($data,$user,$password) {
		$validpwd = password_verify($password,$data['password']);
		if($user = $data['username'] && $validpwd == true) {
			return true;
		}else{
			return false;
		}
	}
}