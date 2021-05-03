<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilosForm.css">
    <meta name="viewport" content="width=device-width,user-scalable=no ,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
        <title>Iniciar Sesión</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/validar_registro.js"></script>
        <script type="text/javascript">
    window.onload = function() {
      document.onmousemove = function(e) {
        var x = -(e.clientX/10);
        var y = -(e.clientY/10);
        this.body.style.backgroundPosition = x + 'px ' + y + 'px';
      };
    };
  </script>
    </head>
    <body>
<form method="post" action="../php/verificar_user.php" onsubmit="return validarlogin();">
    <img class="msg" src="../img/login.png" alt="img">
            <h2 id="contacto">Iniciar sesión</h2>
        <input type="text" placeholder="Usuario" name="nombres" size="30" required>
        <input type="password" placeholder="Contraseña" name="contra" size="30">
    <br>
    <input id="boton" type="submit" value="INICIAR" name="log" required>
    <p><a href="../html/home.html">←Volver a inicio</a></p>
</form>
    </body>
</html>