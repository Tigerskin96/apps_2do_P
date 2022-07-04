<?php
include("config.php");
include("session.php");

$name = $_POST['nombre'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$username = $_POST['username'];
$password = $_POST['password'];

$HOBBIE= ' ';
    if(isset($_POST['hobbie'])){
		$hobbies=implode(',' , $_POST['hobbie']);
    }
    
	echo "Hobbies seleccionados:  " .($hobbies). "<br>";

	$CARRERA= $_POST['CARRERA'];
	echo($CARRERA);
	echo("<br>");

	$COMENTARIOS= $_POST['COMENTARIOS'];

$sql = "INSERT INTO users(nombre, email, sexo, hobbies, carrera, username, password, COMENTARIOS) 
VALUES('$name', '$email', '$sexo','$hobbies', '$CARRERA', '$username', '$password','$COMENTARIOS' )";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("SE AGREGO CON EXITO");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("No se puede insertar usuario");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>