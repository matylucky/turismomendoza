<!DOCTYPE html>
<html lang="en">
<head>
  <title>Destino 2</title>
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

<h3>Destino 2</h3>
<img src="https://i.ibb.co/q5QPmT1/carrouse2.jpg" alt="Bird">
<h3>Esto es una prueba de destino 2</h3>

</body>
</html>
