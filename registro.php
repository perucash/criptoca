<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilosp.css?version=1.0">
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
</html>
<body>
	<style type="text/css">
		.panel-default>.panel-heading { border-color:transparent!important; }
		.iconoMovible{float: left; color: #ccc; padding-left: 20px}
		.form-group input{}
		.panel-heading {    border-top-left-radius: 17px;
    						border-top-right-radius: 17px;
}
		.panel   {border-radius: 17px;}

		
	</style>
	<header id="header">
		
	</header>
	<div id="cuerpo">	
		<div class="container" id="divmedio">
        <div class="row centered-form"  >
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-3 ">
        	<div class="panel panel-default" style=" box-shadow:0px 2px 20px 7px rgba(0,0,0,.05); height: 45em; width: 35em;">
        		<div class="panel-heading" style="background:#fff; padding-top: 50px"">
			    		<h3 id="title" class="panel-title text-center" style="font-size:38px ; padding-top: 5px; color: #808080">Regístrate</h3>
			    </div>

			 			<div class="panel-body col-sm-offset-1 col-md-offset-0 col-xs-offset-1 " >
			    		

			    			<div class="form-group col-md-offset-1">
			    				<span class="iconoMovible"><i class="glyphicon glyphicon-user"></i></span>
			    				<input type="email" style="height: 45px; width: 340px;" name="email" id="txtemail" class="form-control input-sm " placeholder="Correo Electrónico">
			    			</div>
			    			    				
			    			<div class="form-group col-md-offset-1">
			    				<span class="iconoMovible"><i class="glyphicon glyphicon-tag"></i></span>
			    				<input type="password" style="height: 45px; width: 340px" name="password" id="txtpassword" class="form-control input-sm" placeholder="Contraseña">
			    			</div>
			    							    				
			    			<div class="form-group col-md-offset-1">
			    				<span class="iconoMovible"><i class="glyphicon glyphicon-tags"></i></span>
			    				<input type="password" style="height: 45px; width: 340px" name="password_confirmation" id="txtrepetir_password" class="form-control input-sm" placeholder="Confirmar Contraseña">
			    			</div>

			    			<div class="col-md-offset-2 col-sm-offset-1 col-xs-offset-1" >
			    				<div class="g-recaptcha" style="padding-top: 20px;" data-sitekey="6LcD8jwUAAAAAOyLgujlyxs9jGpczeONwQl0gk8X"></div>
			    			</div>	

			    				<hr>

			    			<div>
			    					<label class="c-checkbox col-md-offset-3 col-sm-offset-2 col-xs-offset-2" style="padding-bottom: 15px;">
			    						 <input type="checkbox" id="chkterminos" />
			    						 <span class="text" style="font-size: 11px;">
			    							He leído y acepto los <a href="">Términos y condiciones</a>
			    						</span>
			    					</label>
						    						    			
					    			<input type="submit" id="btncontinuar" style="height: 45px; width:380px;" value="Continuar" class="btn btn-primary btn-block col-md-offset-1">

					    			<div style="padding-top: 30px;">
					    				<h5 class="text-center">¿Ya tiene una cuenta? <a href="login.html">Iniciar Sesión</a></h5>
					    			</div>
			    			</div>
			    		</div>
	    	</div>
    	</div>
    </div>
    </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$("#btncontinuar").click(function () {
		console.log("click en el btncontinuar");
		window.location.href="index.html"
	});
  </script>
</body>
