
<?php
    $result = 0;
    $cod=$_POST["codCliente"];
    $nom=$_POST["nombr"];
    $ape=$_POST["apell"];
    $dire=$_POST["direcci"];
    $tel=$_POST["tel"];
    $correo=$_POST["mail"];
    
    session_start();
$id=$_SESSION["codCliente"];
    if ($pass==$rpass) {
        $conecte= new mysqli("localhost","root","","proyecto");
        $consulta = "UPDATE cliente SET Nombre='".$nom."', apellido='".$ape."', Direccion='".$dire."', telefono='".$tel."', Email='".$correo."' WHERE codCliente='".$cod."'";

        $result = $conecte->query($consulta);
        echo"<script>alert('Actualizado exitosamente'); window.location.href=\"../php/MostrarClientes.php\"</script>";

    }else {
        echo"<script>alert('Las contraseñas no coinciden'); window.location.href=\"../html/actualizar_cliente.html\"</script>";
    }

?>