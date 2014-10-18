<?php 
	include_once 'code_files/db_connect.php';
	include_once 'code_files/functions.php';
	
	sec_session_start();
	//viejo codigo de sesiones
	/*if(session_id() == '' || !isset($_SESSION)) {
    	// empezar session
    	session_start();
		$_SESSION["unlogged"] = true;
	}
	
	if($_SESSION["unlogged"]){
		$str = "<nav><a href='login.php'>Login</a> <a href='registrar.php'>Registrarse</a></nav>";	
	}else{
		//datos de la sesion en el header
	}
	
	echo $str;*/
	
	if(login_check($mysqli) == true){
		$logged = true;
		include 'bienvenido.php';
	} else{
		include 'login.php';
	}
?>
