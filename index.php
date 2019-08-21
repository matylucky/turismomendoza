<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bienvenidos a Turismo Mendoza</title>
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
        <li class="active"><a href="#">Inicio</a></li>
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://i.ibb.co/RznT9QV/carrousel1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Viñedos</h3>
          <p>Pase un dia de cata y comida</p>
        </div>      
      </div>

     <!-- <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>-->
  
        <div class="item">
        <img src="https://i.ibb.co/q5QPmT1/carrouse2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Las Leñas</h3>
          <p>Maravillosa escapada de sky o snowboard</p>
          <p>Ideal para hacer en pareja o con amigos</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Bienvenidos a Turismo Mendoza!</h3><br>
  <div class="row">
    <div class="col-sm-4">
        <a href="servicios.php"><img src="https://i.ibb.co/RQL4C6H/Bus-Mercedes-Benz-Sprinter.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Servicios</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=Turismo!" class="img-responsive" style="width:100%" alt="Image">
      <p>Hay que ver que poner aca</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>texto del medio</p>
      </div>
      <div class="well">
       <p>Acá puede ir el calendario</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Mail: contacto@turismomendoza.com.ar  ---  Telefonos / whatsapp: 261-15-685-3796  ---  Local: Paseo Peatonal Sarmiento 2411</p>
</footer>

</body>
</html>
