<?php
  $conecte= new mysqli("localhost","root","","proyecto");
  session_start();
  
  $cod = $_GET['codarticulo'];

 include("../php/conexioncombos.php"); 
 $consulta="SELECT codCategoria, Nombre from catarticulos";
 $result=mysqli_query($conecte,$consulta);


?>
<!DOCTYPE html>
<html lang="en" class="no--js">
<head>
<meta charset="UTF-8"/>

	<title>Existencias</title>
	 <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js1/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general.css">
</head>



<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      </button>
      <a class="navbar-brand" href="#">UNIMETAL</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> PRODUCTO <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="../html/Articulo.php">REGISTRAR PRODUCTO</a></li>
            <li class="active"><a href="../php/MostrarArticulos.php">MOSTRAR PRODUCTOS</a></li>
            <li class="active"><a href="../php/sacar_anadir.php">INGRESAR EXISTENCIAS</a></li>
            
           
          </ul>
        </li>


        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> CATEGORIAS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="../html/Categoria.html">REGISTRAR CATEGORIA</a></li>
            <li class="active"><a href="../php/MostrarCategorias.php">MOSTRAR CATEGORIA</a></li>
            
            
           
          </ul>
        </li>


        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> PROVEEDORES <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="../html/Proveedor.html">REGISTRAR PROVEEDORES</a></li>
            <li class="active"><a href="../php/MostrarProveedores.php">MOSTRAR PROVEEDORES</a></li>

          </ul>
        </li>


        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> VER ESTADISTICAS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
            <li class="active"><a href="#">GANANCIAS DE UN DIA</a></li>
            <li class="active"><a href="../grafica/index.php">VENTAS DE UN MES</a></li>

          </ul>
        </li>

        <li class="active"><a href="../html/ActualizarEmpleadoA.php">ACTUALIZAR MIS DATOS</a></li>

       
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../php/cerrarsesion.php">CERRAR SESION</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<div class="container-fluid">
<div class="row">
<div class="col-sm-5 col-sm-offset-5" style=" -webkit-box-shadow: 0px 0px 15px -2px rgba(33,33,33,1);
-moz-box-shadow: 0px 0px 15px -2px rgba(33,33,33,1);
box-shadow: 0px 0px 15px -2px rgba(33,33,33,1); padding:4%; margin:0 auto; border-radius:20px; background:#eeeeee; margin-left:30%;">
<h1 class="leter">Agregar Existencia</h1>

<form class="form-horizontal" method="POST" action="../php/operacion.php" enctype="multipart/form-data">
<div class="form-group">
<input type="hidden"  name="codarticulo" value="<?php echo $cod; ?>">
<label><h3 class="leter">Existencia a ingresar</h3></label>
<input class= "form-control" type="number" name="anadir" placeholder="Ingrese una descripción" required="Campo requerido">
</div>
<input type="submit" class="btn btn-lg btn-warning btn-block" name="operacion"  value="Ingresar existencia" />


</form>



<br>
</div>
</div>  
</div> 
<br>

  <script src="../js/Previsualizar.js"></script>
</body>
</html>