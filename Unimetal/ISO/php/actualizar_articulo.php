
<?php
    $result = 0;
    $cod=$_POST["codarticulo"];
    $nom=$_POST["nombre"];
    $exis=$_POST["existencia"];
	$catego=$_POST["categ"];
    $descri=$_POST["descripcion"];
    $precioc=$_POST["precioc"];
    $preciov=$_POST["preciov"];
    
    session_start();

    if ($precioc < $preciov) {
        $conecte= new mysqli("localhost","root","","proyecto");
        $consulta = " UPDATE articulos SET nombre='".$nom."', cantidadarticulo='".$exis."', descripcion='".$descri."', precioCompra='".$precioc."', precioVenta='".$preciov."' WHERE codarticulo='".$cod."'";

        $result = $conecte->query($consulta);
        echo"<script>alert('Actualizado exitosamente'); window.location.href=\"../php/MostrarArticulos.php\"</script>";

    }else {
    	echo"<script>alert('El precio de compra no puede ser mayor al de venta'); window.location.href=\"../html/ActualizarArticulo.php\"</script>";
    }

?>
