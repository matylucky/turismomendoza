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
			<h1>Registrarse</h1>
		</div>
		<div>
			<form class="w3-container" action="controller_login.php" method="post">
				<p>
					<label class="w3-label">Correo electrónico</label>
					<input class="w3-input w3-border" type="text" name="USU_EMAIL">
				</p>
				<p>
					<label class="w3-label">Contraseña</label>
					<input class="w3-input w3-border" type="password" name="USU_CONTRASEÑA">
				</p>
				<p>
					<label class="w3-label">Nombre y Apellido</label>
					<input class="w3-input w3-border" type="text" name="USU_NOMBRE">
				</p>
				<p>
					<label class="w3-label">Telefono</label>
					<input class="w3-input w3-border" type="text" name="USU_TEL">
				</p>
				<p>
					<label class="w3-label">Nacionalidad</label>
					<input class="w3-input w3-border" type="text" name="USU_NACIONALIDAD">
				</p>
				<p>
					<label class="w3-label">Documento</label>
					<input class="w3-input w3-border" type="text" name="USU_NRO_DOC">
				</p>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
					<button class="w3-btn w3-green">Registrarse</button>
				</p>
				<p><a href="index.php">Ahora no</a></p>
			</form>
		</div>
<footer>
	<div class="w3-container w3-black">
		<h4>TURISMO MENDOZA 2019</h4>
	</div>
</footer>

</body>
</html>
