
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
    <link rel="stylesheet" type="text/css" href="../css/log.css">
</head>



<body>


<?php
    session_start();
       
if ($_SESSION["idcat"]=="1"){
        $conecte= new mysqli("localhost","root","","proyecto");
        if (isset($_SESSION["inicio"])){
  $conecte= new mysqli("localhost","root","","proyecto");
          $consulta = "SELECT nombre,apellido,direccion,telefono,email From empleados where email='".$_SESSION['email']."' ";
    $result = $conecte->query($consulta);
    $fila = $result->fetch_assoc();
    echo '<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      </button>
      <a class="navbar-brand" href="#">UNIMETAL</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> PRODUCTO <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="../html/Articulo.php">REGISTRAR PRODUCTO</a></li>
            <li class="active"><a href="../php/MostrarArticulos.php">MOSTRAR PRODUCTOS</a></li>
            <li class="active"><a href="../php/sacar_anadir.php">INGRESAR EXISTENCIAS</a></li>
            
           
          </ul>
        </li>


        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> CATEGORIAS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="../html/Categoria.html">REGISTRAR CATEGORIA</a></li>
            <li class="active"><a href="../php/MostrarCategorias.php">MOSTRAR CATEGORIA</a></li>
            
            
           
          </ul>
        </li>


        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> PROVEEDORES <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="../html/Proveedor.html">REGISTRAR PROVEEDORES</a></li>
            <li class="active"><a href="../php/MostrarProveedores.php">MOSTRAR PROVEEDORES</a></li>

          </ul>
        </li>


        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> VER ESTADISTICAS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="#">GANANCIAS DE UN DIA</a></li>
            <li class="active"><a href="../grafica/index.php">VENTAS DE UN MES</a></li>

          </ul>
        </li>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CONTROL DE CUENTAS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
           <li class="active"><a href="../html/ActualizarEmpleadoA.php">ACTUALIZAR MIS DATOS</a></li>
            <li class="active"><a href="../php/Activar_Desactivar.php">ACTIVAR-DESACTIVAR CUENTAS</a></li>
             <li class="active"><a href="../html/Empleado.php">REGISTRAR EMPLEADO</a></li>

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
box-shadow: 0px 0px 15px -2px rgba(33,33,33,1); padding:4%; margin:0 auto; border-radius:20px; background:#eeeeee; margin-left:30%;">';
     echo "<section id='info'>";
     echo "<h1>Bienvenido Administrador</h1>";
     echo "<img id='user' src='../img/user.png' style='height:75px; width:75px;'>";
     echo "<table class='shidori'>";
     echo "<tr>";
     echo "<th id='name'>Nombre:</th>";
     echo "<td>".$fila['nombre']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>E-mail:</th>";
     echo "<td>".$fila['email']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Dirección:</th>";
     echo "<td>".$fila['direccion']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Teléfono:</th>";
     echo "<td>".$fila['telefono']."</td>";
     echo "</tr>";
     echo "</table>";
     echo "</section> ";

          
    }

}elseif ($_SESSION["idcat"]=="2"){
  if (isset($_SESSION["inicio"])){
  $conecte= new mysqli("localhost","root","","proyecto");
          $consulta = "SELECT nombre,apellido,direccion,telefono,email From empleados where email='".$_SESSION['email']."' ";
    $result = $conecte->query($consulta);
    $fila = $result->fetch_assoc();
     echo '<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      </button>
      <a class="navbar-brand" href="#">UNIMETAL</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        
       <li class="active"><a href="../php/RegistrarVenta.php">VENTA<span class="sr-only">(current)</span></a></li>

            
           <li class="active"><a href="../html/ActualizarEmpleadoB.php">ACTUALIZAR MIS DATOS</a></li>
         

       
        
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
     echo "<section id='info'>";
     echo "<h1>Bienvenido Empleado</h1>";
     echo "<img id='user' src='../img/user.png' style='height:75px; width:75px;'>";
     echo "<table class='shidori'>";
     echo "<tr>";
     echo "<th id='name'>Nombre:</th>";
     echo "<td>".$fila['nombre']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>E-mail:</th>";
     echo "<td>".$fila['email']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Dirección:</th>";
     echo "<td>".$fila['direccion']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Teléfono:</th>";
     echo "<td>".$fila['telefono']."</td>";
     echo "</tr>";
     echo "</table>";
     echo "</section> ";


    }

}
?>
        </div>
    </div>
</div>
</body>
</html>    
