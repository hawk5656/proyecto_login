function formhash(form, password){
	
	
	
	var p = document.createElement("input");
	p.name = "p";
	p.type = "hidden";
	form.appendChild(p);
	p.value = hex_sha512(password.value);
	
	//password.value = "";
	
	
	form.submit();
	
	return true;
}

function regformhash(form, uid, email, password, conf){

	var errores = new Array();
	var error = false;
	
	if(uid.value == '' || email.value == '' || password.value == '' || conf.value == ''){
		errores.push("Hacen falta valores, completar todos los campos");
		error = true;
	}
	
	//usuario
	
	re = /^\w+$/;	
	if(!re.test(form.username.value)){
		errores.push("El nombre de usuario debe contener unicamente letras, numeros y '_'");
		error = true;
	}
	
	if(password.value.length < 6){
		errores.push("La contrasena debe ser de 6 caracteres minimo");
		error = true;
	}
	
	re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
	if(!re.test(form.password.value)){
		errores.push("La contrasena debe tener al menos un digito, una minuscula y una mayuscula");
		error = true;
	}
	
	if(password.value != conf.value){
		errores.push("La contraseña y la confirmacion no coinciden");
		error = true;
	}
	
	if(error){
		var err = document.getElementById('errores');
		if(err == null){
			err = document.createElement('div');
			err.className = "error";
			err.id = "errores";
		}else{
			while(err.firstChild){
				err.removeChild(err.firstChild);
			}
		}
		
		var ul = document.createElement("ul");
		ul.id = "errorList";
		err.appendChild(ul);
		errores.forEach(function(elem){
			var li = document.createElement("li");
			var txt = document.createTextNode(elem);
			li.appendChild(txt);
			ul.appendChild(li);
		});
		form.appendChild(err);
		return false;
	}
	
	var p = document.createElement("input");
	
	
	p.name = "p";
	p.type = "hidden";
	p.value = hex_sha512(password.value);
	console.log(p);
	form.appendChild(p);
	password.value = "";
	console.log("si funciona esta pendejada");
	conf.value = "";
	
	
	form.submit();
	
	return true;
	
}


