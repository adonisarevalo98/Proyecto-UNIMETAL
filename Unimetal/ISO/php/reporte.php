
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    
</head>    
<body>
<?php 
        $inici=$_POST["inici"];
        $finali=$_POST["finali"];
		$hor=$_POST["hor"];
        $obser=$_POST["obser"];
    
        include("conection.php");	
		
			$conexion->query("INSERT INTO reporteservicio VALUES ('','".$inici."','','".$finali."','".$hor."','".$obser."') ");
			echo"<script>alert('Registrado exitosamente.'); window.location.href=\"../html/ReporteServicio.html\"</script>";

		
 ?>
 </body>
 </html>