<?php
$act=$_GET['act'];
$activar="A";
$baja="B";

$conectar= new mysqli("localhost","root","","proyecto");
	$consultan="SELECT Estado from empleados where nickname = '$act'";
	$result=$conectar->query ($consultan);
	if($result->num_rows >0){
		$registro=$result->fetch_assoc();

		$_SESSION["Estado"]=$registro["Estado"];
		
		if($_SESSION["Estado"]=='B'){
			$consulata="UPDATE empleados set Estado='$activar' WHERE nickname='$act'";
			$resulta=$conectar->query ($consulata);
			echo ' <script language="javascript">alert("Usuario activado");</script> ';
			 include("../php/Activar_Desactivar.php"); 
		}elseif($_SESSION["Estado"]=='A'){
			$consulatas="UPDATE empleados set estado='$baja' WHERE nickname='$act'";
			$resultas=$conectar->query ($consulatas);
			echo ' <script language="javascript">alert("Usuario desactivado");</script> ';
			 include("../php/Activar_Desactivar.php"); 

			}
	}




?>