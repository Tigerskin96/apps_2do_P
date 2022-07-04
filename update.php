<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE users SET nombre='$nombre', email='$email', sexo='$sexo',username='$username', password='$password' 
WHERE username='$id'";

if(mysqli_query($mysqli, $sql)){
	echo "SE HA ACTUALIZADO TU INFORMACION";
}else {
	echo "ERROR";
}



?>