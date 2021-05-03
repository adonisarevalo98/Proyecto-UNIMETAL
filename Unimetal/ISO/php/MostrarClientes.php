 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Perfil</title>
       <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js1/bootstrap.min.js"></script>
    <style type="text/css"> .navbar-brand {font-size: 2em;} .active{font-size: 5em;}</style>
    

</head> 
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
        <li class="active"><a href="../html/ActualizarEmpleado.php">ACTUALIZAR MIS DATOS</a></li>
        <li class="active"><a href="../php/sacar_anadir.php">INGRESAR EXISTENCIAS</a></li>
        <li class="active"><a href="../php/sacar_anadir.php">SACAR ARTICULOS</a></li>
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
         
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../php/cerrarsesion.php">CERRAR SESION</a></li>
      </ul>
    </div>
  </div>
</nav>


 <?php
 include("../php/funcion.php");  
    $link = mostrar(); 
    $lis = mysql_query("SELECT * From clientes",$link);
    echo "<br>";
     echo "<br>";
     echo "<br>";
    echo "<div class='container'><table class='table table-hover'>";  
echo "<th  width='5%' align='left'><h3>Codigo</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Nombre</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Apellido</h3></th>";   
echo "<th  width='5%' align='left'><h3>Dirección</h3></th>";  
echo "<th  width='5%' align='left'><h3>Telefono</h3></th>"; 
echo "<th  width='5%' align='left'><h3>E-mail</h3></th>";
echo "<th colspan='2' width='5%' align='left'><h3>Opciones</h3></th>";   
echo "</tr>";  
while ($row = mysql_fetch_row($lis)){   
    echo "<tr>"; 
    echo "<td width='5%' align='left'><h4>$row[0]</h4></td>";  
    echo "<td width='5%' align='left'><h4>$row[1]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$row[2]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$row[3]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[4]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[5]</h4></td>";
    echo "<td width='5%' align='left'><a class='btn btn-success' href=../html/ActualizarCliente.php?codCliente=$row[0] style='text-decoration:none'>Actualizar</a></td>";
    echo "<td width='5%' align='left'><a class='btn btn-danger' href=EliminarCliente.php?codCliente=$row[0] style='text-decoration:none'>Eliminar</a></td>" ;
    echo "</tr>";
}  
echo "</table> </div>";  
?> 
</body>
</html>