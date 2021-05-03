<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8"/>
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
      <a class="navbar-brand" href="#">UNIMETAL</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        
       <li class="active"><a href="#">VENTA<span class="sr-only">(current)</span></a></li>

            
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
box-shadow: 0px 0px 15px -2px rgba(33,33,33,1); padding:3%; margin:40 auto; border-radius:20px; background:#eeeeee; margin-left:30%;">
<form class="form-horizontal" method="POST" action="../php/RegistrarVenta.php" enctype="multipart/form-data">
<div class="form-group">
<label><h3 class="leter">Buscar Articulo</h3></label>
<input class="form-control" type="text"  name="buscar" placeholder="Ingrese el nombre del artículo" required="Campo requerido">
</div>

<br>
<input type="submit" class="btn btn-lg btn-warning btn-block"  name="Buscar"  value="Buscar" />
</form>
    
    <br>
    <label><h3 class="leter">Validar venta</h3></label>
    <form class="sign-up" method="POST" action="../php/ListarVenta.php">

<input type="submit" class="btn btn-lg btn-warning btn-block" name="update"  value="VALIDAR" />


</form>
<br>
</div>
</div>  
</div> 





 <?php
 include("../php/funcion.php");  
    $link = mostrar(); 
    
if (empty($_POST['buscar'])){ 
    $lis = mysqli_query($link,"SELECT * From articulos");
    echo "<br>";
     
    echo "<div class='container'><table class='table table-hover'>";  
echo "<th  width='5%' align='left'><h3>Codigo</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Nombre</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Cantidad de articulos</h3></th>";   
echo "<th  width='5%' align='left'><h3>Descripcion</h3></th>";  
echo "<th  width='5%' align='left'><h3>Precio de Compra</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Precio de Venta</h3></th>";
echo "<th colspan='2' width='5%' align='left'><h3>Cantidad</h3></th>";   
echo "</tr>";  
while ($row = mysqli_fetch_row($lis)){   
    echo "<tr>"; 
    echo "<td width='5%' align='left'><h4>$row[0]</h4></td>";  
    echo "<td width='5%' align='left'><h4>$row[1]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$row[2]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[4]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$$row[5]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$$row[6]</h4></td>";
  ?>
<form class="form-horizontal" method="POST" action="../php/RegisVenta.php" enctype="multipart/form-data">

    <td width='5%' align='left'><input class="form-control" type="number" min=0 name="Cantidad" placeholder="cantidad" required="Campo requerido"></td>;
    <input type="hidden"  name="Codigo" value="<?=htmlspecialchars($row[0]); ?>">
  
    <td width='5%' align='left'><input type="submit" class='btn btn-danger' name="agregar" value="Agregar"> </td>;
 </form>

     <?php  
     
    echo "</tr>";

}  
echo "</table> </div>";  
} else {
    $buscar=$_POST['buscar'];
        $lis = mysqli_query($link,"SELECT * From articulos where nombre LIKE'%$buscar%' ORDER BY nombre");
    if ($lis->num_rows == 0){
   
?>
        <script>
function enfocar()
            
buscar.focus();
    
    </script>

          <?php  
        
    }else{  
    
    echo "<div class='container'><table class='table table-hover'>";  
echo "<th  width='5%' align='left'><h3>Codigo</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Nombre</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Cantidad de articulos</h3></th>";   
echo "<th  width='5%' align='left'><h3>Descripcion</h3></th>";  
echo "<th  width='5%' align='left'><h3>Precio de Compra</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Precio de Venta</h3></th>";
echo "<th colspan='2' width='5%' align='left'><h3>Cantidad</h3></th>";   
echo "</tr>";  
while ($row = mysqli_fetch_row($lis)){   
    echo "<tr>"; 
    echo "<td width='5%' align='left'><h4>$row[0]</h4></td>";  
    echo "<td width='5%' align='left'><h4>$row[1]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$row[2]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[4]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$$row[5]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$$row[6]</h4></td>";
 ?>
<form class="form-horizontal" method="POST" action="../php/RegisVenta.php" enctype="multipart/form-data">

    <td width='5%' align='left'><input class="form-control" type="number" min=0 name="Cantidad" placeholder="cantidad" required="Campo requerido"></td>;
    <input type="hidden"  name="Codigo" value="<?=htmlspecialchars($row[0]); ?>">
  
    <td width='5%' align='left'><input type="submit" class='btn btn-danger' name="agregar" value="Agregar"> </td>;
 </form>
<?php  
    echo "</tr>";

}  
echo "</table> </div>";  
    }  
}

?> 

<br>

</div>
</body>
</html>