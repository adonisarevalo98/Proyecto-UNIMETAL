<?php
        $ncategoria=$_POST["categ"];
        $descrip=$_POST["descripcion"];
            
    $conecte= new mysqli("localhost","root","","proyecto");
    $consulta= ("INSERT INTO catarticulos VALUES ('','".$ncategoria."','".$descrip."') ");
    $result=$conecte->query ($consulta);
     echo"<script>alert('Registrado exitosamente.'); window.location.href=\"../html/Categoria.html\"</script>";
?>