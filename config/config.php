<?php 


function autoloader($class) {
	include 'functions/classes/'. $class . '.class.php';
}


spl_autoload_register('autoloader');
