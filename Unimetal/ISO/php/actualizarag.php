<?php
   
    $cod=$_POST["codempleado"];
    $nom=$_POST["nombres"];
    $ape=$_POST["apelli"];
    $correo=$_POST["mail"];
    $apodo=$_POST["nick"];
    $contra=$_POST["pass"];
    $rcontra=$_POST["repass"];
    $tel=$_POST["tel"];
    $dire=$_POST["direcci"];
    
    
   
    if ($contra==$rcontra) {
        $conecte= new mysqli("localhost","root","","proyecto");
        $consulta = "UPDATE empleados SET nombre='".$nom."', apellido='".$ape."', nickname='".$apodo."', password='".$contra."', email='".$correo."', telefono='".$tel."', Direccion='".$dire."' WHERE Cod='".$cod."'";

        $result = $conecte->query($consulta);
        echo"<script>alert('Actualizado exitosamente');window.location.href=\"../php/login.php\"</script></script>";

    }else {
        echo"<script>alert('Las contraseñas no coinciden');window.location.href=\"../html/ActualizarEmpleado.php\"</script>";
    }

?>