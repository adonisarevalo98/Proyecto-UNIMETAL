 <?php
 include("../php/conexioncombos.php"); 
 $consulta="SELECT codCategoria, Nombre from catarticulos";
 $result=mysqli_query($conecte, $consulta);

?>

<!DOCTYPE html>
<html lang="en" class="no--js">
<head>
<meta charset="UTF-8"/>

  <title>Registrar Artículo</title>
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

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CONTROL DE CUENTAS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            
           <li class="active"><a href="../html/ActualizarEmpleadoA.php">ACTUALIZAR MIS DATOS</a></li>
            <li class="active"><a href="../php/Activar_Desactivar.php">ACTIVAR-DESACTIVAR CUENTAS</a></li>
            <li class="active"><a href="../html/Empleado.php">REGISTRAR EMPLEADO</a></li>

          </ul>
        </li>
       
        
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

<form class="form-horizontal" method="POST" action="../php/ingresoarti.php" enctype="multipart/form-data">
<div class="form-group">
<h3 class="leter">REGISTRAR PRODUCTO</h3>
<label><h4 class="leter">Nombre del Producto</h4></label>
<input class="form-control" type="text"  name="nombre" placeholder="Ingrese el nombre del artículo" required="Campo requerido">
</div>

<div class="form-group">
<label><h4 class="leter">Existencia</h4></label>
<input class= "form-control"  type="number" min="1" name="existencia" placeholder="Ingrese las existencias" required="Campo requerido">
</div>

<div class="form-group">
<label><h4 class="leter">Categoría</h4></label>
<select class="form-control" name="categ" required="Campo requerido">
<option value="">Seleccionar</option>
  <?php
  while ($fila=mysqli_fetch_row($result)) {

    echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
  }
  ?>
    </select>
</div>
<div class="form-group">
<label><h4 class="leter">Descripción</h4></label>
<input class= "form-control" type="text" name="descripcion" placeholder="Ingrese una descripción" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Precio de compra</h4></label>
<input class="form-control" type="number" min="0.01"  name="precioc" value="" title="Formato de precio: 00.00" step="0.01" placeholder="Ingrese el precio" required="Campo requerido">
</div>

<div class="form-group">
<label><h4 class="leter">Precio de venta</h4></label>
<input class="form-control" type="number" min="0.01" name="preciov" value="" title="Formato de precio: 00.00" step="0.01" placeholder="Ingrese el precio" required="Campo requerido">
            </div>
            <div class="form-group">
               

</div>

<input type="submit" class="btn btn-lg btn-warning btn-block" name="registro"  value="Registrar" />


</form>
</div>
</div>  
</div> 
<br>
</body>
</html>