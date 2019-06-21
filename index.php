﻿<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<header>
	<div class="w3-container w3-teal w3-center">
		<h1>BIENVENIDO A TURISMO MENDOZA</h1>
	</div>
</header>

	
	<div class="w3-container w3-green">
		<h2>Login</h2>
	</div>

	<form class="w3-container" action="login.php" method="post">
		<p>
			<label class="w3-label">
				Usuario (dirección de correo)
			</label>
			<input class="w3-input w3-border " type="text" name="usuario">
		</p>
		<p>
			<label class="w3-label">Contraseña</label>
			<input class="w3-input w3-border" type="password" name="pas">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-green">Aceptar</button>
		</p>
		<p>Si aún no tenés cuenta clickeá el siguiente link <a href="registrarse.php">Registrarse</a></p>
	</form>
<footer>
	<div class="w3-container w3-black">
		<h4>Turismo Mendoza 2019</h4>
	</div>
</footer>
</body>
</html>
