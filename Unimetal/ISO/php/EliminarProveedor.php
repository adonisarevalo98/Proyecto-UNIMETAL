<?php
	
	session_start();
	$cod = $_GET['codProveedor'];

	$conecte= new mysqli("localhost","root","","proyecto");
        $consulta = "DELETE  FROM proveedores WHERE codProveedor='".$cod."'";

        $result = $conecte->query($consulta);

	
    if ($result >0) {
        
        echo"<script>alert('Eliminado exitosamente'); window.location.href=\"../php/MostrarProveedores.php\"</script>";

    }else {
        echo"<script>alert('Las contraseñas no coinciden'); window.location.href=\"../html/actualizar_cliente.php\"</script>";
    }

?>