<?php
$hostname = "p:127.0.0.1"; 
$username = "notificacion";
$password = "notificacion";
$bdeDatos = "umichccu_sistemaIncidentes"; 
 
$mysqli = new mysqli($hostname, $username, $password,$bdeDatos);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
?>
