// JavaScript Document
function validacorreo(correo)
	{
		//alert('valida correo');
		var regex =  /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		if (correo.value.match(regex) && correo.value != '' )
			{
				if(confirm('Esta correctamente escrito su correo: '+ correo.value))
					{
						window.location('');	
					}
				else
					{
						window.history.back();
					}
				
			}
		else 
			{
				alert('Por favor ingrese un correo valido');
				window.history.back();
				//window.location('../Acreditacion/index.php?opcion=2');
			}
		
	}