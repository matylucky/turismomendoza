<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 
 
 
} else {
   echo "Inicia Sesion para acceder a este contenido.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
   header('Location: https://turismomendoza.herokuapp.com/login.html');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
exit;
}
//$usuarios = $_POST['usuarios'];
 
$now = time();
if($now > $_SESSION['expire']) {
session_destroy();
header('Location: https://turismomendoza.herokuapp.com/login.html');//redirige a la página de login, modifica la url a tu conveniencia
echo "Tu sesion a expirado,
<a href='login.html'>Inicia Sesion</a>";
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de reservas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script language="javascript" src="js/jquery-3.1.1.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
        <span class="icon-bar"></span>                        
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> <p><?php echo  $_SESSION['usuario'];?></p> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="admin.php">Inicio</a></li>
        <li><a href="movil.php">Moviles</a></li>
        <li class="active"><a href="viajes.php">Reservas</a></li>
        <li><a href="destinos.php">Destinos</a></li>
        <li><a href="paquetes.php">Paquetes</a></li>

      </ul>
             </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>






<!-- Panel para filtro Jquery -->
<table width="615" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><strong>Destino</strong></td>
<td><strong>Fecha</strong></td>
<td><strong>Cliente</strong></td>
</tr>
<tr>
<td>
	 <select name="destino"> //vehiculo
	 <option>Seleccionar</option>

	 </select>
</td>
<td>
	 <select name="fecha"> //marca
	 <option>Seleccionar</option>
	 </select>
</td>
<td>
	 <select name="cliente"> //modelo
	 <option>Seleccionar</option>
	 </select>
</td>
</tr>
</table>

<div id=”listado”>
<table width="615" border=1 cellpadding="3" cellspacing="0" >
<tr><td><b>N° Reserva</b></td>
<td><b>Nombre Pasajero</b></td>
<td><b>DNI</b></td>
<td><b>Mail de usuario</b></td>
<td><b>Destino</b></td>
<td><b>Fecha</b></td>
<td><b>Fecha2</b></td>
<td colspan="2">
<div align="center">
<b>Acciones</b>
</div></td>
</tr>
 <?php 
include 'conexion.php';
 $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $sql = "SELECT * FROM $tbl_name2";
$consulta = mysqli_query($sql); ?>
 
<? while($fila = mysqli_fetch_array($consulta)){
foreach($fila AS $key => $value) { $fila[$key] = stripslashes($value); } ?>
 
<tr>
<td><? echo $fila['RES_ID'] ?></td>
<td><? echo $fila['PAS_NOMBRE'] ?></td>
<td><? echo $fila['PAS_DNI'] ?></td>
<td><? echo $fila['RES_MAIL'] ?></td>
<td><? echo $fila['PAQ_ID'] ?></td>
<td><? echo $fila['PAQ_FECHA'] ?></td>
<td><? echo $fila['PAQ_FECHA2'] ?></td>
//<td><img src="imagenes/<? echo $fila['foto1'] ?>" width="150" height="75" /></td>
//<td width="103"><div align="center"><a href=edit.php?id=<? echo $fila['id'] ?>>Modificar</a></div></td>
</tr>
<? } ?>
</table>
</div>
<br />

 $resultado->close(); 
 // Cierra la conexión 
 $conexion->close(); 
?> 


    
</body> 
</html>
