<?php
   
     
 $cod=$_POST["codempleado"];
    $dinicio=$_POST["finicio"];
    $dfinal=$_POST["ffin"];
    $hentrega=$_POST["horarecibido"];
    $precio=$_POST["total"];
    $ob=$_POST["letra"];
    

    
        $conecte= new mysqli("localhost","root","","proyecto");
        $consulta = "INSERT INTO reporteservicio VALUES ('', '".$dinicio."','".$cod."', '".$dfinal."', '".$hentrega."', '".$precio."', '".$ob."')";

        $result=$conecte->query ($consulta);
        
echo"<script>alert('Registrado exitosamente.'); window.location.href=\"../php/login.php\"</script>";
    

?>