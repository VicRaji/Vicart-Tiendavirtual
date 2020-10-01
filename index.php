<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="img/icons/color-wheel.png">
    
    <title>Vicart® Tienda Virtual</title>
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php"><img src="img/icons/color-wheel.png" alt="icon" width="30px" height="30px"> Vicart®</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">PINTURA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DIBUJO</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TIENDA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Descuentos</a>
          <a class="dropdown-item" href="logica.php">Carrito</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">SEDES<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
</header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carrusel/davinci.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Leonardo da Vinci.</h5>
        <p>"Una obra de arte nunca se termina, sólo se abandona"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrusel/dalí.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5 class="textc">Salvador Dalí.</h5>
        <p class="textc">"Un verdadero artista no es el que se inspira, sino quien inspira a otros". </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrusel/frida.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> Frida Kahlo.</h5>
        <p>"Pintar es lo más magnífico que existe, pero hacerlo bien es muy difícil". </p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<main>
<br>
<h1 class="h3"> PRODUCTOS</h1>
<br>
<div class= "container">
<div class= "row">
<div class= "col-4">
<div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <a href="#"><img src="img/productos/pinceles.png" class="card-img-top" alt="pinceles"></a>
  <div class="card-body">
    <a href="#"><p class="card-text">PINCELES</p></a>
    <p class="card-text">PRECIO: $40.000 cop</p>
  </div>
</div>
</div>
<div class= "col-4">
<div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <a href="#"><img src="img/productos/acuarelas.png" class="card-img-top" alt="acuarelas"></a>
  <div class="card-body">
    <a href="#"><p class="card-text" >ACUARELAS</p></a>
    <p class="card-text">PRECIO: $20.000 cop</p>
  </div>
</div>
</div>
<div class= "col-4">
<div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <a href="#"><img src="img/productos/marcadores.jpg" class="card-img-top" alt="marcadores"></a>
  <div class="card-body">
    <a href="#"><p class="card-text">MARCADORES PELIKAN</p></a>
    <p class="card-text">PRECIO: $20.000 cop</p>
  </div>
</div>
</div>
</div>
<div class="row">
<div class= "col-4">
<div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <a href="#"><img src="img/productos/lienzo.jpg" class="card-img-top" alt="lienzo"></a>
  <div class="card-body">
    <a href="#"><p class="card-text">LIENZO</p></a>
    <p class="card-text">PRECIO: $30.000 cop</p>
  </div>
</div>
</div>
<div class= "col-4">
<div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <a href="#"><img src="img/productos/paleta.png" class="card-img-top" alt="paleta"></a>
  <div class="card-body">
    <a href="#"><p class="card-text">PALETA PARA PINTURAS</p></a>
    <p class="card-text">PRECIO: $15.000 cop</p>
  </div>
</div>
</div>
<div class= "col-4">
<div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <a href="#"><img src="img/productos/micro.jpg" class="card-img-top" alt="micropuntas"></a>
  <div class="card-body">
    <a href="#"><p class="card-text">MICROPUNTAS</p></a>
    <p class="card-text">PRECIO: $50.000 cop</p>
  </div>
</div>
</div>
</div>
</div>

</main>
<br>

<br>

<footer class="bg-dark"> 
  <br>
<div class="container">
    <div class="row">
        <div class="col-6">
        <p class="textfo">CORREO ELECTRONICO DE LA TIENDA: <a href="">vicArt@gmail.com</a> </p>
        </div>
        <div class="col-6">
        <p class="textfo">NÚMERO DE CONTACTO: 3208320898 </p>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-4">
        <h5></h5>
        </div>
    <div class="col-1">
        <h5 class="text-white">REDES:</h5>
        </div>
        <div class="col-1">
          <a href=""><img src="img/icons/facebook.png" alt="facebook" width="30px" height="30px"></a>
        </div>
        <div class="col-1">
          <a href=""><img src="img/icons/instagram.png" alt="instagram" width="30px" height="30px"></a>
        </div>
        <div class="col-1">
          <a href=""><img src="img/icons/twitter.png" alt="twitter" width="30px" height="30px"> </a>
        </div>
        <div class="col-4">
        <h5></h5>
        </div>
    </div>  
</div>
<br>
<hr>
 <p class="textfo">MARCA REGISTRADA ®</p>
 <br>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>



