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

	<title>Actualizar Artículo</title>
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
      <a class="navbar-brand" href="#">MG Comunicaciones</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../php/login.php">PERFIL<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../php/Activar_Desactivar.php">ACTIVAR-DESACTIVAR</a></li>
        <li class="active"><a href="../html/Empleado.php">REGISTRAR EMPLEADO</a></li>
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> DETALLES <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li class="active"><a href="../php/MostrarArticulos.php">MOSTRAR ARTICULOS</a></li>
            <li class="active"><a href="../php/MostrarCategorias.php">MOSTRAR CATEGORIAS</a></li>
            <li class="active"><a href="../php/MostrarClientes.php">MOSTRAR CLIENTES</a></li>
            
            <li class="active"><a href="../php/MostrarProveedores.php">MOSTRAR PROVEEDORES</a></li>
         
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">CERRAR SESION</a></li>
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
<h1 class="leter">Actualizar Articulo</h1>
<form class="form-horizontal" method="POST" action="../php/actualizar_articulo.php" enctype="multipart/form-data">
<div class="form-group">
<input type="hidden"  name="codarticulo" value="<?php echo $cod; ?>">
<label><h3 class="leter">Nombre del Artículo</h3></label>
<input class="form-control" type="text"  name="nombre" placeholder="Ingrese el nombre del artículo" required="Campo requerido">
</div>

<div class="form-group">
<label><h3 class="leter">Existencia</h3></label>
<input class="form-control" type="text"  name="existencia" placeholder="Ingrese las unidades existentes" required="Campo requerido">
</div>

<div class="form-group">
<label><h3 class="leter">Categoría</h3></label>
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
<label><h3 class="leter">Descripción</h3></label>
<input class= "form-control" type="text" name="descripcion" placeholder="Ingrese una descripción" required="Campo requerido">
</div>
<div class="form-group">
<label><h3 class="leter">Precio de compra</h3></label>
<input class="form-control" type="number" min="0.01"  name="precioc" value="" title="Formato de precio: 00.00" step="0.01" placeholder="Ingrese el precio" required="Campo requerido">
</div>

<div class="form-group">
<label><h3 class="leter">Precio de venta</h3></label>
<input class="form-control" type="number" min="0.01" name="preciov" value="" title="Formato de precio: 00.00" step="0.01" placeholder="Ingrese el precio" required="Campo requerido">
            </div>
            <div class="form-group">
                    <label><h3 class="leter">Imagen de artículo</h3></label>
                    
                        <section id="caja6">

                               <section id="cuerpo6">

                                   <div align="center">
        
                                        <div class="custom-input-file">

                                           <input type="file" id="Foto1" name="archivo" class="input-file" tabindex="6" />

                                              <div align="center">

                                              <output id="DP1"><img src="../img/camera1.png" class="img-foto"/></output>

                                              </div>

                                        </div>

                                   </div>

                               </section>

                            </section>

</div>

<input type="submit" class="btn btn-lg btn-warning btn-block" name="registro"  value="Agregar" />


</form>
</div>
</div>  
</div> 
<br>

  <script src="../js/Previsualizar.js"></script>
</body>
</html>