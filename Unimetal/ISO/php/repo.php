
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
  
    echo '<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      </button>
      <a class="navbar-brand" href="#">MG Comunicaciones</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../html/ActualizarEmpleadoA.php">ACTUALIZAR MIS DATOS</a></li>
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
box-shadow: 0px 0px 15px -2px rgba(33,33,33,1); padding:4%; margin:0 auto; border-radius:20px; background:#eeeeee; margin-left:30%;">';
      session_start();
       
  $conecte= new mysqli("localhost","root","","proyecto");
          $consulta = " SELECT sum(cantidadarticulo * precioVenta) as totarti, sum(cantidadarticulo * precioCompra) as totventa, sum((cantidadarticulo * precioVenta)-(`cantidadarticulo` * `precioCompra`)
          ) as total FROM `articulos` ";
    $result = $conecte->query($consulta);
    $fila = $result->fetch_assoc();
    
     echo "<section id='info'>";
     echo "<h1>Estado de cuenta</h1>";
     echo "<img id='user' src='../img/cuenta.png' style='height:75px; width:75px;'>";
     echo "<table class='shidori'>";
     echo "<tr>";
     echo "<th id='name'>Salidas :</th>";
     echo "<td>$".$fila['totventa']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'> Entradas :</th>";
     echo "<td>$".$fila['totarti']."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Total ganancia:</th>";
     echo "<td>$".$fila['total']."</td>";
     echo "</tr>";

     echo "</table>";
    
     echo "</section> ";
    
     echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    

          
    

    


?>
        </div>
    </div>
</div>
</body>
</html>    
