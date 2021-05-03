<?php
	$conecte= new mysqli("localhost","root","","proyecto");
	session_start();
	
	$cod = $_GET['codProveedor'];

?>


<!DOCTYPE html>
<html lang="en" class="no--js">
<head>
<meta charset="UTF-8"/>

  <title>Actualizar Proveedor</title>
   <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js1/bootstrap.min.js"></script>
    <style type="text/css"> .navbar-brand {font-size: 2em;} .active{font-size: 5em;}</style>
    <link rel="stylesheet" type="text/css" href="../css/general.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      </button>
      <a class="navbar-brand" href="#">MG Comunicaciones</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../html/ActualizarEmpleadoA.php.php">ACTUALIZAR MIS DATOS</a></li>
        <li class="active"><a href="../php/sacar_anadir.php">INGRESAR-SACAR EXISTENCIAS</a></li>
        <li class="active"><a href="../php/repo.php">GANANCIAS</a></li>
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Tareas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li class="active"><a href="../html/Categoria.html">REGISTRAR CATEGORIAS</a></li>
            <li class="active"><a href="../html/Cliente.html">REGISTRAR CLIENTES</a></li>
            <li class="active"><a href="../html/Proveedor.html">REGISTRAR PROVEEDORES</a></li>
            <li class="active"><a href="../html/Articulo.php">REGISTRAR ARTICULOS</a></li>
            <li class="active"><a href="../php/MostrarArticulos.php">MOSTRAR ARTICULOS</a></li>
            <li class="active"><a href="../php/MostrarCategorias.php">MOSTRAR CATEGORIAS</a></li>
            <li class="active"><a href="../php/MostrarClientes.php">MOSTRAR CLIENTES</a></li>
            
            <li class="active"><a href="../php/MostrarProveedores.php">MOSTRAR PROVEEDORES</a></li>
         <li class="active"><a href="../html/allreportes.php">VER REPORTES</a></li>
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../php/cerrarsesion.php">CERRAR SESION</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<div class="container-fluid">
<div class="row">
<div class="col-sm-5 col-sm-offset-5" style=" -webkit-box-shadow: 0px 0px 15px -2px rgba(33,33,33,1);
-moz-box-shadow: 0px 0px 15px -2px rgba(33,33,33,1);
box-shadow: 0px 0px 15px -2px rgba(33,33,33,1); padding:4%; margin:0 auto; border-radius:20px; background:#eeeeee; margin-left:30%;">
<h1 class="leter">Actualizar Proveedor</h1>
<form class="sign-up" method="POST" action="../php/proveedor.php" enctype="multipart/form-data">
<div class="form-group">
 <label><h4 class="leter">Nombre del proveedor</h4></label>
<input class="form-control" type="text"  name="name" placeholder="Ingrese su nombre" required="Campo requerido">
</div>
<div class="form-group">
 <label><h4 class="leter">Apellido del proveedor</h4></label>
<input class="form-control" type="text"  name="apell" placeholder="Ingrese su nombre" required="Campo requerido">
</div>
<div class="form-group">
<label><h3 class="leter">Nombre de la empresa</h3></label>
<input class="form-control" type="text"  name="nomb" placeholder="Ingrese el nombre" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Teléfono</h4></label>
<input class="form-control" type="text" name="tel" placeholder="Ingrese número de teléfono"  required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Dirección</h4></label>
<input class="form-control" type="text" name="direcci" placeholder="Ingrese la dirección" required="Campo requerido">
</div>

<input type="submit" class="btn btn-lg btn-warning btn-block" name="registro"  value="Actualizar" />


</form>
</div>
<br>
<br>
</body>
</html>