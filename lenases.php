<?php 
 // Conecta con el servidor de MySQL 
 include 'conexion.php';
 $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 
 // Ejecuta una sentencia SQL 
 $consulta = "SELECT * FROM $tbl_name2 WHERE PAQ_ID='Lenas'";
 /*if(!($resultado = $conexion->query($consulta))) { 
   echo "<p>Error al ejecutar la sentencia <b>$consulta</b>: " . $conexion->error; 
   echo ’</p>’; 
   exit; 
 } */
 $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    
 echo "<table borde='2'>";
 echo "<tr>";
 echo "<th>N° reserva</th><th> </th><th>Nombre Pasajaero</th><th> </th><th>DNI</th>"; 
 echo "<th> </th><th>Mail de usuario</th><th> </th><th>Destino</th><th> </th><th>Fecha</th>"; 
 echo "</tr>"; 
 // Recorre el resultado y lo muestra en forma de tabla HTML 
 //while($fila = $resultado->ffetch_array(MYSQLI_ASSOC)) { 
 while ($columna = mysqli_fetch_array( $resultado )) {
   echo "<tr>"; 
   echo "<td>" . $columna["RES_ID"] . "</td>"; 
   echo "<td>" "</td>"; 
   echo "<td>" . $columna["PAS_NOMBRE"] . "</td>"; 
   echo "<td>" "</td>"; 
   echo "<td>" . $columna["PAS_DNI"] . "</td>"; 
   echo "<td>" "</td>";  
   echo "<td>" . $columna["RES_MAIL"] . "</td>"; 
   echo "<td>" "</td>";  
   echo "<td>" . $columna["PAQ_ID"] . "</td>"; 
   echo "<td>" "</td>";  
   echo "<td>" . $columna["PAQ_FECHA"] . "</td>"; 
   echo "</tr>"; 
 } 
 echo "</table>"; 
 
 // Libera la memoria ocupada por el resultado 
 $resultado->close(); 
 // Cierra la conexión 
 $conexion->close(); 
?> 
