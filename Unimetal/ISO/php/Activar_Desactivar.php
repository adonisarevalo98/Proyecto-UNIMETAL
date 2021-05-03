 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Perfil</title>
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
 <?php
 include("../php/funcion.php");  
    $link = mostrar(); 
    $lis = mysqli_query($link,"SELECT * From empleados where idcat!='3'");
    echo "<br>";
     echo "<br>";
     echo "<br>";
    echo "<div class='container'><table class='table table-hover'>";    
echo "<th  width='5%' align='left'><h3>Nombres</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Apellidos</h3></th>";   
echo "<th  width='5%' align='left'><h3>Nickname</h3></th>";  
echo "<th  width='5%' align='left'><h3>E-mail</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Teléfono</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Estado</h3></th>";    
echo "<th  width='5%' align='left'><h3>Control de cuentas</h3></th>";  
echo "</tr>";  
while ($row = mysqli_fetch_row($lis)){   
    echo "<tr>";  
    echo "<td width='5%' align='left'><h4>$row[1]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$row[2]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$row[3]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[5]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[6]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[9]</h4></td>";
    echo "<td width='5%' align='left'><a class='btn btn-success' href=activar.php?act=$row[3]>Dar baja/Activar</a></td>" ;
    echo "</tr>";  
}  
echo "</table> </div>";  
?> 
</body>
</html>