<?php
    $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
    
	$DES_ID = $_POST['DES_ID'];
	
	//$queryM = "SELECT PAQ_FECHA FROM paquetes WHERE DES_ID = '$DES_ID' ORDER BY PAQ_FECHA";
	$queryM = "SELECT PAQ_FECHA,PAQ_ESTADO FROM paquetes WHERE DES_ID = '$DES_ID' ORDER BY PAQ_FECHA";	
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option>Seleccionar fecha</option>";
	
	//while($rowM = $resultadoM->fetch_assoc())
	while($rowM = mysqli_fetch_array($resultadoM))
	{
	 if($rowM[PAQ_ESTADO] == 1 ){
		//$html.= '<option value="'.$rowM[PAQ_FECHAS].'">'.$rowM[PAQ_FECHAS].'</option>";
		$html.= "<option value='".$rowM[PAQ_FECHA]."'>".$rowM[PAQ_FECHA]."</option>";
	 	//echo '<option value="'.$rowM[PAQ_FECHAS].'">'.$rowM[PAQ_FECHAS].'</option>';
	 }
	}
	
	echo $html;
?>
