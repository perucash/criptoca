<?php  
include('crearToken.php');

$destino='goblue030796@gmail.com';
$desde='From: Criptocash<info@criptocash.com>'."\r\n";
$desde.='Content-type:text/html;charset=UTF-8';
$asunto='Confirmación de correo';
$mensaje='
<html>
<head>
<title>Tocken de acceso a Criptocash</title>
</head>
<body>
<table style="width:538px;background-color:#393836" align="center" cellspacing="0" cellpadding="0">
    <tbody><tr>
        <td style="height:65px;background-color:#246ED1;border-bottom:1px solid #ffffff;" align="center">
             <img src="http://criptocash.com/integracion/images/cripto.png" alt="" style="display:block" class="m_3968579693696874809mobileHide CToWUd" width="250px"  border="0">

        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" style="border-bottom:1px solid #ffffff;">
            <table width="470" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-left:5px;padding-right:5px;padding-bottom:10px">

                <tbody><tr bgcolor="#ffffff" >
                    <td style="padding-top:32px">
                    <span style="padding-top:16px;padding-bottom:16px;font-size:24px;color:#246ED1;font-family:Arial,Helvetica,sans-serif;font-weight:bold">
                        Estimado Usuario de Criptocas:
                    </span><br>
                    </td>
                </tr>

                <tr>
                    <td style="padding-top:12px;padding-bottom:10px">
                    <span style="font-size:13px;color:#212529;font-family:Arial,Helvetica,sans-serif;font-weight:bold">
                        <p>La contraseña <span class="il">de</span> tu <span class="il">cuenta</span> <span class="il">de</span> Criptocash se ha cambiado con éxito.</p>
                    </span>
                    </td>
                </tr>

                <tr bgcolor="#E8E8E8">
                    <td style="padding:20px;font-size:12px;line-height:17px;color:#c6d4df;font-family:Arial,Helvetica,sans-serif">
                                    <p style="padding-bottom:10px;color:#212529">Te enviamos esta notificación para garantizar la privacidad y seguridad <span class="il">de</span> tu <span class="il">cuenta</span> <span class="il">de</span> Criptocash. <span style="color:#212529;font-weight:bold">Si has autorizado este cambio, no es necesario que realices ninguna otra acción.</span></p>
                                    <p style="padding-bottom:10px;color:#212529"><span style="color:#212529;font-weight:bold">Si no has autorizado este cambio</span>, por favor, cambia tu contraseña <span class="il">de</span> Critpcash y considera modificar la contraseña <span class="il">de</span> tu email para garantizar la seguridad <span class="il">de</span> tu <span class="il">cuenta</span>.</p>
                                    <p style="color:#61696d">Si no puedes acceder a tu <span class="il">cuenta</span>, haz clic en el enlace <span class="il">de</span> abajo para recibir ayuda con la <span class="il">recuperación</span> o el bloqueo.</p>
                    </td>

                </tr>


                <tr>
                    <td style="font-size:12px;color:#6d7880;padding-top:16px;padding-bottom:60px">
                         El equipo <span class="il">de</span> Criptocash<br>
                         <a style="color:#8f98a0" >https://help.criptocash.com</a><br>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
    <tr> 
            <td bgcolor="#246ED1">

                    <table width="460" height="55" border="0" align="center" cellpadding="0" cellspacing="0">

                        <tbody><tr valign="center">
                            
                            <td width="350" valign="center">
                                <span style="color:#ffffff  ;font-size:9px;font-family:Verdana,Arial,Helvetica,sans-serif">©2017 - 2018. Todos los derechos reservados. </span>
                            </td>
                        </tr>
                    </tbody></table>
            </td>
    </tr>


</tbody></table>
</body>
</html>
';

if(mail($destino, $asunto, $mensaje, $desde)){
	echo 'Mensaje ha sido enviado con token: '.$licencia;
}
else{
	echo 'Hubo un error enviando correo';
}

?>
