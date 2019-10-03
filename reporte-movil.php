<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>
<?php 
 // Conecta con el servidor de MySQL 
 include 'conexion.php';
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 
 // Ejecuta una sentencia SQL 
 $consulta = "SELECT * FROM $tbl_buses"; 
 /*if(!($resultado = $conexion->query($consulta))) { 
   echo "<p>Error al ejecutar la sentencia <b>$consulta</b>: " . $conexion->error; 
   echo ’</p>’; 
   exit; 
 } */
 $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    
 echo "<table><tr>"; 
 echo "<th>BUS_ID</th><th>BUS_PATENTE</th><th>BUS_CAPACIDAD</th>"; 
 echo "<th>BUS_ESTADO</th>"; 
 echo "</tr>"; 
 // Recorre el resultado y lo muestra en forma de tabla HTML 
 //while($fila = $resultado->ffetch_array(MYSQLI_ASSOC)) { 
 while ($columna = mysqli_fetch_array( $resultado )) {
   echo "<tr>"; 
   echo "<td>" . $fila["BUS_ID"] . "</td>"; 
   echo "<td>" . $fila["BUS_PATENTE"] . "</td>"; 
   echo "<td>" . $fila["BUS_CAPACIDAD"] . "</td>"; 
   echo "<td>" . $fila["BUS_ESTADO"] . "</td>"; 
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


