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
 $mysqli = @new mysqli( 
        "us-cdbr-iron-east-02.cleardb.net",   // El servidor 
        "bdaacf63d00d60",    // El usuario 
         "c1969fe7872181d",          // La contraseña 
         "heroku_06e2145fb0a0577"); // La base de datos 
 
 if($mysqli->connect_error) { 
   echo ’<p>Error al conectar con la base de datos: ’ . $mysqli->connect_error; 
   echo ’</p>’; 
   exit; 
 } 
 
 // Ejecuta una sentencia SQL 
 $sentencia = "SELECT * FROM buses"; 
 if(!($resultado = $mysqli->query($sentencia))) { 
   echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error; 
   echo ’</p>’; 
   exit; 
 } 
 
 echo "<table><tr>"; 
 echo "<th>BUS_ID</th><th>BUS_PATENTE</th><th>BUS_CAPACIDAD</th>"; 
 echo "<th>BUS_ESTADO</th>"; 
 echo "</tr>"; 
 // Recorre el resultado y lo muestra en forma de tabla HTML 
 while($fila = $resultado->fetch_assoc()) { 
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
 $mysqli->close(); 
?> 
</body> 
</html>


