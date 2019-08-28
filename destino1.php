<!DOCTYPE html>
<html lang="en">
<head>
  <title>Destino 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <!-- <span class="icon-bar"></span>-->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Turismo Mendoza</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <!--<li><a href="#">Reservas</a></li>-->
        <li><a href="#">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
             </button> <a class="navbar-brand navbar-right" href="logeo.php"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>

<h3>Viñedos</h3>
<img src="https://i.ibb.co/RznT9QV/carrousel1.jpg" alt="Image">
  <p>Pase un dia de cata y comida</p>
  
<div class="btn-group">
  <button type="button" class="btn btn-primary">Fecha 1</button>
  <button type="button" class="btn btn-primary">Fecha 2</button>
  <button type="button" class="btn btn-primary">Fecha 3</button>
</div>

<h3>A este destino se sale a las 8 y se vuelve a las 17 los días de semana</h3>
<h3>Los fines de semana se sale a las 7 y se vuelve a las 16</h3>

</body>
</html>
