<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>VICART TIENDA VIRTUAL</title>
</head>
<body class="bg-info text-white">
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
<br>
<main>
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form action="logica.php" method="POST">
                <h2 class="text-center mb-4">CARRITO DE COMPRA</h2>

                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 1" name="producto1">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad1">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Producto" name="precio1">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 2" name="producto2">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad2">
                    </div>                           
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Producto" name="precio2">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 3" name="producto3">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad3">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Producto" name="precio3">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 4" name="producto4">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad4">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Producto" name="precio4">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto 5" name="producto5">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad5">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio Producto" name="precio5">
                    </div>
                </div>

               <br>
                <button class="btn btn-warning btn-block" type="submit" name="botonCalcular">CALCULAR</button>
                </form>
                <?php 
                if(isset($_POST["botonCalcular"])):
               ?>
               <div class="border bg-dark mt-1 text-white pl-3">
                    <h5 class="mt-1">ESTA ES TU FACTURA DE COMPRA</h5>
                    <h5 class="mt-3">
                        <?php
                        $precio1=$_POST["precio1"];
                        $cantidad1=$_POST["cantidad1"];
                        $producto1=$_POST["producto1"];
                        $neto1 = $precio1 * $cantidad1;

                        $precio2=$_POST["precio2"];
                        $cantidad2=$_POST["cantidad2"];
                        $producto2=$_POST["producto2"];
                        $neto2 = $precio2 * $cantidad2;

                        $precio3=$_POST["precio3"];
                        $cantidad3=$_POST["cantidad3"];
                        $producto3=$_POST["producto3"];
                        $neto3 = $precio3 * $cantidad3;

                        $precio4=$_POST["precio4"];
                        $cantidad4=$_POST["cantidad4"];
                        $producto4=$_POST["producto4"];
                        $neto4 = $precio4 * $cantidad4;

                        $precio5=$_POST["precio5"];
                        $cantidad5=$_POST["cantidad5"];
                        $producto5=$_POST["producto5"];
                        $neto5 = $precio5 * $cantidad5;

                        $total = $neto1 + $neto2 + $neto3 + $neto4 + $neto5;
                        echo("El producto 1 es : ".$producto1.", y la cantidad que desea llevar es de ".$cantidad1." productos, que valen---->($)".$neto1." COP");
                        echo("<br>");
                        echo("<br>");
                        echo("El producto 2 es: ".$producto2.", y la cantidad que desea llevar es de ".$cantidad2." productos, que valen ---->($)".$neto2." COP");
                        echo("<br>");
                        echo("<br>");
                        echo("El producto 3 es : ".$producto3.",y la cantidad que desea llevar es de ".$cantidad3." productos, que valen ---->($)".$neto3." COP");
                        echo("<br>");
                        echo("<br>");
                        echo("El producto 4 es: ".$producto4.", y la cantidad que desea llevar es de ".$cantidad4." productos, que valen ---->($)".$neto4." COP");
                        echo("<br>");
                        echo("<br>");
                        echo("El producto 5 es: ".$producto5.", y la cantidad que desea llevar es de ".$cantidad5." productos, que valen ---->($)".$neto5." COP");
                        echo("<br>");
                        echo("<br>");
                        echo("<hr>");
                        echo("*******");
                        echo("<br>");
                        echo("El total de la compra fué de: ($)".$total." COP")
                        ?>
                    </h5>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <br>  
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form action="index.php">
                    <button class="btn btn-warning btn-block" type="submit" name="botonCalcular">VOLVER A LA PÁGINA PRINCIPAL</button>
                </form>
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