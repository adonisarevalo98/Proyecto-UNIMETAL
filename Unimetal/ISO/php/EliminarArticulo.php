<?php
	
	session_start();
	$cod = $_GET['codarticulo'];

	$conecte= new mysqli("localhost","root","","proyecto");
        $consulta = "DELETE  FROM articulos WHERE codarticulo='".$cod."'";

        $result = $conecte->query($consulta);

	
    if ($result >0) {
        
        echo"<script>alert('Eliminado exitosamente'); window.location.href=\"../php/MostrarArticulos.php\"</script>";

    }else {
        echo"<script>alert('Las contraseñas no coinciden'); window.location.href=\"../html/actualizar_cliente.php\"</script>";
    }

?>