
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    
</head>    
<body>
<?php 
        $nom=$_POST["pro"];
        $apell=$_POST["uni"];
		$tel=$_POST["preci"];
    
        include("conection.php");	
		
			$conexion->query("INSERT INTO compras VALUES ('','','".$nom."','".$apell."','".$tel."','','') ");
			

		
 ?>
 </body>
 </html>