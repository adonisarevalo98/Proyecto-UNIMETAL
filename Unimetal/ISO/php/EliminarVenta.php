<?php
	
	$cod = $_GET['codarticulo'];
    $cantidad = $_GET['cantidad'];
    $codventa = $_GET['codventa'];

	$conecte= new mysqli("localhost","root","","proyecto");

 $consulta = "select cantidadarticulo FROM articulos WHERE codarticulo='".$cod."'";
$result = $conecte->query($consulta);
         $fila = $result->fetch_assoc();
$cant=$fila['cantidadarticulo'];

$cantt = $cant+$cantidad;

        $consulta1 = "UPDATE articulos set cantidadarticulo='".$cantt."' WHERE codarticulo='".$cod."'";
$result2 = $conecte->query($consulta1);

        $consulta = "DELETE  FROM ventas WHERE idventas='".$codventa."'";

        $result = $conecte->query($consulta);
         
echo"<script>alert('Eliminado exitosamente'); window.location.href=\"../php/RegistrarVenta.php\"</script>";

	

?>