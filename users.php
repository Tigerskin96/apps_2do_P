<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM users WHERE nombre LIKE '%".$valueToSearh."%' OR email LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT * FROM users";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
</head>
<body>
<header>
    <div>
    	<h1>Usuarios</h1>
	</div>
</header>
	<div class="icon-bar">
		<a href="home.php"><i class="fa fa-home"></i></a> 
		<a class="active" href="users.php"><i class="fa fa-user"></i></a> 
		<a href="registration.php"><i class="fa fa-registered"></i></a>
		<a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
		<a href="logout.php"><i class="fa fa-power-off"></i></a> 
	</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main>
<div class="container">
	<form action="" method="POST">
	<input type="search" name="valueToSearh" placeholder="Búsqueda">
	<button type="submit" class="signupbtn" name="search" >Buscar</button>
	</form>
<br><br>
<?php
echo "<table border='1'>
<tr>
<th>Nombre</th>
<th>Email</th>
<th>genero</th>
<th>Hobbies</th>
<th>Carrera</th>
<th>comentarios</th>
<th>nombre usuario</th>
<th>contraseña</th>
<th>Actualizar</th>
<th>Eliminar</th>
<th>Imprimir</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nombre'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['sexo'] . "</td>";
echo "<td>" . $row['hobbies'] . "</td>";
echo "<td>" . $row['carrera'] . "</td>";
echo "<td>" . $row['comentarios'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td><a href='edit.php?id=".$row['username']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete.php?id=".$row['username']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "<td><a href='print.php?id=".$row['username']."'><img src='./images/icons8-Print-32.png' alt='Print'></a></td>";
echo "</tr>";
}
echo "</table>";
?>
</main>
<footer>
<div>
		<section>
			<address>Cdmx, México</address>
			<small>&copy; Derechos Reservados 2022 David Diaz Pachuca//Tigerskin </small>
		</section>
    </div>
</footer>



</body>
</html> 