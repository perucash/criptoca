<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilosp.css?version=1.0.1">
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title>Registro: Criptocash - Bienvenido</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">

	</head>
</html>
<body>
<style type="text/css">
	
	.panel-body{padding-top: 0px;}
	.panel-default>.panel-heading { border-color:transparent!important; }
	.iconoMovible{color: #ccc; padding-left: 20px;     top: 33px;    position: relative;    left: 44px; font-size: 17px;}
	.form-group { margin-bottom: -2px; }
	.form-group input{padding-left: 47px;}
	.panel-title{font-size: 30px}
	.c-checkbox{font-weight: 500;}
	.btn-primary{
		background-color: #0078D7!important;
   		border-color: #056fc3!important;
	}
	a{color: #0078D7;}
	.form-control  {
    	transition: all 0.8s;
	}
	.form-control:focus {
    	border-color: #FFEB3B;
    	box-shadow: inset 0 1px 1px rgba(245, 208, 27, 0.26), 0 0 6px rgba(255, 193, 7, 0.41);
    	transition: all 0.8s;
	}
</style>
<main>
</main>
	<header id="header">
		
	</header>
	<div id="cuerpo">	
		<div class="container" id="divmedio">
		<div class="row centered-form"  >
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-3 ">
			<div class="panel panel-default" style="box-shadow: 0px 2px 12px 7px rgba(0,0,0,.05); height: 45em; width: 35em;">
				<div class="panel-heading" style="background:#fff; padding-top: 50px"">
						<h3 id="title" class="panel-title text-center" style="padding-top: 5px; ">Bienvenido a Criptocash</h3>
				</div>
						<div class="panel-body" >
							<div class="form-group ">
								<span class="iconoMovible"><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="email" style="height: 45px; width: 80%; margin: 0 auto;" name="email" id="txtemail" class="form-control input-sm " placeholder="Correo Electrónico">
							</div>
												
							<div class="form-group ">
								<span class="iconoMovible"><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="password" style="height: 45px; width: 80%; margin: 0 auto;" name="password" id="txtpassword" class="form-control input-sm" placeholder="Contraseña">
							</div>
																
							<div class="form-group ">
								<span class="iconoMovible"><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="password" style="height: 45px; width: 80%; margin: 0 auto;" name="password_confirmation" id="txtrepetir_password" class="form-control input-sm" placeholder="Confirmar Contraseña">
							</div>

							<div class="col-xs-offset-1 col-md-offset-2" >
								<div class="g-recaptcha" style="padding-top: 20px;" data-sitekey="6LcD8jwUAAAAAOyLgujlyxs9jGpczeONwQl0gk8X"></div>
							</div>	

								<hr>

							<div>
								<label class="c-checkbox col-xs-offset-2" style="padding-bottom: 15px;">
									 <input type="checkbox" id="chkterminos" />
									 <span class="text" style="font-size: 11px;">
										He leído y acepto los <a href="">Términos y condiciones</a>
									</span>
								</label>

								<input type="submit" id="btncontinuar" style="height: 45px; width:80%; margin:0 auto; " value="Continuar" class="btn btn-primary btn-block col-md-offset-1">

								<div style="padding-top: 30px;">
									<h5 class="text-center">¿Ya posee una cuenta? <a href="login.html">Inicie sesión aquí</a></h5>
								</div>
							</div>
						</div>
			</div>
		</div>
	</div>
	</div>
	</div>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('#txtemail').focus();
});
$("#btncontinuar").click(function () {
	console.log("click en el btn");
	window.location.href="confirmar.html"
});
</script>
</body>
