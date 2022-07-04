<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM users WHERE username='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Se elimino correctamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("No se pudo eliminar");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>