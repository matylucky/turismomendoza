<?php 
 // Conecta con el servidor de MySQL 
 include 'conexion.php';
 $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 
 // Ejecuta una sentencia SQL 
 $consulta = "SELECT * FROM $tbl_destinos"; 
 /*if(!($resultado = $conexion->query($consulta))) { 
   echo "<p>Error al ejecutar la sentencia <b>$consulta</b>: " . $conexion->error; 
   echo ’</p>’; 
   exit; 
 } */
 $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    
 echo "<table border='2' style='background-color:#FFFFFF;border-collapse:separate;border:2px solid #6699FF;color:#000000'>";
 echo "<tr style='background-color:#4CAF50;color:white'>";
 echo "<th>Nombre del destino</th><th>Descripcion del destino</th><th>Estado del destino</th><th>Foto del destino</th>"; 
 echo "</tr>"; 
 // Recorre el resultado y lo muestra en forma de tabla HTML 
 //while($fila = $resultado->ffetch_array(MYSQLI_ASSOC)) { 
 while ($columna = mysqli_fetch_array( $resultado )) {
   echo "<tr>"; 
   echo "<td>" . $columna["DES_NOMBRE"] . "</td>"; 
   echo "<td>" . $columna["DES_DESCRIPCION"] . "</td>"; 
   //echo "<td>" . $columna["DES_ESTADO"] . "</td>"; 
   if ($columna["DES_ESTADO"] == 1 ){ echo "<td>". $columna["DES_HAB"] ."</td>";}
     elseif ($columna["DES_ESTADO"] != 1) { echo "<td>". $columna["DES_NOH"] . "</td>";} 
  echo "<td><img src='" . $columna["DES_FOTO"]  . "' width="150" height="75" /></td>"; 
  echo "</tr>"; 
 } 
 echo "</table>"; 
 
 // Libera la memoria ocupada por el resultado 
 $resultado->close(); 
 // Cierra la conexión 
 $conexion->close(); 
?> 
