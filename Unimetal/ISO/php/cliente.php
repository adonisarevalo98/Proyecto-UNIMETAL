
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    
</head>    
<body>
<?php 
        $nom=$_POST["nombr"];
        $apell=$_POST["apell"];
		$tel=$_POST["tel"];
        $email=$_POST["mail"];
		$direccion=$_POST["direcci"];
    
        include("conection.php");	
		
			$conexion->query("INSERT INTO clientes VALUES ('','".$nom."','".$apell."','".$direccion."','".$tel."','".$email."') ");
			echo"<script>alert('Registrado exitosamente.'); window.location.href=\"../html/Cliente.html\"</script>";

		
 ?>
 </body>
 </html>