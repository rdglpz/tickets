<?php
	/*crea la conexion a la base de datos.*/
	$hostname = "p:127.0.0.1"; 
	$username = "root";
	$password = "cronos";
	$bdeDatos = "umichccu_sistemaIncidentes"; 
	session_start();
	$consulta_db = new mysqli($hostname, $username, $password,$bdeDatos);
	if ($consulta_db->connect_error) {
	    die("Connection failed: " . $consulta_db->connect_error);
	}
?>