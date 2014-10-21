<?php 
	switch($opcion)
		{
			case 1:
			include_once"../Acreditacion/includes/login.php";
			break;
			
			case 2:
			include_once"../Acreditacion/recuperapass.php";
			break;
			
			case 3:
			include_once"../Acreditacion/confirmacion.php";
			break;
			
			
			case 4:
			include_once"../Acreditacion/includes/logea.php";
			break;
			
			default:
			include_once"../Acreditacion/includes/login.php";
			break;
		}

?>