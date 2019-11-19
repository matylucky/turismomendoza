<?php
    $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
    
	$DES_ID = $_POST['DES_ID'];
	
	//$queryM = "SELECT PAQ_FECHA FROM paquetes WHERE DES_ID = '$DES_ID' ORDER BY PAQ_FECHA";
	$queryM = "SELECT PAQ_FECHA FROM paquetes WHERE DES_ID = '$DES_ID'";	
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar fecha</option>";
	
	//while($rowM = $resultadoM->fetch_assoc())
	while($rowM = mysqli_fetch_array($resultadoM))
	{
        $html.= "<option value='".$rowM['PAQ_FECHAS']."'>".$rowM['PAQ_FECHAS']."</option>";
        
	}
	
	echo $html;
?>
