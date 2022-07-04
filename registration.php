<?php
	include("session.php");
?>
<!DOCTYPE html>
<html lang="es">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
</head>
<body>
	<header>
    <div>
		<h1>Registrarse</h1>
	</div>
	</header>
<div class="icon-bar">
	<a href="home.php"><i class="fa fa-home"></i></a> 
	<a href="users.php"><i class="fa fa-user"></i></a> 
	<a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
	<a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
	<a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<main>
	<form id="rForm" action="register.php" method="POST">
	<div class="container1">
	<input type="text" placeholder="Nombre" name="nombre" required>
        <input type="text" placeholder="Email" name="email" required>
        <br><br>
        <B>GENERO </B> <br>
        <INPUT TYPE="radio" value ="Hombre" name="sexo" id="Hombre" > 
        <LABEL >Hombre</label>
        <INPUT TYPE="radio" value ="Mujer" name="sexo" id="Mujer" > 
        <LABEL >Mujer</label>
        <INPUT TYPE="radio" value="OTRO" name="sexo" id="OTRO" > 
        <LABEL >Otro</label> <br> <br>      

        <B>HOBBIES </B><br>
        <input type="checkbox" id="MUSICA" name="hobbie[]" value="musica">
    	<label > MUSICA </label>
        <input type="checkbox" id="Deporte" name="hobbie[]" value="deporte">
        <label > DEPORTES </label>
        <input type="checkbox" id="TECNOLOGIA" name="hobbie[]" value="Tecnologia">
        <label > TECNO  </label>
        <input type="checkbox" id="COKTAIL" name="hobbie[]" value="Coktail">
        <label > COKTAIL </label>
        <input type="checkbox" id="Danza Ex" name="hobbie[]" value="Danza Ex">
        <label > DANZA EXOTICA </label> <br><br>
        
        <label for="CARRERA"><B>CARRERA </B> </label>
        <select name="CARRERA" id="CARRERA">
            <option value="empty"></option>
            <option value="INFORMATICA">Informatica</option>
            <option value="CONTABILIDAD">Contabilidad</option>
            <option value="TEC. AMBIENTAL ">Tec. Ambiental</option>
            </select><br><br>

        <input type="text" placeholder="Usuario" name="username" required>

        <input type="password" placeholder="Nueva Contraseña" name="password" required>
        
        <label for="COMENTARIOS"><B>COMENTARIOS:</B></label>
        <textarea id="COMENTARIOS" name="COMENTARIOS" rows="3" cols="50"></textarea> <br><br>  

        <label for="myfile"><B>Archivo </B></label>
        <input type="file" id="myfile" name="myfile">   
        
	<div class="clearfix">
    <button type="submit" class="signupbtn">Registrarse</button>
	<button type="reset" class="cancelbtn">Cancelar</button>
    </div>
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