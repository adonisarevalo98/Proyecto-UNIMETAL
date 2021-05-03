<?php
	
	session_start();
	$cod = $_GET['codCategoria'];

	$conecte= new mysqli("localhost","root","","proyecto");
        $consulta = "DELETE  FROM catarticulos WHERE codCategoria='".$cod."'";

        $result = $conecte->query($consulta);


    if ($result >0) {
        
        echo"<script>alert('Eliminado exitosamente'); window.location.href=\"../php/MostrarCategorias.php\"</script>";

    }else {
        echo"<script>alert('Las contraseñas no coinciden'); window.location.href=\"../html/actualizar_cliente.php\"</script>";
    }

?>