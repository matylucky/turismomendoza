<?php
include 'conexion.php';
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 
//$query = "INSERT INTO $tbl_paquetes (PAQ_ESTADO) VALUES (1)";
$query = "UPDATE $tbl_paquetes SET PAQ_ESTADO='0' WHERE PAQ_ID='$_POST[nohabilita]'";
 if ($conexion->query($query) === TRUE) {
 
 echo "<h3>" . "Se realizo la deshabilitación del paquete: " . $_SESSION['usuario'] . "</h3>" . "\n\n";
 echo "<h3>" .  "<a href='paquetes.php'>Inicio</a>" . "</h3>"; 
 
 }
 else {
 echo "Error al crear una habiltiación." . $query . "<br>" . $conexion->error; 
   }
 mysqli_close($conexion);
?>
