<?php 
 
  $mail = $_SESSION['mail'];
 
 /*print("el usuario es : $mail");
 print("");*/
 // Conecta con el servidor de MySQL 
 /*include 'conexion.php';
 $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}*/



/*BORRAR ESTA

	 $conexion = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");

$destino = $_POST['destino'];
$fecha = $_POST['fecha'];


 // Ejecuta una sentencia SQL 
 //$consulta = "SELECT * FROM $tbl_name2"; 
 $consulta = "SELECT * FROM reserva2 WHERE PAQ_FECHA2='".$_POST['fecha']."' ";
 /*if(!($resultado = $conexion->query($consulta))) { 
   echo "<p>Error al ejecutar la sentencia <b>$consulta</b>: " . $conexion->error; 
   echo ’</p>’; 
   exit; 
 } */
// $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
/*BORRAR ESTA
$resultado = $mysqli->query($consulta);
   
  echo "  <table width="615" border=1 cellpadding="3" cellspacing="0" >"; 
 echo "<tr><td><b>N° Reserva</b></td>"; 
 echo "<td><b>Nombre Pasajero</b></td>"; 
 echo "<td><b>DNI</b></td>"; 
 echo "<td><b>Mail de usuario</b></td>"; 
 echo "<td><b>Destino</b></td>"; 
 echo "<td><b>Fecha</b></td>"; 
 echo "<td><b>Fecha2</b></td>"; 

echo "</tr>  "; 
 //echo "<table border='2' style='background-color:#FFFFFF;border-collapse:separate;border:2px solid #6699FF;color:#000000'>";
 //echo "<tr style='background-color:#4CAF50;color:white'>";
 //echo "<th>N° reserva</th><th>Nombre Pasajaero</th><th>DNI</th>"; 
 //echo "<th>Destino</th><th>Fecha</th><th>Fecha2</th>"; 
 //echo "</tr>"; 
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
   echo "<td>" . $columna["PAQ_FECHA2"] . "</td>"; 
   echo "</tr>"; 
 } 
 echo "</table>"; 
 
 // Libera la memoria ocupada por el resultado 
 $resultado->close(); 
 // Cierra la conexión 
 $conexion->close(); 
 
 BORRAR ESTA*/
ECHO	'alert ("HOLA MUNDO")';

?> 
