<?php
    $result = 0;
    $agregar=$_POST["anadir"];
    $codi=$_POST["codarticulo"];
    session_start();
//$id=$_SESSION["codarticulo"];
        $conecte= new mysqli("localhost","root","","proyecto");
        $consulta ="Select cantidadarticulo FROM articulos WHERE codarticulo='".$codi."'";

        $result = $conecte->query($consulta);
         $fila = $result->fetch_assoc();
         $suman=$fila['cantidadarticulo'];

         $total= $agregar + $suman;

         $consulta2 = " UPDATE articulos SET cantidadarticulo='".$total."' WHERE codarticulo='".$codi."'";

        $result = $conecte->query($consulta2);
        echo"<script>alert('Agregado exitosamente'); window.location.href=\"../php/sacar_anadir.php\"</script>";


        


?>