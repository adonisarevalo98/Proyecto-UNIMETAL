<?php
        $name=$_POST["nombre"];
        $exist=$_POST["existencia"];
        $categoria=$_POST["categ"];
        $descrip=$_POST["descripcion"];
        $precioc=$_POST["precioc"];
    	$preciov=$_POST["preciov"];


if($precioc < $preciov) {


$conecte = new mysqli("localhost","root","","proyecto");

     
$consulta = ("INSERT INTO articulos VALUES ('','".$name."','".$exist."','".$categoria."','".$descrip."','".$precioc."','".$preciov."') ");
    $result = $conecte->query ($consulta);
    echo"<script>alert('Registrado exitosamente.'); window.location.href=\"../php/MostrarArticulos.php\"</script>";
}else{
	echo"<script>alert('El precio de compra no puede ser mayor al de venta'); window.location.href=\"../html/Articulo.php\"</script>";
}

?>
   