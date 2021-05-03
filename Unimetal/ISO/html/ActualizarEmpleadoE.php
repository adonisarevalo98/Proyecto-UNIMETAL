<?php
	$conecte= new mysqli("localhost","root","","proyecto");
	session_start();
	$consulta = "SELECT Cod, nombre from empleados where nickname='".$_SESSION['nombre']."'";
    $result = $conecte->query($consulta);
    $fila = $result->fetch_assoc();
     
       $cod= $fila['Cod'];
?>
<!DOCTYPE html>
<html lang="en" class="no--js">
<head>
<meta charset="UTF-8"/>

	<title>Actualizar datos Empleado</title>
   <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js1/bootstrap.min.js"></script>
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
        <li class="active"><a href="../html/ActualizarEmpleadoE.php">ACTUALIZAR MIS DATOS</a></li>
        <li class="active"><a href="../html/registroservicio.php">REPORTES DE SERVICIO</a></li>
        <li class="active"><a href="../html/reportes.php">SERVICIOS REALIZADOS</a></li>
      
        <li class="dropdown">

          
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
<h1 class="leter">Actualizar Datos</h1>
<form class="sign-up" method="POST" action="../php/actualizarag.php">
    <input type="hidden"  name="codempleado" value="<?php echo $cod; ?>">
<div class="form-group">
<label><h3 class="leter">Nombres</h3></label>
<input class="form-control" type="text"  name="nombres" placeholder="Ingrese sus nombres" required="Campo requerido">
</div>
<div class="form-group">
<label><h3 class="leter">Apellidos</h3></label>
<input class="form-control" type="text"  name="apelli" placeholder="Ingrese sus apellidos" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">E-mail</h4></label>
<input class="form-control" type="email" name="mail" placeholder="Ingrese su e-mail" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Formato de correo:NombreCorreo@dominio" required="Campo requerido">
</div>
<div class="form-group">
<label><h3 class="leter">Nickname</h3></label>
<input class="form-control" type="text"  name="nick" placeholder="Ingrese su nickname o username" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Contraseña</h4></label>
<input type="password" name="pass" class="form-control" value="" class="control" placeholder="Contraseña" required /><br>
</div>
<div class="form-group">
<label><h4 class="leter">Confirmar Contraseña</h4></label>
<input type="password" name="repass" class="form-control" value="" class="control" placeholder="Contraseña" required /><br>
</div>
<div class="form-group">
<label><h4 class="leter">Teléfono</h4></label>
<input class="form-control" type="text" name="tel" placeholder="Ingrese número de teléfono" pattern="^[0-9]{4}-?[0-9]{4}$" title="Formato: 2222-2222" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Dirección</h4></label>
<input class="form-control" type="text" name="direcci" placeholder="Ingrese su dirección" required="Campo requerido">
</div>

<input type="submit" class="btn btn-lg btn-warning btn-block" name="update"  value="Actualizar datos" />


</form>
</div>
<br>
<br>
</body>
</html>