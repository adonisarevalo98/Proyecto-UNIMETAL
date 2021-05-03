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

   
  </div>
</nav>

  <br>
<div class="container-fluid">
<div class="row">
<div class="col-sm-5 col-sm-offset-5" style=" -webkit-box-shadow: 0px 0px 15px -2px rgba(33,33,33,1);
-moz-box-shadow: 0px 0px 15px -2px rgba(33,33,33,1);
box-shadow: 0px 0px 15px -2px rgba(33,33,33,1); padding:3%; margin:40 auto; border-radius:20px; background:#eeeeee; margin-left:30%;">
    <label><h3 class="leter">Facturar Venta</h3></label>
    <form class="sign-up" method="POST" action="../php/Factura.php">

<input type="submit" class="btn btn-lg btn-warning btn-block" name="update"  value="Facturar" />


</form>
    </div>
    </div>
</div>
<br>
 <?php
 include("../php/funcion.php");  
    $link = mostrar(); 
 $fecha_actual=date("Y/m/d");
    $lis = mysqli_query($link,"SELECT * From ventas where fechadeventa = '".$fecha_actual."'");
    echo "<br>";
     echo "<br>";
     echo "<br>";
    echo "<div class='container'><table class='table table-hover'>";  
echo "<th  width='5%' align='left'><h3>Codigo</h3></th>"; 
echo "<th  width='5%' align='left'><h3>CodProducto</h3></th>"; 
echo "<th  width='5%' align='left'><h3>Cantidad</h3></th>";   
echo "<th  width='5%' align='left'><h3>total $</h3></th>";  
echo "<th  width='5%' align='left'><h3>Fecha</h3></th>"; 
echo "<th colspan='2' width='5%' align='left'><h3></h3></th>";   
echo "</tr>";  
while ($row = mysqli_fetch_row($lis)){   
    echo "<tr>"; 
    echo "<td width='5%' align='left'><h4>$row[0]</h4></td>";  
    echo "<td width='5%' align='left'><h4>$row[5]</h4></td>";  
    echo "<td  width='5%' align='left'><h4>$row[2]</h4></td>";
    echo "<td  width='5%' align='left'><h4>$row[3]</h4></td>";  
     echo "<td  width='5%' align='left'><h4>$row[4]</h4></td>";  
   
    echo "<td width='5%' align='left'><a class='btn btn-danger' href='EliminarVenta.php?codventa=$row[0]&cantidad=$row[2]& codarticulo=$row[5]' style='text-decoration:none'>Eliminar</a></td>" ;
    echo "</tr>";
}  
echo "</table> </div>";  
?> 
</body>
</html>