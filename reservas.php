<?php
include("encabezado2.php"); //incluimos el archivo logotipo.php

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
