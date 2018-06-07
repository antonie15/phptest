<?php

if(isset($_GET['email'])){
	
	$email = $_GET['email'];
	$password = $_GET['password'];
	
	echo "email is $email and password is $password";
	echo "some other shit";
}


?>