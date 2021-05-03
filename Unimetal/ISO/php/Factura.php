
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
 
    
  $conecte= new mysqli("localhost","root","","proyecto");
    
 $consul= "SELECT SUM(total) as total FROM ventas";
    $resul = $conecte->query($consul);
    $fil = $resul->fetch_assoc();
    $fill = $fil['total'];

    if ($fill > 0){
        
   
    
          $consulta = "Insert into ventasconcretadas(idventas, nombre, cantidad, total, fechadeventa, idarticulo) Select idventas, nombre, Cantidad, total, fechadeventa, idarticulo From ventas";
    $result = $conecte->query($consulta);
    
     

   
    
    
        $fecha_actual=date("Y/m/d");
           $consulta4 = "insert into facturas values ('','".$fecha_actual."','".$fill."','Soyapango','Unimetal') ";
    $result4 = $conecte->query($consulta4);
   
    
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
     echo "<h1>Factura simplificada</h1>";
     echo "<img id='user' src='../img/user.png' style='height:75px; width:75px;'>";
     echo "<table class='shidori'>";
     echo "<tr>";
     echo "<th id='name'>Ferreteria unimetal</th>";
     
     echo "</tr>";
    echo "<tr>";
     echo "<th id='name'> Calle A Tonacatepeque
2292 3877</th>";
    
     echo "</tr>";
         include("../php/funcion.php");  
    $link = mostrar(); 
        $lis = mysqli_query($link,"select * from ventas");
        
     while ($row = mysqli_fetch_row($lis)){  
     
    echo "<tr>";
     echo "<th id='name'>Producto:</th>";
     echo "<td>".$row[1]."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Precio en unidad:</th>";
     echo "<td>$".$row[3]/$row[2]."</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<th id='name'>Cantidad:</th>";
    
     echo "<td>".$row[2]."</td>";
     echo "</tr>";
         }
        
    
     echo "<tr>";
         

     echo "<th id='name'><hr size='10'/>Total:</th>";
     echo "<td>".$fill."</td>";
     echo "</tr>";
         
     echo "<tr>";
     echo "<th id='name'>Total+IVA:</th>";
     $tot = $fill;
     $tott = $tot+($tot*0.13);
     echo "<td>$".$tott."</td>";
     echo "</tr>";
     echo "</table>";
     echo "</section> ";
     
    echo "<td width='5%' align='left'><a class='btn btn-danger' href='vaciarventas.php' style='text-decoration:none'>Aceptar</a></td>" ;
    echo "</tr>";

     }else{
        echo"<script>alert('No se han registrado ventas'); window.location.href=\"../php/RegistrarVenta.php\"</script>";
    }


?>
        </div>
    </div>
</div>
</body>
</html>    
