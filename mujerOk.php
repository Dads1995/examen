<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <?php
  session_start();
  require 'Clases/DAO.php';
  $dao = new DAO();

    if(isset($_POST['m1'])){ 
      $dao->AgregarCarrito('Aldo Sandalia Mujer Blanco',74900,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['m2'])){ 
      $dao->AgregarCarrito('Tommy Hilfiger Zapatilla Urbana Mujer Blanco',64990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['m3'])){ 
      $dao->AgregarCarrito('Bota Mujer Be Sweet Toffe',79420,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['m4'])){ 
      $dao->AgregarCarrito('Americanino Cinturón Negro Mujer',9900,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['m5'])){ 
      $dao->AgregarCarrito('Michael Kors Cartera',298000,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['m6'])){ 
      $dao->AgregarCarrito('Parka Pluma Mujer Surrey',49990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['m7'])){ 
      $dao->AgregarCarrito('Calza Mujer',19990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['m8'])){ 
      $dao->AgregarCarrito('Leggings Efecto Piel',24990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
  ?>
  <body>
    <!--Logo Tienda-->
    <div class="row">
        <img src="Logo.png" height="50" style="width: 200px; margin-left: 10%;">
    </div>

    <!--NavBar-->
    <nav class="navbar navbar-expand-lg" style="background-color: blue;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="margin-left: 2em; color: white;"><b>Koko Vintage</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="indexOk.php" style="color: whitesmoke;">Inicio</a>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: whitesmoke;">
                  Productos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="mujerOk.php" style="background-color: skyblue;">Mujer</a></li>
                  <li><a class="dropdown-item" href="hombreOk.php" style="background-color: skyblue;">Hombre</a></li>
                  <li><a class="dropdown-item" href="niñoOk.php" style="background-color: skyblue;">Niño</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: whitesmoke;">
                  Usuario
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="historico.php" style="background-color: skyblue;">Pedidos</a></li>
                  <li><a class="dropdown-item" href="cerrar.php" style="background-color: skyblue;">Cerrar Sesión</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="carrito.php" style="color: whitesmoke;">Carrito</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!--Cupon Descuento-->
    <div class="row">
        <center>
            <p style="font-size: 20px; margin-top: 1.5em; margin-bottom: 1.5em; background-color: black; color: yellow;"><b>CYBERMONDAY 3 - 4 - 5 OCTUBRE</b></p>
        </center>
    </div>

    <!--Productos-->
    <form method="POST" action="mujerOk.php">
      <div class="container">
        <div class="row">
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/16454601_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ALDO</h5>
              <p class="card-text">Aldo Sandalia Mujer Blanco</p>
              <p class="card-text">$ 74.900</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m1" name="m1" value="Agregar +">
            </div>
          </div>
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/882525850_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">TOMMY HILFIGER</h5>
              <p class="card-text">Tommy Hilfiger Zapatilla Urbana Mujer Blanco</p>
              <p class="card-text">$ 64.990</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m2" name="m2" value="Agregar +">
            </div>
          </div>
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/gsc_113134213_541961_3?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MOSSA</h5>
              <p class="card-text">Bota Mujer Be Sweet Toffe</p>
              <p class="card-text">$ 79.420</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m3" name="m3" value="Agregar +">
            </div>
          </div>
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/113468486_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">AMERICANINO</h5>
              <p class="card-text">Americanino Cinturón Negro Mujer</p>
              <p class="card-text">$ 9.900</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m4" name="m4" value="Agregar +">
            </div>
          </div>
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/882566190_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MICHAEL KORS</h5>
              <p class="card-text">Michael Kors Cartera</p>
              <p class="card-text">$ 298.000</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m5" name="m5" value="Agregar +">
            </div>
          </div>
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/6583877_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">LE COQ SPORTIF</h5>
              <p class="card-text">Parka Pluma Mujer Surrey</p>
              <p class="card-text">$ 49.990</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m6" name="m6" value="Agregar +">
            </div>
          </div>
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/15486243%20_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">FILA</h5>
              <p class="card-text">Calza Mujer</p>
              <p class="card-text">$ 19.990</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m7" name="m7" value="Agregar +">
            </div>
          </div>
          <div class="card" style="width: 17.5rem;">
            <img src="https://falabella.scene7.com/is/image/Falabella/7907207_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CALZEDONIA</h5>
              <p class="card-text">Leggings Efecto Piel</p>
              <p class="card-text">$ 24.990</p>
              <input type="submit" class="btn btn-danger" style="float: right;" id="m8" name="m8" value="Agregar +">
            </div>
          </div>
        </div>
      </div>
    </form>  

    <!--Footer-->
    <div class="row">
        <center>
            <p style="font-size: 12px; margin-top: 1.5em; margin-bottom: 1.5em; background-color: black; color: yellow;">Todos Los Derechos Reservados Koko Vintage 2022</p>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>