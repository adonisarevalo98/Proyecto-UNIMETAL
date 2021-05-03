 <?php
 include("../php/conexioncombos.php"); 
 $consulta="SELECT codcatempleado,Nombre from catempleados order by Nombre asc";
 $result=mysqli_query($conecte, $consulta);

?>
<!DOCTYPE html>
<html lang="en" class="no--js">
<head>
<meta charset="UTF-8"/>

	<title>Registre Empleado</title>
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
<h3 class="leter">REGISTRAR EMPLEADO</h3>
<form class="sign-up" method="POST" action="../php/regisempleado.php">
<div class="form-group">
<label><h4 class="leter">Nombres</h4></label>
<input class="form-control" type="text"  name="nombres" placeholder="Ingrese sus nombres" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Apellidos</h4></label>
<input class="form-control" type="text"  name="apelli" placeholder="Ingrese sus apellidos" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">E-mail</h4></label>
<input class="form-control" type="email" name="mail" placeholder="Ingrese su e-mail" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Formato de correo:NombreCorreo@dominio" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Nickname</h4></label>
<input class="form-control" type="text"  name="nick" placeholder="Ingrese su nickname o username" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Contraseña</h4></label>
<input type="password" name="pass" minlength="8" class="form-control" value="" class="control" placeholder="Contraseña" required />
</div>
<div class="form-group">
<label><h4 class="leter">Confirmar Contraseña</h4></label>
<input type="password" name="repass" minlength="8" class="form-control" value="" class="control" placeholder="Contraseña" required />
</div>
<div class="form-group">
<label><h4 class="leter">Teléfono</h4></label>
<input class="form-control" type="text" name="tel" placeholder="Ingrese número de teléfono" pattern="^[0-9]{4}-?[0-9]{4}$" title="Formato: 22222222" required="Campo requerido">
</div>
<div class="form-group">
<label><h4 class="leter">Dirección</h4></label>
<input class="form-control" type="text" name="direcci" placeholder="Ingrese su dirección" required="Campo requerido">
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
<input type="submit" class="btn btn-lg btn-warning btn-block" name="registro"  value="Registrar" />


</form>
</div>
<br>
</body>
</html>