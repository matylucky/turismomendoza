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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
      </button>
      <a class="navbar-brand" href="#"> <p><?php echo  $_SESSION['usuario'];?></p> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="admin.php">Inicio</a></li>
        <li><a href="movil.php">Moviles</a></li>
        <li class="active"><a href="#">Reservas</a></li>
      </ul>
             </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>
 
 <div class="w3-container w3-teal">
  <h2>Listado de reservas</h2>	
</div>  
 
<div class="container" id=gral>
        <div class="jumbotron">
       <font color="blue"> <b> <?php include('viajeses.php');?></b></font>
         
        </div>
  
              <a href="admin.php" class="btn btn-info btn-lg" role="button">Volver</a>
    <a href="lenas.php" class="btn btn-info btn-lg" role="button">Reservas de Las Leñas</a>
    <a href="vinedos.php" class="btn btn-info btn-lg" role="button">Reservas de Viñedos</a>
  <!--  <a href="viajes2.php" class="btn btn-info btn-lg" role="button">Prueba</a> -->
    </div>

<?php 
 // Conecta con el servidor de MySQL 
 /*include 'conexion.php';
 $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 
 // Ejecuta una sentencia SQL 
 $consulta = "SELECT * FROM $tbl_name2"; 
 /*if(!($resultado = $conexion->query($consulta))) { 
   echo "<p>Error al ejecutar la sentencia <b>$consulta</b>: " . $conexion->error; 
   echo ’</p>’; 
   exit; 
 } 
 $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    
 echo "<table border='2' style='background-color:#FFFFFF;border-collapse:separate;border:2px solid #6699FF;color:#000000'>";
 echo "<tr style='background-color:#4CAF50;color:white'>";
 echo "<th>N° reserva</th><th>Nombre Pasajaero</th><th>DNI</th>"; 
 echo "<th>Mail de usuario</th><th>Destino</th><th>Fecha</th>"; 
 echo "</tr>"; 
 // Recorre el resultado y lo muestra en forma de tabla HTML 
 //while($fila = $resultado->ffetch_array(MYSQLI_ASSOC)) { 
 while ($columna = mysqli_fetch_array( $resultado )) {
   echo "<tr>"; 
   echo "<td>" . $columna["RES_ID"] . "</td>"; 
   echo "<td>" . $columna["PAS_NOMBRE"] . "</td>"; 
   echo "<td>" . $columna["PAS_DNI"] . "</td>"; 
   echo "<td>" . $columna["RES_MAIL"] . "</td>"; 
   echo "<td>" . $columna["PAQ_ID"] . "</td>"; 
   echo "<td>" . $columna["PAQ_FECHA"] . "</td>"; 
   echo "</tr>"; 
 } 
 echo "</table>"; 
 
 // Libera la memoria ocupada por el resultado 
 $resultado->close(); 
 // Cierra la conexión 
 $conexion->close(); */
?> 
    
    
 <!--   <a href="admin.php" class="btn btn-info btn-lg" role="button">Volver</a>
    <a href="lenas.php" class="btn btn-info btn-lg" role="button">Reservas de Las Leñas</a>
    <a href="vinedos.php" class="btn btn-info btn-lg" role="button">Reservas de Viñedos</a>
    <a href="viajes2.php" class="btn btn-info btn-lg" role="button">Prueba</a> -->
</body> 
</html>
