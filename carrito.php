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
  $totalCar=0;

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

    if(isset($_POST['btn_eli'])){ 
      $ide = trim($_POST['btn_eli']);
      $mensaje = $dao->EliminarCarrito($ide);
      echo "<script>alert('Producto Eliminado')</script>";
    }

    $lista = $dao->buscarCarrito($_SESSION['id']); 
    for ($i=0; $i < count($lista); $i++) { 
      $p = $lista[$i];
      $totalCar= $totalCar + $p->getVal();
    }  

    if(isset($_POST['pagar'])){ 
      $listaCa = $dao->buscarCarrito($_SESSION['id']);
      if(empty($listaCa)){
        echo "<script>alert('El Carrito de Compras Está Vacío')</script>";
      }else{ 
        $dao->AgregarPedido($totalCar,$_SESSION['id']);
        for ($i=0; $i < count($listaCa); $i++) { 
          $pa = $listaCa[$i];
          $dao->AgregarDetallePedido($pa->getNom(),$pa->getVal(),$_SESSION['id']); 
        } 
        $dao->EliminarCarritoUsuario($_SESSION['id']); 
        header("Location:historico.php");
      }
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

    <!--Carrito-->
    <div class="row" style="margin-top: 50px; margin-left: 30px;">
        <form method="POST" action="carrito.php">
          <center>
            <table id="carrito" class="table">
                <tr>
                    <td>|    COD.  |</td>
                    <td>|  NOMBRE PRODUCTO  |</td>
                    <td>|  CANTIDAD  |</td>
                    <td>|  PRECIO $  |</td>
                    <td>|  ELIMINAR  |</td>
                </tr>
                <?php
                  $idCar=0;
                  
                  $lista = $dao->buscarCarrito($_SESSION['id']); 
                  for ($i=0; $i < count($lista); $i++) { 
                    $p = $lista[$i];
                    $idCar = $p->getId();
                    echo "<tr>";
                        echo "<td>".$p->getId()."</td>";
                        echo "<td>".$p->getNom()."</td>";
                        echo "<td>1</td>";
                        echo "<td>".$p->getVal()."</td>";
                        echo "<td>"."<button name='btn_eli' value='$idCar' >Click Aqui</button>"."</td>";
                    echo "</tr>";
                  } 
                ?>
            </table>
          </center>

          <div class="row" style="margin-top:1.5em">
            <center>
              <p style="font-size: 20px; margin-top: 1.5em; background-color: black; color: white;">Total Carrito $ <b><?php echo"".$totalCar?></b></p>
              <input type="submit" class="btn btn-success" style="margin-bottom: 1.5em" id="pagar" name="pagar" value="Confirmar Carrito">
            </center>
          </div>
          <?php   
           
          ?>

        </form>
    </div>
    

    <!--Footer-->
    <div class="row">
        <center>
            <p style="font-size: 12px; margin-top: 1.5em; margin-bottom: 1.5em; background-color: black; color: yellow;">Todos Los Derechos Reservados Koko Vintage 2022</p>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>