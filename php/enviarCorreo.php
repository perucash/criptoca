<?php  
include('crearToken.php');

$destino='infocat.servicios@gmail.com';
$desde='From: Criptocash<info@criptocash.com>'."\r\n";
$desde.='Content-type:text/html;charset=UTF-8';
$asunto='Confirmación de correo';
$mensaje='
<html>
<head>
<title>Tocken de acceso a Criptocash</title>
</head>
<body>
<img src="http://criptocash.com/integracion/images/g1516.png" width="350" height="109" border="0" style="display:block">
<h3 style="font-family:helvetica,arial,sans-serif;color:#646464;">Clave de acceso a Criptocash</h3>
<p style="font-family:helvetica,arial,sans-serif;color:#646464;">
Éste es un mensaje de comprobación de e-mail, solicitado desde CriptoCash. <br> 
Haz clic en el siguiente vínculo para activar tu cuenta.</p>
<a href="https://criptocash.com/integracion/mailCorrecto.php?token='.urlencode($licencia).'" style="color:#ffffff;background:#0078D7;border-radius:4px;padding-left:20px;padding-right:20px;width:320px;display:block;font-size:18px;font-weight:bold;line-height:50px;text-align:center;text-decoration:none;font-family:helvetica,arial" >Confirmar</a>
<p style="color: #949494; font-size: 11px;">Si no solicitaste éste mensaje, por favor, ignóralo.</p>
</body>
</html>';

if(mail($destino, $asunto, $mensaje, $desde)){
	echo 'Mensaje ha sido enviado con token: '.$licencia;
}
else{
	echo 'Hubo un error enviando correo';
}

?>
