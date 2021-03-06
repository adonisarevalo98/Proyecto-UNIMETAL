<?php
	$conecte= new mysqli("localhost","root","","proyecto");
	session_start();
	
	$cod = $_GET['codCliente'];

?>
<!DOCTYPE html>
<html lang="en" class="no--js">
<head>
<meta charset="UTF-8"/>

	<title>Actualizar Cliente</title>
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
        <li class="active"><a href="../php/Activar_Desactivar.php">ACTIVAR-DESACTIVAR</a></li>
        <li class="active"><a href="../html/Empleado.php">REGISTRAR EMPLEADO</a></li>
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> DETALLES <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li class="active"><a href="../php/MostrarArticulos.php">MOSTRAR ARTICULOS</a></li>
            <li class="active"><a href="../php/MostrarCategorias.php">MOSTRAR CATEGORIAS</a></li>
            <li class="active"><a href="../php/MostrarClientes.php">MOSTRAR CLIENTES</a></li>
            
            <li class="active"><a href="../php/MostrarProveedores.php">MOSTRAR PROVEEDORES</a></li>
         
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">CERRAR SESION</a></li>
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

<h1 class="leter">Actualizar Cliente</h1>
<form class="form-horizontal" method="POST" action="../php/actualizar_cliente.php" enctype="multipart/form-data">
<input type="hidden"  name="codCliente" value="<?php echo $cod; ?>">
<div class="form-group">
<label><h3 class="leter">Nombres</h3></label>
<input class="form-control" type="text"  name="nombr" placeholder="Ingrese los nombres" required="Campo requerido">
</div>

<div class="form-group">
<label><h3 class="leter">Apellidos</h3></label>
<input class="form-control" type="text"  name="apell" placeholder="Ingrese los apellidos" required="Campo requerido">
</div>

<div class="form-group">
<label><h4 class="leter">E-mail</h4></label>
<input class="form-control" type="email" name="mail" placeholder="Ingrese su e-mail" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Formato de correo:NombreCorreo@dominio" required="Campo requerido">
</div>

<div class="form-group">
<label><h4 class="leter">Tel??fono</h4></label>
<input class="form-control" type="text" name="tel" placeholder="Ingrese n??mero de tel??fono" pattern="^[0-9]{4}-?[0-9]{4}$" title="Formato: 2222-2222" required="Campo requerido">
</div>

<div class="form-group">
<label><h4 class="leter">Direcci??n</h4></label>
<input class="form-control" type="text" name="direcci" placeholder="Ingrese su direcci??n" required="Campo requerido">
</div>

<input type="submit" class="btn btn-lg btn-warning btn-block" name="registro"  value="Actualizar" />


</form>
</div>
<br>
<br>
</body>
</html>