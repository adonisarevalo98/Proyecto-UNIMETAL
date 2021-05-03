<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    
</head>    
<body>
<?php 
		$nom=$_POST["nombres"];
		$apell=$_POST["apelli"];
		$nick=$_POST["nick"];
		$pass=$_POST["pass"];
		$pass2=$_POST["repass"];
		$email=$_POST["mail"];
		
		$tel=$_POST["tel"];
		$cate=$_POST["categ"];
		$direccion=$_POST["direcci"];
        $estado='A';
        include("conection.php");	
		if ($pass==$pass2) {

            
             
    
 
  

 

			$valida="SELECT nickname FROM empleados WHERE nickname='$nick' ";
			$result=$conexion->query($valida);

			$validar="SELECT email FROM empleados WHERE email='$email' ";
			$resulta=$conexion->query($validar);

			if ($resulta->num_rows > 0) {
				echo"<script>alert('El email ingresado ya existe, intentelo de nuevo.')</script>"; 
                include("../html/Empleado.php");

			}elseif ($result->num_rows > 0) {
				echo"<script>alert('El nickname ya existe, intentelo de nuevo.')</script>"; 
                 include("../html/Empleado.php");
			}else{
                
               
			$conexion->query("INSERT INTO empleados VALUES ('','".$nom."','".$apell."','".$nick."','".$pass."','".$email."','".$tel."','".$direccion."','','".$estado."','".$cate."') ");
			echo"<script>alert('Registrado exitosamente.')</script>";
			include("../html/Empleado.php");
			}


		}else {
			echo"<script>alert('Las contraseñas no coinciden')</script>";
				include("../html/Empleado.php");
		}
 ?>
 </body>
 </html>