<?php
include 'conexion.php';
 
 /*$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}*/

             $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");

$query2 = $mysqli -> query ("SELECT * FROM destinos WHERE DES_NOMBRE='$_POST[des]'");
          while ($valores = mysqli_fetch_array($query2)) {
             if($valores[DES_ESTADO] == 1 ){
                 $query = "UPDATE destinos SET DES_ESTADO= 0 WHERE DES_NOMBRE='$_POST[des]'";
                 if ($mysqli->query($query) === TRUE) {

                 echo "<h3>" . "Se realizo la deshabilitación del destino: " . $_SESSION['usuario'] . "</h3>" . "\n\n";
                 echo "<h3>" .  "<a href='destinos.php'>volver</a>" . "</h3>"; 

                 }
                 }
                     else {

                     else{$query = "UPDATE destinos SET DES_ESTADO= 1 WHERE DES_NOMBRE='$_POST[des]'";
                     if ($mysqli->query($query) === TRUE) {

                     echo "<h3>" . "Se realizo la habilitación del destino: " . $_SESSION['usuario'] . "</h3>" . "\n\n";
                     echo "<h3>" .  "<a href='destinos.php'>volver</a>" . "</h3>"; 

                     }
                     else {
                     echo "Error al habilitar un destino." . $query . "<br>" . $conexion->error; 
                       }
                       }
  }
 mysqli_close($conexion);
?>
