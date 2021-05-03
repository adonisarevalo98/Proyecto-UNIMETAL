<?php

    $conecte= new mysqli("localhost","root","","proyecto");

    //Evitar inyecciones sql
    
    $user=htmlentities($_POST["email"]);
    $password=htmlentities($_POST["pass"]);

    $user_seguro = mysqli_real_escape_string($conecte, $user);
    $password_seguro = mysqli_real_escape_string($conecte, $password);

    $consulta="SELECT Cod,email,password,idcat,Estado from empleados where email = '$user_seguro' and password='$password_seguro'";
    $result=$conecte->query ($consulta);
    if($result->num_rows > 0 ){
        $registro=$result->fetch_assoc();
        session_start();
        $_SESSION["inicio"]= true;
        $_SESSION["email"]= $user;
        $_SESSION['Cod'] = $registro['Cod'];
        $_SESSION["idcat"]=$registro["idcat"];
        $_SESSION["Estado"]=$registro["Estado"];
        if($_SESSION["Estado"] == 'A'){
            header('location:../php/login.php');
        }else{
            echo"<script>alert('Cuenta de usuario desactivada')</script>";
            include("../html/Login.html");
        }
        

    }else{
        echo"<script>alert('Usuario no registrado, contacte con el administrador.')</script>";
        include("../html/Login.html");

    }


?>  
