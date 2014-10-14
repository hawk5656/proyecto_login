<?php 
	class SubidorArchivo
	{
			
		const DIRECTORIO = '/img/';
		const MAX_FILE_SIZE = 300000;
		public $destino = null;
		//verifica y mueve el archivo($arch) a la direccion /fotos del proyecto
		function sube($name, $nombreDestino){
			$arch = new Archivo();
			$pass = true;
			$imagenes = array('jpg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif',);
			try{
				
				if(is_array($_FILES[$name]['error'])){
					throw new RuntimeException("Parametraje incorrecto");
				}
				
				if(!isset($_FILES[$name]['error'])){
					throw new RuntimeException("Carga de archivo incorrecta");
				}
				
				switch($_FILES[$name]['error']){
					case UPLOAD_ERR_OK://todo bien
						break;
					case UPLOAD_ERR_NO_FILE:
						throw new RuntimeException("No se mando un archvio");
					case UPLOAD_ERR_INI_SIZE: case UPLOAD_ERR_FORM_SIZE:
						throw new RuntimeException("Muy grande");
					default:
						throw new RuntimeException("Hay mas errores");
				}
				
				if($_FILES[$name]['size'] > self::MAX_FILE_SIZE){
					throw new RuntimeException("Muy grande");
				}
				
				$finfo = new finfo(FILEINFO_MIME_TYPE);
				
				//validar el MIME con finfo
				if(false === $ext = array_search($finfo->file($_FILES[$name]['tmp_name']), $imagenes, true)){
					throw new RuntimeException('Archivo de formato invalido');
				}
				
				//y volverlo a validar con EXIF
				
				if(!exif_imagetype($_FILES[$name]['tmp_name'])){
					throw new RuntimeException('Archivo de formate invalido');
				}
				
				//obtener el nombre de los datos binarios
				echo $_FILES[$name]['tmp_name'];
				//$dest = sprintf('./img/%s.%s', sha1_file($_FILES[$name]['tmp_name']), $ext);
				$dest = sprintf('./img/%s.%s', $nombreDestino, $ext);
				$this->destino = $dest;
				if(!move_uploaded_file($_FILES[$name]['tmp_name'], $dest )){
					throw new RuntimeException("No se pudo mover el temporal");					
				}
				
				return true;
				
			}catch(RuntimeException $e){
				echo $e->getMessage();	
				$pass = false;
			}
			
			
		}
	}
	
	class Archivo{
		public $ext;
		public $size;
		public $name;
		public $dir;
	}

?>