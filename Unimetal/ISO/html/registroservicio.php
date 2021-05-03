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

	<title>Registro Servicio</title>
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
<h1 class="leter">Registre Servicio Realizado</h1>
<form class="sign-up" method="POST" action="../php/regservicio.php">
<input type="hidden"  name="codempleado" value="<?php echo $cod; ?>">
<div class="form-group">
<label><h3 class="leter">Fecha Inicio:</h3></label>
<input class="form-control" type="date"  name="finicio" required="Campo requerido">
</div>
<div class="form-group">
<label><h3 class="leter">Fecha Fin</h3></label>
<input class="form-control" type="date"  name="ffin" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Hora recibido:</h4></label>
<input class="form-control" type="time" name="horarecibido" placeholder="Hora recibido" required="Campo requerido">
</div>
<div class="form-group">
<label><h3 class="leter">Precio:</h3></label>
<input class="form-control" type="number" min="10.00" title="Formato de precio: 00.00" step="0.01" name="total" required="Campo requerido">
</div>
<div class="form-group">
<label><h3 class="leter">Observaciones:</h3></label>
<input class="form-control" type="text"  name="letra" required="Campo requerido">
</div>

<input type="submit" class="btn btn-lg btn-warning btn-block" name="registro"  value="Registrar" />


</form>
</div>
<br>
<br>
</body>
</html>