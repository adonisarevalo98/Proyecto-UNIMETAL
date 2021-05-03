<?php
        $name=$_POST["nombre"];
        $exist=$_POST["existencia"];
        $descrip=$_POST["descripcion"];
        $price=$_POST["precio"];
        $id=$_GET["cod-articulo"];
$conecte= new mysqli("localhost","root","","proyecto");
$consulta= ("UPDATE articulos SET nombre='$name',cantidad-articulo='$exist',descripcion='$descrip',precio-unidad='$price' WHERE cod-articulo='$id'");
    $result=$conecte->query ($consulta);

?>
        