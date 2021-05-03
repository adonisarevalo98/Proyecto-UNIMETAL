<?php
	
	session_start();
	$cod = $_GET['codCliente'];

	$conecte= new mysqli("localhost","root","","proyecto");
        $consulta = "DELETE  FROM clientes WHERE codCliente='".$cod."'";

        $result = $conecte->query($consulta);

	$id=$_SESSION["codCliente"];
    if ($result >0) {
        
        echo"<script>alert('Eliminado exitosamente'); window.location.href=\"../php/MostrarClientes.php\"</script>";

    }else {
        echo"<script>alert('Las contraseñas no coinciden'); window.location.href=\"../html/actualizar_cliente.php\"</script>";
    }

?>