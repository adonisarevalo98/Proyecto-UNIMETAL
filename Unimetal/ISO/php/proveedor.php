<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    
</head>    
<body>
<?php 
		$nom=$_POST["name"];
        $nomb=$_POST["nomb"];
        $apell=$_POST["apell"];
		$tel=$_POST["tel"];
		$direccion=$_POST["direcci"];
        
        include("conection.php");	
		
			$conexion->query("INSERT INTO proveedores VALUES ('','".$nom."','".$apell."','".$direccion."','".$tel."','".$nomb."') ");
			echo"<script>alert('Registrado exitosamente.'); window.location.href=\"../html/Proveedor.html\"</script>";

		
 ?>
 </body>
 </html>