<?php
include("encabezado2.php"); //incluimos el archivo logotipo.php

$query = "SELECT FROM $tbl_name2 (PAS_NOMBRE, PAS_DNI, RES_MAIL) VALUES ('$_POST[username]', '$_POST[dni]', '$_POST[email]')";

/*include("conexion.php");


$link = mysql_connect($server, $db_user, $db_pass) 
or die ("Could not connect to mysql because ".mysql_error()); 

// select the database
mysql_select_db($database) 
or die ("Could not select database because ".mysql_error()); 

$mail2 = $_POST['mail2'];

$match = "Select * FROM $tbl_name2 WHERE RES_EMAIL = '$mail2'";

$qry = mysql_query($match) 
or die ("Could not match data because ".mysql_error()); 
$num_rows = mysql_num_rows($qry); 

if ($num_rows > 0) { 
    
        
    $_SESSION['pasajero'] = $row['PAS_NOMBRE'];
    $_SESSION['mail2'] = $row['RES_EMAIL'];
    $_SESSION['dni2'] = $row['PAS_DNI'];
}
else{
echo "Lo Sentimos no tiene reserva registrada"; 
}
    exit;

} 
ob_end_flush();

*/
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <h3>Reservas</h3>
    <h3>aca se veran las reservas realizadas</h3>
      <p><?php echo  $_SESSION['usuario'];?></p>
    <p><?php echo  $_SESSION['pasajero'];?></p>
    <p><?php echo  $_SESSION['mail2'];?></p>
    <p><?php echo  $_SESSION['dni2'];?></p>

</body>
</html>
