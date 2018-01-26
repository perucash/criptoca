<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilosp.css?version=1.0.1">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<title>Registro: Criptocash | Bienvenido</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="shortcut icon" href="images/icono_prueba1.png" />
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">

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
					<div>
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
								<div class="g-recaptcha" id="recaptcha" style="padding-top: 20px;" data-sitekey="6LcD8jwUAAAAAOyLgujlyxs9jGpczeONwQl0gk8X"></div>
							</div>	

								<hr>

							<div>
								<div class="checkbox checkbox-danger">
									<input id="chkReglas" class="styled" type="checkbox" value=1>
									<label for="chkReglas">
											<small>Acepto que toda la información proporcionada.</small>
									</label>
								</div>
							</div>
								<div class="form-group text-center text-danger hidden" id="divError">Error en alguno de los datos, complételos todos cuidadosamente.</div>
								<input  id="btncontinuar" style="height: 45px; width:80%; margin:0 auto; " value="Continuar" class="btn btn-primary btn-block col-md-offset-1">

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
	</div>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
$('#btncontinuar').click(function (event ) {
		var $captcha = $( '#recaptcha' ),
      response = grecaptcha.getResponse();
  



		$('#btncontinuar').find('.icono').addClass('sr-only');
		$('#btncontinuar').find('.fa-spin').removeClass('sr-only');

		if($('#txtemail').val()=='' || $('#txtpassword').val()=='' || $('#txtrepetir_password').val()=='' ){$('#divError').text("No se admiten campos en blanco").removeClass('hidden');
			$('#btncontinuar').find('.icono').removeClass('sr-only');
			$('#btncontinuar').find('.fa-spin').addClass('sr-only');}
		else if (response.length === 0) {
			$('#divError').text('La captcha es obligatoria para acceder').removeClass('hidden');
			$('#btncontinuar').find('.icono').removeClass('sr-only');
			$('#btncontinuar').find('.fa-spin').addClass('sr-only');
		}/* else {
		    $( '.msg-error' ).text('');
		    $captcha.removeClass( "error" );
		    alert( 'reCAPTCHA marked' );
		  }*/
		else if (!($('#chkReglas:checked').val()=='')){console.log('no acepto los términos'); $('.modal-faltaCompletar').modal('show'); $('#lblFalta').text('Falta aceptar el contrato');}
		else{ console.log("Accedio");
			$.ajax({url: 'php/validarSesion.php', type: 'POST', data: {
			user: $('#txtemail').val(),
			pws: $('#txtpassword').val(),
			offi: $('#office').val(),
			modalidad: $('#cmbMod').val()
			 

			}}).done(function (resp) {
				
			console.log(resp);
			if(resp==''){
				$('#divError').text('Usuario o contraseña es incorrecto').removeClass('hidden');
				$('#btncontinuar').find('.icono').removeClass('sr-only');
				$('#btncontinuar').find('.fa-spin').addClass('sr-only');
			}
			if(resp=='Welcome guy!'){window.location.href = 'aplicativo.php'}
		}).error(function (err) {console.log(err);
			// body...
		});
		}
	});

$(document).ready(function () {
	$('#txtemail').focus();
});

</script>

</body>
