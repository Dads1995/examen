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

    if(isset($_POST['n1'])){ 
      $dao->AgregarCarrito('Conjunto 2 Piezas Vestido Tipo Body Y Cintillo Bebe Niña',12990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['n2'])){ 
      $dao->AgregarCarrito('Pack Body Bebé Niña',18990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['n3'])){ 
      $dao->AgregarCarrito('Conjunto Polerón + Calza Bebé Niña Algodón 2 Piezas',14990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['n4'])){ 
      $dao->AgregarCarrito('Body Pack 3 Unidades Algodón Peruano Bebe Niña',9990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['n5'])){ 
      $dao->AgregarCarrito('Short Bebé Estampado',8990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['n6'])){ 
      $dao->AgregarCarrito('Tensaur Sport 2.0 Cf K Zapatilla Urbana Unisex',37990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['n7'])){ 
      $dao->AgregarCarrito('Court Borough Low 2 Zapatilla Urbana Niño',34990,$_SESSION['id']);
      echo "<script>alert('Producto Agregado Al Carrito')</script>";
    }
    if(isset($_POST['n8'])){ 
      $dao->AgregarCarrito('Court Borough Low 2 Zapatilla Urbana Niña',44990,$_SESSION['id']);
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
      <form method="POST" action="niñoOk.php">
            <div class="container">
              <div class="row">
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/15670678_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CARTERS</h5>
                    <p class="card-text">Conjunto 2 Piezas Vestido Tipo Body Y Cintillo Bebe Niña</p>
                    <p class="card-text">$ 12.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n1" name="n1" value="Agregar +">
                  </div>
                </div>
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/882458083_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">YAMP</h5>
                    <p class="card-text">Pack Body Bebé Niña</p>
                    <p class="card-text">$ 18.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n2" name="n2" value="Agregar +">
                  </div>
                </div>
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/882461800_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">YAMP</h5>
                    <p class="card-text">Conjunto Polerón + Calza Bebé Niña Algodón 2 Piezas</p>
                    <p class="card-text">$ 14.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n3" name="n3" value="Agregar +">
                  </div>
                </div>
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/882534086_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">YAMP</h5>
                    <p class="card-text">Body Pack 3 Unidades Algodón Peruano Bebe Niña</p>
                    <p class="card-text">$ 9.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n4" name="n4" value="Agregar +">
                  </div>
                </div>
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/7944747_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">MICKEY MOUSE</h5>
                    <p class="card-text">Short Bebé Estampado</p>
                    <p class="card-text">$ 8.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n5" name="n5" value="Agregar +">
                  </div>
                </div>
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/50122814_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">ADIDAS</h5>
                    <p class="card-text">Tensaur Sport 2.0 Cf K Zapatilla Urbana Unisex</p>
                    <p class="card-text">$ 37.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n6" name="n6" value="Agregar +">
                  </div>
                </div>
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/50103735_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">NIKE</h5>
                    <p class="card-text">Court Borough Low 2 Zapatilla Urbana Niño</p>
                    <p class="card-text">$ 34.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n7" name="n7" value="Agregar +">
                  </div>
                </div>
                <div class="card" style="width: 17.5rem;">
                  <img src="https://falabella.scene7.com/is/image/Falabella/50108566_1?wid=1500&hei=1500&qlt=70" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">NIKE</h5>
                    <p class="card-text">Court Borough Low 2 Zapatilla Urbana Niña</p>
                    <p class="card-text">$ 44.990</p>
                    <input type="submit" class="btn btn-danger" style="float: right;" id="n8" name="n8" value="Agregar +">
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