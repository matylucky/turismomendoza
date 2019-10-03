<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
  // Devuelve todas las filas de una consulta a una tabla de una base de datos 
  // en forma de tabla de HTML 
  function sql_dump_result($result) 
  { 
    $line = ''; 
    $head = '';
	
  while($temp = mysql_fetch_assoc($result)) 
  { 
    if(empty($head)) 
    { 
      $keys = array_keys($temp); 
      $head = '<tr><th>' . implode('</th><th>', $keys). '</th></tr>'; 
    }
	
    $line .= '<tr><td>' . implode('</td><td>', $temp). '</td></tr>'; 
  }
  
  return '<table>' . $head . $line . '</table>'; 
}

  // Se conecta al SGBD 
  if(!($iden = mysql_connect("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d"))) 
    die("Error: No se pudo conectar");
    
    
    // Selecciona la base de datos 
  if(!mysql_select_db("heroku_06e2145fb0a0577", $iden))
    die("Error: No existe la base de datos"); 
	
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM buses"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $iden); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

  // Muestra el contenido de la tabla como una tabla HTML	
  echo sql_dump_result($resultado); 
  
  // Libera la memoria del resultado
  mysql_free_result($resultado);

  // Cierra la conexión con la base de datos 
  mysql_close($iden); 
?> 	
</body>
</html>