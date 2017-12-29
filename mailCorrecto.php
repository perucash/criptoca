<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosp.css?version=1.0">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosconfirmar.css?version=1.0">
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
</html>
<body>
 <div class="text-center" id="confirmar">	
	<h1>¡Genial! Tu cuenta ha sido activada  <span><i class="glyphicon glyphicon-ok"></i></span></h1>
	<h3>Gracias por verificar tu e-mail: <?php echo urldecode($_GET['token']); ?></h3>
	<h4>Ahora puedes comenzar a usar tu cuenta iniciando sesión en nuestro sitio</h4>
  <br/>
  <button id="btniniciar" class="btn btn-default">Iniciar sesión ahora<a href="login.html"></a></button>
 </div>
   <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript">
  $("#btniniciar").click(function () {
    console.log("click en iniciar sesión");
    window.location.href="login.html";
  });
  </script>
</body>