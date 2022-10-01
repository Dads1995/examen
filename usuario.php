<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <?php
  require 'Clases/DAO.php';
  $dao = new DAO();

    if(isset($_POST['btnR'])){ 
      if(empty($_POST['ema'])){
        echo "<script>alert('Favor Completar Todos los Campos para Registrarse')</script>";
      }else if(empty($_POST['pas'])){
        echo "<script>alert('Favor Completar Todos los Campos para Registrarse')</script>";
      }else if(empty($_POST['nom'])){
        echo "<script>alert('Favor Completar Todos los Campos para Registrarse')</script>";
      }else{
        $lista = $dao->ComprobarCorreo($_POST['ema']); 
        if(empty($listaU)){
          $dao->AgregarUsuario($_POST['nom'],$_POST['ema'],$_POST['pas']);
          echo "<script>alert('Usuari@ Registrad@ Exitosamente')</script>";
        }else{
          echo "<script>alert('El Correo Ingresado Ya Se Encuentra Registrado')</script>";
        }
        
      }
    }

    if(isset($_POST['btnI'])){ 
      if(empty($_POST['emaI'])){
        echo "<script>alert('Favor Completar El Email y la Contraseña para Iniciar Sesión')</script>";
      }else if(empty($_POST['pasI'])){
        echo "<script>alert('Favor Completar El Email y la Contraseña para Iniciar Sesión')</script>";
      }else{
        //Iniciar Sesión
        $listaU = $dao->ComprobarUsuario($_POST['emaI'],$_POST['pasI']); 

        if(empty($listaU)){
          echo "<script>alert('Los Datos Ingresados Son Incorrectos')</script>";
        }else{
          for ($i=0; $i < count($listaU); $i++) { 
            $u = $listaU[$i];
            $id = $u -> getId();
            $nom = $u -> getNom(); 
            $ema = $u -> getEma();
            $pas = $u -> getPas();
          }
        session_start();

        $_SESSION['nom'] = $nom;
        $_SESSION['ema'] = $ema;
        $_SESSION['pas'] = $pas;
        $_SESSION['id'] = $id;
        header("Location:indexOk.php");
      }
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
                <a class="nav-link active" aria-current="page" href="index.html" style="color: whitesmoke;">Inicio</a>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: whitesmoke;">
                  Productos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="mujer.html" style="background-color: skyblue;">Mujer</a></li>
                  <li><a class="dropdown-item" href="hombre.html" style="background-color: skyblue;">Hombre</a></li>
                  <li><a class="dropdown-item" href="niño.html" style="background-color: skyblue;">Niño</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="usuario.php" style="color: whitesmoke;">Usuario</a>
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

    <!--Formulario-->
    <form method="POST" action="usuario.php">
      <div class="row">
        <div class="col">
          <div class="row">
            <center>
              <h4>Formulario de Registro</h4>
            </center>
          </div>
          <div class="row" style="margin-left: 2em;margin-right: 0.5em;">
            <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Aaa Bbb Ccc Ddd">
            <label for="exampleFormControlInput1" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="ema" name="ema" placeholder="name@example.com">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="pas" name="pas" placeholder="******">
            <button type="submit" class="btn btn-primary mb-3" id="btnR" name="btnR" style="margin-top: 1em;">Registro</button>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <center>
              <h4>Inicio Sesión</h4>
            </center>
          </div>
          <div class="row" style="margin-right: 2em; margin-left: 0.5em;">
            <label for="exampleFormControlInput1" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="emaI" name="emaI" placeholder="name@example.com">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="pasI" name="pasI" placeholder="******">
            <button type="submit" class="btn btn-primary mb-3" id="btnI" name="btnI" style="margin-top: 1em;">Iniciar</button>
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