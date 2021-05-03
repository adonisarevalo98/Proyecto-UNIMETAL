<?php
        $ncategoria=$_POST["categ"];
        $descrip=$_POST["descripcion"];
            
    $conecte= new mysqli("localhost","root","","proyecto");
    $consulta= ("INSERT INTO catempleado VALUES ('','".$ncategoria."','".$descrip."') ");
    $result=$conecte->query ($consulta);

?>