<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
 <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js1/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    
</head>



<body>


<?php
    session_start();
       
        
$conecte= new mysqli("localhost","root","","proyecto");
    $consul = "SELECT Cod, nombre from empleados where nickname='".$_SESSION['nombre']."'";
    $resultado = $conecte->query($consul);
    $fila1 = $resultado->fetch_assoc();
     
       $cod= $fila1['Cod'];
          $consulta = "SELECT fechainicio,fechafin,horarecibido,precioservicio,observaciones From reporteservicio where idempleado='".$cod."'";
    $result = $conecte->query($consulta);
    $fila = $result->fetch_assoc();
     echo '<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      </button>
      <a class="navbar-brand" href="#">MG Comunicaciones</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../html/ActualizarEmpleado.php">ACTUALIZAR MIS DATOS</a></li>
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
box-shadow: 0px 0px 15px -2px rgba(33,33,33,1); padding:4%; margin:0 auto; border-radius:20px; background:#eeeeee; margin-left:30%;">';
    if($result->num_rows >0){ 
         while($fila = $result->fetch_assoc()){ 
    echo "<section id='info'>";
     echo "<h1>Reporte:</h1>";
     echo "<table class='shidori'>";
     echo "<tr>";
     echo "<th id='name'>Fecha Inicio:</th>";
     echo "<td>".$fila['fechainicio']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Fecha Fin:</th>";
     echo "<td>".$fila['fechafin']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Hora recibido:</th>";
     echo "<td>".$fila['horarecibido']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Precio:</th>";
     echo "<td>".$fila['precioservicio']."</td>";
     echo "</tr>";
    echo "<tr>";
     echo "<th id='name'>Observaciones:</th>";
     echo "<td>".$fila['observaciones']."</td>";
     echo "</tr>";
     echo "</table>";
     echo "</section> ";
              }

    }else {
        echo "no hay reportes";
    }
?>
        
</body>
</html>    
