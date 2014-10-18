<?php
	include_once 'pslconfig.php';
	
	class Connection{
	
		public static $conexion = null;
		//intento de singleton
		
		public static function crearConexion(){
			if(self::$conexion == null){
				self::$conexion = new mysqli(HOST, USER, PASS, DB);
			}
			
			return self::$conexion;
		}
		function __construct(){

			
		}
		
		public static function cerrar(){
			self::$conexion->close();
			self::$conexion = null;
		}
		 
		
	}

	
?>