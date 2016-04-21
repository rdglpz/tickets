function verifica_igual(){
	var clave1 = document.getElementById('pass_id').value;
	var clave2 = document.getElementById('pass_id2').value;
	if (clave1 != clave2){
		alert("Las claves introducidas no son iguales");
		return false;
	}else {
		alert("Contraseña correcta");
		return true;
	}
}