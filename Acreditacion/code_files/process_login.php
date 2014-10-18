<?php
	include_once 'db_connect.php';
	include_once 'functions.php';
	
	sec_session_start();
	var_dump($_POST);
	if(isset($_POST['email'], $_POST['p'])){
		$email = $_POST['email'];
		$password = $_POST['p']; //la contra hasheada
		
		if(login($email, $password, $mysqli)){
			header('Location: ../index.php');
		} else{
			header('Location: ../index.php?error=1');
		}
		
	}else{
		echo "invalido";
	}
	

?>