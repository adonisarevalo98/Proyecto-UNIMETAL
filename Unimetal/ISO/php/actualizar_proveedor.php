<?php
    $result = 0;
    $cod=$_POST["codProveedor"];
    $nombr=$_POST["name"];
    $ape=$_POST["apell"];
	$nom=$_POST["nomb"];
    $dire=$_POST["direcci"];
    $tel=$_POST["tel"];
    
    session_start();
$id=$_SESSION["codProveedor"];
    if ($pass==$rpass) {
        $conecte= new mysqli("localhost","root","","proyecto");
        $consulta = " UPDATE proveedores SET nombre='".$nombr."', apellido='".$ape."', nombreempresa='".$nom."', telefono='".$tel."', direccion='".$dire."' WHERE codProveedor='".$cod."'";

        $result = $conecte->query($consulta);
        echo"<script>alert('Actualizado exitosamente'); window.location.href=\"../php/MostrarProveedores.php\"</script>";

    }else {
    	echo"<script>alert('Las contraseñas no coinciden'); window.location.href=\"../html/actualizar.html\"</script>";
    }

?>
