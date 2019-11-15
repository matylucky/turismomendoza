<?php
include 'conexion.php';
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 
$query = "INSERT INTO $tbl_paquetes (DES_ID, PAQ_FECHA, PAQ_PRECIO, BUS_ID) VALUES ('$_POST[destino]', '$_POST[fecha]', '$_POST[precio]', '$_POST[bus]')";
 if ($conexion->query($query) === TRUE) {
 
 echo "<h3>" . "Se realizo el alta del paquete: " . $_SESSION['usuario'] . "</h3>" . "\n\n";
 echo "<h3>" .  "<a href='admin.php'>Inicio</a>" . "</h3>"; 
 
 }
 else {
 echo "Error al crear un movil." . $query . "<br>" . $conexion->error; 
   }

 mysqli_close($conexion);
?>
