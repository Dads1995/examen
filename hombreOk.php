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

    if(isset($_POST['h1'])){ 
      $dao->AgregarCarrito('Aldo Zapatilla Urbana Hombre Café',69900,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['h2'])){ 
      $dao->AgregarCarrito('Cat Botín Hombre Cuero Café',114990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['h3'])){ 
      $dao->AgregarCarrito('Jeans Jogger Arrow',46990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['h4'])){ 
      $dao->AgregarCarrito('Americanino Jeans Super skinny Hombre',24990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['h5'])){ 
      $dao->AgregarCarrito('Levis Jeans Hombre Slimfit',34990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['h6'])){ 
      $dao->AgregarCarrito('Nike Polera Hombre',39900,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['h7'])){ 
      $dao->AgregarCarrito('Polera Hombre',9990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['h8'])){ 
      $dao->AgregarCarrito('Americanino Billetera',16990,$_SESSION['id']);
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
    <form method="POST" action="hombreOK.php">
        <div class="container">
          <div class="row">
            <div class="card" style="width: 17.5rem;">
              <img src="https://falabella.scene7.com/is/image/Falabella/15295890_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ALDO</h5>
                <p class="card-text">Aldo Zapatilla Urbana Hombre Café</p>
                <p class="card-text">$ 69.900</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h1" name="h1" value="Agregar +">
              </div>
            </div>
            <div class="card" style="width: 17.5rem;">
              <img src="https://falabella.scene7.com/is/image/Falabella/6105008_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CAT</h5>
                <p class="card-text">Cat Botín Hombre Cuero Café</p>
                <p class="card-text">$ 114.990</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h2" name="h2" value="Agregar +">
              </div>
            </div>
            <div class="card" style="width: 17.5rem;">
              <img src="https://falabella.scene7.com/is/image/Falabella/16441970_5?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ARROW</h5>
                <p class="card-text">Jeans Jogger Arrow</p>
                <p class="card-text">$ 46.990</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h3" name="h3" value="Agregar +">
              </div>
            </div>
            <div class="card" style="width: 17.5rem;">
              <img src="https://falabella.scene7.com/is/image/Falabella/881848540_01?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">AMERICANINO</h5>
                <p class="card-text">Americanino Jeans Super skinny Hombre</p>
                <p class="card-text">$ 24.990</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h4" name="h4" value="Agregar +">
              </div>
            </div>
            <div class="card" style="width: 17.5rem;">
              <img src="https://falabella.scene7.com/is/image/Falabella/16513310_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">LEVIS</h5>
                <p class="card-text">Levis Jeans Hombre Slimfit</p>
                <p class="card-text">$ 34.990</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h5" name="h5" value="Agregar +">
              </div>
            </div>
            <div class="card" style="width: 17.5rem;">
              <img src="https://falabella.scene7.com/is/image/Falabella/16102036_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">NIKE</h5>
                <p class="card-text">Nike Polera Hombre</p>
                <p class="card-text">$ 39.900</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h6" name="h6" value="Agregar +">
              </div>
            </div>
            <div class="card" style="width: 17.5rem;">
              <img src="https://falabella.scene7.com/is/image/Falabella/882486671_01?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">DIADORA</h5>
                <p class="card-text">Polera Hombre</p>
                <p class="card-text">$ 9.990</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h7" name="h7" value="Agregar +">
              </div>
            </div>
            <div class="card" style="width: 17.5rem;">
              <img src="https://th.bing.com/th/id/OIP.NCayKSJ01g3tZ9vONQJVHAHaHa?w=216&h=216&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">AMERICANINO</h5>
                <p class="card-text">Americanino Billetera</p>
                <p class="card-text">$ 16.990</p>
                <input type="submit" class="btn btn-danger" style="float: right;" id="h8" name="h8" value="Agregar +">
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