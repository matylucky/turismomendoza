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
		
	<script language="javascript">
	    $(document).ready(function(){
		$("#paquete").change(function () {
		    //$('#fechas').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		    $("#paquete option:selected").each(function () {
			DES_ID = $(this).val();
			$.post("getfechas.php", { DES_ID: DES_ID }, function(data){
			    $("#fechas").html(data);
			});            
		    });
		})
	    });
	</script> 
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
        <li><a href="#">Moviles</a></li>
        <li class="active"><a href="viajes.php">Reservas</a></li>
      </ul>
             </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>


 <div class="container">
        <div class="jumbotron">
            <h1>Listado de reservas</h1>
       <font color="blue"> <b> <?php include('viajeses.php');?></b></font>
         
        </div>
    </div>
  <font color="blue"> <b> <?php echo $columna["PAS_NOMBRE"];?></b></font>

    
    <a href="admin.php" class="btn btn-info btn-lg" role="button">Volver</a>
 
 <h2>Seleccione destino y fecha a reservar</h2>	
   <form class="form-horizontal" action="#" method="get">

  <div class="form-group">
      <label class="control-label col-sm-2" for="Paquete">Paquete</label>
        <div class="col-sm-10">
      <select class="form-control" id="paquete" name="paquete">
        <option>Seleccionar...</option>

          <?php
            $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
            $query = $mysqli -> query ("SELECT DISTINCT PAQ_ID FROM reserva2");
            while ($valores = mysqli_fetch_array($query)) {
               echo '<option value="'.$valores[PAQ_ID].'">'.$valores[PAQ_ID].'</option>';
            }
          ?>
      </select> 
          </div>
    </div>
 
 
	 <div class="form-group">
    <label class="control-label col-sm-2" for="fechas">Fechas</label>
             <div class="col-sm-10">
           <select class="form-control" id="fechas" name="fechas">
        <!--<option>Seleccionar...</option>
               <option value="Fecha1">Fecha 1</option>
        <option value="Fecha2">Fecha 2</option>-->

        </select>
               </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">realizar busqueda</button>
        <!--<button type="button" class="btn btn-default" onclick="location.href=#">Agregar otro pasajero</button>-->
      </div>
    </div>	
 <?php 
 // Conecta con el servidor de MySQL 
 include 'conexion.php';
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
 } */
 $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  
 echo "<table borde='2'>";
 echo "<tr>";
 echo "<th>RES_ID</th><th>PAS_NOMBRE</th><th>PAS_DNI</th>"; 
 echo "<th>RES_MAIL</th><th>PAQ_ID</th><th>PAQ_FECHA</th>"; 
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
 $conexion->close(); 
?> 
    
</body> 
</html>
