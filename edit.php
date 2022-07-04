<?php
	include("session.php");
	include("config.php");
	$id = $_GET['id'];
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
		<h1> actualizar</h1>
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
<form id="rForm" action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='id' value='{$row['username']}' required>";
    	echo"<input type='text' placeholder='Nombre' name='nombre' value='{$row['nombre']}' required>";
    	echo"<input type='text' placeholder='Email' name='email' value='{$row['email']}' required>";
	echo"<input type='text' placeholder='Sexo' name='sexo' value='{$row['sexo']}' required>";
 	echo"<input type='text' placeholder='Usuario' name='username' value='{$row['username']}' required>";
    	echo"<input type='password' placeholder='Nueva Contraseña' name='password' value='{$row['password']}' required>";
    	echo"<div class='clearfix'>";
    	echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>
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

