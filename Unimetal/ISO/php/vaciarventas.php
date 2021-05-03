<?php
  $conecte= new mysqli("localhost","root","","proyecto");
  session_start();
  

   $consulta2 = "delete from ventas";
    $result2 = $conecte->query($consulta2);
echo"<script>alert('Facturacion exitosa'); window.location.href=\"../php/RegistrarVenta.php\"</script>";


?>
