<?php
	session_start();
	$hostname = "p:127.0.0.1"; 
	$username = "root";
	$password = "cronos";
	$bdeDatos = "umichccu_sistemaincidentes";
	$mysqli = new mysqli($hostname, $username, $password,$bdeDatos);
	if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	} 

	$usr=$_POST["inputUsuario"];
	$psw=$_POST["inputPassword"];
	$query="select * from usuarios where idusuarios="."'$usr'"."and contrasena="."'$psw'";
	$result = mysqli_query($mysqli, $query);

	if (!$result) {
		echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
	}

	if ($fila = $result->fetch_assoc()) {

		if (count($fila)==0){
			header('Location: ../login.php');
		}else{
				echo "Usuario Valido, redireccionar...";
				$_SESSION['mysqli'] = $mysqli;
				$_SESSION['id'] = $fila['idusuarios'];
				$_SESSION['mysqli'] = $mysqli;
				$query = "SELECT TABLE_NAME FROM information_schema.tables WHERE table_schema='umichccu_sistemaincidentes'";
				$query = "describe dependencias";
				header('Location: ../index.php');
			}
	}else{
		header('Location: ../login.php');
		$_SESSION['flag']='1'; 
	}
?>
